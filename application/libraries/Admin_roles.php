<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_roles
{
    /**
     * @var MY_Controller $CI 
     */
    protected $CI;

    private $roles_hierarchy = [
        "root" => ["root"],
        "admin" => ["admin", "root"],
        "moderator" => ["moderator", "admin", "root"]
    ];

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function check_role($role)
    {
        $credentials = $this->CI->session->userdata("admin_credentials");
        if (!$credentials || !isset($credentials["role"]))
            return false;
        return $credentials["role"] === $role;
    }

    public function has_access($role)
    {
        if (!isset($this->roles_hierarchy[$role]))
            throw new InvalidArgumentException("Role '{$role}' does not exist.");

        $credentials = $this->CI->session->userdata("admin_credentials");
        $credentials_role = $credentials ? $credentials["role"] : null;

        return $credentials_role && in_array($credentials_role, $this->roles_hierarchy[$role]);
    }

    public function is_root()
    {
        return $this->check_role("root");
    }

    public function is_admin()
    {
        return $this->check_role("admin");
    }

    public function is_moderator()
    {
        return $this->check_role("moderator");
    }
}