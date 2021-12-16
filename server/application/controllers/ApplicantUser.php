<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* * *
 * *This class should only display the footer and header of the page
 * *Angular will load the rest of the page
 * *An application can have several layouts 
 * * */

class ApplicantStruct {

    public $name;
    public $id;
    public $nationality;
    public $gender;
    public $email;
    public $sectionno;
    public $processed;

}

class ApplicantUser extends CI_Controller {

    protected $applicantExist = false;
    protected $applicantid = "";
    protected $userid = '';
    protected $sectionno = "";
    protected $academicResult;
    protected $applicant;

    public function __construct() {
        parent::__construct();

        $this->load->model('Applicant_model');
        $this->load->database();
        $this->load->library('Aauth');
        $this->load->model('Files_model', 'files');

        $this->userid = $this->input->post('id');
        $this->applicantid = $this->input->post('applicantid');
        $this->isApplicant();
        //die($this->applicantid);
        $this->applicant = array();
    }

    private function isApplicant() {
        if (empty($this->applicantid) &&
                empty($this->userid)) {
            $this->applicantid = null;
            $this->applicantExist = false;
            $this->sectionno = null;

            return;
        }

        if ($this->aauth->is_member("registrar") || $this->aauth->is_admin()) {
            $this->applicantid = null;
            $this->applicantExist = false;
            $this->sectionno = null;
            return;
        }

        $query = "";
        if (!empty($this->userid)) {
            $this->db->where("userid", $this->userid);
            $query = $this->db->get("applicants");
        } else if (!empty($this->applicantid)) {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->get("applicants");
        } else {
            $this->applicantExist = true;
        }

        // print_r($query->result());
        //die($id);
        //die("isApplicant");
        foreach ($query->result() as $row) {
            $this->applicantid = $row->applicantid;
            //die($this->applicantid);
            $this->applicantExist = true;
            //die("hello'");
            $this->sectionno = $row->sectionno;
            break;
        }
    }

    private function hasInfoIn($table) {
        //die("has info");
        $this->db->where("applicantid", $this->applicantid);
        $query = $this->db->get($table);
        //die("isApplicant");
        foreach ($query->result() as $row) {
            return true;
        }
        //die("false");
        return false;
    }

    //Index is the default page layout
    public function savepersonalinfo() {
        if ($this->aauth->is_loggedin()) { //if you are logged in
            //if($this->applicantExist)die("heerrrr");
            if ($this->applicantExist && $this->hasInfoIn('personalinformation')) {

                //update user
                $this->Applicant_model->UpdatePersonalInformation($this->applicantid);

                echo json_encode(array("Succeeded" => true, "msg" => "Personal information updated successful"));
                return;
            } else {
                //Add new user records
                $this->Applicant_model->AddPersonalInformation($this->applicantid); //update session table
                $this->Applicant_model->SetSection(1);
                echo json_encode(array("Succeeded" => true, "msg" => "Personal information added successful"));
                return;
            }
        }
        echo json_encode(array("Succeeded" => false, "msg" => "Error occured saving information"));
    }

    public function savefamilyinfo() {
        if ($this->aauth->is_loggedin()) { //if you are logged in
            if ($this->applicantExist && $this->hasInfoIn('familyinformation')) {
                //update user
                $this->Applicant_model->UpdateFamilyInformation($this->applicantid);

                echo json_encode(array("Succeeded" => true, "msg" => "Family information updated successful"));
                return;
            } else {
                //Add new user records
                $this->Applicant_model->AddFamilyInformation($this->applicantid); //update session table
                $this->Applicant_model->SetSection(2);
                echo json_encode(array("Succeeded" => true, "msg" => "Family information added successful"));
                return;
            }
        }
        echo json_encode(array("Succeeded" => false, "msg" => "Error occured saving information"));
    }

    public function saveeducationinfo() {
        //die($this->applicantid);
        if ($this->aauth->is_loggedin()) { //if you are logged in
            if ($this->applicantExist && $this->hasInfoIn('educationinformation')) {

                //update user
                $this->Applicant_model->UpdateEducationInformation($this->applicantid);

                echo json_encode(array("Succeeded" => true, "msg" => "Education history  updated successful"));
                //return;
            } else {
                //die("here");
                //Add new user records
                $this->Applicant_model->AddEducationInformation($this->applicantid); //update session table
                $this->Applicant_model->SetSection(3);
                json_encode(array("Succeeded" => true, "msg" => "Education history added successful"));
                //return;
            }
        }
        // echo json_encode(array("Succeeded" => false, "msg" => "Error occured saving information"));
    }

