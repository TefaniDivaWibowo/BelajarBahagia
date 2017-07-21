<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssurancePerformance extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('AssPer');
    }

    public function data_open(){
    	$data['data_open'] 	= $this->AssPer->get_all_data('data_open');
    	$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('assurance_performance/data_open', $data);
		$this->load->view('footer');
    }

	public function import_open()
	{
		$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('assurance_performance/import_data_open');
		$this->load->view('footer');
	}

	public function report_month_open()
	{
		$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('assurance_performance/report_month_open');
		$this->load->view('footer');
	}

	public function report_ytd_open()
	{
		$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('assurance_performance/report_ytd_open');
		$this->load->view('footer');
	}

	public function data_close(){
    	$data['data_close'] 	= $this->AssPer->get_all_data('data_close');
    	$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('assurance_performance/data_close', $data);
		$this->load->view('footer');
    }

	public function import_close()
	{
		$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('assurance_performance/import_data_close');
		$this->load->view('footer');
	}

	public function report_month_close()
	{
		$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('assurance_performance/report_month_open');
		$this->load->view('footer');
	}

	public function report_ytd_close()
	{
		$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('assurance_performance/report_ytd_close');
		$this->load->view('footer');
	}

}