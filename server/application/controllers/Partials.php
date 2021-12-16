<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/***
  **This class should only display the footer and header of the page
  **Angular will load the rest of the page
  **An application can have several layouts 
***/

class Partials extends CI_Controller {
	//Add other pages which requires different layout her
	public function login(){
		$this->load->view('partials/login.php');
	}
        public function register(){
		$this->load->view('partials/register.php');
	}
	


}
