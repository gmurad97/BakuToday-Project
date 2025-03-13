<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HttpClient
{
    /**
     * @var MY_Controller $CI 
     */
    protected $CI;

    private $headers = [];

    public function __construct()
    {
        $this->CI =& get_instance();
        $http_client_user_agent = $this->CI->config->item("http_client_ua");
        $this->headers["User-Agent"] = $http_client_user_agent;
    }

    public function get_headers()
    {
        return $this->headers;
    }

    public function set_header($key, $value)
    {
        $this->headers[$key] = $value;
    }

    public function clear_headers()
    {
        $this->headers = [];
    }

    private function request($url, $method)
    {
        $curl = curl_init();

        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_TIMEOUT => 60
        ];

        // => post data = delete - patch - put - post
        // => get = get options




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
            "error" => $error ?: "null"
        ];
    }






}






class HttpClient12
{
    protected $baseUrl;
    protected $headers = [];

    public function __construct($baseUrl = '')
    {
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    public function request($method, $url, $data = [], $headers = [])
    {
        $ch = curl_init();
        $fullUrl = $this->baseUrl . '/' . ltrim($url, '/');

        $defaultHeaders = ['Content-Type: application/json'];
        $headers = array_merge($defaultHeaders, $this->headers, $headers);

        curl_setopt($ch, CURLOPT_URL, $fullUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        if (in_array(strtoupper($method), ['POST', 'PUT', 'PATCH', 'DELETE'])) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);

        curl_close($ch);

        return [
            'status' => $httpCode,
            'body' => json_decode($response, true),
            'error' => $error,
        ];
    }

    public function get($url, $headers = [])
    {
        return $this->request('GET', $url, [], $headers);
    }

    public function post($url, $data = [], $headers = [])
    {
        return $this->request('POST', $url, $data, $headers);
    }

    public function put($url, $data = [], $headers = [])
    {
        return $this->request('PUT', $url, $data, $headers);
    }

    public function patch($url, $data = [], $headers = [])
    {
        return $this->request('PATCH', $url, $data, $headers);
    }

    public function delete($url, $data = [], $headers = [])
    {
        return $this->request('DELETE', $url, $data, $headers);
    }

    public function options($url, $headers = [])
    {
        return $this->request('OPTIONS', $url, [], $headers);
    }
}

class HttpClient1
{
    private function format_headers($headers)
    {
        return array_map(fn($key) => "$key: {$headers[$key]}", array_keys($headers));
    }

    private function request($url, $method, $data = [], $content_type = "application/x-www-form-urlencoded")
    {
    }

    public function get($url, $data, $content_type)
    {
        return $this->request($url, "GET", $data, $content_type);
    }

    public function post($url, $data, $content_type)
    {
        return $this->request($url, "POST", $data, $content_type);
    }

    public function patch($url, $data, $content_type)
    {
        return $this->request($url, "PATCH", $data, $content_type);
    }

    public function put($url, $data, $content_type)
    {
        return $this->request($url, "PUT", $data, $content_type);
    }

    public function delete($url, $data, $content_type)
    {
        return $this->request($url, "DELETE", $data, $content_type);
    }
}