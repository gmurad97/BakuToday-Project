<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SessionGuard
{
    /**
     * @var MY_Controller $CI
     */
    protected $CI;

    private $uri_string;
    private $route_type;
    private $auth_session_key = "";
    private $login_routes = [];

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->uri_string = $this->CI->uri->uri_string();
        $this->route_type = str_contains($this->uri_string, "admin") ? "admin" : "user";









        $this->route_type = $this->CI->uri->segment(1);
        $this->current_route = $this->CI->uri->segment(2);
        $this->uri_string = $this->CI->uri->uri_string();
        $this->auth_session_key = $this->CI->config->item("auth_session_key");
        $this->login_routes = $this->CI->config->item("login_routes");
    }

    public function initialize($params)
    {
        if ($params["is_admin_guarded"] && $this->route_type === "admin") {
            $admin_session = $this->CI->session->userdata($this->auth_session_key);
            if (empty($admin_session) && !isset($admin_session["id"])) {
                if (!str_contains($this->uri_string, $this->login_routes["admin"])) {
                    $this->CI->notifier("notifier", "danger", [
                        "title" => $this->CI->lang->line("access_denied_alert_title"),
                        "description" => $this->CI->lang->line("access_denied_alert_description")
                    ]);
                    redirect(base_url("admin/login"));
                }
                return;
            }
            $this->CI->load->model("admin/AdminsModel");
            $current_profile = $this->CI->AdminsModel->find($admin_session["id"]);
            if (!$current_profile["status"] && isloginize) {
                $this->CI->session->unset_userdata($this->auth_session_key);
                $this->CI->notifier("notifier", "info", [
                    "title" => $this->CI->lang->line("account_disabled_alert_title"),
                    "description" => $this->CI->lang->line("account_disabled_alert_description")
                ]);
                redirect(base_url("admin/login"));
            }
        }
    }
}