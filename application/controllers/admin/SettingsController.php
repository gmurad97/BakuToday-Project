<?php

/**
 * @property SettingsModel $SettingsModel
 */
class SettingsController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/SettingsModel");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("admin_settings_edit_page_title");
        $context["settings"] = json_decode($this->SettingsModel->first()["collection"]);

        if ($context["settings"]) {
            $this->load->view("admin/settings/edit", $context);
        } else {
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

        $current_db_settings = $this->SettingsModel->first();

        if ($current_db_settings) {
            $this->SettingsModel->update($current_db_settings["uid"], $data);

            $this->alert_flashdata("settings_alert", "success", [
                "title" => $this->lang->line("admin_settings_edit_success_alert_title"),
                "description" => $this->lang->line("admin_settings_edit_success_alert_description")
            ]);

            redirect(base_url("admin/settings"));
        } else {
            redirect(base_url("admin/dashboard"));
        }
    }
}