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
    	$this->load->view('header');
  		$this->load->view('aside');
  		$this->load->view('cogs/dashboard_cogs');
  		$this->load->view('footer');
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
    }
}