    public function saveprograms() {

        if ($this->aauth->is_loggedin()) { //if you are logged in
            if ($this->applicantExist && $this->hasInfoIn('programs')) {

                //update user
                $this->Applicant_model->UpdatePrograms($this->applicantid);

                echo json_encode(array("Succeeded" => true, "msg" => "Program information has been  updated successfully"));
                // return;
            } else {
                $this->Applicant_model->AddPrograms($this->applicantid);
                $this->Applicant_model->SetSection(5);
                echo json_encode(array("Succeeded" => true, "msg" => "Program information is added successfully"));
                //return;
            }
        }
        // echo json_encode(array("Succeeded" => false, "msg" => "Error occured saving information"));
    }

    public function savemiscellaneous() {

        if ($this->aauth->is_loggedin()) { //if you are logged in
            if ($this->applicantExist && $this->hasInfoIn('miscellaneous')) {

                //update user
                $this->Applicant_model->UpdateMiscellaneous($this->applicantid);

                echo json_encode(array("Succeeded" => true, "msg" => "Information has been  updated successful"));
                // return;
            } else {
                $this->Applicant_model->AddMiscellaneous($this->applicantid);
                $this->Applicant_model->SetSection(6);
                echo json_encode(array("Succeeded" => true, "msg" => "Information is added successful"));
                //return;
            }
        }
        // echo json_encode(array("Succeeded" => false, "msg" => "Error occured saving information"));
    }

    public function savedeclaration() {
        if ($this->aauth->is_loggedin()) { //if you are logged in
            if ($this->applicantExist && $this->hasInfoIn('declarations')) {

                //update user
                $this->Applicant_model->UpdateDeclaration($this->applicantid);

                echo json_encode(array("Succeeded" => true, "msg" => "You have agree to the terms and conditions of anuc application"));
                // return;
            } else {
                $this->Applicant_model->AddDeclaration($this->applicantid);
                $this->Applicant_model->SetSection(7);
                echo json_encode(array("Succeeded" => true, "msg" => "You have agreed to the terms and conditions of anuc application"));
                //  return;
            }
        }
        //echo json_encode(array("Succeeded" => false, "msg" => "Error occured saving information"));
    }

    public function saveresults() {
        $this->Applicant_model->AddExams();
        $this->Applicant_model->AddResults();
        //Check if section is greater than 4;
        $this->db->where("applicantid", $this->applicantid);
        $query = $this->db->get("applicants");

        foreach ($query->result() as $row) {
            if ($row->sectionno < 4) {
                $this->Applicant_model->SetSection(4);
            }
        }
    }

    public function savetransfer() {

        if ($this->aauth->is_loggedin()) { //if you are logged in
            if ($this->applicantExist) {
                $this->Applicant_model->AddExams();
                $this->Applicant_model->AddTransfer($this->applicantid);

//Check if section is greater than 4;
                $this->db->where("applicantid", $this->applicantid);
                $query = $this->db->get("applicants");

                foreach ($query->result() as $row) {
                    if ($row->sectionno < 4) {
                        $this->Applicant_model->SetSection(4);
                    }
                }

                echo json_encode(array("Succeeded" => true, "msg" => "Transfer information saved"));
                //return;
            }
        }
    }

    public function sign() {

        if ($this->aauth->is_loggedin()) { //if you are logged in
            if ($this->applicantExist && $this->hasInfoIn('confirm')) {
                //die("hello");
                //update user
                $this->Applicant_model->UpdateSign($this->applicantid);

                echo json_encode(array("Succeeded" => true, "msg" => "Your document is now authenticated"));
                //return;
            } else {
                $this->Applicant_model->Sign($this->applicantid);
                $this->Applicant_model->SetSection(8);
                echo json_encode(array("Succeeded" => true, "msg" => "Document signing failed"));
                //return;
            }
        }
        //echo json_encode(array("Succeeded" => false, "msg" => "Error occured saving information"));
    }

