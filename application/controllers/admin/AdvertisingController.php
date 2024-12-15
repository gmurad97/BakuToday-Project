<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 * @property AdvertisingModel $AdvertisingModel
 */
class AdvertisingController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/AdvertisingModel");
    }

    public function index()
    {
        
    }

    public function show($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);
        $this->load->view("admin/advertising/detail", $context);
    }

    public function create()
    {
        $context["page_title"] = "Add Ads";
        $this->load->view("admin/advertising/create", $context);
    }

    public function store()
    {

    }

    public function edit($id)
    {
        $context["advertising"] = $this->AdvertisingModel->find($id);
        $this->load->view("admin/advertising/edit", $context);
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}