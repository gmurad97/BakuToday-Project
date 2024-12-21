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
        $this->load->model("admin/SettingsModel");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("dashboard");
        $context["statistics"] = [
            "admins_count" => $this->AdminsModel->count(),
            "advertising_count" => $this->AdvertisingModel->count(),
            "categories_count" => $this->CategoriesModel->count(),
            "news_count" => $this->NewsModel->count()
        ];
        $context["settings"] = json_decode($this->SettingsModel->first()["collection"], false);
        $context["news_last_collection"] = $this->NewsModel->last(4, true);
        $this->load->view("admin/dashboard", $context);
    }
}