<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_order extends CI_Model {

    public function get_all()
    {
        $this->db->select('orders.*, pelanggan.nama_pelanggan, sales.nama_sales');
        $this->db->from('orders');
        $this->db->join('pelanggan', 'pelanggan.id = orders.pelanggan_id');
        $this->db->join('sales', 'sales.id = orders.sales_id');

        return $this->db->get()->result();
    }

    public function insert_order($data)
    {
        $this->db->insert('orders', $data);
        return $this->db->insert_id();
    }

    public function insert_detail($data)
    {
        return $this->db->insert('order_detail', $data);
    }

    public function get_produk()
    {
        return $this->db->get('produk')->result();
    }

    public function get_pelanggan()
    {
        return $this->db->get('pelanggan')->result();
    }

    public function get_sales()
    {
        return $this->db->get('sales')->result();
    }

    public function update_status($id, $status)
    {
        $this->db->where('id', $id);

        return $this->db->update('orders', [
            'status' => $status
        ]);
    }

    public function get_by_id($id)
    {
        $this->db->select('orders.*, pelanggan.nama_pelanggan, pelanggan.alamat, pelanggan.telp, sales.nama_sales');
        $this->db->from('orders');
        $this->db->join('pelanggan', 'pelanggan.id = orders.pelanggan_id');
        $this->db->join('sales', 'sales.id = orders.sales_id');
        $this->db->where('orders.id', $id);

        return $this->db->get()->row();
    }

    public function get_detail($id)
    {
        $this->db->select('order_detail.*, produk.kode_produk, produk.nama_produk, produk.harga');
        $this->db->from('order_detail');
        $this->db->join('produk', 'produk.id = order_detail.produk_id');
        $this->db->where('order_detail.order_id', $id);

        return $this->db->get()->result();
    }
}