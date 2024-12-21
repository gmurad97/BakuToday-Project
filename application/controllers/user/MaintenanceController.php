<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MaintenanceController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user/SettingsModel");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("maintenance");
        $context["settings"] = json_decode($this->SettingsModel->first()["collection"], false);
        if ($context["settings"]->maintenance_mode && empty($this->session->userdata("admin_credentials"))) {
            $this->load->view("user/maintenance", $context);
        } else {
            redirect(base_url("home"));
        }
    }
}