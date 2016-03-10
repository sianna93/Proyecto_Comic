<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'system/core/Model.php';
Class Usuario extends CI_Model{

	function login($usuario,$contrasena){
		$this->db->select('id,usuario,contrasena');
		$this->db->from('usuarios');
		$this->db->where('usuario',$usuario);
		$this->db->where('contrasena',MD5($contrasena));
		$this->db->limit(1);

		$query = $this->db->get();
		
		//print($query);
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}
}
?>
		
