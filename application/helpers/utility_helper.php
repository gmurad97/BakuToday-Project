<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists("set_active_class")) {
    function set_active_class($expected_segment, $starts_with = false, $class_name = "active")
    {
        $CI =& get_instance();
        if (!isset($CI->uri))
            return "";
        $uri_string = $CI->uri->uri_string();
        if ($starts_with)
            return str_starts_with($uri_string, $expected_segment) ? $class_name : "";
        return $uri_string === $expected_segment ? $class_name : "";
    }
}