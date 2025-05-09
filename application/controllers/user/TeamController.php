<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TeamController extends BASE_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$context = [
			"page_title" => $this->lang->line("team")
		];
		$this->load->view("user/team", $context);
	}
}