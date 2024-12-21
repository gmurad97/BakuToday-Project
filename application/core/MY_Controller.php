<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*========== MY_Controller - Controller extending CI_Controller for common purposes ==========*/
/**
 * @property CI_Benchmark $benchmark
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_DB $db
 * @property CI_Driver $driver
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Encryption $encryption
 * @property CI_Exceptions $exceptions
 * @property CI_Form_validation $form_validation
 * @property CI_FTP $ftp
 * @property CI_Hooks $hooks
 * @property CI_Image_lib $image_lib
 * @property CI_Input $input
 * @property CI_Jquery $jquery
 * @property CI_Lang $lang
 * @property CI_Loader $loader
 * @property CI_Log $log
 * @property CI_Migration $migration
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Unit_test $unit_test
 * @property CI_Profiler $profiler
 * @property CI_Router $router
 * @property CI_Security $security
 * @property CI_Session $session
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Upload $upload
 * @property CI_URI $uri
 * @property CI_User_agent $user_agent
 * @property CI_Utf8 $utf8
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 * @property Admin_roles $admin_roles
 * @property AdminsModel $AdminsModel
 * @property AdvertisingModel $AdvertisingModel
 * @property CategoriesModel $CategoriesModel
 * @property NewsModel $NewsModel
 * @property SettingsModel $SettingsModel
 */
class MY_Controller extends CI_Controller
{
    public $current_admin_language;
    public $current_user_language;

    public function __construct()
    {
        parent::__construct();
        $this->current_admin_language = $this->session->userdata("admin_lang") ?? "en";
        $this->current_user_language = $this->session->userdata("user_lang") ?? "en";
        $this->load->vars([
            "has_admin_access" => $this->admin_roles->has_access("admin")
        ]);
    }

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

    public function upload_image($field_name, $upload_path, $resize_options = [])
    {
        $upload_config = [
            "upload_path" => $upload_path,
            "allowed_types" => "jpeg|jpg|png|gif|JPEG|JPG|PNG|GIF",
            "file_ext_tolower" => TRUE,
            "remove_spaces" => TRUE,
            "encrypt_name" => TRUE
        ];

        $this->load->library("upload", $upload_config);

        if (is_array($_FILES[$field_name]['name'])) {
            $files = $_FILES[$field_name];
            $uploaded_files = [];

            for ($idx = 0; $idx < count($files["name"]); $idx++) {
                $_FILES["userfile"]["name"] = $files["name"][$idx];
                $_FILES["userfile"]["type"] = $files["type"][$idx];
                $_FILES["userfile"]["tmp_name"] = $files["tmp_name"][$idx];
                $_FILES["userfile"]["error"] = $files["error"][$idx];
                $_FILES["userfile"]["size"] = $files["size"][$idx];

                if ($this->upload->do_upload("userfile")) {
                    $uploaded_data = $this->upload->data();

                    if (!empty($resize_options)) {
                        $resize_config = array_merge([
                            "image_library" => "gd2",
                            "source_image" => $uploaded_data["full_path"],
                            "maintain_ratio" => FALSE
                        ], $resize_options);

                        $this->load->library("image_lib", $resize_config);

                        if (!$this->image_lib->resize()) {
                            return ["success" => false, "error" => $this->image_lib->display_errors()];
                        }
                    }

                    $uploaded_files[] = $uploaded_data;
                } else {
                    return ["success" => false, "error" => $this->upload->display_errors()];
                }
            }
            return ["success" => true, "data" => $uploaded_files];
        } else {
            if (!$this->upload->do_upload($field_name)) {
                return ["success" => false, "error" => $this->upload->display_errors()];
            }

            $uploaded_data = $this->upload->data();

            if (!empty($resize_options)) {
                $resize_config = array_merge([
                    "image_library" => "gd2",
                    "source_image" => $uploaded_data["full_path"],
                    "maintain_ratio" => FALSE
                ], $resize_options);

                $this->load->library("image_lib", $resize_config);

                if (!$this->image_lib->resize()) {
                    return ["success" => false, "error" => $this->image_lib->display_errors()];
                }
            }

            return ["success" => true, "data" => $uploaded_data];
        }
    }

    public function delete_file($file_path)
    {
        if (file_exists($file_path)) {
            return unlink($file_path);
        }
        return false;
    }
}

/*========== BASE_Controller - Abstract template for creating controllers based on MY_Controller ==========*/
abstract class BASE_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    abstract public function index();
}

abstract class ERROR_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    abstract function index();
}

/*========== CRUD_Controller - Abstract controller for implementing CRUD operations ==========*/
abstract class CRUD_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    abstract public function index();
    abstract public function show($id);
    abstract public function create();
    abstract public function store();
    abstract public function edit($id);
    abstract public function update($id);
    abstract public function destroy($id);
}

/*========== API_Controller - Abstract controller for implementing CRUD operations ==========*/
abstract class API_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    abstract public function index();
    abstract public function show($id);
    abstract public function store();
    abstract public function update($id);
    abstract public function destroy($id);
}