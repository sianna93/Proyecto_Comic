<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mimodelo extends CI_Model{
	
	public function __contruct(){
		parent::__construct();
	}	

	public function get_lista() {
		$this->db->select('*')->from('mitabla');
		return $this->db->get()->result();
	}
}
