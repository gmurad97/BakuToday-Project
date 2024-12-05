<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*========== MY_CONTROLLER - Controller extending CI_Controller for common purposes ==========*/
/**
 * @property CI_Benchmark $benchmark
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Config $config
 * @property CI_Controller $controller
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

/*========== BASE_CONTROLLER - Abstract template for creating controllers based on CI_Controller ==========*/
abstract class BASE_Controller extends MY_Controller
{
    abstract public function index();
}

/*========== CRUD_CONTROLLER - Abstract controller for implementing CRUD operations ==========*/
abstract class CRUD_Controller extends MY_Controller
{
    abstract public function index();
    abstract public function show($id);
    abstract public function create();
    abstract public function store();
    abstract public function edit($id);
    abstract public function update($id);
    abstract public function destroy($id);
}