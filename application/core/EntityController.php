<?php
defined('BASEPATH') or exit('No direct script access allowed');

abstract class EntityController extends CI_Controller
{
    abstract public function index();
    abstract public function show($id);
    abstract public function store();
    abstract public function edit($id);
    abstract public function update($id);
    abstract public function delete($id);
}