<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*========== SYSTEN ROUTING ==========*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*========== ADMIN ROUTING ==========*/

$route["dashboard"]["GET"] = "admin/BaseController/index";


/*========== USER ROUTING ==========*/

