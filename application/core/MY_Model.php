<?php

/*========== MY_MODEL - Controller extending CI_Model for common purposes ==========*/
class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
}

/*========== ELOQUENT_MODEL - Abstract model implementing core database operations in ORM style ==========*/
class ELOQUENT_Model extends MY_Model
{
    protected $tableName = "";
    protected $primaryKey = "";
    private $requiredProperties = ["tableName", "primaryKey"];

    public function __construct()
    {
        $missingProperties = array_filter(
            $this->requiredProperties,
            fn($property) => empty ($this->{$property})
        );

        if ($missingProperties)
            throw new LogicException(
                "Configuration error in "
                . get_class($this)
                . ": Missing required properties: "
                . implode(
                    ", ",
                    array_map(fn($property) => "\"$property\"", $missingProperties)
                )
                . "."
            );
    }

    public function all()
    {
        return $this->db
            ->get($this->tableName)
            ->result_array();
    }

    public function find($id)
    {
        return $this->db
            ->get_where($this->tableName, [$this->primaryKey => $id])
            ->row_array();
    }

    public function create($data)
    {
        return $this->db
            ->insert($this->tableName, $data);
    }

    public function update($id, $data)
    {
        return $this->db
            ->update($this->tableName, $data, [$this->primaryKey => $id]);
    }

    public function delete($id)
    {
        return $this->db
            ->delete($this->tableName, [$this->primaryKey => $id]);
    }

    public function count()
    {
        return $this->db
            ->count_all($this->tableName);
    }

    public function truncate()
    {
        return $this->db
            ->truncate($this->tableName);
    }
}