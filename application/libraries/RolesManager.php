<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RolesManager
{
    /**
     * @var MY_Controller $CI 
     */
    protected $CI;

    /**
     * @var array $roles_hierarchy
     */
    private $roles_hierarchy = [];
    private $admin_auth_session_key = "";

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->admin_auth_session_key = $this->CI->config->item("admin_auth_session_key");
        $this->roles_hierarchy = $this->CI->config->item("roles");
    }

    public function check_role($role)
    {
        $credentials = $this->CI->session->userdata($this->admin_auth_session_key);
        if (!$credentials || !isset($credentials["role"])) {
            return false;
        }
        return $credentials["role"] === $role;
    }

    public function has_access($role)
    {
        if (!isset($this->roles_hierarchy[$role]))
            throw new InvalidArgumentException("Role '{$role}' does not exist.");

        $credentials = $this->CI->session->userdata($this->admin_auth_session_key);
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