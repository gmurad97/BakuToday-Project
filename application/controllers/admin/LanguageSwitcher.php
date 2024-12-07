<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LanguageSwitcher extends BASE_Controller
{
    public function __construct() {
        parent::__construct();
    }

    function switchLang($language = "") {
        // Список доступных языков, добавьте в этот список нужные языки
        $available_languages = ['en', 'fr', 'de', 'es'];

        // Если язык не передан, устанавливаем по умолчанию 'en'
        if ($language == "" || !in_array($language, $available_languages)) {
            $language = 'en';
        }

        // Устанавливаем язык в сессии
        $this->session->set_userdata('site_lang', $language);

        // Перенаправляем на предыдущую страницу или на главную, если HTTP_REFERER пуст
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : base_url();
        redirect($referer);
    }
    function index(){
        //заглушка
    }
}
