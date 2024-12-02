<?php



class TestCoreController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("TestModel");
    }

    public function index(){
        $this->load->view("admin/dashboard");
    }
}