<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property NewsModel $NewsModel
 */
class DashboardController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/NewsModel");
    }

    public function index()
    {
        $context["page_title"] = "Dashboard";
        // $context["last"] = $this->NewsModel->limit(5,"DESC");
        $this->load->view("admin/dashboard", $context);
    }
}