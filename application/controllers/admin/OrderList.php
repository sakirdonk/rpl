<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrderList extends CI_Controller
{

    public function index()
    {
        $this->load->model('pemesanan_model', 'pemesanan');
        $data['list_pemesanan'] = $this->pemesanan->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/pemesanan/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $id = $this->input->get('id');
        $this->load->model('pemesanan_model', 'pemesanan');
        $data['list_pemesanan'] = $this->pemesanan->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/pemesanan/view', $data);
        $this->load->view('layout/footer');
    }
}