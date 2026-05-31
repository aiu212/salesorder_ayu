<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sales extends CI_Model {

    public function get_all()
    {
        return $this->db->get('sales')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('sales', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('sales', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('sales', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('sales', ['id' => $id]);
    }
}