<?php
  Class HR extends CI_Model {
    function __construct(){
      $this->load->database();
    }

    function get_all_data(){
      $this->db->from('data_hr_sec');   //untuk all data menggunakan Data HR Sec
      $query  = $this->db->get();
      return $query->result_array();
    }

    function get_data_currently($id){
      $query  = $this->db
                ->select('*')
                ->from('data_hr_sec')
                ->where('nik', $id)
                ->get();
      return $query->result_array();
    }

    // Fungsi Update for All
    function update($table, $data, $where){
      $this->db->update($table, $data, $where);
    }
  }
?>