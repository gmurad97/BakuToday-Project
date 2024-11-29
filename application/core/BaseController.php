<?php
defined('BASEPATH') or exit('No direct script access allowed');

abstract class BaseController extends CI_Controller
{
    abstract public function index();
}