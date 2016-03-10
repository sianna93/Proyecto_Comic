<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Inicio extends CI_Controller{
	
	public function __construct() {
   		parent::__construct();
    		$this->load->helper('url');
    		$this->load->model('mimodelo');
		$this->load->database('default');
  	}

	public function index(){
		
		$data['milista']=$this->mimodelo->get_lista();
		
		$this->load->view('inicio',$data);
	}
}
