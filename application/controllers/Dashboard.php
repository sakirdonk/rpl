<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('home/header2');
        $this->load->view('home/dashboard');
        $this->load->view('home/footer');
    }

    public function faq()
    {
        $this->load->model('faq_model', 'faq');
        $data['list_faq'] = $this->faq->getAll();

        $this->load->view('home/header2');
        $this->load->view('home/faq', $data);
        $this->load->view('home/footer');
    }

    public function ourproduct()
    {
        $this->load->model('produk_model', 'produk');
        $data['list_produk'] = $this->produk->getAll();

        $this->load->view('home/header2');
        $this->load->view('home/ourproduct', $data);
        $this->load->view('home/footer');
    }

    public function order()
    {
        $id = $this->input->get('id');
        $this->load->model('produk_model', 'produk');
        $data['list_produk'] = $this->produk->findById($id);

        $this->load->model('hargakota_model', 'harga_kota');
        $data['list_harga_kota'] = $this->harga_kota->getAll();

        // $this->load->model('review_model', 'review');
        // $data['list_review'] = $this->review->findById($id);

        $this->load->view('home/header2');
        $this->load->view('home/order', $data);
        $this->load->view('home/footer');
    }

    public function save()
    {
        $this->load->model('pemesanan_model', 'pemesanan');

        $_kota = $this->input->post('kota');
        $result_explode = explode('|', $_kota);
        $_harga_kota = $result_explode[0];

        $_kota_id = $result_explode[1];
        $_id = $this->input->post('id_user');
        $_produk_id = $this->input->post('produk_id');
        $_nama_user = $this->input->post('user_id'); //hiddenn field session user id
        $_alamat = $this->input->post('alamat');
        $_jumlah_pemesanan = $this->input->post('jumlah_pemesanan');
        $_idedit = $this->input->post('id'); //hidden field

        $_harga_produk = $this->input->post('harga_produk');
        intval($_total_harga = $_harga_produk * $_jumlah_pemesanan);
        $_total_biaya = $_total_harga + $_harga_kota;

        if (isset($_id)) {
            $data_pemesanan[] = $_id;
        };

        $data_pemesanan[] = $_produk_id; // ? 1
        $data_pemesanan[] = $_nama_user; // ? 2
        $data_pemesanan[] = $_alamat; // ? 3
        $data_pemesanan[] = $_jumlah_pemesanan; // ? 4
        $data_pemesanan[] = $_kota_id; // ? 5
        $data_pemesanan[] = $_total_biaya; // ? 6

        if (isset($_idedit)) {
            //update
            $data_pemesanan[] = $_idedit; // ? 11
            $this->pemesanan->update($data_pemesanan);
            redirect(base_url('index.php/dashboard/success'), 'refresh');
        } else {
            //fungsi save di mahasiswa_model
            $this->pemesanan->create($data_pemesanan);
            redirect(base_url('index.php/dashboard/success'), 'refresh');
        };
    }

    public function success(){
        
    }
}
