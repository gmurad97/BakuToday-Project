<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewsController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user/NewsModel');
        $this->load->model('user/AdminsModel');
        $this->load->model('user/CategoriesModel');
    }

    public function index()
    {
        redirect(base_url(), "location", 301);
    }

    public function show($id)
    {
        $news = $this->NewsModel->find(['id' => $id, 'status' => 1]);

        if (!$news) {
            redirect(base_url('news'), 'location', 301);
            return;
        }

        $author = $this->AdminsModel->find(['id' => $news['author_id']]);

        $category = $this->CategoriesModel->find(['id' => $news['category_id']]);

        $context = [
            "page_title" => $this->lang->line("news"),
            "breadcrumbs" => [
                [
                    "title" => $this->lang->line("home"),
                    "url" => base_url(),
                    "active" => false
                ],
                [
                    "title" => $this->lang->line("news"),
                    "url" => base_url('news'),
                    "active" => false
                ]
            ],
            "news" => $news,
            "author" => $author,
            "category" => $category,
            "lang" => $this->get_user_language()
        ];

        $this->load->view("user/news_detail", $context);
    }
}
