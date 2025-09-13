<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoriesController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user/NewsModel");
        $this->load->model("user/CategoriesModel");
    }

    public function index()
    {
        $context = [
            "page_title" => $this->lang->line("categories"),
            "breadcrumbs" => [
                [
                    "title" => $this->lang->line("home"),
                    "url" => base_url(),
                    "active" => false
                ],
                [
                    "title" => $this->lang->line("categories"),
                    "url" => base_url('categories'),
                    "active" => true
                ]
            ]
        ];
        $this->load->view("user/categories", $context);
    }

    public function show($id)
    {
        $this->load->model('user/NewsModel');

        $news = $this->NewsModel->all("DESC", ["category_id" => $id, "status" => 1]);
        $category = $this->CategoriesModel->find(["id" => $id]);

        if (empty($news)) {
            redirect(base_url(), 'location', 301);
            return;
        }
        $context = [
            "page_title" => $this->lang->line("categories"),
            "breadcrumbs" => [
                [
                    "title" => $this->lang->line("home"),
                    "url" => base_url(),
                    "active" => false
                ],
                [
                    "title" => $this->lang->line("categories"),
                    "url" => base_url('categories'),
                    "active" => true
                ]
            ],
            "news_list" => $news,
            "category" => $category,
            "lang" => $this->get_user_language()
        ];

        $this->load->view("user/category_news", $context);
    }
}
