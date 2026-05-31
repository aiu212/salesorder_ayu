<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

    public function total_produk()
    {
        return $this->db->count_all('produk');
    }

    public function total_pelanggan()
    {
        return $this->db->count_all('pelanggan');
    }

    public function total_order()
    {
        return $this->db->count_all('orders');
    }

    public function total_penjualan()
    {
        $this->db->select_sum('total');
        $query = $this->db->get('orders')->row();

        return $query->total ?? 0;
    }
}