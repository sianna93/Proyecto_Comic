<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 	function __construct()
 	{
 	  parent::__construct();
 	  $this->load->helper('url','form');
 	  $this->load->model('usuario','',TRUE);
 	  $this->load->database('default');
 	}

 	function index()
 	{
 	  //This method will have the credentials validation
 	  $this->load->library('form_validation');
	
	  $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|xss_clean');
	  $this->form_validation->set_rules('contrasena', 'Contrasena', 'trim|required|xss_clean|callback_check_database');
	
	  if($this->form_validation->run() == FALSE)
 	  {
 	    //Field validation failed.  User redirected to login page
 	    //die();
 	    $this->load->view('login_view');
 	  }
 	  else {
 	    //Go to private area
 	    //die('home');
 	    redirect('home','refresh');
 	  }

 	}

 	function check_database($contrasena)
 	{
 	  //Field validation succeeded.  Validate against database
 	  $usuario = $this->input->post('usuario');
	
	   //query the database
	   $result = $this->usuario->login($usuario, $contrasena);
	
	   if($result)
	   {
	     $sess_array = array();
	     foreach($result as $row)
	     {
	       $sess_array = array(
	         'id' => $row->id,
	         'usuario' => $row->usuario
	       );
	       $this->session->set_userdata('logged_in', $sess_array);
	     }
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     return false;
	    }
 	}
}
?>

