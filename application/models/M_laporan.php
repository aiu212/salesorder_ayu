<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

    public function get_laporan()
    {
        $this->db->select('orders.*, pelanggan.nama_pelanggan, sales.nama_sales');
        $this->db->from('orders');
        $this->db->join('pelanggan', 'pelanggan.id = orders.pelanggan_id');
        $this->db->join('sales', 'sales.id = orders.sales_id');
        $this->db->order_by('orders.tanggal', 'DESC');

        return $this->db->get()->result();
    }
}