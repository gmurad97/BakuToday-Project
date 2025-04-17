<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminsModel extends ENTITY_Model
{
    protected $table_name = "admins";
    protected $primary_key = "id";



    public function get_filtered($search, $start, $length, $orderColumn, $orderDir)
    {
        if (!empty($search)) {
            $this->db->like('first_name', $search);
            $this->db->or_like('last_name', $search);
            $this->db->or_like('role', $search);
        }
    
        $this->db->order_by($orderColumn, $orderDir);
        $this->db->limit($length, $start);
    
        $query = $this->db->get('admins');
        return $query->result_array();
    }
    
    public function count_filtered($search)
    {
        if (!empty($search)) {
            $this->db->like('first_name', $search);
            $this->db->or_like('last_name', $search);
            $this->db->or_like('role', $search);
        }
    
        return $this->db->count_all_results('admins');
    }
    
    public function count_all()
    {
        return $this->db->count_all('admins');
    }
    

}