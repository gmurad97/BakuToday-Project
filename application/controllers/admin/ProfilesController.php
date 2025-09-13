<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfilesController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/AdminsModel");
        $admin_auth_session_key = $this->config->item("admin_auth_session_key");
        $admin_id = $this->session->userdata($admin_auth_session_key)["id"];
        $profile_id = $this->uri->segment(3);
        $profile_event = $this->uri->segment(4);

        if (!$this->rolesmanager->has_access("admin") && ($profile_event === "delete" || $admin_id !== $profile_id)) {
            $this->lang->load("message", $this->get_admin_language());
            $this->notifier("notifier", "danger", [
                "title" => $this->lang->line("notifier_danger"),
                "description" => $this->lang->line("notifier_access_denied")
            ]);
            redirect(base_url("admin/dashboard"));
        }
    }

    public function index()
    {
        $context = [
            "page_title" => $this->lang->line("all_administrators"),
        ];
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
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
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
        $first_name = trim($this->input->post("first_name", true));
        $last_name = trim($this->input->post("last_name", true));
        $email = trim($this->input->post("email", true));
        $username = trim($this->input->post("username", true));
        $password = $this->input->post("password", true);
        $role = $this->input->post("role", true);
        $status = $this->input->post("status", true);

        if (!$this->rolesmanager->has_access($role)) {
            $this->lang->load("message", $this->get_admin_language());
            $this->notifier("notifier", "danger", [
                "title" => $this->lang->line("notifier_danger"),
                "description" => $this->lang->line("notifier_access_denied")
            ]);
            redirect(base_url("admin/dashboard"));
        }

        $existing_email = $this->AdminsModel->find(["email" => $email]);
        $existing_user = $this->AdminsModel->find(["username" => $username]);

        if ($existing_email) {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_email_existing")
            ]);
            redirect(base_url("admin/profiles/create"));
        }

        if ($existing_user) {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_username_existing")
            ]);
            redirect(base_url("admin/profiles/create"));
        }

        if (
            !empty($first_name) &&
            !empty($last_name) &&
            !empty($email) &&
            !empty($username) &&
            !empty($password) &&
            !empty($role)
        ) {
            $upload_path = "./public/uploads/profiles/";
            $upload_result = $this->filemanager->upload_media("img", $upload_path, "jpg|png|jpeg|webp");

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

                $this->notifier("notifier", "success", [
                    "title" => $this->lang->line("notifier_success"),
                    "description" => $this->lang->line("notifier_success_added")
                ]);

                redirect(base_url("admin/profiles"));

            } else {
                $data = [
                    "first_name" => $first_name,
                    "last_name" => $last_name,
                    "email" => $email,
                    "username" => $username,
                    "password" => hash("sha256", $password),
                    "role" => $role,
                    "status" => $status === "on"
                ];

                $this->AdminsModel->create($data);

                $this->notifier("notifier", "success", [
                    "title" => $this->lang->line("notifier_success"),
                    "description" => $this->lang->line("notifier_success_added")
                ]);

                redirect(base_url("admin/profiles"));
            }
        } else {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_empty_fields")
            ]);

            redirect(base_url("admin/profiles/create"));
        }
    }

    public function edit($id)
    {
        $context["profile"] = $this->AdminsModel->find($id);
        $admin_auth_session_key = $this->config->item("admin_auth_session_key");
        $context["current_admin_session"] = $this->session->userdata($admin_auth_session_key);

        if (!$this->rolesmanager->has_access($context["profile"]["role"])) {
            $this->lang->load("message", $this->get_admin_language());
            $this->notifier("notifier", "danger", [
                "title" => $this->lang->line("notifier_danger"),
                "description" => $this->lang->line("notifier_access_denied")
            ]);
            redirect(base_url("admin/profiles"));
        }

        if (!empty($context["profile"])) {
            $profile_first_name = $context["profile"]["first_name"];
            $profile_last_name = $context["profile"]["last_name"];
            $context["page_title"] = $this->lang->line("edit_administrator") . " • $profile_first_name $profile_last_name";
            $this->load->view("admin/profiles/edit", $context);
        } else {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
            ]);
            redirect(base_url("admin/profiles"));
        }
    }

    public function update($id)
    {
        $context["profile"] = $this->AdminsModel->find($id);
        $admin_auth_session_key = $this->config->item("admin_auth_session_key");
        $current_admin_session = $this->session->userdata($admin_auth_session_key);

        if (empty($context["profile"])) {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
            ]);

            redirect(base_url("admin/profiles"));
        }

        $first_name = trim($this->input->post("first_name", true));
        $last_name = trim($this->input->post("last_name", true));
        $email = trim($this->input->post("email", true));
        $username = trim($this->input->post("username", true));
        $password = $this->input->post("password", true);
        $role = $this->input->post("role", true);
        $status = $this->input->post("status", true);

        if (!$this->rolesmanager->has_access($role)) {
            $this->lang->load("message", $this->get_admin_language());
            $this->notifier("notifier", "danger", [
                "title" => $this->lang->line("notifier_danger"),
                "description" => $this->lang->line("notifier_access_denied")
            ]);
            redirect(base_url("admin/dashboard"));
        }

        $existing_email = $this->AdminsModel->find(["email" => $email]);
        $existing_user = $this->AdminsModel->find(["username" => $username]);

        if ($existing_email && $existing_email["email"] != $context["profile"]["email"]) {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_email_existing")
            ]);
            redirect(base_url("admin/profiles/{$id}/edit"));
        }

        if ($existing_user && $existing_user["username"] != $context["profile"]["username"]) {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_username_existing")
            ]);
            redirect(base_url("admin/profiles/{$id}/edit"));
        }

        if ($current_admin_session["role"] === "moderator") {
            $role = $role !== "moderator" ? "moderator" : $role;
        }

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
                $upload_result = $this->filemanager->upload_media("img", $upload_path, "jpg|png|jpeg|webp");

                if ($upload_result["success"]) {
                    $uploaded_img_data = $upload_result["data"];
                    $current_img_name = $uploaded_img_data["file_name"];
                    $old_image_path = $upload_path . $context["profile"]["img"];
                    $this->filemanager->delete_file($old_image_path);
                } else {
                    $this->notifier("notifier", "warning", [
                        "title" => $this->lang->line("notifier_warning"),
                        "description" => $this->lang->line("notifier_invalid_img_format")
                    ]);

                    redirect(base_url("admin/profiles/$id/edit"));
                }
            }

            $password = (empty($password)) ? $context["profile"]["password"] : hash("sha256", $password);

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

            $current_admin = $this->AdminsModel->find($id);

            $current_admin_credentials = $this->session->userdata("admin_credentials");
            $current_admin_credentials["img"] = $current_admin["img"];
            $current_admin_credentials["email"] = $current_admin["email"];
            $current_admin_credentials["role"] = $current_admin["role"];

            $this->session->set_userdata("admin_credentials", $current_admin_credentials);

            $this->notifier("notifier", "success", [
                "title" => $this->lang->line("notifier_success"),
                "description" => $this->lang->line("notifier_success_update")
            ]);

            redirect(base_url("admin/profiles/$id/edit"));
        } else {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_empty_fields")
            ]);

            redirect(base_url("admin/profiles/$id/edit"));
        }
    }

    public function destroy($id)
    {
        $context["profile"] = $this->AdminsModel->find($id);

        if (empty($context["profile"])) {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
            ]);

            redirect(base_url("admin/profiles"));
        }

        $upload_path = "./public/uploads/profiles/";
        $current_image_path = $upload_path . $context["profile"]["img"];
        $this->filemanager->delete_file($current_image_path);

        $this->AdminsModel->delete($id);

        $this->notifier("notifier", "success", [
            "title" => $this->lang->line("notifier_success"),
            "description" => $this->lang->line("notifier_success_delete")
        ]);

        redirect(base_url("admin/profiles"));
    }

    public function status($id)
    {
        $status = $this->input->post("status");
        $data = [
            "status" => $status === "on"
        ];
        $this->AdminsModel->update($id, $data);
        $this->notifier("notifier", "success", [
            "title" => $this->lang->line("notifier_success"),
            "description" => $this->lang->line("notifier_success_update")
        ]);
        redirect($_SERVER["HTTP_REFERER"] ?? base_url("admin/profiles"));
    }

    public function json()
    {
        $table = $this->AdminsModel->get_table_name();
        $columns = ["id", "img", "first_name", "last_name", "role", "status"];
        $searchable_columns = ["first_name", "last_name", "role"];
        $this->datatable_json($table, $columns, $searchable_columns);
    }
}
