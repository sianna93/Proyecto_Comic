<?php

require_once 'system/core/Model.php';

class Comic_model extends CI_Model{

  function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }


  function get() {
    return $this->db->get('comic')->result_array();
  }
}
?>