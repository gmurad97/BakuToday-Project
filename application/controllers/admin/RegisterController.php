<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("admin/auth/register");
    }

    public function store()
    {

    }
}