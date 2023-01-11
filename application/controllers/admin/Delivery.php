<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delivery extends CI_Controller
{

    public function index()
    {
        $this->load->model('delivery_model', 'delivery');
        $data['list_delivery'] = $this->delivery->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin/delivery/index', $data);
        $this->load->view('layout/footer');
    }
}
