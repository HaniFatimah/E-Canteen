<?php

class M_produk extends CI_Model {
	 
	function tampil_data($table){
        return $this->db->get($table);
    }

    function tambah($table, $field){
        return $this->db->insert($table,$field);
    }
    
    function tampil_id($table,$id){
        return $this->db->get_where($table,$id);
    }
        
    function edit($table,$field,$id){
        $this->db->where($id);
        return $this->db->update($table,$field);
    }

    function hapus($table,$id){
        return $this->db->delete($table,$id);
    }

    function tampil_order($field,$table,$order){
        $this->db->order_by($field,$order);
        return $this->db->get($table);
    }

    function tampil_join($table,$tablejoin,$join,$where){
        $this->db->join($tablejoin,$join);
        $this->db->where($where);
        return $this->db->get($table);
    }

    function total($table,$total,$where){
        $this->db->select('SUM('.$total.')as total');
        $this->db->where($where);
        return $this->db->get($table);
    }

 //cetak 
    public function get_user(){
        $data = $this->db->get('transaksi');
        return $data->result();
    }

    public function count_user(){
        $data = $this->db->get('transaksi');
        return $data->num_rows();
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('transaksi', array('id_transaksi'=>$id))->row();
        return $query;

    }

}
?>