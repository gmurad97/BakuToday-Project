<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactsController extends BASE_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$context = [
			"page_title" => $this->lang->line("contacts")
		];
		$this->load->view("user/contacts", $context);
	}
}