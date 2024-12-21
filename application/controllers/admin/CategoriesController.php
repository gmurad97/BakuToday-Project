<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoriesController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/CategoriesModel");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("all_categories");
        $context["categories_collection"] = $this->CategoriesModel->all();
        $this->load->view("admin/categories/list", $context);
    }

    public function show($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);
        if (!empty($context["category"])) {
            $category_name = $context["category"]["name_{$this->current_admin_language}"];
            $context["page_title"] = $this->lang->line("view_category") . " • $category_name";
            $this->load->view("admin/categories/detail", $context);
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        }
    }

    public function create()
    {
        $context["page_title"] = $this->lang->line("create_category");
        $this->load->view("admin/categories/create", $context);
    }

    public function store()
    {
        $category_name_az = trim($this->input->post("category_name_az", true));
        $category_name_en = trim($this->input->post("category_name_en", true));
        $category_name_ru = trim($this->input->post("category_name_ru", true));
        $category_status = $this->input->post("category_status", true);

        if (!empty($category_name_az) && !empty($category_name_en) && !empty($category_name_ru)) {
            $data = [
                "name_az" => $category_name_az,
                "name_en" => $category_name_en,
                "name_ru" => $category_name_ru,
                "status" => $category_status === "on"
            ];

            $this->CategoriesModel->create($data);

            $this->alert_flashdata("crud_alert", "success", [
                "title" => $this->lang->line("success_added_alert_title"),
                "description" => $this->lang->line("success_added_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        } else {
            $this->alert_flashdata("crud_alert", "warning", [
                "title" => $this->lang->line("empty_fields_alert_title"),
                "description" => $this->lang->line("empty_fields_alert_description")
            ]);

            redirect(base_url("admin/categories/create"));
        }
    }

    public function edit($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);

        if (!empty($context["category"])) {
            $category_name = $context["category"]["name_{$this->current_admin_language}"];
            $context["page_title"] = $this->lang->line("edit_category") . " • $category_name";
            $this->load->view("admin/categories/edit", $context);
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        }
    }

    public function update($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);

        if (!empty($context["category"])) {
            $category_name_az = trim($this->input->post("category_name_az", true));
            $category_name_en = trim($this->input->post("category_name_en", true));
            $category_name_ru = trim($this->input->post("category_name_ru", true));
            $category_status = $this->input->post("category_status", true);

            if (!empty($category_name_az) && !empty($category_name_en) && !empty($category_name_ru)) {
                $data = [
                    "name_az" => $category_name_az,
                    "name_en" => $category_name_en,
                    "name_ru" => $category_name_ru,
                    "status" => $category_status === "on"
                ];

                $this->CategoriesModel->update($id, $data);

                $this->alert_flashdata("crud_alert", "success", [
                    "title" => $this->lang->line("success_update_alert_title"),
                    "description" => $this->lang->line("success_update_alert_description")
                ]);

                redirect(base_url("admin/categories/$id/edit"));
            } else {
                $this->alert_flashdata("crud_alert", "warning", [
                    "title" => $this->lang->line("empty_fields_alert_title"),
                    "description" => $this->lang->line("empty_fields_alert_description")
                ]);

                redirect(base_url("admin/categories/$id/edit"));
            }
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        }
    }

    public function destroy($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);
        if (!empty($context["category"])) {
            $this->CategoriesModel->delete($id);

            $this->alert_flashdata("crud_alert", "success", [
                "title" => $this->lang->line("success_delete_alert_title"),
                "description" => $this->lang->line("success_delete_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        }
    }
}