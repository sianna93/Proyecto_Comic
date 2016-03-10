<?php 

require_once 'application/models/Usuario.php';
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('usuario');
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('url', 'form'));
        $this->load->database('default');
	}
	function index(){
		$this->load->helper(array('form'));
		$this->load->view('login_view');
	}

}

?>
