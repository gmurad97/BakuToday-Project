<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("contact_navbar_menu");
        $this->load->view("user/contact", $context);
    }
}