<?php

class DashboardController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("admin/dashboard");
    }
}