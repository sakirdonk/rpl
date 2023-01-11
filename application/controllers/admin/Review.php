<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Review extends CI_Controller
{

    public function index()
    {
        $this->load->model('review_model', 'review');
        $data['list_review'] = $this->review->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/review/index', $data);
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('review_model', 'review');

        $_id = $this->input->post('id_user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_role = $this->input->post('role');
        $_nohp = $this->input->post('nohp');
        $_membership = $this->input->post('membership');
        $_idedit = $this->input->post('id'); //hidden field

        if (isset($_id)) {
            $data_review[] = $_id;
        };

        $data_review[] = $_username; // ? 1
        $data_review[] = $_password; // ? 2
        $data_review[] = $_email; // ? 3
        $data_review[] = $_role; // ? 4
        $data_review[] = $_nohp; // ? 5
        $data_review[] = $_membership; // ? 6

        if (isset($_idedit)) {
            //update
            $data_review[] = $_idedit; // ? 11
            $this->review->update($data_review);
            redirect(base_url('index.php/admin/review'), 'refresh');
        } else {
            //fungsi save di mahasiswa_model
            $this->review->create($data_review);
            redirect(base_url('index.php/admin/review'), 'refresh');
        };
    }

    public function view()
    {
        $id = $this->input->get('id');
        $this->load->model('review_model', 'review');
        $data['list_review'] = $this->review->findById($id);

        $this->load->view('layout/header.php');
        $this->load->view('layout/sidebar.php');
        $this->load->view('admin/review/view', $data);
        $this->load->view('layout/footer.php');
    }

    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('review_model', 'review');
        $this->review->delete($_id);

        redirect(base_url() . 'index.php/admin/review', 'refresh');
    }
}
