<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->library('PHPExcel');
      $this->load->model('cogs_model');
      $this->load->library('session');
    }

    public function index() {

      //Data COGS per Area for Dashboard
      $data['fz2_ytd_cogs']           = $this->cogs_model->get_fz2_ytd_cogs();

      //Data REV per Area for Dashboard
      $data['fz2_ytd_rev']            = $this->cogs_model->get_fz2_ytd_rev();

      //Data Target for Dashboard
      $data['target']                 = $this->cogs_model->cogs_target();

      //Data COGS Per Klasifikasi
      $data['cogs_klasifikasi']    = $this->cogs_model->cogs_klas();

      /*echo "<pre>";
      print_r($data['fz2_ytd_cogs']);
      echo "</pre>";*/

        $this->load->view('header');
        $this->load->view('aside');
        $this->load->view('dashboard', $data);
        $this->load->view('footer_dashboard', $data);

    }
    
}
