<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CategoriesModel $CategoriesModel
 */
class CategoriesController extends CRUD_Controller
{
    private $current_language;

    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/CategoriesModel");
        $this->current_language = $this->session->userdata("admin_lang");
    }

    public function index()
    {
        $context["categories_collection"] = $this->CategoriesModel->all();
        $context["page_title"] = $this->lang->line("all_categories_page_title");
        $this->load->view("admin/categories/list", $context);
    }

    public function show($id)
    {
        redirect(base_url("admin/categories"));
    }

    public function create()
    {
        $context["page_title"] = $this->lang->line("create_category_page_title");
        $this->load->view("admin/categories/create", $context);
    }

    public function store()
    {
        $category_name_az = $this->input->post("category_name_az", true);
        $category_name_en = $this->input->post("category_name_en", true);
        $category_name_ru = $this->input->post("category_name_ru", true);
        $category_status = $this->input->post("category_status", true);

        if (!empty($category_name_az) && !empty($category_name_en) && !empty($category_name_ru)) {
            $data = [
                "name_az" => $category_name_az,
                "name_en" => $category_name_en,
                "name_ru" => $category_name_ru,
                "status" => $category_status === "on"
            ];

            $this->CategoriesModel->create($data);

            $this->alert_flashdata("category_create_alert", "success", [
                "title" => $this->lang->line("category_create_success_alert_title"),
                "description" => $this->lang->line("category_create_success_alert_description")
            ]);

            redirect(base_url("admin/categories/create"));
        } else {
            $this->alert_flashdata("category_create_alert", "warning", [
                "title" => $this->lang->line("category_create_warning_alert_title"),
                "description" => $this->lang->line("category_create_warning_alert_description")
            ]);

            redirect(base_url("admin/categories/create"));
        }
    }
















    public function edit($id)
    {

    }






    public function update($id)
    {

    }













    public function destroy($id)
    {
        $category = $this->CategoriesModel->find($id);
        if (!empty($category)) {
            $this->CategoriesModel->delete($id);

            $this->alert_flashdata("category_delete_alert", "success", [
                "title" => $this->lang->line("category_delete_success_alert_title"),
                "description" => $this->lang->line("category_delete_success_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        } else {
            $this->alert_flashdata("category_delete_alert", "danger", [
                "title" => $this->lang->line("category_delete_danger_alert_title"),
                "description" => $this->lang->line("category_delete_danger_alert_description")
            ]);

            redirect(base_url("admin/categories"));
        }
    }
}