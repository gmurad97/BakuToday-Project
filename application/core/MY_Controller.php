<?php

/*========== MY_CONTROLLER - Controller extending CI_Controller for common purposes ==========*/
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

/*========== BASE_CONTROLLER - Abstract template for creating controllers based on CI_Controller ==========*/
abstract class BASE_Controller extends MY_Controller
{
    abstract public function index();
}

/*========== CRUD_CONTROLLER - Abstract controller for implementing CRUD operations ==========*/
abstract class CRUD_Controller extends MY_Controller
{
    abstract public function index();
    abstract public function show($id);
    abstract public function create();
    abstract public function store();
    abstract public function edit($id);
    abstract public function update($id);
    abstract public function destroy($id);
}