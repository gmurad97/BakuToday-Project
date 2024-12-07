<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property NewsModel $NewsModel
 */
class NewsController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/NewsModel");
    }

    public function index()
    {
        $context["page_title"] = "All News";
        $context["news_array"] = $this->NewsModel->all();
/*         print_r("<pre>");
        print_r($context);
        die(); */
        $this->load->view("admin/news/list", $context);
    }

    public function show($id)
    {
        $context["page_title"] = "News VAR Detail";
        $context["news_data"] = $this->NewsModel->find($id);
        $this->load->view("admin/news/detail", $context);
    }

    public function create()
    {
        $context["page_title"] = "Add News";
        $this->load->view("admin/news/create", $context);
    }

    public function store()
    {
        $this->input->post();
        $data = [
            "ucfirst" => "ml"
        ];
        $this->NewsModel->create($data);
    }

    public function edit($id)
    {
        $context["page_title"] = "News VAR Edit";
        $context["news_data"] = $this->NewsModel->find($id);
        $this->load->view("admin/news/edit", $context);
    }

    public function update($id)
    {
        $this->input->post();
        $data = [
            "ucfirst" => "ml"
        ];
        $this->NewsModel->create($data);
    }

    public function destroy($id)
    {
        $this->NewsModel->delete($id);
    }
}