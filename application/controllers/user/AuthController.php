<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends BASE_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect(base_url(), "location", 301);
	}

	public function register()
	{
		redirect(base_url(), "location", 301);
	}
}