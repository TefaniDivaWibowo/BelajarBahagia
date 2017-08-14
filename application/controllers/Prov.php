<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prov extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('Cari');
    }

    function index(){
      $this->load->view('header');
      $this->load->view('aside');
      $data['target'] = $this->Cari->get_target_prov();
      $this->load->view('prov/table_ps', $data);
      $this->load->view('footer');
    }

     function cari_ps(){
      $this->load->view('header');
      $this->load->view('aside');
      $data['all'] = $this->Cari->get_all();
      $this->load->view('prov/cari_ps', $data);
      $this->load->view('footer');
    }

    public function hasil_ps(){
      $no = $this->input->post('no_inet');
      $this->load->view('header');
      $this->load->view('aside');
      $data['cari'] = $this->Cari->data_ps($no);
      $data['all'] = $this->Cari->get_all();
      /*echo "<pre>";
      print_r($data);
      echo "</pre>";*/
      $this->load->view('prov/cari_ps', $data);
      $this->load->view('footer');
    }

  public function data_prov(){
    $data['psb'] = $this->RevModel->get_all_psb();
    $this->load->view('header');
    $this->load->view('aside');
    $this->load->view('revenue/table_prov', $data);
    $this->load->view('footer');
  }
  
}