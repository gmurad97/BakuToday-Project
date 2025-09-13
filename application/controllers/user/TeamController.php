<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TeamController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user/AdminsModel");
    }

    public function index()
    {
        $context = [
            "page_title" => $this->lang->line("team"),
            "admins" => $this->AdminsModel->all("DESC", ["status" => true]),
            "breadcrumbs" => [
                [
                    "title" => $this->lang->line("home"),
                    "url" => base_url(),
                    "active" => false
                ],
                [
                    "title" => $this->lang->line("team"),
                    "url" => base_url('team'),
                    "active" => true
                ]
            ]
        ];
        $this->load->view("user/team", $context);
    }
}
