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
        $context = [
            "page_title" => $this->lang->line("all_categories"),
        ];
        $this->load->view("admin/categories/list", $context);
    }

    public function show($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);
        if (!empty($context["category"])) {
            $category_name = $context["category"]["name_{$this->get_admin_language()}"];
            $context["page_title"] = $this->lang->line("view_category") . " • $category_name";
            $this->load->view("admin/categories/detail", $context);
        } else {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
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

            $this->notifier("notifier", "success", [
                "title" => $this->lang->line("notifier_success"),
                "description" => $this->lang->line("notifier_success_added")
            ]);

            redirect(base_url("admin/categories"));
        } else {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_empty_fields")
            ]);

            redirect(base_url("admin/categories/create"));
        }
    }

    public function edit($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);

        if (!empty($context["category"])) {
            $category_name = $context["category"]["name_{$this->get_admin_language()}"];
            $context["page_title"] = $this->lang->line("edit_category") . " • $category_name";
            $this->load->view("admin/categories/edit", $context);
        } else {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
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

                $this->notifier("notifier", "success", [
                    "title" => $this->lang->line("notifier_success"),
                    "description" => $this->lang->line("notifier_success_update")
                ]);

                redirect(base_url("admin/categories/$id/edit"));
            } else {
                $this->notifier("notifier", "warning", [
                    "title" => $this->lang->line("notifier_warning"),
                    "description" => $this->lang->line("notifier_empty_fields")
                ]);

                redirect(base_url("admin/categories/$id/edit"));
            }
        } else {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
            ]);

            redirect(base_url("admin/categories"));
        }
    }

    public function destroy($id)
    {
        $context["category"] = $this->CategoriesModel->find($id);
        if (!empty($context["category"])) {
            $this->CategoriesModel->delete($id);

            $this->notifier("notifier", "success", [
                "title" => $this->lang->line("notifier_success"),
                "description" => $this->lang->line("notifier_success_delete")
            ]);

            redirect(base_url("admin/categories"));
        } else {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
            ]);

            redirect(base_url("admin/categories"));
        }
    }

    public function status($id)
    {
        $status = $this->input->post("status");
        $data = [
            "status" => $status === "on"
        ];
        $this->CategoriesModel->update($id, $data);
        $this->notifier("notifier", "success", [
            "title" => $this->lang->line("notifier_success"),
            "description" => $this->lang->line("notifier_success_update")
        ]);
        redirect($_SERVER["HTTP_REFERER"] ?? base_url("admin/categories"));
    }

    public function json()
    {
        $table = $this->CategoriesModel->get_table_name();
        $columns = ["id", "name_az", "name_en", "name_ru", "status"];
        $searchable_columns = ["name_az", "name_en", "name_ru", "status"];
        $this->datatable_json($table, $columns, $searchable_columns);
    }
}