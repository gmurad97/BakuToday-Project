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
        $data = [
            "title_az" => $this->input->post('title_az'),
            "title_en" => $this->input->post('title_en'),
            "title_ru" => $this->input->post('title_ru'),
            "short_description_az" => $this->input->post('short_description_az'),
            "short_description_en" => $this->input->post('short_description_en'),
            "short_description_ru" => $this->input->post('short_description_ru'),
            "long_description_az" => $this->input->post('long_description_az'),
            "long_description_en" => $this->input->post('long_description_en'),
            "long_description_ru" => $this->input->post('long_description_ru'),
            "img" => $this->input->post('img'), // path to the image
            "multi_img" => json_encode($this->input->post('multi_img')), // assuming it's an array
            "category_id" => $this->input->post('category_id'),
            "author_id" => $this->input->post('author_id'),
            "type" => $this->input->post('type'),
            "status" => $this->input->post('status') ?: 1, // default to 1 if not set
        ];

        $this->NewsModel->create($data);
        redirect('admin/news'); // Redirect to list after save
    }

    public function edit($id)
    {
        $context["page_title"] = "News VAR Edit";
        $context["news_data"] = $this->NewsModel->find($id);
        $this->load->view("admin/news/edit", $context);
    }

    public function update($id)
    {
        $data = [
            "title_az" => $this->input->post('title_az'),
            "title_en" => $this->input->post('title_en'),
            "title_ru" => $this->input->post('title_ru'),
            "short_description_az" => $this->input->post('short_description_az'),
            "short_description_en" => $this->input->post('short_description_en'),
            "short_description_ru" => $this->input->post('short_description_ru'),
            "long_description_az" => $this->input->post('long_description_az'),
            "long_description_en" => $this->input->post('long_description_en'),
            "long_description_ru" => $this->input->post('long_description_ru'),
            "img" => $this->input->post('img'),
            "multi_img" => json_encode($this->input->post('multi_img')),
            "category_id" => $this->input->post('category_id'),
            "author_id" => $this->input->post('author_id'),
            "type" => $this->input->post('type'),
            "status" => $this->input->post('status') ?: 1, // default to 1 if not set
        ];

        $this->NewsModel->update($id, $data);
        redirect('admin/news'); // Redirect to list after update
    }

    public function destroy($id)
    {
        $this->NewsModel->delete($id);
        redirect('admin/news'); // Redirect to list after delete
    }
}
