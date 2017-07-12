<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchSN extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('search');
    }

	public function index()
	{
		$data['data_sn'] 	= $this->search->get_all_data();
		$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('search/search_sn', $data);
		$this->load->view('footer');
	}

	public function search_sn()
	{
			$sn 				= $this->input->post('sn');
			$data['no_sn']		= $sn;
			$data['data_sn'] 	= $this->search->get_data($sn);	
			$this->load->view('header');
			$this->load->view('aside');
			$this->load->view('search/result_search_sn', $data);
			$this->load->view('footer');	
	}
}