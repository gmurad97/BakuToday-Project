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
