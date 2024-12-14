<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LanguageLoader
{
    const DEFAULT_LANGUAGE = "en";
    public function initialize()
    {
        /**
         * @var MY_Controller $CI
         */
        $CI =& get_instance();
        $CI->load->helper("language");

        $current_uri = $CI->uri->segment(1);
        $session_key = ($current_uri === "admin") ? "admin_lang" : "user_lang";
        $this->setLanguage($CI, $session_key);
    }

    private function setLanguage($CI, $session_key)
    {
        $lang = $CI->session->userdata($session_key);
        if (!$lang) {
            $CI->session->set_userdata($session_key, self::DEFAULT_LANGUAGE);
            $lang = self::DEFAULT_LANGUAGE;
        }
        $CI->lang->load("message", $lang);
    }
}