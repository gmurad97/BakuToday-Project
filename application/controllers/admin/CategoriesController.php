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
        $this->load->library("admin_roles");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("admin_categories_index_page_title");
        $context["categories_collection"] = $this->CategoriesModel->all();
        $this->load->view("admin/categories/list", $context);
    }

    public function show($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);
        $category_name = $context["category"]["name_{$this->current_admin_language}"];
        if (!empty($context["category"])) {
            $context["page_title"] = $this->lang->line("admin_categories_show_page_title") . " • $category_name";
            $this->load->view("admin/categories/detail", $context);
        } else {
            $this->alert_flashdata("categories_alert", "info", [
                "title" => $this->lang->line("admin_categories_show_invalid_id_alert_title"),
                "description" => $this->lang->line("admin_categories_show_invalid_id_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        }
    }

    public function create()
    {
                // Загружаем библиотеку стандартным способом


                /* $this->load->library("admin_roles");
                $name = $this->admin_roles->has_access('admin')? "TRUEK":"FALSIK"; */
        
                $name = $this->CategoriesModel->find(["name_en"=> "Technology"]);

                print_r("<pre>");
                print_r($name);
                die();




















        $context["page_title"] = $this->lang->line("admin_categories_create_page_title");
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
                "title" => $this->lang->line("admin_categories_store_success_alert_title"),
                "description" => $this->lang->line("admin_categories_store_success_alert_description")
            ]);

            redirect(base_url("admin/categories/create"));
        } else {
            $this->alert_flashdata("categories_alert", "warning", [
                "title" => $this->lang->line("admin_categories_store_empty_fields_alert_title"),
                "description" => $this->lang->line("admin_categories_store_empty_fields_alert_description")
            ]);

            redirect(base_url("admin/categories/create"));
        }
    }

    public function edit($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);
        $category_name = $context["category"]["name_{$this->current_admin_language}"];

        if (!empty($context["category"])) {
            $context["page_title"] = $this->lang->line("admin_categories_edit_page_title") . " • $category_name";
            $this->load->view("admin/categories/edit", $context);
        } else {
            $this->alert_flashdata("categories_alert", "info", [
                "title" => $this->lang->line("admin_categories_edit_invalid_id_alert_title"),
                "description" => $this->lang->line("admin_categories_edit_invalid_id_alert_description")
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
                    "title" => $this->lang->line("admin_categories_update_success_alert_title"),
                    "description" => $this->lang->line("admin_categories_update_success_alert_description")
                ]);

                redirect(base_url("admin/categories/$id/edit"));
            } else {
                $this->alert_flashdata("categories_alert", "warning", [
                    "title" => $this->lang->line("admin_categories_update_empty_fields_alert_title"),
                    "description" => $this->lang->line("admin_categories_update_empty_fields_alert_description")
                ]);

                redirect(base_url("admin/categories/$id/edit"));
            }
        } else {
            $this->alert_flashdata("categories_alert", "info", [
                "title" => $this->lang->line("admin_categories_update_invalid_id_alert_title"),
                "description" => $this->lang->line("admin_categories_update_invalid_id_alert_description")
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
                "title" => $this->lang->line("admin_categories_destroy_success_alert_title"),
                "description" => $this->lang->line("admin_categories_destroy_success_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        } else {
            $this->alert_flashdata("categories_alert", "info", [
                "title" => $this->lang->line("admin_categories_destroy_invalid_id_alert_title"),
                "description" => $this->lang->line("admin_categories_destroy_invalid_id_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        }
    }
}