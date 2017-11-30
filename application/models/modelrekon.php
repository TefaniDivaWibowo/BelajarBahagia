<?php
  Class Modelrekon extends CI_Model {
    function __construct(){
      $this->load->database();
    }

    //get all data
    function get_all_data($tabel){
      $this->db->from($tabel);
      $query  = $this->db->get();
      return $query->result_array();
    }

    function getnospeedy($tabel){
      $this->db->select('nomor_speedy')
               ->from($tabel);
      $query  = $this->db->get();
      return $query->result_array();
    }

    function getselectdata($tabel, $data){
      $this->db->select('*')
               ->from($tabel)
               ->where('nomor_speedy', $data);
      $query  = $this->db->get();
      return $query->result_array();
    }
  }
?>