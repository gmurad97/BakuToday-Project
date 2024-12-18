<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property AdvertisingModel $AdvertisingModel
 */
class AdvertisingController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/AdvertisingModel");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("all_advertising");
        $context["advertising_collection"] = $this->AdvertisingModel->all();
        $this->load->view("admin/advertising/list", $context);
    }

    public function show($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);

        if (!empty($context["advertising"])) {
            $advertising_name = $context["advertising"]["title_{$this->current_admin_language}"];
            $context["page_title"] = $this->lang->line("view") . " • $advertising_name";
            $this->load->view("admin/advertising/detail", $context);
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/advertising"));
        }
    }

    public function create()
    {
        $context["page_title"] = $this->lang->load("create_advertising");
        $this->load->view("admin/advertising/create", $context);
    }

    public function store()
    {
        $title_az = substr($this->input->post("title_az", true), 0, 255);
        $title_en = substr($this->input->post("title_en", true), 0, 255);
        $title_ru = substr($this->input->post("title_ru", true), 0, 255);
        $location = substr($this->input->post("location", true), 0, 255);
        $status = $this->input->post("status", true);

        if (!empty($title_az) && !empty($title_en) && !empty($title_ru)) {
            $upload_path = "./public/uploads/advertising/";
            $upload_result = $this->upload_image("img", $upload_path);

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

                $this->alert_flashdata("crud_alert", "success", [
                    "title" => $this->lang->line("success_added_alert_title"),
                    "description" => $this->lang->line("success_added_alert_description")
                ]);

                redirect(base_url("admin/advertising"));

            } else {
                $this->alert_flashdata("crud_alert", "warning", [
                    "title" => $this->lang->line("invalid_img_format_alert_title"),
                    "description" => $this->lang->line("invalid_img_format_alert_description")
                ]);

                redirect(base_url("admin/advertising/create"));
            }
        } else {
            $this->alert_flashdata("crud_alert", "warning", [
                "title" => $this->lang->line("empty_fields_alert_title"),
                "description" => $this->lang->line("empty_fields_alert_description")
            ]);

            redirect(base_url("admin/advertising/create"));
        }
    }

    public function edit($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);
        if (!empty($context["advertising"])) {
            $advertising_title = $context["advertising"]["title_{$this->current_admin_language}"];
            $context["page_title"] = $this->lang->line("edit_advertising") . " • $advertising_title";
            $this->load->view("admin/advertising/edit", $context);
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);
            redirect(base_url("admin/advertising"));
        }
    }

    public function update($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);

        if (!empty($context["advertising"])) {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/advertising"));
        }

        $title_az = substr($this->input->post("title_az", true), 0, 255);
        $title_en = substr($this->input->post("title_en", true), 0, 255);
        $title_ru = substr($this->input->post("title_ru", true), 0, 255);
        $location = substr($this->input->post("location", true), 0, 255);
        $status = $this->input->post("status", true);

        if (!empty($title_az) && !empty($title_en) && !empty($title_ru)) {
            $upload_path = "./public/uploads/advertising/";
            $current_img_name = $context["advertising"]["img"];

            if (!empty($_FILES["img"]["name"])) {
                $upload_result = $this->upload_image("img", $upload_path);

                if ($upload_result["success"]) {
                    $uploaded_img_data = $upload_result["data"];
                    $current_img_name = $uploaded_img_data["file_name"];
                    $old_image_path = $upload_path . $context["advertising"]["img"];
                    $this->delete_file($old_image_path);
                } else {
                    $this->alert_flashdata("crud_alert", "warning", [
                        "title" => $this->lang->line("invalid_img_format_alert_title"),
                        "description" => $this->lang->line("invalid_img_format_alert_description")
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

            $this->alert_flashdata("crud_alert", "success", [
                "title" => $this->lang->line("success_update_alert_title"),
                "description" => $this->lang->line("success_update_alert_description")
            ]);

            redirect(base_url("admin/advertising/$id/edit"));
        } else {
            $this->alert_flashdata("crud_alert", "warning", [
                "title" => $this->lang->line("empty_fields_alert_title"),
                "description" => $this->lang->line("empty_fields_alert_description")
            ]);

            redirect(base_url("admin/advertising/$id/edit"));
        }
    }

    public function destroy($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);

        if (!empty($context["advertising"])) {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/advertising"));
        }

        $upload_path = "./public/uploads/advertising/";
        $current_image_path = $upload_path . $context["advertising"]["img"];
        $this->delete_file($current_image_path);

        $this->AdvertisingModel->delete($id);

        $this->alert_flashdata("crud_alert", "success", [
            "title" => $this->lang->line("success_delete_alert_title"),
            "description" => $this->lang->line("success_delete_alert_description")
        ]);

        redirect(base_url("admin/advertising"));
    }
}