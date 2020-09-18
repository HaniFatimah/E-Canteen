<?php
     Class C_beranda extends CI_Controller{

        // public function __construct(){
        //     parent::__construct();
        //     $this->load->model('M_login');
        // }
        
        public function index(){
            $this->load->view('template/sidebar');
            $this->load->view('template/header');
            $this->load->view('beranda');
            $this->load->view('template/footer');
            
        }

        function logout(){
            $this->session->sess_destroy();
            redirect('C_login');
        }

}
?>