<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* * *
 * *This class should only display the footer and header of the page
 * *Angular will load the rest of the page
 * *An application can have several layouts 
 * * */

class User_model extends CI_Model {

    public $email;
    public $phone;
    public $remember;
    public $username;
    public $password;

    public function __construct() {
        parent:: __construct();
    }
    
}
