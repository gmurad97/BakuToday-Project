<?php
defined('BASEPATH') or exit('No direct script access allowed');

interface CrudInterface
{
    public function index();
    public function show($id);
    public function store();
    public function update($id);
    public function destroy($id);
}