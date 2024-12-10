<?php

class DefaultController extends BASE_Controller{
    public function index(){
        $this->load->view("user/home");
    }
}