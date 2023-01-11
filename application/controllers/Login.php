<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('home/header');
        $this->load->view('login');
        $this->load->view('home/footer');
    }

    public function create()
    {
        $this->load->view('home/header');
        $this->load->view('register');
        $this->load->view('home/footer');
    }

    public function save()
    {
        $this->load->model('users_model', 'users');

        $_id = $this->input->post('id_user');
        $_username = $this->input->post('username');
        $_email = $this->input->post('email');
        $_password = $this->input->post('password');
        $_role = 'user';
        $_nohp = $this->input->post('nohp');
        $_membership = 'tidak';
        $_idedit = $this->input->post('id'); //hidden field

        if (isset($_id)) {
            $data_users[] = $_id;
        };

        $data_users[] = $_username; // ? 1
        $data_users[] = $_email; // ? 2
        $data_users[] = $_password; // ? 3
        $data_users[] = $_role; // ? 4
        $data_users[] = $_nohp; // ? 5
        $data_users[] = $_membership; // ? 6

        if (isset($_idedit)) {
            //update
            $data_users[] = $_idedit; // ? 11
            $this->users->update($data_users);
            redirect(base_url('index.php/login/'), 'refresh');
        } else {
            //fungsi save di mahasiswa_model
            $this->users->create($data_users);
            redirect(base_url('index.php/login/'), 'refresh');
        };
    }

    public function authentikasi()
    {
        $this->load->model('users_model', 'users');
        $_email = $this->input->post('email');
        $_password = $this->input->post('password');

        $row = $this->users->login($_email, $_password);

        if (isset($row)) { //jika username ada
            $this->session->set_userdata('ID', $row->id);
            $this->session->set_userdata('USERNAME', $row->username);
            $this->session->set_userdata('EMAIL', $row->email);
            $this->session->set_userdata('ROLE', $row->role);
            $this->session->set_userdata('NOHP', $row->nohp);
            $this->session->set_userdata('MEMBERSHIP', $row->membership);
            $this->session->set_userdata('FOTO', $row->foto);

            if ($this->session->userdata('ROLE') == 'admin') {
                redirect(base_url() . 'index.php/admin/produk');
            } else {
                redirect(base_url() . 'index.php/dashboard');
            }
        } else { //jika username atau password tidak ada
            redirect(base_url() . 'index.php/login?status=f');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('ID');
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('EMAIL');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('NOHP');
        $this->session->unset_userdata('MEMBERSHIP');
        $this->session->unset_userdata('FOTO');
        redirect(base_url() . 'index.php/dashboard');
    }
}
