<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recaptcha {
    private $site_key;
    private $secret_key;

    public function __construct() {
        $this->site_key = '6LemsaIqAAAAAAsZWjoDm9t6hrO5u1mLluHF2kI9'; 
        $this->secret_key = '6LemsaIqAAAAAADacLjUwmmLLHVLrwS824-7Ygxz';
    }

    public function render($theme = 'light', $size = 'normal') {
        return '<div class="g-recaptcha" data-sitekey="' . $this->site_key . '" data-theme="' . $theme . '" data-size="' . $size . '"></div>';
    }
    

    public function verify($response) {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => $this->secret_key,
            'response' => $response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        return json_decode($result);
    }
}
