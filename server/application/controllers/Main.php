<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* * *
 * *This class should only display the footer and header of the page
 * *Angular will load the rest of the page
 * *An application can have several layouts 
 * * */

class Main extends CI_Controller {

    protected $auth;
    protected $userid;
    protected $applicantid;

    public function __construct() {

        parent::__construct();
        $this->load->model('Application_model');
        $this->load->library('Aauth');
    }

    public function _remap($method, $args = array()) {

        switch ($method) {
            case 'index':
                if ($this->aauth->is_loggedin()) {

                    $this->$method();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'login':
                    $this->$method();
                break;
            case 'welcome':

                if ($this->aauth->is_loggedin()) {
                    $this->welcome();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'approot':

                if ($this->aauth->is_loggedin()) {
                    $this->approot();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'instruction':

                if ($this->aauth->is_loggedin()) {
                    $this->instruction();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'personalinformation':

                if ($this->aauth->is_loggedin()) {
                    $this->personalinformation();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'family':

                if ($this->aauth->is_loggedin()) {
                    $this->family();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'institutionhistory':

                if ($this->aauth->is_loggedin()) {
                    $this->institutionhistory();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'alevel':

                if ($this->aauth->is_loggedin()) {
                    $this->alevel();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'olevel':

                if ($this->aauth->is_loggedin()) {
                    $this->olevel();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'wassce':

                if ($this->aauth->is_loggedin()) {
                    $this->wassce();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'transfer':

                if ($this->aauth->is_loggedin()) {
                    $this->transfer();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'maturehncdiploma':

                if ($this->aauth->is_loggedin()) {
                    $this->maturehncdiploma();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'programselection':

                if ($this->aauth->is_loggedin()) {
                    $this->programselection();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'miscellaneous':

                if ($this->aauth->is_loggedin()) {
                    $this->miscellaneous();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'declaration':

                if ($this->aauth->is_loggedin()) {
                    $this->declaration();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'affirmation':
                if ($this->aauth->is_loggedin()) {
                    $this->affirmation();
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'completion':
                if ($this->aauth->is_loggedin()) {
                    $this->completion();
                } else {
                    $this->load->view('layout/login.php');
                }

                break;
            case 'application':
                if ($this->aauth->is_loggedin()) {

                    $this->application($args[0]);
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'createpdf':
                if ($this->aauth->is_loggedin()) {

                    $this->createpdf($args[0]);
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            case 'createdeclarationpdf':
                if ($this->aauth->is_loggedin()) {

                    $this->createdeclarationpdf($args[0]);
                } else {
                    $this->load->view('layout/login.php');
                }
                break;
            default:
                $this->load->view('errors/html/error_404.php');
                break;
        }
    }

    //Index is the default page layout
    public function index() {
        //$this->load->view('layout/home.php');
        //Update the session variable
        if ($this->aauth->is_admin()) {
             $this->load->view('partials/admin/welcome_admin.php');
        } else if ($this->aauth->is_member('registrar')) {
            $this->load->view('layout/home.php');
        }else {
            $this->load->view('layout/home.php');
        }
    }

    private function register() {
        $this->load->view('layout/register.php');
    }
    

    private function login () {
        $this->load->view("layout/login.php");
    }

    private function affirmation() {
        $this->load->view('partials/affirmation.php');
    }

    private function welcome() {
        //check if the person is an admin
        if ($this->aauth->is_admin()) {
            $this->load->view('layout/home.php');
        } else if ($this->aauth->is_member('registrar')) {
            $this->load->view('layout/home.php');
        } else {
            $this->load->view('layout/welcome.php');
        }
    }

    private function approot() {
        if ($this->aauth->is_admin()) {
            //$this->load->view('layout/home.php');
             $this->load->view('partials/admin/welcome_admin.php');
        } else if ($this->aauth->is_member('registrar')) {
            $this->load->view('partials/admin/welcome_registrar.php');
        }else {
            $this->load->view('layout/welcome.php');
        }
    }

    public function alevel() {
        $this->load->view('partials/alevel.php');
    }

    public function declaration() {
        $this->load->view('partials/declaration.php');
    }

    public function completion() {
        $this->load->view('partials/completion.php');
    }

    public function family() {
        $this->load->view('partials/family.php');
    }

    public function institutionhistory() {
        $this->load->view('partials/institutionhistory.php');
    }

    public function instruction() {
        $this->load->view('partials/instruction.php');
    }

    public function maturehncdiploma() {
        $this->load->view('partials/maturehncdiploma.php');
    }

    public function miscellaneous() {
        $this->load->view('partials/miscellaneous.php');
    }

    public function olevel() {
        $this->load->view('partials/olevel.php');
    }

    public function personalinformation() {
        //Check if user is alread an applicant
        $this->load->view('partials/personalinformation.php');
    }

    public function programselection() {
        $this->load->view('partials/programselection.php');
    }

    public function transfer() {
        $this->load->view('partials/transfer.php');
    }

    public function wassce() {
        $this->load->view('partials/wassce.php');
    }

    public function application($id) {
        //Generate application html for user
        echo $this->Application_model->GenerateApplicationHtml($id);
    }

    public function createpdf($id) {
        $this->Application_model->GenerateApplicationPdf($id);
    }

    public function createdeclarationpdf($id) {
        $this->Application_model->GenerateDeclarationPDF($id);
    }

    public function error404() {
        $this->load->view('errors/html/error_404.php');
    }

}
