<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/models/Comic_model.php';

class List_comic extends CI_Controller{
   function __construct()
   {
     parent::__construct();
   }

   function index(){
     $comic_model = new Comic_model();
     $lista['list'] = $comic_model->get();
     $this->load->view('comic_view',$lista);
     
   }

}
