<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LanguageLoader
{
    /**
     * @var MY_Controller $CI
     */
    protected $CI;

    private $language_session_key = [];
    private $default_language = [];
    private $route_type = "";

    public function initialize()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper("language");
        $this->language_session_key = $this->CI->config->item("language_session_key");
        $this->default_language = $this->CI->config->item("default_language");
        $this->route_type = $this->CI->uri->segment(1);
        $type = $this->route_type === "admin" ? "admin" : "user";
        $session_key = $this->language_session_key[$type];
        $this->set_language($session_key, $type);
    }

    public function set_language($session_key, $type)
    {
        $lang = $this->CI->session->userdata($session_key);
        if (!$lang) {
            $this->CI->session->set_userdata($session_key, $this->default_language[$type]);
            $lang = $this->default_language[$type];
        }
        $this->CI->lang->load("message", $lang);
    }
}