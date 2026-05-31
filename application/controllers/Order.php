<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login');
        }

        if($this->session->userdata('role') != 'admin' &&
            $this->session->userdata('role') != 'sales'
        ){
            redirect('dashboard');
        }

        $this->load->model('M_order');
    }

    public function index()
    {
        $data['orders'] = $this->M_order->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('order/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['produk'] = $this->M_order->get_produk();
        $data['pelanggan'] = $this->M_order->get_pelanggan();
        $data['sales'] = $this->M_order->get_sales();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('order/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $produk_id = $this->input->post('produk_id');
        $qty       = $this->input->post('qty');
        $harga     = $this->input->post('harga');

        $subtotal = $qty * $harga;

        $order = [
            'no_order'     => 'SO'.date('YmdHis'),
            'pelanggan_id' => $this->input->post('pelanggan_id'),
            'sales_id'     => $this->input->post('sales_id'),
            'tanggal'      => date('Y-m-d'),
            'total'        => $subtotal,
            'status'       => 'draft',
            'created_by'   => $this->session->userdata('id_user')
        ];

        $order_id = $this->M_order->insert_order($order);

        $detail = [
            'order_id'  => $order_id,
            'produk_id' => $produk_id,
            'qty'       => $qty,
            'subtotal'  => $subtotal
        ];

        $this->M_order->insert_detail($detail);

        redirect('order');
    }

    public function status($id, $status)
    {
        $status_boleh = ['draft', 'dikirim', 'selesai', 'dibatalkan'];

        if(in_array($status, $status_boleh)){
            $this->M_order->update_status($id, $status);
        }

        redirect('order');
    }

    public function detail($id)
    {
        $data['order'] = $this->M_order->get_by_id($id);
        $data['detail'] = $this->M_order->get_detail($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('order/detail', $data);
        $this->load->view('templates/footer');
    }
}