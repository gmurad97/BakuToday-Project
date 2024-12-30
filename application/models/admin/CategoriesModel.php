<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoriesModel extends ELOQUENT_Model
{
    protected $table_name = "categories";
    protected $primary_key = "id";

    public function update_status($id, $status)
    {
        $this->db->where('id', $id);
        return $this->db->update('categories', ['status' => $status]);
    }

    public function get_filtered_data($limit, $start, $order, $dir, $search)
    {
        $this->db->select('*')->from('categories');

        // Если есть поисковый запрос
        if (!empty($search)) {
            $this->db->like('name', $search);
        }

        // Указываем сортировку
        $this->db->order_by($order, $dir);

        // Лимитируем записи
        $this->db->limit($limit, $start);

        return $this->db->get()->result_array();
    }

    public function get_total_count()
    {
        return $this->db->count_all('categories');
    }

    public function get_filtered_count($search)
    {
        $this->db->from('categories');
        if (!empty($search)) {
            $this->db->like('name', $search);
        }
        return $this->db->count_all_results();
    }

}