<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdvertisingController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/AdvertisingModel");
    }

    public function index()
    {
        $context = [
            "page_title" => $this->lang->line("all_advertising"),
        ];
        $this->load->view("admin/advertising/list", $context);
    }

    public function show($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);

        if (!empty($context["advertising"])) {
            $advertising_title = $context["advertising"]["title_{$this->get_admin_language()}"];
            $context["page_title"] = $this->lang->line("view") . " • $advertising_title";
            $this->load->view("admin/advertising/detail", $context);
        } else {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
            ]);

            redirect(base_url("admin/advertising"));
        }
    }

    public function create()
    {
        $context["page_title"] = $this->lang->line("create_advertising");
        $this->load->view("admin/advertising/create", $context);
    }

    public function store()
    {
        $title_az = trim($this->input->post("title_az", true));
        $title_en = trim($this->input->post("title_en", true));
        $title_ru = trim($this->input->post("title_ru", true));
        $location = $this->input->post("location", true);
        $status = $this->input->post("status", true);

        $location_allowed = [1, 2, 3];

        if (!in_array($location, $location_allowed)) {
            $this->notifier("notifier", "danger", [
                "title" => $this->lang->line("notifier_danger"),
                "description" => $this->lang->line("notifier_hacking_data")
            ]);

            redirect(base_url("admin/news/create"));
        }

        if (!empty($title_az) && !empty($title_en) && !empty($title_ru)) {
            $upload_path = "./public/uploads/advertising/";
            $upload_result = $this->filemanager->upload_media("img", $upload_path, "jpg|png|jpeg|webp");

            if ($upload_result["success"]) {
                $uploaded_img_data = $upload_result["data"];
                $image_name = $uploaded_img_data["file_name"];

                $data = [
                    "title_az" => $title_az,
                    "title_en" => $title_en,
                    "title_ru" => $title_ru,
                    "location" => $location,
                    "img" => $image_name,
                    "status" => $status === "on"
                ];

                $this->AdvertisingModel->create($data);

                $this->notifier("notifier", "success", [
                    "title" => $this->lang->line("notifier_success"),
                    "description" => $this->lang->line("notifier_success_added")
                ]);

                redirect(base_url("admin/advertising"));

            } else {
                $this->notifier("notifier", "warning", [
                    "title" => $this->lang->line("notifier_warning"),
                    "description" => $this->lang->line("notifier_invalid_img_format")
                ]);

                redirect(base_url("admin/advertising/create"));
            }
        } else {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_empty_fields")
            ]);

            redirect(base_url("admin/advertising/create"));
        }
    }

    public function edit($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);
        if (!empty($context["advertising"])) {
            $advertising_title = $context["advertising"]["title_{$this->get_admin_language()}"];
            $context["page_title"] = $this->lang->line("edit_advertising") . " • $advertising_title";
            $this->load->view("admin/advertising/edit", $context);
        } else {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
            ]);
            redirect(base_url("admin/advertising"));
        }
    }

    public function update($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);

        if (empty($context["advertising"])) {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
            ]);

            redirect(base_url("admin/advertising"));
        }

        $title_az = trim($this->input->post("title_az", true));
        $title_en = trim($this->input->post("title_en", true));
        $title_ru = trim($this->input->post("title_ru", true));
        $location = $this->input->post("location", true);
        $status = $this->input->post("status", true);

        $location_allowed = [1, 2, 3];

        if (!in_array($location, $location_allowed)) {
            $this->notifier("notifier", "danger", [
                "title" => $this->lang->line("notifier_danger"),
                "description" => $this->lang->line("notifier_hacking_data")
            ]);

            redirect(base_url("admin/news/create"));
        }

        if (!empty($title_az) && !empty($title_en) && !empty($title_ru)) {
            $upload_path = "./public/uploads/advertising/";
            $current_img_name = $context["advertising"]["img"];

            if (!empty($_FILES["img"]["name"])) {
                $upload_result = $this->filemanager->upload_media("img", $upload_path, "jpg|png|jpeg|webp");

                if ($upload_result["success"]) {
                    $uploaded_img_data = $upload_result["data"];
                    $current_img_name = $uploaded_img_data["file_name"];
                    $old_image_path = $upload_path . $context["advertising"]["img"];
                    $this->filemanager->delete_file($old_image_path);
                } else {
                    $this->notifier("notifier", "warning", [
                        "title" => $this->lang->line("notifier_warning"),
                        "description" => $this->lang->line("notifier_invalid_img_format")
                    ]);

                    redirect(base_url("admin/advertising/$id/edit"));
                }
            }

            $data = [
                "title_az" => $title_az,
                "title_en" => $title_en,
                "title_ru" => $title_ru,
                "location" => $location,
                "img" => $current_img_name,
                "status" => $status === "on"
            ];

            $this->AdvertisingModel->update($id, $data);

            $this->notifier("notifier", "success", [
                "title" => $this->lang->line("notifier_success"),
                "description" => $this->lang->line("notifier_success_update")
            ]);

            redirect(base_url("admin/advertising/$id/edit"));
        } else {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_empty_fields")
            ]);

            redirect(base_url("admin/advertising/$id/edit"));
        }
    }

    public function destroy($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);

        if (empty($context["advertising"])) {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
            ]);

            redirect(base_url("admin/advertising"));
        }

        $upload_path = "./public/uploads/advertising/";
        $current_image_path = $upload_path . $context["advertising"]["img"];
        $this->filemanager->delete_file($current_image_path);

        $this->AdvertisingModel->delete($id);

        $this->notifier("notifier", "success", [
            "title" => $this->lang->line("notifier_success"),
            "description" => $this->lang->line("notifier_success_delete")
        ]);

        redirect(base_url("admin/advertising"));
    }

    public function status($id)
    {
        $status = $this->input->post("status");
        $data = [
            "status" => $status === "on"
        ];
        $this->AdvertisingModel->update($id, $data);
        $this->notifier("notifier", "success", [
            "title" => $this->lang->line("notifier_success"),
            "description" => $this->lang->line("notifier_success_update")
        ]);
        redirect($_SERVER["HTTP_REFERER"] ?? base_url("admin/advertising"));
    }

    public function json()
    {
        $table = $this->AdvertisingModel->get_table_name();
        $columns = ["id", "title_az", "title_en", "title_ru", "location", "img", "status"];
        $searchable_columns = ["title_az", "title_en", "title_ru", "location", "status"];
        $this->datatable_json($table, $columns, $searchable_columns);
    }
}
