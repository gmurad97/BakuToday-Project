<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdvertisingController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }

    public function show($id)
    {

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

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}