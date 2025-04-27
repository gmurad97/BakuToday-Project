<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoriesController extends BASE_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$context = [
			"page_title" => $this->lang->line("categories")
		];
		$this->load->view("user/categories", $context);
	}
}