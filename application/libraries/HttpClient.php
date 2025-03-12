<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HttpClient
{
    private $allowed_methods = ["GET", "POST", "PUT", "PATCH", "DELETE"];
    private $headers = [];

    public function __construct()
    {
        $this->headers[""]
    }

    public function set_header($key, $value)
    {
        $this->headers[$key] = $value;
    }

    public function clear_headers()
    {
        $this->headers = [];
    }
}




class bd
{


    private function request($url, $method, $data = [], $content_type = "application/x-www-form-urlencoded")
    {
        $curl = curl_init();
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_HTTPHEADER => $this->format_headers($this->headers)
        ];

        switch ($content_type) {
            case "application/x-www-form-urlencoded":
                $options[CURLOPT_POSTFIELDS] = http_build_query($data);
                break;
            case "application/json":
                $options[CURLOPT_POSTFIELDS] = json_encode($data);
                break;
            default:
                throw new BadFunctionCallException("Unsupported Content-Type.");
        }

        $this->set_header("Content-Type", $content_type);

        curl_setopt_array($curl, $options);

        $response = curl_exec($curl);
        $error = curl_error($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        return [
            "status" => $http_code,
            "response" => $response,
            "error" => $error ?: null
        ];
    }

    private function format_headers($headers)
    {
        return array_map(fn($key, $value) => "$key: $value", $headers);
    }

    public function get($url)
    {
        return $this->request($url, "GET");
    }

    public function post($url, $data = [], $content_type = "application/x-www-form-urlencoded")
    {
        return $this->request($url, "POST", $data, $content_type);
    }

    public function patch($url, $data = [], $content_type = "application/x-www-form-urlencoded")
    {
        return $this->request($url, "PATCH", $data, $content_type);
    }

    public function put($url, $data = [], $content_type = "application/x-www-form-urlencoded")
    {
        return $this->request($url, "PUT", $data, $content_type);
    }

    public function delete($url, $data = [], $content_type = "application/x-www-form-urlencoded")
    {
        return $this->request($url, "DELETE", $data, $content_type);
    }
}