<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class COGS extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('Cogs_Model');
    }

    function dashboard(){
      //Data COGS per Area
      $data['fz2_ytd_cogs']   = $this->Cogs_Model->get_fz2_ytd_cogs();

      //Data REV per Area
      $data['fz2_ytd_rev']    = $this->Cogs_Model->get_fz2_ytd_rev();

      //Data COGS REV per Area
      //$data['fz2_ytd_rev']    = $this->Cogs_Model->tes_all();

      //Data Target
      $data['target']           = $this->Cogs_Model->cogs_target();

      //Data COGS Per Klasifikasi
      $data['cogs_klasifikasi']    = $this->Cogs_Model->cogs_klas();

      /*echo "<pre>";
      print_r($data);
      echo "</pre>";*/

      $this->load->view('header');
  		$this->load->view('aside');
  		$this->load->view('cogs/dashboard_cogs', $data);
  		$this->load->view('cogs/footer_cogs', $data);

      //$this->load->view('cogs/formula', $data);
    }

    function evaluasi(){
      //Data COGS Per Klasifikasi
      $data['cogs_klasifikasi']    = $this->Cogs_Model->cogs_klas();

      //Data COGS per Area
      $data['fz2_ytd_cogs']   = $this->Cogs_Model->get_fz2_ytd_cogs();

      //Data REV per Area
      $data['fz2_ytd_rev']    = $this->Cogs_Model->get_fz2_ytd_rev();

      //Data Target
      $data['target']           = $this->Cogs_Model->cogs_target();

      /*echo "<pre>";
      print_r($data);
      echo "</pre>";*/

      $this->load->view('header');
      $this->load->view('aside');
      $this->load->view('cogs/evaluasi_cogs', $data);
      $this->load->view('cogs/footer_cogs', $data);

      //$this->load->view('cogs/formula', $data);
    }

    function import(){
    	$this->load->view('header');
  		$this->load->view('aside');
  		$this->load->view('cogs/import_cogs');
  		$this->load->view('footer');
    }

    function coba(){
      $data['cogs'] = $this->Cogs_Model->get_all();
      $data['bln'] = $this->Cogs_Model->get_cogs();
      $data['rev'] = $this->Cogs_Model->get_rev();
      $this->load->view('cogs/graph5', $data);
    }

    function coba2(){
      $data['cogs'] = $this->Cogs_Model->get_all();
      $data['bln'] = $this->Cogs_Model->get_cogs();
      $data['rev'] = $this->Cogs_Model->get_rev();
      $this->load->view('cogs/graph3', $data);
      $data['cogs'] = $this->Cogs_Model->get_all_data();

      echo "<pre>";
      print_r($data);
      echo "</pre>";
      //$this->load->view('cogs/graph', $data);
    }
}