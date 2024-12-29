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

}