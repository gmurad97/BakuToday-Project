<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*<================> MY_Model - Model extending CI_Model for common purposes <================>*/
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
class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
}

/*<================> ENTITY_Model - Model extending MY_Model, adding reusable database methods <================>*/
/**
 * @property string $table_name
 * @property string $primary_key
 */
class ENTITY_Model extends MY_Model
{
    protected $table_name = "";
    protected $primary_key = "";

    private $required_properties = ["table_name", "primary_key"];

    public function __construct()
    {
        $missing_properties = array_filter(
            $this->required_properties,
            fn($property) => empty($this->{$property})
        );

        if ($missing_properties) {
            throw new LogicException(
                "Configuration error in "
                . get_class($this)
                . ": Missing required properties: "
                . implode(", ", array_map(fn($property) => "\"$property\"", $missing_properties))
                . "."
            );
        }
    }

    public function get_table_name()
    {
        return $this->table_name;
    }

    public function get_primary_key()
    {
        return $this->primary_key;
    }

    public function all($order_by = "DESC", $conditions = [])
    {
        $order_by = strtoupper($order_by) === "ASC" ? "ASC" : "DESC";

        if (!empty($conditions) && is_array($conditions)) {
            $this->db->where($conditions);
        }

        $this->db->order_by($this->primary_key, $order_by);

        return $this->db
            ->get($this->table_name)
            ->result_array();
    }

    public function paginate($limit, $offset = 0, $order_by = "DESC", $conditions = [])
    {
        $order_by = strtoupper($order_by) === "ASC" ? "ASC" : "DESC";

        if (!empty($conditions) && is_array($conditions)) {
            $this->db->where($conditions);
        }

        return $this->db
            ->order_by($this->primary_key, $order_by)
            ->limit($limit, $offset)
            ->get($this->table_name)
            ->result_array();
    }

    public function find($conditions)
    {
        $conditions = is_array($conditions) ? $conditions : [$this->primary_key => $conditions];

        foreach ($conditions as $field => $value) {
            if (is_array($value)) {
                $this->db->where_in($field, $value);
            } else {
                $this->db->where($field, $value);
            }
        }

        return $this->db
            ->get($this->table_name)
            ->row_array();
    }

    public function bounds_range($bound = "start", $limit = 1, $conditions = [])
    {
        $order_by = strtolower($bound) === "start" ? "ASC" : "DESC";

        if (!empty($conditions) && is_array($conditions)) {
            $this->db->where($conditions);
        }

        $result = $this->db
            ->order_by($this->primary_key, $order_by)
            ->limit($limit)
            ->get($this->table_name)
            ->result_array();

        if ($limit === 1 && count($result) === 1) {
            return $result[0];
        }

        return $result;
    }

    public function create($data)
    {
        if ($this->db->insert($this->table_name, $data)) {
            return $this->db->insert_id();
        }
        return -1;
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table_name, $data, [$this->primary_key => $id]);
    }

    public function delete($ids)
    {
        if (is_array($ids)) {
            return $this->db
                ->where_in($this->primary_key, $ids)
                ->delete($this->table_name);
        } else {
            return $this->db->delete($this->table_name, [$this->primary_key => $ids]);
        }
    }

    public function count($conditions = [])
    {
        $cache_id = "table_{$this->table_name}_count";

        if (!empty($conditions)) {
            $cache_id .= '_' . md5(json_encode($conditions));
        }

        $count = $this->cache->get($cache_id);

        if ($count === false) {
            if (!empty($conditions) && is_array($conditions)) {
                $this->db->where($conditions);
            }
            $count = $this->db->count_all_results($this->table_name);
            $this->cache->save($cache_id, $count, 60);
        }

        return $count;
    }

    public function truncate()
    {
        return $this->db->truncate($this->table_name);
    }
}
