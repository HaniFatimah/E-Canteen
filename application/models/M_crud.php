<?php

class M_crud extends CI_Model {
	 
	function tampil($table){
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

   
}
