<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists("set_active_class")) {
    function set_active_class($expected_segments, $starts_with = false, $class_name = "active")
    {
        $CI =& get_instance();
        if (!isset($CI->uri))
            return "";
        $uri_string = $CI->uri->uri_string();
        foreach ($expected_segments as $expected_segment) {
            if ($starts_with && str_starts_with($uri_string, $expected_segment))
                return $class_name;
            if ($uri_string === $expected_segment)
                return $class_name;
        }
        return "";
    }
}

/******************************** */



/* if (!function_exists("assets")) {
    function assets($type = "user", $path = "")
    {
        $allowed_types = ["admin", "user", "uploads"];
        if (in_array($type, $allowed_types)) {
            return base_url("");
        }
        return base_url("public/user/assets");
    }
}
 */
