<?php
  Class Cogs_Model extends CI_Model {
    function __construct(){
      $this->load->database();
    }

    function get_all_data(){
      $this->db->from('data_cogs');
      $query  = $this->db->get();
      return $query->result_array();
    }
}
?>