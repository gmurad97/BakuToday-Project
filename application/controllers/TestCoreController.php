<?php


/**
 * @property TestModel $TestModel
 */
class TestCoreController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("TestModel");
    }

    public function index(){
        print_r("JOPA");
        $this->TestModel->all();
    }
}