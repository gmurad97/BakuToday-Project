<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recaptcha
{
    private $site_key;
    private $secret_key;

    /**
     * @var MY_Controller $CI 
     */
    protected $CI;

    public function __construct()
    {
        /**
         * @var MY_Controller $CI 
         */
        $this->CI =& get_instance();
        /* $this->CI->config->item('google_recaptcha_site_key'); */
        //google_recaptcha_secret_key
            $this->site_key = '6LeL9KoqAAAAAOYj484YU3w_cfRODTVrl9U7XXTy';
        $this->secret_key = '6LeL9KoqAAAAANJxOJT8hNLK87MKyPsK4eycGOpe';
    }

    public function render($theme = 'light', $size = 'normal')
    {
        return '<div class="g-recaptcha" data-sitekey="' . $this->site_key . '" data-theme="' . $theme . '" data-size="' . $size . '"></div>';
    }


    public function verify($response)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => $this->secret_key,
            'response' => $response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        return json_decode($result);
    }
}
