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
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_recaptcha_verification_failed")
            ]);
            redirect(base_url("admin/login"));
        }

        $admin_username = trim($this->input->post("admin_username", true));
        $admin_password = $this->input->post("admin_password", true);

        if (empty($admin_username) || empty($admin_password)) {
            $this->notifier("notifier", "warning", [
                "title" => $this->lang->line("notifier_warning"),
                "description" => $this->lang->line("notifier_empty_fields")
            ]);
            redirect(base_url("admin/login"));
        }

        $admin = $this->AdminsModel->find(["username" => $admin_username]) ?? $this->AdminsModel->find(["email" => $admin_username]);

        if ($admin && hash("sha256", $admin_password) === $admin["password"]) {
            if (!$admin["status"]) {
                $this->notifier("notifier", "info", [
                    "title" => $this->lang->line("notifier_info"),
                    "description" => $this->lang->line("notifier_account_disabled")
                ]);
                redirect(base_url('admin/login'));
            }

            $admin_auth_session_key = $this->config->item("admin_auth_session_key");

            $this->session->set_userdata($admin_auth_session_key, [
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
            $this->notifier("notifier", "danger", [
                "title" => $this->lang->line("notifier_error"),
                "description" => $this->lang->line("notifier_login_failed")
            ]);
            redirect(base_url("admin/login"));
        }
    }

    public function logout()
    {
        $admin_auth_session_key = $this->config->item("admin_auth_session_key");
        if ($this->session->userdata($admin_auth_session_key)) {
            $this->session->unset_userdata($admin_auth_session_key);
            $this->notifier("notifier", "info", [
                "title" => $this->lang->line("notifier_info"),
                "description" => $this->lang->line("notifier_logout")
            ]);
        }
        redirect(base_url("admin/login"));
    }
}
