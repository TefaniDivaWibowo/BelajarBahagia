<?php
  Class Cogs_Model extends CI_Model {
    function __construct(){
      $this->load->database();
    } 

    function login($data){
    $query = $this->db->get_where("data_user", $data);
    return $query->result_array();
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
    
    function get_fz2_ytd_cogs(){
      $query = $this->db
                    ->select('area, SUM(amount_in_doc_curr) as cogs')
                    ->from('data_cogs')
                    ->where('group_tipe', 'COGS')
                    ->group_by('area')
                    ->order_by('area', 'asc')
                    ->get();
      return $query->result();
    }

    function get_fz2_ytd_rev(){
      $query = $this->db
                    ->select('area, SUM(amount_in_doc_curr) as rev')
                    ->from('data_cogs')
                    ->where('group_tipe', 'Pendapatan')
                    ->group_by('area')
                    ->order_by('area', 'asc')
                    ->get();
      return $query->result();
    }

    function tes_all(){
      /*$query = $this->db
                    ->select('SUM(amount_in_doc_curr) as rev')
                    ->from('data_cogs')
                    ->group_by('group')
                    ->group_by('area')
                    ->get();*/
      $query  = $this->db->query('SELECT area, SUM(amount_in_doc_curr FROM data_cogs WHERE group_tipe = "Pendapatan" GROUP BY area), SUM(amount_in_doc_curr FROM data_cogs WHERE group_tipe = "COGS" GROUP BY area)');
      return $query->result();
    }

    function cogs_klas(){
      $query = $this->db
                    ->select('area, klasifikasi, SUM(amount_in_doc_curr) as total')
                    ->from('data_cogs')
                    ->where('area', 'JEMBER')
                    ->where('klasifikasi !=', ' ')
                    ->where('group_tipe', 'COGS')
                    ->group_by('area')
                    ->group_by('klasifikasi')
                    ->order_by('klasifikasi', 'asc')
                    ->get();
      return $query->result_array();

      /*
        ->where('area', 'JEMBER')
      */
    }

    function cogs_target(){
      $bultah1  = "01" . date('Y');
      $bultah   = date('mY');
      $query    = $this->db->query("SELECT area, SUM(target) as target FROM data_target WHERE bultah BETWEEN '$bultah1' AND '$bultah' GROUP BY area ORDER BY area");
      return $query->result_array();
    }
}
?>