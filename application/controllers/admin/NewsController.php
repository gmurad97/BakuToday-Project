<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewsController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/NewsModel");
        $this->load->model("admin/CategoriesModel");
    }

    public function index()
    {
        $context = [
            "page_title" => $this->lang->line("all_news"),
        ];
        $this->load->view("admin/news/list", $context);
    }

    public function show($id)
    {
        $context["news"] = $this->NewsModel->with_author_category($id);

        if (!empty($context["news"])) {
            $news_title = $context["news"]["title_{$this->get_admin_language()}"];
            $context["page_title"] = $this->lang->line("view") . " • $news_title";
            $this->load->view("admin/news/detail", $context);
        } else {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
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
        $video_link = $this->input->post("video_link", true);
        $category_id = $this->input->post("category_id", true);

        $admin_auth_session_key = $this->config->item("admin_auth_session_key");
        $author_id = $this->session->userdata($admin_auth_session_key)["id"];

        $type = $this->input->post("type", true);
        $status = $this->input->post("status", true);
        $categories_collection = $this->CategoriesModel->all();
        $categories_ids = array_column($categories_collection, "id");
        $types_allowed = ["daily_news", "important_news", "general_news"];

        if (!in_array($category_id, $categories_ids) || !in_array($type, $types_allowed)) {
            $this->notifier("notifier", "danger", [
                "title" => $this->lang->line("notifier_danger"),
                "description" => $this->lang->line("notifier_hacking_data")
            ]);

            redirect(base_url("admin/news/create"));
        }

        $upload_path = "./public/uploads/news/";
        $data = [];

        if (!empty($_FILES["multi_img"]["name"][0])) {
            $multi_images = [];
            $upload_result = $this->filemanager->upload_media("multi_img", $upload_path, "jpg|jpeg|png|gif|webp");

            if ($upload_result["success"]) {
                foreach ($upload_result["data"] as $file_data) {
                    $multi_images[] = $file_data["file_name"];
                }

                $data["multi_img"] = json_encode($multi_images);
            } else {
                $this->notifier("notifier", "warning", [
                    "title" => $this->lang->line("notifier_warning"),
                    "description" => $this->lang->line("notifier_invalid_img_format")
                ]);

                redirect(base_url("admin/news/create"));
            }
        }

        $upload_result = $this->filemanager->upload_media("img", $upload_path, "jpg|jpeg|png|gif|webp");
        if ($upload_result["success"]) {
            $uploaded_img_data = $upload_result["data"];
            $data['img'] = $uploaded_img_data["file_name"];
        } else {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_invalid_img_format")
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
                "video" => $video_link,
                "category_id" => $category_id,
                "author_id" => $author_id,
                "type" => $type,
                "status" => $status === "on",
            ]);

            $this->NewsModel->create($data);

            $this->notifier("notifier", "success", [
                "title" => $this->lang->line("notifier_success"),
                "description" => $this->lang->line("notifier_success_added")
            ]);

            redirect(base_url("admin/news"));
        } else {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_empty_fields")
            ]);

            redirect(base_url("admin/news/create"));
        }
    }

    public function edit($id)
    {
        $context["news"] = $this->NewsModel->find($id);
        $context["categories_collection"] = $this->CategoriesModel->all();
        if (!empty($context["news"])) {
            $news_title = $context["news"]["title_{$this->get_admin_language()}"];
            $context["page_title"] = $this->lang->line("edit_news") . " • $news_title";
            $this->load->view("admin/news/edit", $context);
        } else {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
            ]);
            redirect(base_url("admin/news"));
        }
    }

    public function update($id)
    {
        $context["news"] = $this->NewsModel->find($id);

        if (empty($context["news"])) {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
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
        $video_link = $this->input->post("video_link", true);
        $category_id = $this->input->post("category_id", true);

        $admin_auth_session_key = $this->config->item("admin_auth_session_key");
        $author_id = $this->session->userdata($admin_auth_session_key)["id"];

        $type = $this->input->post("type", true);
        $status = $this->input->post("status", true);

        $categories_collection = $this->CategoriesModel->all();
        $categories_ids = array_column($categories_collection, "id");
        $types_allowed = ["daily_news", "important_news", "general_news"];

        if (!in_array($category_id, $categories_ids) || !in_array($type, $types_allowed)) {
            $this->notifier("notifier", "danger", [
                "title" => $this->lang->line("notifier_danger"),
                "description" => $this->lang->line("notifier_hacking_data")
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
                $upload_result = $this->filemanager->upload_media("multi_img", $upload_path, "jpg|png|jpeg|webp");

                if ($upload_result["success"]) {
                    foreach ($upload_result["data"] as $file_data) {
                        $multi_images[] = $file_data["file_name"];
                    }

                    $data["multi_img"] = json_encode($multi_images);
                } else {
                    $this->notifier("notifier", "warning", [
                        "title" => $this->lang->line("notifier_warning"),
                        "description" => $this->lang->line("notifier_invalid_img_format")
                    ]);

                    redirect(base_url("admin/news/$id/edit"));
                }
            }

            $current_img_name = $context["news"]["img"];
            if (!empty($_FILES["img"]["name"])) {
                $upload_result = $this->filemanager->upload_media("img", $upload_path, "jpg|png|jpeg|webp");

                if ($upload_result["success"]) {
                    $uploaded_img_data = $upload_result["data"];
                    $current_img_name = $uploaded_img_data["file_name"];
                    $old_image_path = $upload_path . $context["news"]["img"];
                    $this->filemanager->delete_file($old_image_path);
                } else {
                    $this->notifier("notifier", "warning", [
                        "title" => $this->lang->line("notifier_warning"),
                        "description" => $this->lang->line("notifier_invalid_img_format")
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
                "video" => $video_link,
                "category_id" => $category_id,
                "author_id" => $author_id,
                "type" => $type,
                "status" => $status === "on",
                "img" => $current_img_name,
            ];

            $this->NewsModel->update($id, $data);

            $this->notifier("notifier", "success", [
                "title" => $this->lang->line("notifier_success"),
                "description" => $this->lang->line("notifier_success_update")
            ]);

            redirect(base_url("admin/news/$id/edit"));
        } else {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_empty_fields")
            ]);

            redirect(base_url("admin/news/$id/edit"));
        }
    }

    public function destroy($id)
    {
        $context["news"] = $this->NewsModel->find($id);

        if (empty($context["news"])) {
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_invalid_id")
            ]);

            redirect(base_url("admin/news"));
        }

        $upload_path = "./public/uploads/news/";
        $current_img_path = $upload_path . $context["news"]["img"];
        $this->filemanager->delete_file($current_img_path);

        $multi_images = json_decode($context["news"]["multi_img"], true);
        if (!empty($multi_images)) {
            foreach ($multi_images as $image) {
                $this->filemanager->delete_file($upload_path . $image);
            }
        }

        $this->NewsModel->delete($id);

        $this->notifier("notifier", "success", [
            "title" => $this->lang->line("notifier_sucess"),
            "description" => $this->lang->line("notifier_success_delete")
        ]);

        redirect(base_url("admin/news"));
    }

    public function status($id)
    {
        $status = $this->input->post("status");
        $data = [
            "status" => $status === "on"
        ];
        $this->NewsModel->update($id, $data);
        $this->notifier("notifier", "success", [
            "title" => $this->lang->line("notifier_success"),
            "description" => $this->lang->line("notifier_success_update")
        ]);
        redirect($_SERVER["HTTP_REFERER"] ?? base_url("admin/news"));
    }

    public function json()
    {
        $this->db
            ->select("news.*,
            admins.first_name as author_first_name,
            admins.last_name as author_last_name,
            admins.img as author_img,
            admins.role as author_role,
            categories.name_az as category_name_az,
            categories.name_en as category_name_en,
            categories.name_ru as category_name_ru")
            ->join("admins", "news.author_id = admins.id", "left")
            ->join("categories", "news.category_id = categories.id", "left");

        $columns = [
            "id",
            "title_az",
            "title_en",
            "title_ru",
            "img",
            "category_id",
            "author_id",
            "type",
            "status",
            "author_first_name",
            "author_last_name",
            "author_img",
            "author_role",
            "category_name_az",
            "category_name_en",
            "category_name_ru"
        ];

        $searchable_columns = [
            "title_az",
            "title_en",
            "title_ru",
            "category_id",
            "author_id",
            "type",
            "status",
            "author_first_name",
            "author_last_name",
            "author_role",
            "category_name_az",
            "category_name_en",
            "category_name_ru"
        ];

        $this->datatable_json("news", $columns, $searchable_columns);
    }
}
