<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfilesController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/AdminsModel");

        if (!$this->rolesmanager->has_access("admin")) {
            $this->lang->load("message", $this->get_admin_language());
            $this->notifier("notifier", "danger", [
                "title" => $this->lang->line("notifier_danger"),
                "description" => $this->lang->line("notifier_access_denied")
            ]);
            redirect(base_url("admin/dashboard"));
        }
    }




    public function json()
{
    $request = $_POST;

    $start = $request['start'] ?? 0;
    $length = $request['length'] ?? 10;
    $search = $request['search']['value'] ?? "";
    $orderColumnIndex = $request['order'][0]['column'] ?? 0;
    $orderDir = $request['order'][0]['dir'] ?? 'asc';
    $columns = $request['columns'];
    $orderColumn = $columns[$orderColumnIndex]['data'] ?? 'id';

    $totalData = $this->AdminsModel->count_all();
    $filteredData = $this->AdminsModel->count_filtered($search);
    $data = $this->AdminsModel->get_filtered($search, $start, $length, $orderColumn, $orderDir);

    $result = [];

    foreach ($data as $profile) {
        $result[] = [
            "id" => $profile["id"],
            "image" => '<img src="' . base_url("public/uploads/profiles/" . $profile["img"]) . '" style="height:40px;width:40px;object-fit:cover;">',
            "first_name" => $profile["first_name"],
            "last_name" => $profile["last_name"],
            "role" => $profile["role"],
            "status" => '<input type="checkbox" ' . ($profile["status"] ? "checked" : "") . '>',
            "actions" => '... тут dropdown ...'
        ];
    }

    echo json_encode([
        "draw" => intval($request['draw']),
        "recordsTotal" => intval($totalData),
        "recordsFiltered" => intval($filteredData),
        "data" => $result,
        "csrf_token" => $this->security->get_csrf_hash()
    ]);
}

    


















    public function index()
    {
        $context = [
            "page_title" => $this->lang->line("all_administrators"),
            "profiles_collection" => $this->AdminsModel->all()
        ];
        $this->load->view("admin/profiles/list", $context);
    }

    public function status($id){
        $status = $this->input->post("status");
        $data = [
            "status" => $status === "on"
        ];

        $this->AdminsModel->update($id, $data);


        $this->notifier("notifier", "info", [
            "title" => $this->lang->line("notifier_info"),
            "description" => $this->lang->line("notifier_invalid_id")
        ]);

        redirect(base_url("admin/profiles"));
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

        $first_name = trim($this->input->post("first_name", true));
        $last_name = trim($this->input->post("last_name", true));
        $email = trim($this->input->post("email", true));
        $username = trim($this->input->post("username", true));
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

            if (empty($password)) {
                $password = $context["profile"]["password"];
            } else {
                $password = hash("sha256", $password);
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
            $current_admin_credentials["email"] = $this->AdminsModel->find($current_admin_credentials["id"])["email"];
            $current_admin_credentials["role"] = $this->AdminsModel->find($current_admin_credentials["id"])["role"];
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