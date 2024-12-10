<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CategoriesModel $CategoriesModel
 */
class CategoriesController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/CategoriesModel");
    }

    public function index()
    {
        $context["page_title"] = "All News";
        $context["news_array"] = $this->CategoriesModel->all();
/*         print_r("<pre>");
        print_r($context);
        die(); */
        $this->load->view("admin/categories/list", $context);
    }

    public function show($id)
    {

    }

    public function create()
    {
        $context["page_title"] = "Add categor";
        $context["categories_collection"] = $this->CategoriesModel->all();
        $this->load->view("admin/categories/create", $context);
    }

    public function store()
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}