<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewsController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/NewsModel");
        $this->load->model("admin/CategoriesModel");
        $this->load->model("admin/AdminsModel");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("all_news");
        $context["news_collection"] = $this->NewsModel->with_author_category();
        $this->load->view("admin/news/list", $context);
    }

    public function show($id)
    {
        $context["news"] = $this->NewsModel->with_author_category($id);

        if (!empty($context["news"])) {
            $news_title = $context["news"]["title_{$this->current_admin_language}"];
            $context["page_title"] = $this->lang->line("view") . " • $news_title";
            $this->load->view("admin/news/detail", $context);
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/news"));
        }
    }

    public function create()
    {
        $context["page_title"] = $this->lang->line("create_news");
        $context["categories_collection"] = $this->CategoriesModel->all();
        $this->load->view("admin/news/create", $context);
    }

    public function store()
    {
        $title_az = trim($this->input->post("title_az", true));
        $title_en = trim($this->input->post("title_en", true));
        $title_ru = trim($this->input->post("title_ru", true));
        $short_description_az = trim($this->input->post("short_description_az", true));
        $short_description_en = trim($this->input->post("short_description_en", true));
        $short_description_ru = trim($this->input->post("short_description_ru", true));
        $long_description_az = $this->input->post("long_description_az", false);
        $long_description_en = $this->input->post("long_description_en", false);
        $long_description_ru = $this->input->post("long_description_ru", false);
        $category_id = $this->input->post("category_id", true);
        $author_id = $this->session->userdata("admin_credentials")["id"];
        $type = $this->input->post("type", true);
        $status = $this->input->post("status", true);

        $categories_collection = $this->CategoriesModel->all();
        $categories_ids = array_column($categories_collection, "id");
        $types_allowed = ["daily_news", "important_news", "general_news"];

        if (!in_array($category_id, $categories_ids) || !in_array($type, $types_allowed)) {
            $this->alert_flashdata("crud_alert", "danger", [
                "title" => $this->lang->line("hacking_data_alert_title"),
                "description" => $this->lang->line("hacking_data_alert_description")
            ]);

            redirect(base_url("admin/news/create"));
        }

        $upload_path = "./public/uploads/news/";
        $data = [];

        if (!empty($_FILES["multi_img"]["name"][0])) {
            $multi_images = [];
            $upload_result = $this->upload_image('multi_img', $upload_path);

            if ($upload_result['success']) {
                foreach ($upload_result['data'] as $file_data) {
                    $multi_images[] = $file_data['file_name'];
                }

                $data['multi_img'] = json_encode($multi_images);
            } else {
                $this->alert_flashdata("crud_alert", "warning", [
                    "title" => $this->lang->line("invalid_img_format_alert_title"),
                    "description" => $this->lang->line("invalid_img_format_alert_description")
                ]);

                redirect(base_url("admin/news/create"));
            }
        }

        $upload_result = $this->upload_image("img", $upload_path);
        if ($upload_result["success"]) {
            $uploaded_img_data = $upload_result["data"];
            $data['img'] = $uploaded_img_data["file_name"];
        } else {
            $this->alert_flashdata("crud_alert", "warning", [
                "title" => $this->lang->line("invalid_img_format_alert_title"),
                "description" => $this->lang->line("invalid_img_format_alert_description")
            ]);

            redirect(base_url("admin/news/create"));
            return;
        }

        if (
            !empty($title_az)
            && !empty($title_en)
            && !empty($title_ru)
            && !empty($short_description_az)
            && !empty($short_description_en)
            && !empty($short_description_ru)
            && !empty($long_description_az)
            && !empty($long_description_en)
            && !empty($long_description_ru)
        ) {
            $data = array_merge($data, [
                "title_az" => $title_az,
                "title_en" => $title_en,
                "title_ru" => $title_ru,
                "short_description_az" => $short_description_az,
                "short_description_en" => $short_description_en,
                "short_description_ru" => $short_description_ru,
                "long_description_az" => $long_description_az,
                "long_description_en" => $long_description_en,
                "long_description_ru" => $long_description_ru,
                "category_id" => $category_id,
                "author_id" => $author_id,
                "type" => $type,
                "status" => $status === "on",
            ]);

            $this->NewsModel->create($data);

            $this->alert_flashdata("crud_alert", "success", [
                "title" => $this->lang->line("success_added_alert_title"),
                "description" => $this->lang->line("success_added_alert_description")
            ]);

            redirect(base_url("admin/news"));
        } else {
            $this->alert_flashdata("crud_alert", "warning", [
                "title" => $this->lang->line("empty_fields_alert_title"),
                "description" => $this->lang->line("empty_fields_alert_description")
            ]);

            redirect(base_url("admin/news/create"));
        }
    }

    public function edit($id)
    {
        $context["news"] = $this->NewsModel->find($id);
        $context["categories_collection"] = $this->CategoriesModel->all();
        if (!empty($context["news"])) {
            $news_title = $context["news"]["title_{$this->current_admin_language}"];
            $context["page_title"] = $this->lang->line("edit_news") . " • $news_title";
            $this->load->view("admin/news/edit", $context);
        } else {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);
            redirect(base_url("admin/news"));
        }
    }

    public function update($id)
    {
        $context["news"] = $this->NewsModel->find($id);

        if (empty($context["news"])) {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/news"));
        }

        $title_az = trim($this->input->post("title_az", true));
        $title_en = trim($this->input->post("title_en", true));
        $title_ru = trim($this->input->post("title_ru", true));
        $short_description_az = trim($this->input->post("short_description_az", true));
        $short_description_en = trim($this->input->post("short_description_en", true));
        $short_description_ru = trim($this->input->post("short_description_ru", true));
        $long_description_az = $this->input->post("long_description_az", false);
        $long_description_en = $this->input->post("long_description_en", false);
        $long_description_ru = $this->input->post("long_description_ru", false);
        $category_id = $this->input->post("category_id", true);
        $author_id = $this->session->userdata("admin_credentials")["id"];
        $type = $this->input->post("type", true);
        $status = $this->input->post("status", true);

        $categories_collection = $this->CategoriesModel->all();
        $categories_ids = array_column($categories_collection, "id");
        $types_allowed = ["daily_news", "important_news", "general_news"];

        if (!in_array($category_id, $categories_ids) || !in_array($type, $types_allowed)) {
            $this->alert_flashdata("crud_alert", "danger", [
                "title" => $this->lang->line("hacking_data_alert_title"),
                "description" => $this->lang->line("hacking_data_alert_description")
            ]);

            redirect(base_url("admin/news/$id/edit"));
        }

        if (
            !empty($title_az)
            && !empty($title_en)
            && !empty($title_ru)
            && !empty($short_description_az)
            && !empty($short_description_en)
            && !empty($short_description_ru)
            && !empty($long_description_az)
            && !empty($long_description_en)
            && !empty($long_description_ru)
        ) {
            $upload_path = "./public/uploads/news/";

            if (!empty($_FILES["multi_img"]["name"][0])) {
                $multi_images = [];
                $upload_result = $this->upload_image("multi_img", $upload_path);

                if ($upload_result["success"]) {
                    foreach ($upload_result["data"] as $file_data) {
                        $multi_images[] = $file_data["file_name"];
                    }

                    $data["multi_img"] = json_encode($multi_images);
                } else {
                    $this->alert_flashdata("crud_alert", "warning", [
                        "title" => $this->lang->line("invalid_img_format_alert_title"),
                        "description" => $this->lang->line("invalid_img_format_alert_description")
                    ]);

                    redirect(base_url("admin/news/$id/edit"));
                }
            }

            $current_img_name = $context["news"]["img"];
            if (!empty($_FILES["img"]["name"])) {
                $upload_result = $this->upload_image("img", $upload_path);

                if ($upload_result["success"]) {
                    $uploaded_img_data = $upload_result["data"];
                    $current_img_name = $uploaded_img_data["file_name"];
                    $old_image_path = $upload_path . $context["news"]["img"];
                    $this->delete_file($old_image_path);
                } else {
                    $this->alert_flashdata("crud_alert", "warning", [
                        "title" => $this->lang->line("invalid_img_format_alert_title"),
                        "description" => $this->lang->line("invalid_img_format_alert_description")
                    ]);

                    redirect(base_url("admin/news/$id/edit"));
                    return;
                }
            }

            $data = [
                "title_az" => $title_az,
                "title_en" => $title_en,
                "title_ru" => $title_ru,
                "short_description_az" => $short_description_az,
                "short_description_en" => $short_description_en,
                "short_description_ru" => $short_description_ru,
                "long_description_az" => $long_description_az,
                "long_description_en" => $long_description_en,
                "long_description_ru" => $long_description_ru,
                "category_id" => $category_id,
                "author_id" => $author_id,
                "type" => $type,
                "status" => $status === "on",
                "img" => $current_img_name,
            ];

            $this->NewsModel->update($id, $data);

            $this->alert_flashdata("crud_alert", "success", [
                "title" => $this->lang->line("success_update_alert_title"),
                "description" => $this->lang->line("success_update_alert_description")
            ]);

            redirect(base_url("admin/news/$id/edit"));
        } else {
            $this->alert_flashdata("crud_alert", "warning", [
                "title" => $this->lang->line("empty_fields_alert_title"),
                "description" => $this->lang->line("empty_fields_alert_description")
            ]);

            redirect(base_url("admin/news/$id/edit"));
        }
    }

    public function destroy($id)
    {
        $context["news"] = $this->NewsModel->find($id);

        if (empty($context["news"])) {
            $this->alert_flashdata("crud_alert", "info", [
                "title" => $this->lang->line("invalid_id_alert_title"),
                "description" => $this->lang->line("invalid_id_alert_description")
            ]);

            redirect(base_url("admin/news"));
        }

        $upload_path = "./public/uploads/news/";
        $current_img_path = $upload_path . $context["news"]["img"];
        $this->delete_file($current_img_path);

        $multi_images = json_decode($context["news"]["multi_img"], true);
        if (!empty($multi_images)) {
            foreach ($multi_images as $image) {
                $this->delete_file($upload_path . $image);
            }
        }

        $this->NewsModel->delete($id);

        $this->alert_flashdata("crud_alert", "success", [
            "title" => $this->lang->line("success_delete_alert_title"),
            "description" => $this->lang->line("success_delete_alert_description")
        ]);

        redirect(base_url("admin/news"));
    }
}