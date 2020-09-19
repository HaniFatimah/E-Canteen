<?php

class M_register extends CI_Model {
	 
	function tampil($table){
        return $this->db->get($table);
    }

    function tambah($table, $field){
        return $this->db->insert($table,$field);
    }

   
}
