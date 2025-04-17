<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/AdminsModel");
        $this->load->model("admin/AdvertisingModel");
        $this->load->model("admin/CategoriesModel");
        $this->load->model("admin/NewsModel");
    }

    public function index()
    {
        $context = [
            "page_title" => $this->lang->line("dashboard"),
            "statistics" => [
                "admins_count" => $this->AdminsModel->count(),
                "advertising_count" => $this->AdvertisingModel->count(),
                "categories_count" => $this->CategoriesModel->count(),
                "news_count" => $this->NewsModel->count()
            ]
        ];
        $this->load->view("admin/index", $context);
    }
}