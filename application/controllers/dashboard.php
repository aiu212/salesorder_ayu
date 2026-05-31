<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login');
        }

        $this->load->model('M_dashboard');
    }

    public function index()
    {
        $data['total_produk'] = $this->M_dashboard->total_produk();
        $data['total_pelanggan'] = $this->M_dashboard->total_pelanggan();
        $data['total_order'] = $this->M_dashboard->total_order();
        $data['total_penjualan'] = $this->M_dashboard->total_penjualan();

        $data['produk_terlaris'] = $this->db
            ->select('produk.nama_produk, SUM(order_detail.qty) as total_terjual')
            ->from('order_detail')
            ->join('produk', 'produk.id = order_detail.produk_id')
            ->group_by('order_detail.produk_id')
            ->order_by('total_terjual', 'DESC')
            ->limit(4)
            ->get()
            ->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}