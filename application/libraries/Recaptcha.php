<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recaptcha
{
    private const API_SITEVERIFY_URL = "https://www.google.com/recaptcha/api/siteverify";

    /**
     * @var MY_Controller $CI 
     */
    protected $CI;
    private $site_key;
    private $secret_key;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->site_key = $this->CI->config->item("grecaptcha_site_key");
        $this->secret_key = $this->CI->config->item("grecaptcha_secret_key");
    }

    public function render($theme = "light", $size = "normal")
    {
        return <<<RECAPTCHA
        <div
        class="g-recaptcha"
        data-sitekey="$this->site_key"
        data-theme="$theme"
        data-size="$size">
        </div>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        RECAPTCHA;
    }

    public function verify($response)
    {
        if (empty($response)) {
            return [
                "success" => false,
                "error" => "Response cannot be empty"
            ];
        }

        $data = [
            "secret" => $this->secret_key,
            "response" => $response,
            "remoteip" => $_SERVER["REMOTE_ADDR"]
        ];

        $curl_handle = curl_init(self::API_SITEVERIFY_URL);
        curl_setopt_array($curl_handle, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/x-www-form-urlencoded"
            ]
        ]);

        $result = curl_exec($curl_handle);
        $http_code = curl_getinfo($curl_handle, CURLINFO_HTTP_CODE);

        if ($result === false) {
            $error = curl_error($curl_handle);
            curl_close($curl_handle);
            return [
                "success" => false,
                "error" => $error
            ];
        }

        if ($http_code !== 200) {
            curl_close($curl_handle);
            return [
                "success" => false,
                "error" => "Unexpected HTTP response code: $http_code"
            ];
        }

        $decoded_result = json_decode($result, true);
        curl_close($curl_handle);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                "success" => false,
                "error" => "Invalid JSON response"
            ];
        }

        return $decoded_result;
    }
}