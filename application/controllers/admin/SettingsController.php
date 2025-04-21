<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingsController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/SettingsModel");
        if (!$this->rolesmanager->has_access("admin")) {
            $this->lang->load("message", $this->get_admin_language());
            $this->notifier("notifier", "danger", [
                "title" => $this->lang->line("notifier_danger"),
                "description" => $this->lang->line("notifier_access_denied")
            ]);
            redirect(base_url("admin/dashboard"));
        }
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("settings");
        $settings = $this->SettingsModel->find([]);
        if ($settings) {
            $context["settings"] = json_decode($settings["collection"], false);
            $this->load->view("admin/settings/edit", $context);
        } else {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_settings_not_configured")
            ]);

            redirect(base_url("admin/dashboard"));
        }
    }

    public function update()
    {
        $maintenance_mode = $this->input->post("maintenance_mode", true);
        $snow_mode = $this->input->post("snow_mode", true);

        $data = [
            "collection" => json_encode([
                "maintenance_mode" => $maintenance_mode === "on",
                "snow_mode" => $snow_mode === "on"
            ])
        ];

        $current_db_settings = $this->SettingsModel->find([]);

        if ($current_db_settings) {
            $this->SettingsModel->update($current_db_settings["uid"], $data);

            $this->notifier("notifier", "success", [
                "title" => $this->lang->line("notifier_success"),
                "description" => $this->lang->line("notifier_success_update")
            ]);

            redirect(base_url("admin/settings"));
        } else {
            redirect(base_url("admin/dashboard"));
        }
    }
}