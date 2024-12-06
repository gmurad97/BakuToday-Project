<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        
        // Получаем выбранный язык из сессии
        $siteLang = $ci->session->userdata('site_lang');
        
        // Если язык не найден в сессии, устанавливаем язык по умолчанию (например, 'en')
        if (!$siteLang) {
            $siteLang = 'en';
        }

        // Определяем, на какой части сайта мы находимся (админка или пользовательская часть)
        $uriSegment = $ci->uri->segment(1); // Получаем первый сегмент URI (например, 'admin' или 'user')
        
        // Загружаем соответствующий файл языка
        if ($uriSegment == 'admin') {
            $languagePath = 'admin/' . $siteLang;
        } else {
            $languagePath = 'user/' . $siteLang;
        }

        // Проверяем, существует ли файл языка, и загружаем его
        if (file_exists(APPPATH . 'language/' . $languagePath . '/message_lang.php')) {
            $ci->lang->load('message', $languagePath);
        } else {
            // Если файл не найден, загружаем английский как язык по умолчанию
            $ci->lang->load('message', 'user/en');
        }
    }
}
