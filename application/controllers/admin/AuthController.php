<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property HttpClient $httpclient
 */
class AuthController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("httpclient");
    }

    public function index()
    {
        $context["page_title"] = $this->lang->line("login");
        $this->load->view("admin/auth/login", $context);
    }

    public function verify()
    {
        $recaptcha_response = $this->input->post('g-recaptcha-response');
        $recaptcha_result = $this->recaptcha->verify($recaptcha_response);
        if (!$recaptcha_result["success"]) {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("recaptcha_verification_failed_title"),
                "description" => $this->lang->line("recaptcha_verification_failed_description")
            ]);
            redirect(base_url("admin/login"));
        }

        $admin_username = trim($this->input->post("admin_username"), true);
        $admin_password = $this->input->post("admin_password", true);

        if (empty($admin_username) || empty($admin_password)) {
            $this->notifier("crud_alert", "warning", [
                "title" => $this->lang->line("empty_fields_alert_title"),
                "description" => $this->lang->line("empty_fields_alert_description")
            ]);
            redirect(base_url("admin/login"));
        }

        $admin = $this->AdminsModel->find(["username" => $admin_username]) ??
            $this->AdminsModel->find(["email" => $admin_username]);

        if ($admin && hash("sha256", $admin_password) === $admin["password"]) {
            if (!$admin["status"]) {
                $this->notifier("crud_alert", "info", [
                    "title" => $this->lang->line("account_disabled_alert_title"),
                    "description" => $this->lang->line("account_disabled_alert_description")
                ]);
                redirect(base_url('admin/login'));
            }

            $this->session->set_userdata("identity", [
                "id" => $admin["id"],
                "first_name" => $admin["first_name"],
                "last_name" => $admin["last_name"],
                "email" => $admin["email"],
                "username" => $admin["username"],
                "role" => $admin["role"],
                "img" => $admin["img"],
                "logged_in" => TRUE
            ]);
            redirect(base_url('admin/dashboard'));
        } else {
            $this->notifier("crud_alert", "danger", [
                "title" => $this->lang->line("login_failed_alert_title"),
                "description" => $this->lang->line("login_failed_alert_description")
            ]);
            redirect(base_url("admin/login"));
        }
    }

    public function logout()
    {
        if ($this->session->userdata("admin_credentials")) {
            $this->session->unset_userdata("admin_credentials");

            $this->notifier("crud_alert", "info", [
                "title" => $this->lang->line("logout_alert_title"),
                "description" => $this->lang->line("logout_alert_description")
            ]);
        }
        redirect(base_url("admin/login"));
    }
}