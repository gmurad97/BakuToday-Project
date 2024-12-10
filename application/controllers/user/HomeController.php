<?php

class HomeController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $context["page_title"] = "Home";
        $this->load->view("user/home",$context);
    }
}