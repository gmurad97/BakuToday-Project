<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogController extends BASE_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect(base_url(), "location", 301);
	}
}