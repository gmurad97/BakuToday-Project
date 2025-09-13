<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AboutController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $context = [
            "page_title" => $this->lang->line("about"),
            "breadcrumbs" => [
                [
                    "title" => $this->lang->line("home"),
                    "url" => base_url(),
                    "active" => false
                ],
                [
                    "title" => $this->lang->line("about"),
                    "url" => base_url('about'),
                    "active" => true
                ]
            ]
        ];
        $this->load->view("user/about", $context);
    }
}
