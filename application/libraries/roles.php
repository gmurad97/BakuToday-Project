<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminRoles
{
    private $CI;
    private $roles = [
        'admin' => ['create', 'edit', 'delete', 'view', 'manage_users'],
        'editor' => ['edit', 'view'],
        'moderator' => ['edit', 'view'],
    ];

    public function __construct()
    {
        $this->CI =& get_instance(); // Получаем доступ к основному объекту CI
    }

    // Проверка, есть ли у пользователя роль
    public function hasRole($role)
    {
        $userRole = $this->CI->session->userdata('role'); // Получаем роль пользователя из сессии
        return isset($this->roles[$userRole]) && in_array($role, $this->roles[$userRole]);
    }

    // Проверка, есть ли у пользователя право
    public function hasPermission($permission)
    {
        $userRole = $this->CI->session->userdata('role');
        return isset($this->roles[$userRole]) && in_array($permission, $this->roles[$userRole]);
    }

    // Проверка, если пользователь админ
    public function isAdmin()
    {
        return $this->CI->session->userdata('role') === 'admin';
    }
}
