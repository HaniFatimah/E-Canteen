<?php
     Class C_produk extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('M_produk');
        }
        
        public function index(){
            $this->load->view('template/sidebar');
            $this->load->view('template/header');
            $data['produk'] = $this->M_produk->tampil_data('product')->result();
            $this->load->view('v_produk',$data);
            if ($_POST) {
                $field['nama_product']= $this->input->post('nama_product');
                $field['harga_product']= $this->input->post('harga_product');
                $field['stok_product']= $this->input->post('stok_product');
   
                $this->M_produk->tambah('product',$field);
                redirect(base_url().'C_produk');
            }
            $this->load->view('template/footer');
            
        }

               
        public function edit_produk($id){
            $this->load->view('template/sidebar');
            $this->load->view('template/header');
            $kode['id_product'] = $id;
            $dataa['edit'] = $this->M_produk->tampil_id('product', $kode)->row();
            $this->load->view('v_editproduk',$dataa);
            if ($_POST) {
                $field['nama_product']= $this->input->post('nama_product');
                $field['harga_product']= $this->input->post('harga_product');             
                $field['stok_product']= $this->input->post('stok_product'); 


                 $this->M_produk->edit('product',$field,$kode);
                 redirect(base_url().'C_produk');
            }
            $this->load->view('template/footer');
            
        }

        public function hapus_produk($id){
            $this->load->model('M_produk');
            $kode['id_product'] = $id;
            $this->M_produk->hapus("product", $kode);
            redirect(base_url().'C_produk');

        }



}
?>