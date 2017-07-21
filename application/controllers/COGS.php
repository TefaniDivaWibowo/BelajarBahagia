<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class COGS extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('search');
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
}