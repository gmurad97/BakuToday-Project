<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SessionCheck
{
    /**
     * @var MY_Controller $CI 
     */
    private $CI;
    private $route_type;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->route_type = $this->CI->uri->segment(1);
    }

    public function initialize($params)
    {
        if ($params["check_admin"] && $this->route_type === "admin") {
            $admin_session = $this->CI->session->userdata("admin_credentials");
            if (!empty($admin_session) && isset($admin_session["id"])) {

                $this->CI->load->model("admin/AdminsModel");
                $current_profile = $this->CI->AdminsModel->find($admin_session["id"]);

                if (!$current_profile["status"]) {
                    $this->CI->session->unset_userdata("admin_credentials");
                    $this->CI->alert_flashdata("crud_alert", "info", [
                        "title" => $this->CI->lang->line("account_disabled_alert_title"),
                        "description" => $this->CI->lang->line("account_disabled_alert_description")
                    ]);
                    redirect(base_url("admin/login"));
                }
            }
        }
    }
}