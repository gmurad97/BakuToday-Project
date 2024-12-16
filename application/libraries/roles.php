<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//fasted create chat gpts code
class Role {
    private $CI;

    public function __construct() {
        // Получаем доступ к CI для использования других библиотек и моделей
        $this->CI =& get_instance();
    }

    // Функция для проверки роли
    public function check_role($role) {
        // Получаем текущего пользователя (например, из сессии)
        $user_role = $this->CI->session->userdata('role');

        // Проверка на роль
        if ($user_role === $role) {
            return true;
        }

        return false;
    }

    // Функция для проверки прав администратора
    public function is_root() {
        return $this->check_role('root');
    }

    // Функция для проверки прав модератора
    public function is_admin() {
        return $this->check_role('admin');
    }

    // Функция для проверки прав модератора
    public function is_moderator() {
        return $this->check_role('moderator');
    }

    // Функция для проверки прав доступа для определенной роли
    public function has_access($role) {
        if ($role == 'root') {
            return $this->is_root();
        }
        if ($role == 'admin') {
            return $this->is_admin() || $this->is_root();
        }
        if ($role == 'moderator') {
            return $this->is_moderator() || $this->is_admin() || $this->is_root();
        }
        return false;
    }
}
