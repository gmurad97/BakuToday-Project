<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfilesController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/AdminsModel');
    }

    public function index()
    {

    }
    // Отображение списка профилей
    public function list()
    {
        // Получаем все профили
        $context['profiles'] = $this->AdminsModel->get_all();
        $this->load->view('admin/profile/list', $context); // Обновите путь к представлению на тот, который у вас используется
    }

    // Просмотр профиля конкретного пользователя (детали)
    public function show($id)
    {
        // Получаем данные о пользователе
        $context['profile'] = $this->AdminsModel->find($id);
        $this->load->view('admin/auth/profiles/detail', $context); // Обновите путь к представлению
    }

    // Редактирование профиля
    public function edit($id)
    {
        $context['profile'] = $this->AdminsModel->find($id); // Получаем данные из базы
        $this->load->view('admin/auth/profiles/edit', $context); // Обновите путь к представлению
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

    // Обновление профиля
    public function update($id)
    {
        $data = $this->input->post();
        // Валидация данных и обновление
        $this->AdminsModel->update($id, $data);
        $this->session->set_flashdata('success', 'Profile updated successfully.');
        redirect(base_url('admin/auth/profiles/detail/' . $id)); // Перенаправление на страницу с деталями профиля
    }

    // Выход из системы
    public function logout()
    {
        // Удаляем только данные о пользователе из сессии
        $this->session->unset_userdata('admin_credentials'); // Замените 'user' на имя вашей переменной с данными пользователя

        // Устанавливаем флеш-сообщение
        $this->session->set_flashdata('success', 'You have logged out successfully.');

        // Перенаправляем на страницу входа
        redirect(base_url('admin/login'));
    }
}
