<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthorController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user/AdminsModel");
        $this->load->model("user/NewsModel");
    }

    public function index()
    {
        redirect(base_url(), "location", 301);
    }

    public function show($id)
    {
        $admin = $this->AdminsModel->find(["id" => $id, "status" => true]);

        if (empty($admin)) {
            redirect(base_url(), "location", 301);
            return;
        }

        $posts = $this->NewsModel->with_author_category();
        $posts_by_admin = array_filter($posts, fn($post) => $post['author_id'] == $id);

        $context = [
            "page_title" => $this->lang->line("author"),
            "admin" => $admin,
            "posts" => $posts_by_admin,
            "posts_count" => count($posts_by_admin),
            "breadcrumbs" => [
                [
                    "title" => $this->lang->line("home"),
                    "url" => base_url(),
                    "active" => false
                ],
                [
                    "title" => $this->lang->line("author"),
                    "url" => base_url('author'),
                    "active" => true
                ]
            ]
        ];

        $this->load->view("user/author", $context);
    }
}
