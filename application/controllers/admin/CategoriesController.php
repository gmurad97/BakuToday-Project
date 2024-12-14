<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CategoriesModel $CategoriesModel
 */
class CategoriesController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/CategoriesModel");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("admin_all_categories_page_title");
        $context["categories_collection"] = $this->CategoriesModel->all();
        $this->load->view("admin/categories/list", $context);
    }

    public function show($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);
        $category_name = $context["category"]["name_{$this->current_admin_language}"];
        if (!empty($context["category"])) {
            $context["page_title"] = "View category • $category_name";
            $this->load->view("admin/categories/detail", $context);
        } else {
            $this->alert_flashdata("categories_alert", "info", [
                "title" => $this->lang->line("admin_category_detail_invalid_id_alert_title"),
                "description" => $this->lang->line("admin_category_detail_invalid_id_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        }
    }

    public function create()
    {
        $context["page_title"] = $this->lang->line("admin_create_category_page_title");
        $this->load->view("admin/categories/create", $context);
    }

    public function store()
    {
        $category_name_az = substr($this->input->post("category_name_az", true), 0, 255);
        $category_name_en = substr($this->input->post("category_name_en", true), 0, 255);
        $category_name_ru = substr($this->input->post("category_name_ru", true), 0, 255);
        $category_status = $this->input->post("category_status", true);

        if (!empty($category_name_az) && !empty($category_name_en) && !empty($category_name_ru)) {
            $data = [
                "name_az" => $category_name_az,
                "name_en" => $category_name_en,
                "name_ru" => $category_name_ru,
                "status" => $category_status === "on"
            ];

            $this->CategoriesModel->create($data);

            $this->alert_flashdata("categories_alert", "success", [
                "title" => $this->lang->line("admin_category_create_success_alert_title"),
                "description" => $this->lang->line("admin_category_create_success_alert_description")
            ]);

            redirect(base_url("admin/categories/create"));
        } else {
            $this->alert_flashdata("categories_alert", "warning", [
                "title" => $this->lang->line("admin_category_create_empty_fields_alert_title"),
                "description" => $this->lang->line("admin_category_create_empty_fields_alert_description")
            ]);

            redirect(base_url("admin/categories/create"));
        }
    }

    public function edit($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);
        $category_name = $context["category"]["name_{$this->current_admin_language}"];

        if (!empty($context["category"])) {
            $context["page_title"] = "Edit category • $category_name";
            $this->load->view("admin/categories/edit", $context);
        } else {
            $this->alert_flashdata("categories_alert", "info", [
                "title" => $this->lang->line("admin_category_edit_invalid_id_alert_title"),
                "description" => $this->lang->line("admin_category_edit_invalid_id_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        }
    }

    public function update($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);

        if (!empty($context["category"])) {
            $category_name_az = substr($this->input->post("category_name_az", true), 0, 255);
            $category_name_en = substr($this->input->post("category_name_en", true), 0, 255);
            $category_name_ru = substr($this->input->post("category_name_ru", true), 0, 255);
            $category_status = $this->input->post("category_status", true);

            if (!empty($category_name_az) && !empty($category_name_en) && !empty($category_name_ru)) {
                $data = [
                    "name_az" => $category_name_az,
                    "name_en" => $category_name_en,
                    "name_ru" => $category_name_ru,
                    "status" => $category_status === "on"
                ];

                $this->CategoriesModel->update($id, $data);

                $this->alert_flashdata("categories_alert", "success", [
                    "title" => $this->lang->line("admin_category_edit_success_alert_title"),
                    "description" => $this->lang->line("admin_category_edit_success_alert_description")
                ]);

                redirect(base_url("admin/categories/$id/edit"));
            } else {
                $this->alert_flashdata("categories_alert", "warning", [
                    "title" => $this->lang->line("admin_category_edit_empty_fields_alert_title"),
                    "description" => $this->lang->line("admin_category_edit_empty_fields_alert_description")
                ]);

                redirect(base_url("admin/categories/$id/edit"));
            }
        } else {
            $this->alert_flashdata("categories_alert", "info", [
                "title" => $this->lang->line("admin_category_edit_invalid_id_alert_title"),
                "description" => $this->lang->line("admin_category_edit_invalid_id_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        }
    }

    public function destroy($id)
    {
        $category = $this->CategoriesModel->find($id);
        if (!empty($category)) {
            $this->CategoriesModel->delete($id);

            $this->alert_flashdata("categories_alert", "success", [
                "title" => $this->lang->line("admin_category_delete_success_alert_title"),
                "description" => $this->lang->line("admin_category_delete_success_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        } else {
            $this->alert_flashdata("categories_alert", "info", [
                "title" => $this->lang->line("admin_category_delete_invalid_id_alert_title"),
                "description" => $this->lang->line("admin_category_delete_invalid_id_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        }
    }
}