    public function GetApplicant() {
        if ($this->aauth->is_loggedin()) {
            if ($this->applicantExist) {
                $this->applicant["sectionno"] = $this->sectionno; //set by isApplicant function
                $this->applicant["applicantId"] = $this->applicantid; //set by isApplicant function
                //Get all the data relative to the applicant 
                $this->applicant['personalInformation'] = $this->GetApplicantData("personalinformation");
                $this->applicant['familyInformation'] = $this->GetApplicantData("familyinformation");
                $this->applicant['educationInformation'] = $this->GetApplicantData("educationinformation");
                $this->applicant['programSelection'] = $this->GetApplicantData("programs");
                $this->applicant['miscellaneous'] = $this->GetApplicantData("miscellaneous");
                $this->applicant['declaration'] = $this->GetApplicantData("declarations");
                $this->applicant['transfer'] = $this->GetApplicantData("transfer");
                //Processing academic backround information;
                //Data will be stored in the protected academicResult field;
                $this->GetMainResult();
                $this->GetResitResult();
                $this->GetExams();
                $this->applicant['academicbackground'] = $this->academicResult;
            } else {
                if (!$this->aauth->is_member("registrar") && !$this->aauth->is_admin()) {
                    //Create new applicant
                    $this->applicant['applicantId'] = $this->Applicant_model->AddNewApplicant($this->userid); //id is Userid not applicantid
                }
                if (empty($this->applicant['applicantId'])) {
                    die("Applicant creation failed");
                }
            }
            echo json_encode($this->applicant);
        }
    }

    private function GetApplicantData($table) {
        $this->db->where("applicantid", $this->applicantid);
        $query = $this->db->get($table);
        foreach ($query->result_array() as $row) {
            //Clear ids from the data
            try {
                $row['id'] = '';
                $row['applicantid'] = '';
            } catch (Exception $e) {
                return;
            }
            return $row;
        }
        return;
    }

    private function GetMainResult() {
        //Get Results
        $this->db->where("applicantid", $this->applicantid);
        $results_query = $this->db->get("results");
        $corecounter = 1;
        $electcounter = 1;
        //print_r($results_query);
        foreach ($results_query->result() as $row) {
            if ($row->iscore) {
                $this->academicResult['core' . $corecounter] = array();
                $this->academicResult['core' . $corecounter]["name"] = $row->name;
                $this->academicResult['core' . $corecounter]['date'] = $row->date;
                $this->academicResult['core' . $corecounter]['grade'] = $row->grade;
                //print_r($row);
                $corecounter++;
            } else {
                $this->academicResult['elect' . $electcounter] = array();
                $this->academicResult['elect' . $electcounter]["name"] = $row->name;
                $this->academicResult['elect' . $electcounter]['date'] = $row->date;
                $this->academicResult['elect' . $electcounter]['grade'] = $row->grade;
                $electcounter++;
            }
        }
        //die();
    }

