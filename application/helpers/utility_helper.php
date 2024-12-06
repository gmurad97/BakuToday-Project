<?php
defined('BASEPATH') or exit('No direct script access allowed');

if(!function_exists("set_active_class")){
    //checker repeater
    //add start with mode and endwith mode centered mode search mode
}




if (!function_exists("set_active_class")) {
    function set_active_class($segments = "", $class_name = "active")
    {
        $CI =& get_instance();
        if (isset($CI->uri)) {

            if ($segments === $CI->uri->uri_string()) {
                return $class_name;
            }


        }
        return "";
    }
}