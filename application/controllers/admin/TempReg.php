<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property AdminsModel $AdminsModel
 */
class RegisterController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/AdminsModel'); // Загружаем модель для работы с пользователями
    }

    // Метод для отображения страницы регистрации
    public function index()
    {
        $this->load->view("admin/auth/register");
    }

    // Метод для обработки формы регистрации
    public function store()
    {
        // Получаем данные из формы
        $first_name = $this->input->post('admin_first_name');
        $last_name = $this->input->post('admin_last_name');
        $email = $this->input->post('admin_email');
        $username = $this->input->post('admin_username');
        $password = $this->input->post('admin_password');
        $confirm_password = $this->input->post('admin_confirm_password');
        $role = $this->input->post('role');
        $status = $this->input->post('status');

        // Валидация
        if (empty($first_name) || empty($last_name) || empty($email) || empty($username) || empty($password) || empty($confirm_password) || empty($role) || empty($status)) {
            $this->session->set_flashdata('error', 'All fields are required.');
            redirect(base_url('admin/register'));
        }

        if ($password !== $confirm_password) {
            $this->session->set_flashdata('error', 'Passwords do not match.');
            redirect(base_url('admin/register'));
        }

        // Проверка на уникальность email и username
        if ($this->AdminsModel->findByUsernameOrEmail($username) || $this->AdminsModel->findByUsernameOrEmail($email)) {
            $this->session->set_flashdata('error', 'Username or email already exists.');
            redirect(base_url('admin/register'));
        }

        // Хеширование пароля
        $hashed_password = hash('sha256', $password); // Используем sha256 для пароля

        // Создание данных для вставки
        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'username' => $username,
            'password' => $hashed_password,
            'role' => $role,
            'status' => $status,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Вставка данных в базу данных
        if ($this->AdminsModel->create($data)) {
            $this->session->set_flashdata('success', 'Administrator registered successfully.');
            redirect(base_url('admin/login'));
        } else {
            $this->session->set_flashdata('error', 'An error occurred. Please try again.');
            redirect(base_url('admin/register'));
        }
    }
}
