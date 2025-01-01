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
    "class" => "SessionGuard",
    "function" => "initialize",
    "filename" => "SessionGuard.php",
    "filepath" => "hooks",
    "params" => [
        "is_admin_guarded" => true,
        "is_user_guarded" => false
    ]
];