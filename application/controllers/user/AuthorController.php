<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthorController extends BASE_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$context = [
			"page_title" => $this->lang->line("author")
		];
		$this->load->view("user/author", $context);
	}
}