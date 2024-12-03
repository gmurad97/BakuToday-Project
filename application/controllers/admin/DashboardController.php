<?php

class DashboardController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $context["page_title"] = "Dashboard";
        $this->load->view("admin/dashboard", $context);
    }
}