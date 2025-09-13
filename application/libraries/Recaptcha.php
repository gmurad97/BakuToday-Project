<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReCaptcha
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
        $current_admin_language = $this->CI->get_admin_language();
        return <<<RECAPTCHA
        <style>
        iframe[title="reCAPTCHA"] {
            width: 100% !important;
            height: 76px !important;
            border: 1px solid #172340;
            border-radius: 0.25rem;
        }
        </style>
        <div
        class="g-recaptcha"
        data-sitekey="$this->site_key"
        data-theme="$theme"
        data-size="$size">
        </div>
        <script src="https://www.google.com/recaptcha/api.js?hl=$current_admin_language" async defer></script>
        RECAPTCHA;
    }

    public function verify($response)
    {
        if (empty($response)) {
            return [
                "success" => false,
                "error" => "Response cannot be empty."
            ];
        }

        $data = [
            "secret" => $this->secret_key,
            "response" => $response,
            "remoteip" => $_SERVER["REMOTE_ADDR"]
        ];

        $http_client = new HttpClient();
        $result = $http_client->post(self::API_SITEVERIFY_URL, $data);

        if (!$result["body"]) {
            return [
                "success" => false,
                "error" => $result["error"] ?? "Unknown error."
            ];
        }

        $decoded_result = json_decode($result["body"], true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                "success" => false,
                "error" => "Invalid JSON response"
            ];
        }

        return $decoded_result;
    }
}
