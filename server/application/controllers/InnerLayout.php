<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/***
  **This class should only display the footer and header of the page
  **Angular will load the rest of the page
  **An application can have several layouts 
***/

class InnerLayout extends CI_Controller {
	//Add other pages which requires different layout here
	public function index(){
		$this->load->view('layout/innerlayout.php');
	}
	
	

}
