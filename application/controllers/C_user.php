<?php
     Class C_user extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('M_crud');
        }
        
        public function index(){
            $this->load->view('template/sidebar');
            $this->load->view('template/header');
            $data['users'] = $this->M_crud->tampil('users')->result();

            // $kode['id_user'] = $id;
            // $data['edit'] = $this->M_crud->tampil_id($users, $kode)->row();

            $this->load->view('v_user',$data);
            if ($_POST) {
                $field['nama_user']= $this->input->post('nama_user');
                $field['username']= $this->input->post('username');
                $field['password']= $this->input->post('password');
                $field['level']= 1;
                 $this->M_crud->tambah('users',$field);
                 redirect(base_url().'C_user');
            }
            $this->load->view('template/footer');
            
        }

               
        public function edit($id){
            $this->load->view('template/sidebar');
            $this->load->view('template/header');
            $kode['id_user'] = $id;
            $data['edit'] = $this->M_crud->tampil_id('users', $kode)->row();
            $this->load->view('v_edituser',$data);
            if ($_POST) {
                $field['nama_user']= $this->input->post('nama_user');
                $field['username']= $this->input->post('username');
                if (empty($this->input->post('password'))) {
                    $field['password']= $this->input->post('password_lama');
                }else{
                    $field['password']= $this->input->post('password');
                }
                
                $field['level']= 1;
                 $this->M_crud->edit('users',$field,$kode);
                 redirect(base_url().'C_user');
            }
            $this->load->view('template/footer');
            
        }

        public function hapus($id){
            $this->load->model('M_crud');
            $kode['id_user'] = $id;
            $this->M_crud->hapus("users", $kode);
            redirect(base_url().'C_user');

        }



}
?>