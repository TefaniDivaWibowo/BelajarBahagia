<?php
  Class Cogs_Model extends CI_Model {
    function __construct(){
      $this->load->database();
    }

    function get_all(){
      $this->db->from('data_cogs');
      $query  = $this->db->get();
      return $query->result_array();
    }

    function get_jan(){
      $query = $this->db
                    ->select('SUM(amount_in_doc_curr) as total')
                    ->from('data_cogs')
                    ->where('posting_period', '1')
                    ->get();
      return $query->row()->total;
    }

    function get_cogs(){
      $query = $this->db
                    ->select('SUM(amount_in_doc_curr) as total')
                    ->from('data_cogs')
                    ->where('group_tipe', 'COGS')
                    // ->where('posting_period', '2')
                    ->group_by('posting_period')
                    ->order_by('posting_period', 'asc')
                    ->get();
      return $query->result_array();
    }

    function get_rev(){
      $query = $this->db
                    ->select('SUM(amount_in_doc_curr) as total')
                    ->from('data_cogs')
                    ->where('group_tipe', 'Pendapatan')
                    // ->where('posting_period', '2')
                    ->group_by('posting_period')
                    ->order_by('posting_period', 'asc')
                    ->get();
      return $query->result_array();
    }
}
?>