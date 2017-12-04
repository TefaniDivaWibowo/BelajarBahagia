<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LOP extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->library('PHPExcel');
      $this->load->model('modellop');
      $this->load->library('session');
    }

    public function importlop(){ //All data use Data HR Sec 
      $msg    = $this->uri->segment(3);
          $alert  = '';
          if($msg == 'success'){
              $alert  = 'Success!!';
          }
          $data['_alert'] = $alert;

      $this->load->view('header');
      $this->load->view('aside');
      $this->load->view('lop/importfilelop', $data);
      $this->load->view('footer');
    }

    public function importfilelop(){ //Import file
        $fileName = time() . $_FILES['fileImport']['name'];                     // Sesuai dengan nama Tag Input/Upload

        $config['upload_path'] = './fileExcel/';                                // Buat folder dengan nama "fileExcel" di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;

        $this->load->library('upload');
        $this->upload->initialize($config);

        //$this->db->empty_table("data_cogs"); 

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
            
            $data = array(      
                "sc"                => $rowData[0][1],
                "mdf"               => $rowData[0][22],
                "nomor_pots"        => $rowData[0][3],
                "nomor_speedy"      => $rowData[0][2],
                "nama"              => $rowData[0][8],
                "alamat"            => $rowData[0][9],
                "odp"               => $rowData[0][21],
            );

            $sc                = $rowData[0][1];
            $mdf               = $rowData[0][22];
            $nomor_pots        = $rowData[0][3];
            $nomor_speedy      = $rowData[0][2];
            $nama              = $rowData[0][7];
            $alamat            = $rowData[0][8];
            $odp               = $rowData[0][21];
            $sumber_order      = "sc";

            $sql = 'INSERT INTO data_rekon (sc, mdf, nomor_pots, nomor_speedy, nama, alamat, odp, sumber_order) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ON CONFLICT (nomor_speedy) DO UPDATE SET sc = excluded.sc, mdf = excluded.mdf, nomor_pots = excluded.nomor_pots, nama = excluded.nama,  alamat = excluded.alamat, odp = excluded.odp, sumber_order = excluded.sumber_order';

            $query = $this->db->query($sql, array($sc, $mdf, $nomor_pots, $nomor_speedy, $nama, $alamat, $odp, $sumber_order));
            
            //$insert = $this->db->insert("data_rekon", $data);                   // Sesuaikan nama dengan nama tabel untuk melakukan insert data
            //delete_files($media['file_path']);                                  // menghapus semua file .xls yang diupload
        }
        
        redirect(base_url('rekon/importsc/success'));
    } 

    public function importrekonso(){ //All data use Data HR Sec 
      $msg    = $this->uri->segment(3);
          $alert  = '';
          if($msg == 'success'){
              $alert  = 'Success!!';
          }
          $data['_alert'] = $alert;

      $this->load->view('header');
      $this->load->view('aside');
      $this->load->view('rekon/importrekonso', $data);
      $this->load->view('footer');
    }

    public function importfilerekonso(){ //Import file
        $fileName = time() . $_FILES['fileImport']['name'];                     // Sesuai dengan nama Tag Input/Upload

        $config['upload_path'] = './fileExcel/';                                // Buat folder dengan nama "fileExcel" di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;

        $this->load->library('upload');
        $this->upload->initialize($config);

        //$this->db->empty_table("data_cogs"); 

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
            
            $data = array(      
                "sc"                => $rowData[0][1],
                "mdf"               => $rowData[0][22],
                "nomor_pots"        => $rowData[0][3],
                "nomor_speedy"      => $rowData[0][2],
                "nama"              => $rowData[0][8],
                "alamat"            => $rowData[0][9],
                "odp"               => $rowData[0][21],
            );

            $mdf                  = $rowData[0][1];
            $sc                   = $rowData[0][2];
            $nomor_pots           = $rowData[0][3];
            $nomor_speedy         = $rowData[0][4];
            $nama                 = $rowData[0][5];
            $alamat               = $rowData[0][6];
            $odp                  = $rowData[0][7];
            $ont                  = $rowData[0][8];
            $stb                  = $rowData[0][9];
            $zpop                 = $rowData[0][10];
            $zptop                = $rowData[0][11];
            $zptep                = $rowData[0][12];
            $optop                = $rowData[0][13];
            $optep                = $rowData[0][14];
            $toptep               = $rowData[0][15];
            $jenis_kabel          = $rowData[0][16];
            $panjang_kabel        = $rowData[0][17];
            $kelebihan_kabel      = $rowData[0][18];
            $tiang_t7             = $rowData[0][19];
            $roset                = $rowData[0][20];
            $patchcore            = $rowData[0][21];
            $instalasi_stb_kedua  = $rowData[0][22];
            $tgl_va               = $rowData[0][23];
            $tgl_ps               = $rowData[0][24];
            $hasil_ukur_redaman   = $rowData[0][25];
            $jenis_pekerjaan      = $rowData[0][27];

            $sql = 'INSERT INTO data_rekon (mdf, sc, nomor_pots, nomor_speedy, nama, alamat, odp, ont, stb, zpop, zptop, zptep, optop, optep, toptep, jenis_kabel, panjang_kabel, kelebihan_kabel, tiang_t7, roset, patchcore, instalasi_stb_kedua, tgl_va, tgl_ps, hasil_ukur_redaman, jenis_pekerjaan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ON CONFLICT (nomor_speedy) DO UPDATE SET 
              mdf                 = excluded.mdf, 
              sc                  = excluded.sc, 
              nomor_pots          = excluded.nomor_pots, 
              nama                = excluded.nama,  
              alamat              = excluded.alamat, 
              odp                 = excluded.odp,
              ont                 = excluded.ont,
              stb                 = excluded.stb,
              zpop                = excluded.zpop,
              zptop               = excluded.zptop,
              zptep               = excluded.zptep,
              optop               = excluded.optop,
              optep               = excluded.optep,
              toptep              = excluded.toptep,
              jenis_kabel         = excluded.jenis_kabel,
              panjang_kabel       = excluded.panjang_kabel,
              kelebihan_kabel     = excluded.kelebihan_kabel,
              tiang_t7            = excluded.tiang_t7,
              roset               = excluded.roset,
              patchcore           = excluded.patchcore,
              instalasi_stb_kedua = excluded.instalasi_stb_kedua,
              tgl_va              = excluded.tgl_va,
              tgl_ps              = excluded.tgl_ps,
              hasil_ukur_redaman  = excluded.hasil_ukur_redaman,
              jenis_pekerjaan     = excluded.jenis_pekerjaan';

            $query = $this->db->query($sql, array($mdf ,$sc ,$nomor_pots, $nomor_speedy , $nama, $alamat, $odp, $ont, $stb , $zpop, $zptop , $zptep, $optop, $optep, $toptep, $jenis_kabel, $panjang_kabel, $kelebihan_kabel, $tiang_t7, $roset ,$patchcore, $instalasi_stb_kedua, $tgl_va, $tgl_ps, $hasil_ukur_redaman, $jenis_pekerjaan));
            
            //$insert = $this->db->insert("data_rekon", $data);                   // Sesuaikan nama dengan nama tabel untuk melakukan insert data
            //delete_files($media['file_path']);                                  // menghapus semua file .xls yang diupload
        }
        
        redirect(base_url('rekon/importrekonso/success'));
    }    

    public function show_data(){ //All data use Data HR Sec 
      $data['rekon'] = $this->modelrekon->get_all_data('data_rekon');

      $this->load->view('header');
      $this->load->view('aside');
      $this->load->view('rekon/data_rekon', $data);
      $this->load->view('footer');
    }

    public function upload_ba($nomor_speedy){
      $data['datpel'] = $this->modelrekon->getselectdata('data_rekon', $nomor_speedy);  

      $this->load->view('header');
      $this->load->view('aside');
      $this->load->view('rekon/upload_ba', $data);
      $this->load->view('footer');
    }
}
?>