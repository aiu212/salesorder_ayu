<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

    public function get_laporan($tanggal_awal = null, $tanggal_akhir = null, $sales_id = null, $produk_id = null)
    {
        $this->db->select('
            orders.*,
            pelanggan.nama_pelanggan,
            sales.nama_sales,
            produk.nama_produk
        ');

        $this->db->from('orders');
        $this->db->join('pelanggan', 'pelanggan.id = orders.pelanggan_id');
        $this->db->join('sales', 'sales.id = orders.sales_id');
        $this->db->join('order_detail', 'order_detail.order_id = orders.id', 'left');
        $this->db->join('produk', 'produk.id = order_detail.produk_id', 'left');

        if($tanggal_awal && $tanggal_akhir){
            $this->db->where('orders.tanggal >=', $tanggal_awal);
            $this->db->where('orders.tanggal <=', $tanggal_akhir);
        }

        if($sales_id){
            $this->db->where('orders.sales_id', $sales_id);
        }

        if($produk_id){
            $this->db->where('order_detail.produk_id', $produk_id);
        }

        $this->db->group_by('orders.id');
        $this->db->order_by('orders.tanggal', 'DESC');

        return $this->db->get()->result();
    }

    public function get_sales()
    {
        return $this->db->get('sales')->result();
    }

    public function get_produk()
    {
        return $this->db->get('produk')->result();
    }
}