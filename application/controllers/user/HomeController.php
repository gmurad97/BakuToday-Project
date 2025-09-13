<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("user/index");
    }

    public function home()
    {
        redirect(base_url(), "location", 301);
    }
}
