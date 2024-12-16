<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LanguageController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($language = "")
    {
        $available_languages = ["az", "en", "ru"];
        $default_language = "en";

        $selected_language = in_array(strtolower($language), $available_languages)
            ? strtolower($language)
            : $default_language;

        $this->session->set_userdata("user_lang", $selected_language);

        redirect($_SERVER["HTTP_REFERER"] ?? base_url());
    }
}