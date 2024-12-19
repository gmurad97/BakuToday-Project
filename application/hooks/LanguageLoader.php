<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LanguageLoader
{
    private const DEFAULT_LANGUAGE = "en";

    /**
     * @var MY_Controller $CI
     */
    private $CI;

    private $route_type;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->route_type = $this->CI->uri->segment(1);
    }

    public function initialize()
    {
        $this->CI->load->helper("language");
        $session_key = ($this->route_type === "admin") ? "admin_lang" : "user_lang";
        $this->set_language($session_key);
    }

    public function set_language($session_key)
    {
        $lang = $this->CI->session->userdata($session_key);
        if (!$lang) {
            $this->CI->session->set_userdata($session_key, self::DEFAULT_LANGUAGE);
            $lang = self::DEFAULT_LANGUAGE;
        }
        $this->CI->lang->load("message", $lang);
    }







}