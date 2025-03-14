<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HttpClient
{
    private const DEFAULT_USER_AGENT = "BakuTodayClient/1.0.0";
    private const DEFAULT_CONTENT_TYPE = "application/x-www-form-urlencoded";

    /**
     * @var MY_Controller $CI 
     */
    protected $CI;

    private $headers = [];

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->headers["User-Agent"] = self::DEFAULT_USER_AGENT;
    }

    public function get_headers()
    {
        return $this->headers;
    }

    public function set_header($key, $value)
    {
        $this->headers[$key] = $value;
    }

    private function clear_headers()
    {
        $this->headers = ["User-Agent" => self::DEFAULT_USER_AGENT];
    }

    public function format_headers($headers)
    {
        return array_map(fn($key, $value) => "$key: $value", array_keys($headers), array_values($headers));
    }

    private function request($url, $method, $data = [], $content_type = self::DEFAULT_CONTENT_TYPE)
    {
        $curl = curl_init();

        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_HTTPHEADER => $this->format_headers($this->headers)
        ];

        if (!empty($data) && !empty($content_type)) {
            $this->set_header("Content-Type", $content_type);

            switch ($content_type) {
                case "application/x-www-form-urlencoded":
                    $options[CURLOPT_POSTFIELDS] = http_build_query($data);
                    break;
                case "application/json":
                    $options[CURLOPT_POSTFIELDS] = json_encode($data);
                    break;
                default:
                    throw new UnexpectedValueException("Unsupported Content-Type.");
            }
        }

        curl_setopt_array($curl, $options);

        $response = curl_exec($curl);

        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $success = ($statusCode >= 200 && $statusCode < 300) ? true : false;
        $error = curl_error($curl);

        curl_close($curl);

        return [
            "success" => $success,
            "error" => $error ? "An error occurred, please try again later." : null,
            "body" => $response ?: null
        ];
    }

    public function get($url)
    {
        return $this->request($url, "GET");
    }

    public function post($url, $data = [], $content_type = self::DEFAULT_CONTENT_TYPE)
    {
        return $this->request($url, "POST", $data, $content_type);
    }

    public function patch($url, $data = [], $content_type = self::DEFAULT_CONTENT_TYPE)
    {
        return $this->request($url, "PATCH", $data, $content_type);
    }

    public function put($url, $data = [], $content_type = self::DEFAULT_CONTENT_TYPE)
    {
        return $this->request($url, "PUT", $data, $content_type);
    }

    public function delete($url, $data = [], $content_type = self::DEFAULT_CONTENT_TYPE)
    {
        return $this->request($url, "DELETE", $data, $content_type);
    }
}