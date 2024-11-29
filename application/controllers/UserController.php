<?php

class UserController extends CI_Controller
{
    public function index()
    {
        $this->load->view("user/home");
    }
    public function about()
    {
        $this->load->view("user/about");
    }
    public function contact()
    {
        $this->load->view("user/contact");
    }
}