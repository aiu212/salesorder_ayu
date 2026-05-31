<?php
class M_buku extends CI_Model {

    public function get_all(){
        $this->db->select('buku.*, kategori.nama_kategori');
        $this->db->from('buku');
        $this->db->join('kategori','kategori.id = buku.kategori_id','left');
        return $this->db->get()->result();
    }

    public function get_by_id($id){
        return $this->db->get_where('buku',['id'=>$id])->row();
    }

    public function insert($data){
        return $this->db->insert('buku',$data);
    }

    public function update($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('buku',$data);
    }

    public function delete($id){
        return $this->db->delete('buku',['id'=>$id]);
    }
}