<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/SettingsModel");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("contact");
        $context["settings"] = json_decode($this->SettingsModel->first()["collection"], false);
        $this->load->view("user/contact", $context);
    }
}