<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $this->load->model('users_model', 'users');
        $data['list_users'] = $this->users->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/user/index', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $this->load->model('users_model', 'users');
        $data['id_user'] = $this->users->countID();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/user/create', $data);
        $this->load->view('layout/footer');
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $this->load->model('users_model', 'users');
        $data['list_user'] = $this->users->findById($id);

        $this->load->view('layout/header.php');
        $this->load->view('layout/sidebar.php');
        $this->load->view('admin/user/update', $data);
        $this->load->view('layout/footer.php');
    }

    public function save()
    {
        $this->load->model('users_model', 'users');

        $_id = $this->input->post('id_user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_role = $this->input->post('role');
        $_nohp = $this->input->post('nohp');
        $_membership = $this->input->post('membership');
        $_idedit = $this->input->post('id'); //hidden field

        if (isset($_id)) {
            $data_users[] = $_id;
        };

        $data_users[] = $_username; // ? 1
        $data_users[] = $_password; // ? 2
        $data_users[] = $_email; // ? 3
        $data_users[] = $_role; // ? 4
        $data_users[] = $_nohp; // ? 5
        $data_users[] = $_membership; // ? 6

        if (isset($_idedit)) {
            //update
            $data_users[] = $_idedit; // ? 11
            $this->users->update($data_users);
            redirect(base_url('index.php/admin/user'), 'refresh');
        } else {
            //fungsi save di mahasiswa_model
            $this->users->create($data_users);
            redirect(base_url('index.php/admin/user'), 'refresh');
        };
    }

    public function view()
    {
        $id = $this->input->get('id');
        $this->load->model('users_model', 'users');
        $data['list_user'] = $this->users->findById($id);

        $this->load->view('layout/header.php');
        $this->load->view('layout/sidebar.php');
        $this->load->view('admin/user/view', $data);
        $this->load->view('layout/footer.php');
    }

    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('users_model', 'users');
        $this->users->delete($_id);

        redirect(base_url() . 'index.php/admin/user', 'refresh');
    }
}
