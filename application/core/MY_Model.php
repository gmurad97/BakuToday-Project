<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*========== MY_Model - Controller extending CI_Model for common purposes ==========*/
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
 * @property Roles_manager $roles_manager
 * @property File_manager $file_uploader
 * @property Recaptcha $recaptcha
 * @property ProfilesModel $ProfilesModel
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
















/*========== ELOQUENT_Model - Abstract model implementing core database operations in ORM style ==========*/
/**
 * @property string $table_name
 * @property string $primary_key
 */
class ELOQUENT_Model extends MY_Model
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









    //asc desc
    public function all($status = null)
    {
        if ($status !== null)
            $this->db->where("status", $status);
        return $this->db
            ->get($this->table_name)
            ->result_array();
    }

    //asc desc
    public function all_paginated($limit, $offset = 0, $status = null)
    {
        if ($status !== null) {
            $this->db->where("status", $status);
        }

        return $this->db
            ->limit($limit, $offset)
            ->get($this->table_name)
            ->result_array();
    }

    //asc desc
    public function find($query)
    {
        $query = is_array($query) ? $query : [$this->primary_key => $query];

        foreach ($query as $field => $value) {
            if (is_array($value))
                $this->db->where_in($field, $value);
            else
                $this->db->where($field, $value);
        }

        return $this->db->get($this->table_name)->row_array();
    }

    //asc desc
    public function first($limit = 1, $status = null)
    {
        if ($status !== null)
            $this->db->where("status", $status);
        $result = $this->db
            ->limit($limit)
            ->get($this->table_name)
            ->result_array();

        if ($limit === 1 && count($result) === 1)
            return $result[0];
        return $result;
    }

    //asc desc
    public function last($limit = 1, $status = null)
    {
        if ($status !== null)
            $this->db->where("status", $status);
        $result = $this->db
            ->order_by($this->primary_key, "DESC")
            ->limit($limit)
            ->get($this->table_name)
            ->result_array();

        if ($limit === 1 && count($result) === 1)
            return $result[0];
        return $result;
    }

    public function create($data)
    {
        return $this->db->insert($this->table_name, $data);
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table_name, $data, [$this->primary_key => $id]);
    }

    public function update_where($id, $status)
    { #update only status
        $this->db->where('id', $id);
        return $this->db->update('categories', ['status' => $status]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table_name, [$this->primary_key => $id]);
    }

    public function count()
    {
        return $this->db->count_all($this->table_name);
    }

    public function truncate()
    {
        return $this->db->truncate($this->table_name);
    }
}