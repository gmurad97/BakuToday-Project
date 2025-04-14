<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HttpClient
{
    private const DEFAULT_USER_AGENT = "User-Agent: BakuTodayClient/1.0.0";

    private $headers = [];

    public function __construct()
    {
        $this->headers = [self::DEFAULT_USER_AGENT];
    }

    public function get_headers()
    {
        return $this->headers;
    }

    public function add_header($header)
    {
        $this->headers[] = $header;
    }

    public function clear_headers()
    {
        $this->headers = [self::DEFAULT_USER_AGENT];
    }

    private function request($url, $method, $data = "")
    {
        $curl = curl_init();

        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_HTTPHEADER => $this->headers
        ];

        if (!empty($data)) {
            $options[CURLOPT_POSTFIELDS] = $data;
        }

        curl_setopt_array($curl, $options);

        $response = curl_exec($curl);
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $success = $statusCode >= 200 && $statusCode < 300;

        curl_close($curl);

        return [
            "success" => $success,
            "body" => $response ?: null
        ];
    }

    public function get($url)
    {
        return $this->request($url, "GET");
    }

    public function post($url, $data = "")
    {
        return $this->request($url, "POST", $data);
    }
}