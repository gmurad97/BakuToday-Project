<?php

class LoginController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $context["page_title"] = "Login";
        $this->load->view("admin/auth/login", $context);
    }

    public function verify()
    {
        //post request and checks
        die();
    }
}