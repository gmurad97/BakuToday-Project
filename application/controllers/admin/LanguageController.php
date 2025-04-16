<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LanguageController extends MY_Controller
{
    /**
     * @var MY_Controller $CI
     */
    protected $CI;

    private $language_session_key = [];
    private $default_language = [];
    private $languages = [];

    public function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
        $this->language_session_key = $this->CI->config->item("language_session_key");
        $this->default_language = $this->CI->config->item("default_language");
        $this->languages = $this->CI->config->item("languages");
    }

    public function index($language = "")
    {
        $available_languages = array_keys($this->languages);

        $selected_language = in_array(strtolower($language), $available_languages)
            ? strtolower($language)
            : $this->default_language;

        $this->session->set_userdata($this->language_session_key["admin"], $selected_language);

        redirect($_SERVER["HTTP_REFERER"] ?? base_url("admin/dashboard"));
    }
}