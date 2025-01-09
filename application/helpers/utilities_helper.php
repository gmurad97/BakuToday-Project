<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists("set_active_class")) {
    function set_active_class($expected_segments, $starts_with = false, $class_name = "active")
    {
        $CI =& get_instance();
        if (!isset($CI->uri)) {
            throw new RuntimeException("The \"uri\" property is not set in the current CI instance.");
        }
        $uri_string = $CI->uri->uri_string();
        foreach ($expected_segments as $expected_segment) {
            if (
                ($starts_with && str_starts_with($uri_string, $expected_segment)) ||
                ($uri_string === $expected_segment)
            ) {
                return $class_name;
            }
        }
        return "";
    }
}