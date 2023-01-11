<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

    public function index()
    {
        $this->load->model('faq_model', 'faq');
        $data['list_faq'] = $this->faq->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/faq/index', $data);
        $this->load->view('layout/footer');
    }


    public function create()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/faq/create');
        $this->load->view('layout/footer');
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $this->load->model('faq_model', 'faq');
        $data['list_faq'] = $this->faq->findById($id);

        $this->load->view('layout/header.php');
        $this->load->view('layout/sidebar.php');
        $this->load->view('admin/faq/update', $data);
        $this->load->view('layout/footer.php');

        //redirect(base_url('index.php/faskes/view.php'));
    }

    public function save()
    {
        $this->load->model('faq_model', 'faq');

        $_id = $this->input->post('id_faq');
        $_pertanyaan = $this->input->post('pertanyaan');
        $_jawaban = $this->input->post('jawaban');

        if (isset($_id)) {
            $data_faq[] = $_id;
        };

        $data_faq[] = $_pertanyaan; // ? 1
        $data_faq[] = $_jawaban; // ? 2

        if (isset($_idedit)) {
            //update
            $data_faq[] = $_idedit; // ? 11
            $this->faq->update($data_faq);
            redirect(base_url('index.php/admin/faq'), 'refresh');
        } else {
            //fungsi save di mahasiswa_model
            $this->faq->create($data_faq);
            redirect(base_url('index.php/admin/faq'), 'refresh');
        };
    }

    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model('faq_model', 'faq');
        $this->faq->delete($_id);

        redirect(base_url() . 'index.php/admin/faq', 'refresh');
    }
}