    private function GetResitResult() {

        //Get resit results
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->get("resit_results");
            $counter = 1;
            foreach ($query->result() as $row) {
                $this->academicResult['resit' . $counter] = array(); //initialize new array
                $this->academicResult['resit' . $counter]["name"] = $row->name;
                $this->academicResult['resit' . $counter]['date'] = $row->date;
                $this->academicResult['resit' . $counter]['grade'] = $row->grade;
                $this->academicResult['resit' . $counter]['centerno'] = $row->centerno;
                $this->academicResult['resit' . $counter]['index'] = $row->index;

                $counter++;
            }
        } catch (Exception $e) {
            
        }
    }

    private function GetExams() {
        //Get Exams data
        $this->db->where("applicantid", $this->applicantid);
        $exams_query = $this->db->get("exams");
        foreach ($exams_query->result() as $row) {
            if (!empty($row)) {
                $this->academicResult['centerno'] = $row->centerno;
                $this->academicResult['index'] = $row->indexno;
                $this->academicResult['exams'] = $row->name;
            }
        }
    }

    public function GetAllApplicants() {
        $applicants = array();
        $query = $this->db->get("personalinformation");
        foreach ($query->result() as $row) {
            $object = new ApplicantStruct();
            $object->email = $row->email;
            $object->gender = $row->gender;
            $object->name = $row->firstname . " " . $row->othernames . " " . $row->surname;
            $object->id = $row->applicantid;
            $object->nationality = $row->nationality;

            //get section number to know whether its complete or not
            $this->db->where("applicantid", $row->applicantid);
            $sec_array = $this->db->get("applicants");
            foreach ($sec_array->result() as $row) {
                try {
                    if (!empty($row)) {
                        $object->sectionno = $row->sectionno; //get the first section returned        
                        $object->processed = $row->processed; //get the first section returned      
                    }
                } catch (Exception $e) {
                    
                }
            }
            array_push($applicants, $object);
        }

        $data['data'] = $applicants;
        echo json_encode($data);
    }

    public function UploadImage() {
        $status = "";
        $msg = "";
        $this->load->helper('file');
        $realname = $this->input->get('id');

        if (empty($realname)) {
            $status = "error";
            echo json_encode(array('status' => $status, 'Succeeded' => false, 'msg' => "File id not found"));
            return;
        }
        if ($status != "error") {

            $config = array();
            $config['upload_path'] = ASSET_PATH . "uploads";
            // die($config['upload_path']);
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("file")) {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
                //die($msg);
            } else {
                $data = $this->upload->data();
                $file_id = $this->files->insert_file($data['file_name'], $realname);
                if ($file_id) {
                    $status = "success";
                    $msg = "File successfully uploaded";
                } else {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES['file']);
        }
        echo json_encode(array('status' => $status, 'Succeeded' => true, 'msg' => $msg));
    }

    public function downloadImage() {

        $this->files->get_file($this->input->get('id'));
    }

    public function DeleteApplicant() {
        //die();
        $this->applicantid = $this->userid;
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("applicants");
        } catch (Exception $e) {
            die("1");
        }
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("confirm");
        } catch (Exception $e) {
             die("2");
        }
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("declarations");
        } catch (Exception $e) {
             die("3");
        }
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("educationinformation");
        } catch (Exception $e) {
             die("4");
        }
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("exams");
        } catch (Exception $e) {
             die("5");
        }
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("familyinformation");
        } catch (Exception $e) {
             die("6");
        }
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("miscellaneous");
        } catch (Exception $e) {
             die("7");
        }
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("personalinformation");
        } catch (Exception $e) {
             die("8");
        }
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("programs");
        } catch (Exception $e) {
             die("9");
        }
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("resit_results");
        } catch (Exception $e) {
             die("10");
        }
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("results");
        } catch (Exception $e) {
             die("11");
        }
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->delete("transfer");
        } catch (Exception $e) {
             die("12");
        }
        try {
            $this->db->where("applicantid", $this->applicantid . "_profile");
            $query = $this->db->delete("uploads");
        } catch (Exception $e) {
             die("13");
        }
        try {
            $this->db->where("applicantid", $this->applicantid . "_transcript");
            $query = $this->db->delete("uploads");
        } catch (Exception $e) {
             die("14");
        }
        $i = 0;
        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->get("applicants");

            foreach ($query->result_array() as $row) {
                $i++;
            }
        } catch (Exception $e) {
            $i = -1;
        }
        
        if ($i === 0) {

            $returnData["Succeeded"] = true;
        } else {
            $returnData["Succeeded"] = false;
        }
        echo json_encode($returnData);
    }

    public function ProcessApplicant() {
          $this->applicantid = $this->userid;
        try {
            $this->db->where("applicantid", $this->applicantid);
            $this->db->set('processed', true);
            $query = $this->db->update("applicants");
        } catch (Exception $e) {
            
        }

        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->get("applicants");

            foreach ($query->result() as $row) {
                if ($row->processed == true) {

                    $returnData["Succeeded"] = true;
                } else {
                    $returnData["Succeeded"] = false;
                }
            }
        } catch (Exception $e) {
            
        }
        
        echo json_encode($returnData);
    }
    
    public function UnprocessApplicant() {
          $this->applicantid = $this->userid;
        try {
            $this->db->where("applicantid", $this->applicantid);
            $this->db->set('processed', false);
            $query = $this->db->update("applicants");
        } catch (Exception $e) {
            
        }

        try {
            $this->db->where("applicantid", $this->applicantid);
            $query = $this->db->get("applicants");

            foreach ($query->result() as $row) {
                if ($row->processed == false) {

                    $returnData["Succeeded"] = true;
                } else {
                    $returnData["Succeeded"] = false;
                }
            }
        } catch (Exception $e) {
            
        }
        
        echo json_encode($returnData);
    }

}
