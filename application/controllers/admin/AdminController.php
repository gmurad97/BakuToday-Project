<?php

class AdminController extends CI_Controller{
    public function index(){
        redirect(base_url("admin/login"));
    }
}