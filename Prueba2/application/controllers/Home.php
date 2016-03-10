<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/models/Usuario.php';
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['usuario'] = $session_data['usuario'];
     $this->load->view('home_view', $data);
     //die('session');
   }
   else
   {
     //If no session, redirect to login page
    //die('regresa login');
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}



?>
