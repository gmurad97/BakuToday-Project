<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property AdminsModel $AdminsModel
 */
class ProfilesController extends CRUD_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/AdminsModel');
    }

    public function index()
    {
        $context['page_title'] = 'All Profiles';
        $context['profiles'] = $this->AdminsModel->get_all();
        $this->load->view('admin/profiles/list', $context);
    }

    public function show($id)
    {
        $context['profile'] = $this->AdminsModel->find($id);
        if ($context['profile']) {
            $context['page_title'] = 'View Profile: ' . $context['profile']['username'];
            $this->load->view('admin/profiles/detail', $context);
        } else {
            $this->session->set_flashdata('error', 'Profile not found.');
            redirect(base_url('admin/profiles'));
        }
    }

    public function create()
    {
        $context['page_title'] = 'Create Profile';
        $this->load->view('admin/profiles/create', $context);
    }

    public function store()
    {
        $first_name = $this->input->post('first_name', true);
        $last_name = $this->input->post('last_name', true);
        $email = $this->input->post('email', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $confirm_password = $this->input->post('confirm_password', true);
        $role = $this->input->post('role', true);
        $status = $this->input->post('status', true);

        if (empty($first_name) || empty($last_name) || empty($email) || empty($username) || empty($password) || empty($confirm_password) || empty($role)) {
            $this->session->set_flashdata('error', 'All fields are required.');
            redirect(base_url('admin/profiles/create'));
        }

        if ($password !== $confirm_password) {
            $this->session->set_flashdata('error', 'Passwords do not match.');
            redirect(base_url('admin/profiles/create'));
        }

        if ($this->AdminsModel->findByUsernameOrEmail($username) || $this->AdminsModel->findByUsernameOrEmail($email)) {
            $this->session->set_flashdata('error', 'Username or email already exists.');
            redirect(base_url('admin/profiles/create'));
        }

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'username' => $username,
            'password' => $hashed_password,
            'role' => $role,
            'status' => $status === 'on',
            'created_at' => date('Y-m-d H:i:s'),
        ];

        if ($this->AdminsModel->create($data)) {
            $this->session->set_flashdata('success', 'Profile created successfully.');
            redirect(base_url('admin/profiles'));
        } else {
            $this->session->set_flashdata('error', 'An error occurred. Please try again.');
            redirect(base_url('admin/profiles/create'));
        }
    }

    public function edit($id)
    {
        $context['profile'] = $this->AdminsModel->find($id);
        if ($context['profile']) {
            $context['page_title'] = 'Edit Profile: ' . $context['profile']['username'];
            $this->load->view('admin/profiles/edit', $context);
        } else {
            $this->session->set_flashdata('error', 'Profile not found.');
            redirect(base_url('admin/profiles'));
        }
    }

    public function update($id)
    {
        $profile = $this->AdminsModel->find($id);

        if (!$profile) {
            $this->session->set_flashdata('error', 'Profile not found.');
            redirect(base_url('admin/profiles'));
        }

        $data = $this->input->post();
        $data['status'] = isset($data['status']) && $data['status'] === 'on';

        if (!empty($data['password'])) {
            if ($data['password'] !== $data['confirm_password']) {
                $this->session->set_flashdata('error', 'Passwords do not match.');
                redirect(base_url('admin/profiles/edit/' . $id));
            }
            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        } else {
            unset($data['password']);
        }
        unset($data['confirm_password']);

        if ($this->AdminsModel->update($id, $data)) {
            $this->session->set_flashdata('success', 'Profile updated successfully.');
            redirect(base_url('admin/profiles'));
        } else {
            $this->session->set_flashdata('error', 'An error occurred. Please try again.');
            redirect(base_url('admin/profiles/edit/' . $id));
        }
    }

    public function destroy($id)
    {
        $profile = $this->AdminsModel->find($id);

        if (!$profile) {
            $this->session->set_flashdata('error', 'Profile not found.');
            redirect(base_url('admin/profiles'));
        }

        if ($this->AdminsModel->delete($id)) {
            $this->session->set_flashdata('success', 'Profile deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'An error occurred. Please try again.');
        }

        redirect(base_url('admin/profiles'));
    }
}
