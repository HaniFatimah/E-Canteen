 <?php
     Class C_login extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('M_login');
        }
        
        public function index(){
            $data['title'] = "Halaman Login";
            $this->load->view('v_login', $data);
            if ($_POST) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $user = $this->M_login->ceklogin(['username' => $username]);
                //jika user ada
                if ($user) {
                   if ($user->password == $password) {
                    $sessi = [
                       'id_user' => $user->id_user,
                       'nama_user' => $user->nama_user,
                       'level' => $user->level
                    ];
                    $this->session->set_userdata($sessi);
                    redirect(base_url().'C_beranda');
                   }else{
                    echo "<script>alert('Maaf Password Tidak Sesuai')</script>;";
                   }
                }else
                echo "<script>alert('Maaf Username Tidak Terdaftar')</script>;";

            }

        }

}
?>