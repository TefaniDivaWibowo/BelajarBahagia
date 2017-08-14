<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('Cogs_Model');
    }

    function index(){
      $this->load->view('login/login');
    }

    function login_cek(){
      $user = $this->input->post('nik');
      $log = $this->input->post('password');

        $data_user = array(
          "username" => $this->input->post('nik'),
          "password" => $this->input->post('password')
        );
        $hasil_login = $this->Cogs_Model->login($data_user);

        if(count($hasil_login)==1){

          $sess = array('user' => $user);
          $this->session->set_userdata($sess);

          $this->session->set_userdata("sudah login", true);
          $this->session->set_userdata("tipe", $hasil_login[0]["tipe_user"]);          
          $this->session->set_userdata("id_user", $hasil_login[0]["username"]);
          $tipe = $hasil_login[0]["tipe_user"];
          /*Untuk kembali ke detail lagi setelah login
          if (!empty($log)){
            redirect('detail/data/' . $log);
          } else{
            redirect('home');
          }*/

          if ($tipe == 'admin') {            
            redirect(base_url());
          } else if ($tipe == 'hr') {
            redirect(base_url('index.php/HrPerformance/import'));
          } else {
          echo "<script>alert('Sukses login ".$hasil_login[0]["tipe_user"]."')</script>";
          }

        } else{
          redirect(base_url('index.php/login'));
        }
    }

    function logout(){
    $this->session->sess_destroy();
    
    redirect(base_url('index.php/login'));
  }

}