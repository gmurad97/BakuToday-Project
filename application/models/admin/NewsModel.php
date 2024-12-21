<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewsModel extends ELOQUENT_Model
{
    protected $table_name = "news";
    protected $primary_key = "id";

    public function with_author_category($id = null)
    {
        $this->db
            ->select("$this->table_name.*,
                    admins.first_name as author_first_name,
                    admins.last_name as author_last_name,
                    admins.img as author_img,
                    categories.name_az as category_name_az,
                    categories.name_en as category_name_en,
                    categories.name_ru as category_name_ru")
            ->from($this->table_name)
            ->join("admins", "news.author_id = admins.id", "left")
            ->join("categories", "news.category_id = categories.id", "left");

        if (!($id === null)) {
            $this->db->where("$this->table_name.id", $id);
            return $this->db->get()->row_array();
        }

        return $this->db->get()->result_array();
    }
}