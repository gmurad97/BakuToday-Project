<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $context = [
            "page_title" => $this->lang->line("login")
        ];
        $this->load->view("user/login", $context);
    }

    public function register()
    {
        $context = [
            "page_title" => $this->lang->line("register")
        ];
        $this->load->view("user/register", $context);
    }
}
