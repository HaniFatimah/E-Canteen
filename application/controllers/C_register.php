<?php
     Class C_register extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('M_register');
        }
        
        public function index(){
            $data['title'] = "Halaman Register";
            $this->load->view('v_regis', $data);
            if ($_POST) {
                $field['nama_user']= $this->input->post('nama_user');
                $field['username']= $this->input->post('username');
                $field['password']= $this->input->post('password');
                $field['level']=3;
                 $this->M_register->tambah('users',$field);
                 redirect(base_url().'C_login');
            }

        }

}
?>