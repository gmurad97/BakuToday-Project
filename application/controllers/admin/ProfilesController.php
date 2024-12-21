<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property AdminsModel $AdminsModel
 */
class ProfilesController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/AdminsModel");

        if (!$this->admin_roles->has_access("admin")) {
            $this->lang->load("message", $this->current_admin_language);
            $this->alert_flashdata("crud_alert", "danger", [
                "title" => $this->lang->line("access_denied_alert_title"),
                "description" => $this->lang->line("access_denied_alert_description")
            ]);
            redirect(base_url("admin/dashboard"));
        }



        
/*         if (!$this->admin_roles->has_access("admin")) {
            $this->lang->load("message", $this->current_admin_language);
            $this->alert_flashdata("crud_alert", "danger", [
                "title" => $this->lang->line("access_denied_alert_title"),
                "description" => $this->lang->line("access_denied_alert_description")
            ]);
            redirect(base_url("admin/dashboard"));
        } */
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("all_administrators");
        $context["profiles_collection"] = $this->AdminsModel->all();
        $this->load->view("admin/profiles/list", $context);
    }

    public function show($id)
    {
        $context["profile"] = $this->AdminsModel->find($id);

        if (!empty($context["profile"])) {
            $profile_first_name = $context["profile"]["first_name"];
            $profile_last_name = $context["profile"]["last_name"];

            $context["page_title"] = $this->lang->line("view") . " • $profile_first_name $profile_last_name";

            $this->load->view("admin/profiles/detail", $context);
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/profiles"));
        }
    }

    public function create()
    {
        $context["page_title"] = $this->lang->line("add_administrator");
        $this->load->view("admin/profiles/create", $context);
    }

    public function store()
    {
        $first_name = substr($this->input->post("first_name", true), 0, 255);
        $last_name = substr($this->input->post("last_name", true), 0, 255);
        $email = $this->input->post("email", true);
        $username = $this->input->post("username", true);
        $password = $this->input->post("password", true);
        $role = $this->input->post("role", true);
        $status = $this->input->post("status", true);

        if (
            !empty($first_name) &&
            !empty($last_name) &&
            !empty($email) &&
            !empty($username) &&
            !empty($password) &&
            !empty($role)
        ) {
            $upload_path = "./public/uploads/profiles/";
            $upload_result = $this->upload_image("img", $upload_path);

            if ($upload_result["success"]) {
                $uploaded_img_data = $upload_result["data"];
                $image_name = $uploaded_img_data["file_name"];

                $data = [
                    "first_name" => $first_name,
                    "last_name" => $last_name,
                    "email" => $email,
                    "username" => $username,
                    "password" => hash("sha256", $password),
                    "role" => $role,
                    "img" => $image_name,
                    "status" => $status === "on"
                ];

                $this->AdminsModel->create($data);

                $this->alert_flashdata("crud_alert", "success", [
                    "title" => $this->lang->line("success_added_alert_title"),
                    "description" => $this->lang->line("success_added_alert_description")
                ]);

                redirect(base_url("admin/profiles"));

            } else {
                $this->alert_flashdata("crud_alert", "warning", [
                    "title" => $this->lang->line("invalid_img_format_alert_title"),
                    "description" => $this->lang->line("invalid_img_format_alert_description")
                ]);

                redirect(base_url("admin/profiles/create"));
            }
        } else {
            $this->alert_flashdata("crud_alert", "warning", [
                "title" => $this->lang->line("empty_fields_alert_title"),
                "description" => $this->lang->line("empty_fields_alert_description")
            ]);

            redirect(base_url("admin/profiles/create"));
        }
    }

    public function edit($id)
    {
        $context["profile"] = $this->AdminsModel->find($id);
        if (!empty($context["profile"])) {
            $profile_first_name = $context["profile"]["first_name"];
            $profile_last_name = $context["profile"]["last_name"];
            $context["page_title"] = $this->lang->line("edit_administrator") . " • $profile_first_name $profile_last_name";
            $this->load->view("admin/profiles/edit", $context);
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);
            redirect(base_url("admin/profiles"));
        }
    }

    public function update($id)
    {
        $context["profile"] = $this->AdminsModel->find($id);

        if (empty($context["profile"])) {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/profiles"));
        }

        $first_name = substr($this->input->post("first_name", true), 0, 255);
        $last_name = substr($this->input->post("last_name", true), 0, 255);
        $email = $this->input->post("email", true);
        $username = $this->input->post("username", true);
        $password = $this->input->post("password", true);
        $role = $this->input->post("role", true);
        $status = $this->input->post("status", true);

        if (
            !empty($first_name) &&
            !empty($last_name) &&
            !empty($email) &&
            !empty($username) &&
            !empty($role)
        ) {
            $upload_path = "./public/uploads/profiles/";
            $current_img_name = $context["profile"]["img"];

            if (!empty($_FILES["img"]["name"])) {
                $upload_result = $this->upload_image("img", $upload_path);

                if ($upload_result["success"]) {
                    $uploaded_img_data = $upload_result["data"];
                    $current_img_name = $uploaded_img_data["file_name"];
                    $old_image_path = $upload_path . $context["profile"]["img"];
                    $this->delete_file($old_image_path);
                } else {
                    $this->alert_flashdata("crud_alert", "warning", [
                        "title" => $this->lang->line("invalid_img_format_alert_title"),
                        "description" => $this->lang->line("invalid_img_format_alert_description")
                    ]);

                    redirect(base_url("admin/profiles/$id/edit"));
                }
            }

            // Если пароль не был введен, сохраняем старый
            if (empty($password)) {
                $password = $context["profile"]["password"];
            } else {
                $password = hash("sha256", $password); // Хэшируем новый пароль
            }

            $data = [
                "first_name" => $first_name,
                "last_name" => $last_name,
                "email" => $email,
                "username" => $username,
                "password" => $password,
                "role" => $role,
                "img" => $current_img_name,
                "status" => $status === "on"
            ];

            $this->AdminsModel->update($id, $data);

            $current_admin_credentials = $this->session->userdata("admin_credentials");
            $current_admin_credentials["img"] = $this->AdminsModel->find($current_admin_credentials["id"])["img"];
            $this->session->set_userdata("admin_credentials", $current_admin_credentials);

            $this->alert_flashdata("crud_alert", "success", [
                "title" => $this->lang->line("success_update_alert_title"),
                "description" => $this->lang->line("success_update_alert_description")
            ]);

            redirect(base_url("admin/profiles/$id/edit"));
        } else {
            $this->alert_flashdata("crud_alert", "warning", [
                "title" => $this->lang->line("empty_fields_alert_title"),
                "description" => $this->lang->line("empty_fields_alert_description")
            ]);

            redirect(base_url("admin/profiles/$id/edit"));
        }
    }

    public function destroy($id)
    {
        $context["profile"] = $this->AdminsModel->find($id);

        if (empty($context["profile"])) {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/profiles"));
        }

        $upload_path = "./public/uploads/profiles/";
        $current_image_path = $upload_path . $context["profile"]["img"];
        $this->delete_file($current_image_path);

        $this->AdminsModel->delete($id);

        $this->alert_flashdata("crud_alert", "success", [
            "title" => $this->lang->line("success_delete_alert_title"),
            "description" => $this->lang->line("success_delete_alert_description")
        ]);

        redirect(base_url("admin/profiles"));
    }
}