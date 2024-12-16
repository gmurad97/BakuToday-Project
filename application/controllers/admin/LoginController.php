<?php

/**
 * @property AdminsModel $AdminsModel
 */
class LoginController extends BASE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/AdminsModel'); // Загружаем модель для работы с пользователями
    }

    // Метод для отображения страницы логина
    public function index()
    {
        $context["page_title"] = "Login";
        $this->load->view("admin/auth/login", $context);
    }

    // Метод для проверки данных логина
    public function verify()
    {
        // Получаем данные из формы
        $username = $this->input->post('admin_username');
        $password = $this->input->post('admin_password');

        // Проверяем, что оба поля не пустые
        if (empty($username) || empty($password)) {
            $this->session->set_flashdata('error', 'Username and Password are required');
            redirect(base_url('admin/login'));
        }

        // Проверка пользователя в базе данных
        $user = $this->AdminsModel->findByUsernameOrEmail($username);
        
        // Если пользователь найден и хеш пароля совпадает
        if ($user && hash('sha256', $password) === $user['password'] && $user['status'] == 1) {
            // Создаём сессию для пользователя
            $this->session->set_userdata([
                'user_id' => $user['id'],
                'role' => $user['role'],
                'username' => $user['username'],
                'logged_in' => TRUE
            ]);

            // Перенаправляем в админ панель
            redirect(base_url('admin/dashboard'));
        } else {
            // Если данные неверны или пользователь заблокирован
            $this->session->set_flashdata('error', 'Invalid credentials or account is disabled');
            redirect(base_url('admin/login'));
        }
    }
}
