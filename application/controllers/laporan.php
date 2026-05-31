<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login');
        }

        if(
            $this->session->userdata('role') != 'admin' &&
            $this->session->userdata('role') != 'manager'
        ){
            redirect('dashboard');
        }

        $this->load->model('M_laporan');
    }

    public function index()
    {
        $tanggal_awal  = $this->input->get('tanggal_awal');
        $tanggal_akhir = $this->input->get('tanggal_akhir');
        $sales_id      = $this->input->get('sales_id');
        $produk_id     = $this->input->get('produk_id');

        $data['laporan'] = $this->M_laporan->get_laporan(
            $tanggal_awal,
            $tanggal_akhir,
            $sales_id,
            $produk_id
        );

        $data['sales'] = $this->M_laporan->get_sales();
        $data['produk'] = $this->M_laporan->get_produk();

        $data['tanggal_awal']  = $tanggal_awal;
        $data['tanggal_akhir'] = $tanggal_akhir;
        $data['sales_id']      = $sales_id;
        $data['produk_id']     = $produk_id;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }

    public function cetak()
    {
        $tanggal_awal  = $this->input->get('tanggal_awal');
        $tanggal_akhir = $this->input->get('tanggal_akhir');
        $sales_id      = $this->input->get('sales_id');
        $produk_id     = $this->input->get('produk_id');

        $data['laporan'] = $this->M_laporan->get_laporan(
            $tanggal_awal,
            $tanggal_akhir,
            $sales_id,
            $produk_id
        );

        $data['tanggal_awal']  = $tanggal_awal;
        $data['tanggal_akhir'] = $tanggal_akhir;

        $this->load->view('laporan/cetak', $data);
    }
}