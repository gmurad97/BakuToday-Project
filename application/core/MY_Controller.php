<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*========== MY_CONTROLLER - Controller extending CI_Controller for common purposes ==========*/
/**
 * @property CI_Benchmark $benchmark
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Lang $lang
 * @property CI_Session $session
 * @property CI_DB $db
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Input $input
 * @property CI_Loader $load
 * @property CI_Log $log
 * @property CI_Profiler $profiler
 * @property CI_Router $router
 * @property CI_Output $output
 * @property CI_Session $session
 * @property CI_URI $uri
 * @property CI_User_agent $user_agent
 * @property CI_Form_validation $form_validation
 * @property CI_FTP $ftp
 * @property CI_Hooks $hooks
 * @property CI_Image_lib $image_lib
 * @property CI_Encryption $encryption
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Unit_test $unit_test
 * @property CI_Zip $zip
 * @property CI_Security $security
 * @property CI_Cart $cart
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Upload $upload
 */
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

/*========== BASE_Controller - Abstract template for creating controllers based on MY_Controller ==========*/
abstract class BASE_Controller extends MY_Controller
{
    abstract public function index();
}




abstract class ERROR_Controller extends MY_Controller
{
    abstract function index();
}




/*========== CRUD_Controller - Abstract controller for implementing CRUD operations ==========*/
abstract class CRUD_Controller extends MY_Controller
{
    abstract public function index();
    abstract public function show($id);
    abstract public function create();
    abstract public function store();
    abstract public function edit($id);
    abstract public function update($id);
    abstract public function destroy($id);

    public function alert_flashdata($alert_name, $alert_type, $alert_message)
    {
        $alert_types = [
            "info" => ["class" => "alert-info", "icon" => "alert-circle"],
            "success" => ["class" => "alert-success", "icon" => "check-circle"],
            "warning" => ["class" => "alert-warning", "icon" => "alert-octagon"],
            "danger" => ["class" => "alert-danger", "icon" => "alert-triangle"],
        ];

        $alert_type = strtolower($alert_type) ?? "info";
        $alert_class = $alert_types[$alert_type]["class"];
        $alert_icon = $alert_types[$alert_type]["icon"];

        $this->session->set_flashdata($alert_name, [
            'alert_class' => $alert_class,
            'alert_icon' => $alert_icon,
            'alert_message' => [
                "title" => $alert_message["title"],
                "description" => $alert_message["description"]
            ]
        ]);
    }
}