<?php
     Class C_transaksi extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('M_produk');
        }
        
        public function index(){
            $this->load->view('template/sidebar');
            $this->load->view('template/header');
             //mengambil  id transaksi terakhir
             $id_transaksi = $id_transaksi = $this->M_produk->tampil_order('id_transaksi','transaksi','DESC')->row();
             if (empty($id_transaksi)) {
                $data['kode_jual']  = 1;
                $kode['id_transaksi']  = 1;
             }else{
                 $data['kode_jual'] = $id_transaksi->id_transaksi+1;
                 $kode['id_transaksi'] = $id_transaksi->id_transaksi+1;

             }
            //menambahkan sub total
            $data['sub_total'] = $this->M_produk->total('detail_transaksii','total_harga',$kode)->row();
            //menampilkan detail beli
            $data['detail_beli'] = $this->M_produk->tampil_join('product','detail_transaksii','product.id_product=detail_transaksii.id_product	',$kode)->result();
            $data['produk'] = $this->M_produk->tampil_data('product')->result();
            $this->load->view('v_transaksi',$data);
            $this->load->view('template/footer');
            
        }

        public function keranjang(){
            $this->load->view('template/sidebar');
            $this->load->view('template/header');
             //mengambil  id transaksi terakhir
             $id_transaksi = $id_transaksi = $this->M_produk->tampil_order('id_transaksi','transaksi','DESC')->row();
             if (empty($id_transaksi)) {
                $data['kode_jual']  = 1;
                $kode['id_transaksi']  = 1;
             }else{
                 $data['kode_jual'] = $id_transaksi->id_transaksi+1;
                 $kode['id_transaksi'] = $id_transaksi->id_transaksi+1;

             }
            //menambahkan sub total
            $data['sub_total'] = $this->M_produk->total('detail_transaksii','total_harga',$kode)->row();
            //menampilkan detail beli
            $data['detail_beli'] = $this->M_produk->tampil_join('product','detail_transaksii','product.id_product=detail_transaksii.id_product	',$kode)->result();
            $data['produk'] = $this->M_produk->tampil_data('product')->result();
            $this->load->view('v_keranjang',$data);
            $this->load->view('template/footer');
            
        }

               
                    
        public function beliproduk($id){
            ///untuk menampilkan harga satuan
            $where['id_product'] = $id;
            $produk= $this->M_produk->tampil_id('product',$where)->row();

            //mengambil  id transaksi terakhir
            $id_transaksi = $id_transaksi = $this->M_produk->tampil_order('id_transaksi','transaksi','DESC')->row();
            if (empty($id_transaksi)) {
                $kode_jual = 1;
            }else{
                $kode_jual = $id_transaksi->id_transaksi+1;
            }
            //mengecek barang di keranjang
            $wherecek['id_product'] = $id;
            $wherecek['id_transaksi'] = $kode_jual;
            $cektransaksi = $this->M_produk->tampil_id('detail_transaksii',$wherecek)->row();
            if (empty($cektransaksi)) {            
            $field['id_product'] =$id;
            $field['id_transaksi'] =$kode_jual;
            $field['total_harga'] = $produk->harga_product;
            $field['jumlah_beli'] =1;
            $this->M_produk->tambah('detail_transaksii',$field);
            }else{
                $field['jumlah_beli'] = $cektransaksi->jumlah_beli+1;
                $field['total_harga'] =  $field['jumlah_beli']*$produk->harga_product;;
                $this->M_produk->edit('detail_transaksii',$field,$wherecek);
            }
            redirect(base_url().'C_transaksi');
        }

        function hapus($id){
            $this->load->model('M_produk');
            $pecah = explode('-',$id);
            $where['id_transaksi'] = $pecah[0];
            $where['id_product'] = $pecah[1];
            $this->M_produk->hapus('detail_transaksii',$where);
            redirect(base_url().'C_transaksi/keranjang');

        }

        function cekout($id){
            date_default_timezone_set('Asia/Jakarta');
            $this->load->model('M_produk');
            $field['tanggal_transaksi'] = date('Y-m-d H:i:s');
            $field['sub_total'] = $id;
            $field['id_user'] = $_SESSION['id_user'];
            $this->M_produk->tambah('transaksi',$field);
            redirect(base_url().'C_transaksi/keranjang');

        }


        public function data_transaksi(){
            $this->load->view('template/sidebar');
            $this->load->view('template/header');
            $data['transaksi'] = $this->M_produk->tampil_data('transaksi')->result();
            $this->load->view('v_datatrans',$data);
            $this->load->view('template/footer');
            
        }

        public function data_in(){
            $this->load->view('template/sidebar');
            $this->load->view('template/header');
            $data['transaksi'] = $this->M_produk->tampil_data('transaksi')->result();
            $this->load->view('v_invoice',$data);
            $this->load->view('template/footer');
            
        }



        public function pdf_preview(){
            $data['transaksi'] = $this->M_produk->count_user();
            $data['transaksi'] = $this->M_produk->get_user();
            $this->load->view('v_pdf_preview',$data);
        
        }

        public function cetak(){
            ob_start();
            $data['transaksi'] = $this->M_produk->count_user();
            $data['transaksi'] = $this->M_produk->get_user();
            $this->load->view('v_pdf_preview',$data);
            $html = ob_get_contents();
                    ob_end_clean();
    
            require './assets/html2pdf/autoload.php';
    
            $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
            $pdf->WriteHTML($html);
            $pdf->Output('Data_Transaksi_'.date('d-m-Y').'.pdf','D');
        }
    

        public function detail($id){
            $this->load->model('M_produk');
            $detail = $this->M_produk->detail_data($id);
            $data['detail'] = $detail;
            $this->load->view('template/sidebar');
            $this->load->view('template/header');
            $this->load->view('v_detail',$data);
            $this->load->view('template/footer');
        }

        public function cetak_invoice($id_transaksi){
            $data['data'] = $this->db->get_where('transaksi',['id_transaksi'=>$id_transaksi])->row();
            $this->load->view('v_cetakin',$data);

        }

}
?>