<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HrPerformance extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->library('PHPExcel');
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

	public function import(){ //All data use Data HR Sec 
		$msg    = $this->uri->segment(3);
        $alert  = '';
        if($msg == 'success'){
            $alert  = 'Success!!';
        }
        $data['_alert'] = $alert;

        $this->load->view('header');
		$this->load->view('aside');
		$this->load->view('hr/import_data_hr', $data);
		$this->load->view('footer');
	}

    public function importfile(){ //Import file
        $fileName = time() . $_FILES['fileImport']['name'];                     // Sesuai dengan nama Tag Input/Upload

        $config['upload_path'] = './fileExcel/';                                // Buat folder dengan nama "fileExcel" di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('fileImport'))
            $this->upload->display_errors();

        $media = $this->upload->data('fileImport');
        $inputFileName = './fileExcel/' . $media['file_name'];

        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }

        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

        for ($row = 2; $row <= $highestRow; $row++) {                           // Read a row of data into an array                 
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
            
            $data = array(                                                      // Sesuaikan sama nama kolom tabel di database
                "object_id"     => $rowData[0][0],
                "position_name" => $rowData[0][1],
                "nik"           => $rowData[0][2],
                "nama"          => $rowData[0][3],
                "psa"           => $rowData[0][4],
                "witel"         => $rowData[0][5],
                "teritory"      => $rowData[0][6],
                "regional"      => $rowData[0][7],
                "level"         => $rowData[0][8],
                "bizpart_id"    => $rowData[0][9],
                "direktorat"    => $rowData[0][10],
                "unit"          => $rowData[0][11],
                "sub_unit"      => $rowData[0][12],
                "group"         => $rowData[0][13],
                "sub_group"     => $rowData[0][14],
                "group_fungsi"  => $rowData[0][15],
                "cost_center"   => $rowData[0][16],
                "status_pgs"    => $rowData[0][17]
            );
            
            $insert = $this->db->insert("data_hr", $data);                   // Sesuaikan nama dengan nama tabel untuk melakukan insert data
            delete_files($media['file_path']);                                  // menghapus semua file .xls yang diupload
        }
        
        redirect(base_url('HrPerformance/import/success'));
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

	//PIK START
	 public function ajax_list()
    {
        $list = $this->hr->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $haer) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $haer->nik;
            $row[] = $haer->nama;
            $row[] = $haer->position_name;
            $row[] = $haer->psa;
            $row[] = $haer->direktorat;
            $row[] = $haer->unit;
            $row[] = $haer->sub_unit;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->customers->count_all(),
                        "recordsFiltered" => $this->customers->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 //PIK END
}