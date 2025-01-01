<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ErrorController extends ERROR_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->sess_destroy();
        print_r("<pre>");
        print_r($this->session->all_userdata());

        /* $context["page_title"] = $this->lang->line("page_not_found");
        $current_route = $this->uri->uri_string();
        $this->output->set_status_header(404);
        $view_path = str_starts_with($current_route, "admin")
            ? "admin/errors/error_404"
            : "user/errors/error_404";
        $this->load->view($view_path, $context); */
    }
}