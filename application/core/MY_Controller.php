<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*<================> MY_Controller - Controller extending CI_Controller for common purposes <================>*/
/**
 * @property CI_Benchmark $benchmark
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_DB_mysqli_driver $db
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
 * @property RolesManager $rolesmanager
 * @property FileManager $filemanager
 * @property Recaptcha $recaptcha
 * @property HttpClient $httpclient
 * @property AdminsModel $AdminsModel
 * @property AdvertisingModel $AdvertisingModel
 * @property CategoriesModel $CategoriesModel
 * @property NewsModel $NewsModel
 * @property SettingsModel $SettingsModel
 */
class MY_Controller extends CI_Controller
{
    private $_admin_language = "";
    private $_user_language = "";

    public function get_admin_language()
    {
        return $this->_admin_language;
    }

    public function get_user_language()
    {
        return $this->_user_language;
    }

    public function __construct()
    {
        parent::__construct();
        $language_session_key = $this->config->item("language_session_key");
        $default_language = $this->config->item("default_language");
        $roles_hierarchy = $this->config->item("roles");
        $this->_admin_language = $this->session->userdata($language_session_key["admin"]) ?? $default_language["admin"];
        $this->_user_language = $this->session->userdata($language_session_key["user"]) ?? $default_language["user"];

        if (is_array($roles_hierarchy)) {
            $roles = array_keys($roles_hierarchy);
            $roles_access = [];
            foreach ($roles as $role) {
                $roles_access["{$role}_access"] = $this->rolesmanager->has_access($role);
            }
            $this->load->vars($roles_access);
        }
    }

    public function notifier($key, $type, $messages)
    {
        $types = [
            "info" => ["class" => "alert-info", "icon" => "alert-circle"],
            "success" => ["class" => "alert-success", "icon" => "check-circle"],
            "warning" => ["class" => "alert-warning", "icon" => "alert-octagon"],
            "danger" => ["class" => "alert-danger", "icon" => "alert-triangle"]
        ];

        $type = in_array(strtolower($type), array_keys($types)) ? strtolower($type) : "info";
        $class = $types[$type]["class"];
        $icon = $types[$type]["icon"];

        $this->session->set_flashdata($key, [
            "class" => $class,
            "icon" => $icon,
            "messages" => [
                "title" => $messages["title"],
                "description" => $messages["description"]
            ]
        ]);
    }

    public function datatable_json($table, $columns, $searchable_columns = [], $custom_order = null)
    {
        $post = $this->input->post();
        $start = $post["start"] ?? 0;
        $length = $post["length"] ?? 10;
        $search = $post["search"]["value"] ?? "";
        $order_col = $post["order"][0]["column"] ?? 0;
        $order_dir = $post["order"][0]["dir"] ?? "desc";

        $order_by = $columns[$order_col] ?? $columns[0];
        if ($custom_order && isset($custom_order[$order_by])) {
            $order_by = $custom_order[$order_by];
        }

        $this->db->from($table);

        if (!empty($search) && !empty($searchable_columns)) {
            $this->db->group_start();
            foreach ($searchable_columns as $column) {
                $this->db->or_like($column, $search);
            }
            $this->db->group_end();
        }

        $totalFiltered = $this->db->count_all_results("", false);

        $this->db->order_by($order_by, $order_dir);
        $this->db->limit($length, $start);
        $query = $this->db->get();
        $data = $query->result();

        $result = [];
        foreach ($data as $item) {
            $row = [];
            foreach ($columns as $column) {
                $row[$column] = isset($item->$column) ? $item->$column : "";
            }
            $result[] = $row;
        }

        $total = $this->db->count_all($table);

        echo json_encode([
            "draw" => intval($this->input->post("draw")),
            "recordsTotal" => $total,
            "recordsFiltered" => $totalFiltered,
            "data" => $result,
            "csrf_token" => $this->security->get_csrf_hash()
        ]);
    }
}

/*<================> BASE_Controller - Abstract template for creating controllers based on MY_Controller <================>*/
abstract class BASE_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    abstract public function index();
}

/*<================> ERROR_Controller - Abstract base controller for handling error-specific functionality <================>*/
abstract class ERROR_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    abstract public function index();
}

/*<================> CRUD_Controller - Abstract controller for implementing CRUD operations <================>*/
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