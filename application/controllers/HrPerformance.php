<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HrPerformance extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('hr');
    }

	public function index()
	{
		$data['data_hr'] 	= $this->hr->get_all_data(); //All data use Data HR Sec 
		$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('hr/data_hr', $data);
		$this->load->view('footer');
	}

	public function detail($id){
		$data['data_hr'] 	= $this->hr->get_data_currently($id); //All data use Data HR Sec 
		$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('hr/detail_data_hr', $data);
		$this->load->view('footer');
	}

	public function view_edit($id){
		$data['data_hr'] 	= $this->hr->get_data_currently($id); //All data use Data HR Sec 
		$this->load->view('header');
		$this->load->view('aside');
		$this->load->view('hr/edit_data_hr', $data);
		$this->load->view('footer');
	}

	public function edit()
	{
		$data = array(
			'object_id' 		=> $this->input->post('object_id'),
            'nama' 				=> $this->input->post('nama'),
            'position_name' 	=> $this->input->post('position_name'),
            'psa' 				=> $this->input->post('psa'),
            'witel' 			=> $this->input->post('witel'),
            'teritory' 			=> $this->input->post('teritory'),
            'regional' 			=> $this->input->post('regional'),
            'level' 			=> $this->input->post('level'),
            'bizpart_id' 		=> $this->input->post('bizpart_id'),
            'direktorat' 		=> $this->input->post('direktorat'),
            'unit' 				=> $this->input->post('unit'),
            'sub_unit' 			=> $this->input->post('sub_unit'),
            'group'				=> $this->input->post('group'),
            'group_fungsi' 		=> $this->input->post('group_fungsi'),
            'cost_center' 		=> $this->input->post('cost_center'),
            'status_pgs' 		=> $this->input->post('status_pgs')
        );

        $where = array(
            'nik' 				=> $this->input->post('nik')
    	);

    	$this->hr->update('data_hr', $data, $where);
    	$this->hr->update('data_hr_sec', $data, $where);


	}
}