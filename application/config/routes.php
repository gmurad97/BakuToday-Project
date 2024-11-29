<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*========== CORE ROUTES ==========*/
$route["default_controller"] = "UserController";
$route["404_override"] = "ErrorController";
$route["translate_uri_dashes"] = FALSE;
/*========== USER ROUTES ==========*/
$route["home"] = "UserController/index";
$route["about"] = "UserController/about";
$route["contact"] = "UserController/contact";
/*========== ADMIN ROUTES ==========*/










/*========== ADMIN ROUTING ==========*/



// /* /*EXAMPLE REST API ROUTING PLEASE USE THIS IT!!! */
// $route["category"]["GET"] = "Controller/index"; // Action и форма отображения: Список категорий
// $route["category/(:num)"]["GET"] = "Controller/show/$1"; // Action и форма отображения: Показ конкретной категории
// $route["category"]["POST"] = "Controller/store"; // Action: Создание новой категории
// $route["category/(:num)/update"]["POST"] = "Controller/update/$1"; // Action: Обновление категории через POST
// $route["category/(:num)/edit"]["GET"] = "Controller/edit/$1"; // Форма отображения: Форма редактирования категории
// $route["category/(:num)/delete"]["POST"] = "Controller/destroy/$1"; // Action: Удаление категории через POST


/*========== USER ROUTING ==========*/

