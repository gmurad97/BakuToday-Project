<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DefaultController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user/SettingsModel");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("home");
        $context["settings"] = json_decode($this->SettingsModel->first()["collection"], false);
        $this->load->view("user/home", $context);
    }
}