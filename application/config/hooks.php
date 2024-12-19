<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/userguide3/general/hooks.html
|
*/

$hook["post_controller_constructor"][] = [
    "class" => "LanguageLoader",
    "function" => "initialize",
    "filename" => "LanguageLoader.php",
    "filepath" => "hooks"
];

$hook["post_controller_constructor"][] = [
    "class" => "SessionCheck",
    "function" => "initialize",
    "filename" => "SessionCheck.php",
    "filepath" => "hooks",
    "params" => [
        "check_admin" => true,
        "check_user" => false
    ]
];

/* $hook["post_controller"][] = [
    "class" => "DebugPanel",
    "function" => "renderDebugPanel",
    "filename" => "DebugPanel.php",
    "filepath" => "hooks"
]; */