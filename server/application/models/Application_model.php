<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/* * *
 * *This class should only display the footer and header of the page
 * *Angular will load the rest of the page
 * *An application can have several layouts 
 * * */

class Application_model extends CI_Model {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('tcpdf');
        $this->load->model('Files_model', 'file');
    }

    public function GenerateApplicationHtml($applicantid) {
        $body = "";

        $body.=$this->GenerateHeader();
        $body.=$this->GeneratePersonalInformationPage($applicantid);
        $body.=$this->GenerateFamilyInformationPage($applicantid);
        $body.=$this->GenerateEducationHistoryPage($applicantid);
        $body.=$this->GenerateProgramSelectionPage($applicantid);
        $body.=$this->GenerteDeclarationPage($applicantid);
        $body.=$this->GenerateOfficePage($applicantid) .
                '<div style="width:100%">
    <a href=/main/createpdf/' . $applicantid . ' style="width:100%; background-color:#20773b;color:#ffffff;cursor:pointer;" >Click to Print(PDF)</a>
</div>';
        return $body;
    }

    private function GenerateHeader() {
        return'<!DOCTYPE html/>
        <html>
        <head>
        <title>anu application</title>
        <link type = "text/css" rel = "stylesheet" href = "/public/assets/apptemplate/index.css"/>
        <style>
        
</style>
        </head>
        <body>
        <!--Beginning of cover page code. -->
        <div style = "width: 100%;">
        <img src = "/public/assets/apptemplate/newform.png" class = "logo"/>
        </div>
        <div class="form-section" style="margin-top: 20px; position: relative;">
<div class="overlay">
    <img src="/public/assets/apptemplate/anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
</div>
    <div class="form-group">
    <div style="width: auto; text-align: center;" >
        <img src="/public/assets/apptemplate/anuc.png" style="width: 130px; height: 130px;"/>
    </div>
    <div style="text-align: center; font-weight: bolder;">
        <p style="text-align: center; font-weight: bolder;" class="header-anuc">ALL NATIONS UNIVERSITY COLLEGE</p>    
    </div>
    <div>
        <div style="width: 100%;">
            <div style="display: inline; width: 70%;">
                <p style="text-align: center;" class="header-sub-anuc brush">Equipped for every good work</p>    
                <div style="text-align: center; font-weight: bolder;">
                    <div class="header-sub2">APPLICATION FORM FOR<br/>UNDERGRADUATE ADMISSION</div>
                </div>
                <div style="text-align: center; font-weight: bolder; margin-top: 6px;">
                    <div class="header-sub3">COMPLETE THIS FORM IN BLOCK LETTERS</div>
                </div>
            </div>
            <div style="display: inline; width: 30%;">
                <div class="photo-box">
                    <div class="photo">AFFIX<br/>PHOTO<br/>HERE</div>    
                </div>
            </div>
        </div>
        
    </div>
    <br/>
    <div style="text-align: center;">
        <div class="header-sub4">PART \'A\'</div>
    </div>
    ';
    }

    private function GeneratePersonalInformationPage($applicantid) {
//echo $applicantid;
        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("personalinformation");
        $applicant = $query->result();

        if (empty($applicant)) {
            return "";
        }
// print_r($query->result());
// die();
        $applicant = $applicant[0];

        $personalinformation = '<div class="form-section-lists">
            <p>PERSONAL INFORMATION</p>  
        </div> 
        <div style="text-align: left; max-width: 100%;">
            <p style="font-weight: bold">Name of Applicant</p>
            <div>';
//titile
//  die($applicant->title);
        if (strcasecmp($applicant->title, 'rev') == 0) {
            $personalinformation.= '
                <label for="rev">Rev.</label><input type="checkbox" checked="" id="rev" style="margin-right: 8%;"/>
                <label for="mr">Mr.</label><input type="checkbox" id="mr" style="margin-right: 8%;"/>
                <label for="mrs">Mrs.</label><input type="checkbox" id="mrs" style="margin-right: 8%"/>
                <label for="miss">Miss.</label><input type="checkbox" id="miss" style="margin-right: 8%;"/>
            ';
        } else if (strcasecmp($applicant->title, 'mr') == 0) {
            $personalinformation.= '
                <label for="rev">Rev.</label><input type="checkbox"  id="rev" style="margin-right: 8%;"/>
                <label for="mr">Mr.</label><input type="checkbox" checked="" id="mr" style="margin-right: 8%;"/>
                <label for="mrs">Mrs.</label><input type="checkbox" id="mrs" style="margin-right: 8%"/>
                <label for="miss">Miss.</label><input type="checkbox" id="miss" style="margin-right: 8%;"/>
            ';
        } else if (strcasecmp($applicant->title, 'mrs') == 0) {
            $personalinformation.= '
                <label for="rev">Rev.</label><input type="checkbox" id="rev" style="margin-right: 8%;"/>
                <label for="mr">Mr.</label><input type="checkbox" id="mr" style="margin-right: 8%;"/>
                <label for="mrs">Mrs.</label><input type="checkbox" checked="" id="mrs" style="margin-right: 8%"/>
                <label for="miss">Miss.</label><input type="checkbox" id="miss" style="margin-right: 8%;"/>
            ';
        } else if (strcasecmp($applicant->title, 'miss') == 0) {
            $personalinformation.= '
                <label for="rev">Rev.</label><input type="checkbox" id="rev" style="margin-right: 8%;"/>
                <label for="mr">Mr.</label><input type="checkbox" id="mr" style="margin-right: 8%;"/>
                <label for="mrs">Mrs.</label><input type="checkbox" id="mrs" style="margin-right: 8%"/>
                <label for="miss">Miss.</label><input type="checkbox" checked="" id="miss" style="margin-right: 8%;"/>
            ';
        }

        $personalinformation.= '
            <label for="other-title">Other Title: </label> <input class="input-text" type="text" disabled="" value="' . $applicant->othertitles . '" id="other-title" style="width: 30%;"/>

                    </div><br/>
            <div>
                <label for="surname">Surname:  </label><input class="input-text" type="text" disabled="" value="' . $applicant->surname . '" id="surname" style="width: 40%;"/>
                <label for="firstname">First Name:  </label><input class="input-text" type="text" disabled="" value="' . $applicant->firstname . '" id="firstname" style="width: 40%;"/>
            </div><br/>
            <div>
                <label for="other-name">Other names:  </label><input class="input-text input-text-stretch" disabled="" value="' . $applicant->othernames . '" type="text" id="other-name" style="width: 87%;"/>
            </div>
        </div>
        <div style="text-align: left; max-width: 100%;">
            <p>
                Date of Birth of Applicant 
                <input class="input-text input-text-small" type="text" id="day" value="' . $applicant->dateofbirth . '" disabled="" style="width: 76%;"/>
            </p>
        </div> 
        <div style="text-align: left; max-width: 100%;">
            <div>
                <label for="place-of-birth">Place of Birth: </label>
                <input class="input-text" style="width: 36%" disabled="" value="' . $applicant->placeofbirth . '" type="text" id="place-of-birth"/>
                <label for="country-of-birth">Country of Birth: </label>
                <input class="input-text" style="width: 35%" type="text" disabled="" id="surname" value="' . $applicant->countryofbirth . '"/>
            </div><br/>
            <div>
                <label for="nationality">Nationality: </label>
                <input class="input-text" style="width: 38%" type="text" disabled="" value="' . $applicant->nationality . '" id="nationality"/>
                <label for="nationality">Passport Number(<span class="small-text">if any</span>): </label>
                <input style="width: 28%" class="input-text" disabled="" type="text" value="' . $applicant->passportno . '" id="nationality"/>
            </div><br/>
            <div>
                <label for="lang">Language(s) spoken:</label>
                <input class="input-text" style="width: 81%;" disabled="" value="' . $applicant->languages . '" type="text" id="lang"/>
            </div><br/>
            <div>
                <label for="blood">Blood Group</label>
                <input class="input-text" type="text" style="width: 87%;" disabled="" value="' . $applicant->bloodgroup . '" id="blood"/><br/><br/>
 Gender: &nbsp;&nbsp;&nbsp;<label for="male">Male</label>';
        if (strcasecmp($applicant->gender, 'm') == 0) {
            $personalinformation.=' 
                <input type="checkbox" id="male" checked="" disabled="" style="margin-right: 9%;" style="width: 80%;" />
                <label for="female">Female</label><input type="checkbox" disabled=""  id="female"/>';
        } else if (strcasecmp($applicant->gender, 'f') == 0) {
            $personalinformation.=' 
                <input type="checkbox" id="male" disabled=""   style="margin-right: 9%;" style="width: 80%;" />
                <label for="female">Female</label><input type="checkbox" disabled=""  checked="" id="female"/>';
        }

        $personalinformation.='</div>
        </div><br/><br/>
        <div class="form-section-lists">
            <p>
                Religious Background
            </p>  
        </div> 
        <div style="text-align: left; max-width: 100%;">';
        if (strcasecmp($applicant->religion, 'christian') == 0) {
            $personalinformation.='<label for="christian">Christian</label><input type="checkbox" disabled=""  checked="" id="christian" style="margin-right: 3%;"/>
            <label for="muslim">Muslim</label><input type="checkbox" id="muslim" disabled=""   style="margin-right: 3%;"/>
            <label for="traditional">Traditional</label><input type="checkbox" id="traditional" disabled=""   style="margin-right: 3%;"/>';
        } else if (strcasecmp($applicant->religion, 'muslim') == 0) {
            $personalinformation.='<label for="christian">Christian</label><input disabled=""  type="checkbox" id="christian" style="margin-right: 3%;"/>
            <label for="muslim">Muslim</label><input type="checkbox" id="muslim" disabled=""  checked="" style="margin-right: 3%;"/>
            <label for="traditional">Traditional</label><input type="checkbox" disabled=""  id="traditional"  style="margin-right: 3%;"/>';
        } else if (strcasecmp($applicant->religion, 'traditional') == 0) {
            $personalinformation.='<label for="christian">Christian</label><input disabled=""  type="checkbox" id="christian" style="margin-right: 3%;"/>
            <label for="muslim">Muslim</label><input type="checkbox" id="muslim" disabled=""   style="margin-right: 3%;"/>
            <label for="traditional">Traditional</label><input type="checkbox" disabled=""  checked="" id="traditional"  style="margin-right: 3%;"/>';
        } else {
            $personalinformation.='<label for="other-religion">Others</label>
            <input class="input-text" style="width: 40%;" type="text" disabled=""  id="other-religion" value="' . $applicant->otherreligion . '"/>
        </div><br/>';
        }



        $personalinformation.=' <div class="form-section-lists">
            <p>
                Marital Status
            </p>  
        </div> 
        <div style="text-align: left; max-width: 100%;">';

        if (strcasecmp($applicant->maritalstatus, 'single') == 0) {
            $personalinformation.='<label for="single">Single</label><input type="checkbox" disabled=""  checked="" id="single" style="margin-right: 8%;"/>
            <label for="married">Married</label><input type="checkbox" id="married" disabled=""  style="margin-right: 8%;"/>
            <label for="divorced">Divorced</label><input type="checkbox" id="divorced" disabled=""   style="margin-right: 8%;"/>
            <label for="widowed">widowed</label><input type="checkbox" disabled=""  id="widowed"/>';
        } else if (strcasecmp($applicant->maritalstatus, 'married') == 0) {
            $personalinformation.='<label for="single">Single</label><input disabled=""  type="checkbox" id="single" style="margin-right: 8%;"/>
            <label for="married">Married</label><input type="checkbox" id="married" disabled=""  checked="" style="margin-right: 8%;"/>
            <label for="divorced">Divorced</label><input type="checkbox" id="divorced" disabled=""   style="margin-right: 8%;"/>
            <label for="widowed">widowed</label><input type="checkbox" disabled=""  id="widowed"/>';
        } else if (strcasecmp($applicant->maritalstatus, 'divorced') == 0) {
            $personalinformation.='<label for="single">Single</label><input type="checkbox" disabled=""  id="single" style="margin-right: 8%;"/>
            <label for="married">Married</label><input type="checkbox" id="married" disabled=""  style="margin-right: 8%;"/>
            <label for="divorced">Divorced</label><input type="checkbox" checked="" disabled=""  id="divorced"  style="margin-right: 8%;"/>
            <label for="widowed">widowed</label><input type="checkbox" disabled=""  id="widowed"/>';
        } else if (strcasecmp($applicant->maritalstatus, 'widow') == 0) {
            $personalinformation.='<label for="single">Single</label><input type="checkbox" disabled=""  id="single" style="margin-right: 8%;"/>
            <label for="married">Married</label><input type="checkbox" id="married" disabled=""   style="margin-right: 8%;"/>
            <label for="divorced">Divorced</label><input type="checkbox" checked="" disabled=""  id="divorced"  style="margin-right: 8%;"/>
            <label for="widowed">widowed</label><input type="checkbox" checked="" disabled=""  id="widowed"/>';
        }


        $personalinformation.='<br/><br/>
            <label for="home-address">Home Address:</label>
            <input class="input-text" style="width: 85%;" disabled=""  type="text" value="' . $applicant->homeaddressl1 . "  " . $applicant->homeaddressl2 . '" id="home-address"/>
            <input class="input-text" style="width: 98.7%; margin-top: 1%;" disabled="" 
            value="' . $applicant->homeaddressl2 . "  " . $applicant->street . "  " . $applicant->city . "  " . $applicant->state . "  " . $applicant->country .
                '" type="text" id="home-address"/><br/><br/>
            <label for="mailing-address">Mailing Address:</label>
                   <input class="input-text" style="width: 83%; text-align: left;" disabled=""  type="text" value="' . $applicant->mailingaddressl1 . '" id="mailing-address"/><br><br>'
                . '<input class="input-text" style="width: 98%; text-align: left;" disabled=""  type="text" value="' . $applicant->mailingaddressl2 . '" id="mailing-address"/>
            <br/><br/>
            <label for="telephone">Telephone Number:</label>
            <input class="input-text" style="width: 26.3%;" value="' . $applicant->hometelephone . '" type="text" disabled=""  id="telephone" />/
            <input class="input-text" style="width: 26.3%;" type="text" disabled="" value="' . $applicant->mobiletelephone . '" id="telephone"/>/
            <input class="input-text" style="width: 26.3%;" type="text" disabled="" value="' . $applicant->officetelephone . '" id="telephone"/><br/>
            <span class="small-text" style="margin-left:28%;">(Office)</span>
            <span class="small-text" style="margin-left:20%;">(Residence)</span>
            <span class="small-text" style="margin-left:20%;">(Mobile)</span>
            <br/><br/>
            <label for="mailing-address">E-mail Address:</label>
            <input class="input-text" style="width: 84%;text-transform:lowercase;" disabled="" value="' . $applicant->email . '"  type="text" id="mailing-address"/>
        </div>
        <br/>
    </div>
    <div class="footer">
        <div class="footer-title"><div class="footer-center">ANUC 01</div></div>
        <div class="footer-description"><div class="footer-center">Equipped for every good work</div></div>
    </div>
</div>
';
        return $personalinformation;
    }

    private function GenerateFamilyInformationPage($applicantid) {
        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("familyinformation");
        $applicant = $query->result();

        if (empty($applicant)) {
            return "";
        }
// print_r($query->result());
// die();
        $applicant = $applicant[0];

        $familyinfo = '<div class="form-section" style="margin-top: 20px; position: relative;">
<div class="overlay">
    <img src="anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
</div>
    <div class="form-group">
        <div style="text-align: center;">
            <div class="header-sub4">PART \'B\'</div>
        </div>
        <div class="form-section-lists">
            <p>FAMILY DATA</p>  
        </div>
        <div style="text-align: left; max-width: 100%;">
            <label for="father-name">Father\'s Name:</label>
            <input type="text" class="input-text" value="' . $applicant->ffirstname . " " . $applicant->fmiddlename . " " . $applicant->flastname . '" 
                disabled="" id="father-name" style="width: 98%;"/>
            <br/><br/>
            <label for="father-address">Address:</label>
            <input type="text" class="input-text" id="father-address" value="' . $applicant->faddressl1 . '" disabled="" style="width: 89%;"/>
            <br/>
            <input class="input-text" style="width: 98%; margin-top: value="' . $applicant->faddressl2 . '" disabled="" 1%;" type="text" id="home-address"/>
            <br/><br/>
            <label for="father-prof">Profession:</label>
            <input type="text" class="input-text" id="father-prof" value="' . $applicant->fprofession . '"
                disabled="" style="width: 97%;"/>
            <br/><br/>
            <label for="father-phone">Telephone Number:</label>
            <input class="input-text" style="width: 79%;" value="' . $applicant->ftelephone . '" disabled="" type="text" id="father-phone" />
           <br/>
            <span class="small-text" style="margin-left:28%;">(Office)</span>
            <span class="small-text" style="margin-left:20%;">(Residence)</span>
            <span class="small-text" style="margin-left:20%;">(Mobile)</span>
            <br/><br/>
            <label for="father-qualification">Highest Qualification Earned:</label>
            <input type="text" class="input-text"  value="' . $applicant->fhighestqualification . '" 
                disabled="" id="father-qualification" style="width: 98%;"/>
            <br/><br/>
            <label for="father-mail">e-mail Address:</label>
            <input type="text" class="input-text" id="father-mail" value="' . $applicant->femail . '" disabled="" style="width: 98%; text-transform:lowercase;"/>
            <br/><br/><br/><br/>


            <label for="mother-name">Mother\'s Name:</label>
            <input type="text" class="input-text" value="' . $applicant->mfirstname . " " . $applicant->mmiddlename . " " . $applicant->mlastname . '" 
                disabled="" id="mother-name" style="width: 98%;"/>
            <br/><br/>
            <label for="mother-address">Address:</label>
            <input type="text" class="input-text" id="mother-address" value="' . $applicant->maddressl1 . '"
                disabled="" style="width: 89%;"/>
            <br/>
            <input class="input-text" style="width: 98%; margin-top: 1%;" value="' . $applicant->maddressl2 . '" disabled="" type="text" id="home-address"/>
            <br/><br/>
            <label for="mother-prof">Profession:</label>
            <input type="text" class="input-text" id="mother-prof" value="' . $applicant->mprofession . '"
                disabled="" style="width: 97%;"/>
            <br/><br/>
            <label for="mother-phone">Telephone Number:</label>
            <input class="input-text" style="width: 79%;" value="' . $applicant->mtelephone . '" disabled="" type="text" id="mother-phone"/><br/>
            <span class="small-text" style="margin-left:28%;">(Office)</span>
            <span class="small-text" style="margin-left:20%;">(Residence)</span>
            <span class="small-text" style="margin-left:20%;">(Mobile)</span>
            <br/><br/>
            <label for="mother-qualification">Highest Qualification Earned:</label>
            <input type="text" class="input-text" 
            id="mother-qualification" value="' . $applicant->mhighestqualification . '" disabled="" style="width: 98%;"/>
            <br/><br/>
            <label for="mother-mail">e-mail Address:</label>
            <input type="text" class="input-text" id="mother-mail" 
            value="' . $applicant->memail . '" disabled="" style="width: 98%; text-transform:lowercase;"/>
            <br/><br/><br/><br/>
            
            
            
            <label for="guard-name">Guardian\'s Name:</label>
            <input type="text" class="input-text" id="guard-name" 
            value="' . $applicant->gfirstname . " " . $applicant->gmiddlename . " " . $applicant->glastname . '" 
                disabled="" style="width: 81%;"/>
            <br/><br/>
            <label for="guard-address">Address:</label>
            <input type="text" class="input-text" id="guard-address" value="' . $applicant->gaddressl1 . '" 
                disabled="" style="width: 90%;"/>
            <br/>
            <input class="input-text" style="width: 98.7%; margin-top: 1%;" value="' . $applicant->gaddressl2 . '" disabled="" type="text" id="guard-address"/>
            <br/><br/>
            <label for="guard-prof">Profession:</label>
            <input type="text" class="input-text" id="guard-prof" value="' . $applicant->gprofession . '"
                disabled="" style="width: 98%;"/>
            <br/><br/>
            <label for="guard-phone">Telephone Number:</label>
            <input class="input-text" style="width: 79%;" value="' . $applicant->gtelephone . '" disabled="" type="text" id="guard-phone"/><br/>
            <span class="small-text" style="margin-left:28%;">(Office)</span>
            <span class="small-text" style="margin-left:20%;">(Residence)</span>
            <span class="small-text" style="margin-left:20%;">(Mobile)</span>
            <br/><br/>
            <label for="guard-phone">Emergency Number:</label>
            <input class="input-text" style="width: 79%;" value="' . $applicant->emergencyphone . '" disabled="" type="text" id="guard-phone"/><br/>
            <span class="small-text" style="margin-left:28%;">(Office)</span>
            <span class="small-text" style="margin-left:20%;">(Residence)</span>
            <span class="small-text" style="margin-left:20%;">(Mobile)</span>
            <br/><br/>
            <label for="guard-qualification">Highest Qualification Earned:</label>
            <input type="text" class="input-text" id="guard-qualification" 
            value="' . $applicant->ghighestqualification . '" disabled="" style="width: 98%;"/>
            <br/><br/>
            <label for="guard-mail">e-mail Address:</label>
            <input type="text" class="input-text" id="guard-mail" 
            value="' . $applicant->gemail . '" disabled="" style="width: 98%; text-transform:lowercase;"/>
            <br/><br/><br/>
        </div>
        <div class="form-section-lists">
            <p>
                Marital Status of parents / Guardian
               
            </p>
        </div>
        <div style="text-align: left; max-width: 100%;">';
        if (strcasecmp($applicant->gmaritalstatus, "single")) {

            $familyinfo .=' <label for="married-guardian">Single</label>&nbsp;&nbsp;<input checked="" type="checkbox" id="married-guardian" style="margin-right: 10%;"/>
            <label for="separated-guardian">Married</label>&nbsp;&nbsp;<input type="checkbox" id="separated-guardian" style="margin-right: 10%;"/>
            <label for="divorced-guardian">Divorced</label>&nbsp;&nbsp;<input type="checkbox" id="divorced-guardian"/>';
        } else if (strcasecmp($applicant->gmaritalstatus, 'married')) {

            $familyinfo .=' <label for="married-guardian">Single</label>&nbsp;&nbsp;<input type="checkbox" id="married-guardian" style="margin-right: 10%;"/>
            <label for="separated-guardian">Married</label>&nbsp;&nbsp;<input type="checkbox" checked="" id="separated-guardian" style="margin-right: 10%;"/>
            <label for="divorced-guardian">Divorced</label>&nbsp;&nbsp;<input type="checkbox" id="divorced-guardian"/>';
        } else if (strcasecmp($applicant->gmaritalstatus, 'divorced')) {

            $familyinfo .=' <label for="married-guardian">Single</label>&nbsp;&nbsp;<input type="checkbox" id="married-guardian" style="margin-right: 10%;"/>
            <label for="separated-guardian">Married</label>&nbsp;&nbsp;<input type="checkbox" id="separated-guardian" style="margin-right: 10%;"/>
            <label for="divorced-guardian">Divorced</label>&nbsp;&nbsp;<input type="checkbox" checked="" id="divorced-guardian"/>';
        }

        $familyinfo.='</div>
        <br/><br/>
    </div>
    <div class="footer">
        <div class="footer-title"><div class="footer-center">ANUC 02</div></div>
        <div class="footer-description"><div class="footer-center">Equipped for every good work</div></div>
    </div>
</div>';


        return $familyinfo;
    }

    private function GenerateEducationHistoryPage($applicantid) {
        $exams_empty = false;
        $programs_empty = false;
        $education_empty = false;
        $history = "";
        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("programs");
        try {
            $programs = $query->result();
            if (!empty($programs)) {
                $programs = $programs[0];
            } else {
                $programs_empty = true;
            }
        } catch (Exception $e) {
            
        }
        try {
            $this->db->where("applicantid", $applicantid);
            $query = $this->db->get("educationinformation");
            $education = $query->result();
            if (!empty($education)) {
                $education = $education[0];
            } else {
                $education_empty = true;
            }
        } catch (Exception $e) {
            
        }
        try {
            $this->db->where("applicantid", $applicantid);
            $query = $this->db->get("exams");
            $exams = $query->result();
            if (!empty($exams)) {
                $exams = $exams[0];
            } else {
                $exams_empty = true;
            }
        } catch (Exception $e) {
            
        }

        $history .='<div class="form-section" style="margin-top: 20px; position: relative;">
    <div class="overlay">
        <img src="/public/assets/apptemplate/anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
    </div>
    <div class="form-group">
        <div style="text-align: center;">
            <div class="header-sub4">PART \'C\'</div>
        </div>
        <div class="form-section-lists">
            <p>APPLICANT\'S EDUCATIONAL HISTORY</p><br/><div style="margin-top: -30px;">ENTRY LEVEL</div>
        </div><br/><div style="text-align: left; max-width: 100%; margin-top: -10px;">
        ';
        if (!$programs_empty) {
            if (strcasecmp($programs->entrylevel, 'regular') == 0) {
                $history.= '
            <label for="entry-reg">Regular</label>&nbsp;<input type="checkbox" disabled="" checked="" id="entry-reg" style="margin-right: 15%"/>
            <label for="entry-mat">Mature</label>&nbsp;<input type="checkbox" id="entry-mat" style="margin-right: 15%"/>
            <label for="entry-trans">Transfer</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="entry-trans" style="margin-right: 15%"/>
            <label for="entry-pre">Pre-University</label>&nbsp;<input type="checkbox" id="entry-pre" />';
            } else if (strcasecmp($programs->entrylevel, 'mature') == 0) {
                $history.= ' <label for="entry-reg">Regular</label>&nbsp;<input type="checkbox" id="entry-reg" style="margin-right: 15%"/>
            <label for="entry-mat">Mature</label>&nbsp;<input type="checkbox" disabled="" checked="" id="entry-mat" style="margin-right: 15%"/>
            <label for="entry-trans">Transfer</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="entry-trans" style="margin-right: 15%"/>
            <label for="entry-pre">Pre-University</label>&nbsp;<input type="checkbox" id="entry-pre" />';
            } else if (strcasecmp($programs->entrylevel, 'transfer') == 0) {
                $history.= '<label for="entry-reg">Regular</label>&nbsp;<input type="checkbox" id="entry-reg" style="margin-right: 15%"/>
            <label for="entry-mat">Mature</label>&nbsp;<input type="checkbox" id="entry-mat" style="margin-right: 15%"/>
            <label for="entry-trans">Transfer</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" disabled="" checked="" id="entry-trans" style="margin-right: 15%"/>
            <label for="entry-pre">Pre-University</label>&nbsp;<input type="checkbox" id="entry-pre" />';
            } else if (strcasecmp($programs->entrylevel, 'preu') == 0) {
                $history.= '<label for="entry-reg">Regular</label>&nbsp;<input type="checkbox" id="entry-reg" style="margin-right: 15%"/>
            <label for="entry-mat">Mature</label>&nbsp;<input type="checkbox" id="entry-mat" style="margin-right: 15%"/>
            <label for="entry-trans">Transfer</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="entry-trans" style="margin-right: 15%"/>
            <label for="entry-pre">Pre-University</label>&nbsp;<input type="checkbox" disabled="" checked="" id="entry-pre" />';
            }
        }


        $history.='</div><br/>
        <div class="form-section-lists">
            <p>QUALIFICATION</p>               
        </div>
        <div style="text-align: left; max-width: 100%;">
        ';

        if (!$exams_empty) {
            switch ($exams->name) {
                case 'WASSCE':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="WASSCE" disabled="" />';
                    break;
                case 'SSSCE':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="SSSCE" disabled="" />';
                    break;
                case 'GCE-A':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="A-Level /ABCE" disabled="" />';
                    break;
                case 'GCE-O':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="O-Level / Equivalent Exams" disabled="" />';
                    break;
                case 'MATURE':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="Mature" disabled="" />';
                    break;
                case 'Diploma':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="Diploma" disabled="" />';
                    break;
                case 'HND':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="HND" disabled="" />';
                    break;
                case 'HNC':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="HNC" disabled="" />';
                    break;
                case 'FTC':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="FTC" disabled="" />';
                    break;

                case 'Transfer':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="Transfer" disabled="" />';
                    break;
                case 'TEACH':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="Teacher\'s Certificate " disabled="" />';
                    break;
                case 'TECH':
                    $history .='<input type="text" id="sssce" class="input-text" style="width:86%" value="Technical Part 1,2,3" disabled="" />';
                    break;
            }
        } else {
            $history .='<input type="text" id="sssce" class="input-text" style="width:86%"  disabled="" />';
        }

        $history.='</div><br/>
        <div class="form-section-lists">
            <p>
               SCHOOL / INSTITUTION
            </p>
        </div>
        <div style="text-align: left; max-width: 100%;">
            <label for="current-school">Current School / Institution and year of Entry:</label><br/>';


        if (!$education_empty) {
            $history.='<input type="text" class="input-text" id="current-school" style="width: 77%" value="' . $education->recentschool . '" disabled=""/>&nbsp;&nbsp;
            <input type="text" class="input-text" style="width: 20%" value="' . $education->recentschoolyear . '" disabled=""/>';
        } else {
            $history.='<input type="text" class="input-text" id="current-school" style="width: 77%" disabled=""/>&nbsp;&nbsp;
            <input type="text" class="input-text" style="width: 20%"  disabled=""/>';
        }

        $history.= '</div><br/><br/>
        <div class="form-section-lists">
            <p>
                List Schools / Institutions you have attended and completed
            </p>
        </div>
        <div style="text-align: left; max-width: 100%;">
            <table style="width: 100%;">
                <tr>
                    <td style="border-top: 2px solid transparent; border-left: 2px solid transparent; border-right: 2px solid transparent;"></td>
                    <td style="border-top: 2px solid transparent;  border-right: 2px solid ;"></td>
                    <td style="width: 25px; padding: 5px 15 5px 15px;">Date</td>
                    <td style="width: 25px; padding: 5px 15 5px 15px;">Date</td>
                </tr>
                <tr>
                    <td style="width: 35%; height: 20px; padding: 5px 15px 5px 15px;">Name of School / Institution</td>
                    <td style="width: 35%; height: 20px; padding: 5px 15px 5px 15px;">Location</td>
                    <td style="width: 15%; height: 20px; padding: 5px 15px 5px 15px;">From</td>
                    <td style="width: 15%; height: 20px; padding: 5px 15px 5px 15px;">To</td>
                </tr>';

        if (!$education_empty) {
            $history.='<tr>
                    <td style="width: 300px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->firstotherschoolname . '</td>
                    <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->firstotherschoollocation . '</td>
                    <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->firstotherschoolfrom . '</td>
                    <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->firstotherschoolto . '</td>
                </tr>
                <tr>
                    <td style="width: 300px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->secondotherschoolname . '</td>
                    <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->secondotherschoollocation . '</td>
                    <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->secondotherschoolfrom . '</td>
                    <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->secondotherschoolto . '</td>
                </tr>
                <tr>
                    <td style="width: 300px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->thirdotherschoolname . '</td>
                    <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->thirdotherschoollocation . '</td>
                    <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->thirdotherschoolfrom . '</td>
                    <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;">' . $education->thirdotherschoolto . '</td>
                </tr>';
        }
        if (!$exams_empty) {
            if (strcasecmp($exams->name, 'transfer') != 0) {
                $history.=' </table>
        </div><br/><br/>
        <div class="form-section-lists">
            <p>
               EXAMINATION TAKEN
            </p>
        </div>
        <div style="text-align: left; max-width: 100%;">';

                $history.= '
                     <table style="width: 100%">
                        <tbody>
                        <thead>
                            <tr>
                                <td>Examination Type</td>
                                <td>Center Number</td>
                                <td>Index Number</td>
                            </tr>
                        </thead>
                        <tr> 
                            <td>WASSCE</td>
                            <td>' . $exams->centerno . '</td>
                            <td>' . $exams->indexno . '</td>
                        </tr>
                        </tbody>
                    </table>
                    ';
            }
            $history.=$this->BuildResultsTable($applicantid);
            $history.=$this->BuildResitTable($applicantid) . '</table>';
        } else {
            
        }

        $history.='</div>
    <br/>
    </div>
    
    <div class="footer">
        <div class="footer-title"><div class="footer-center">ANUC 03</div></div>
        <div class="footer-description"><div class="footer-center">Equipped for every good work</div></div>
    </div>
</div>';
        return $history;
    }

    private function GenerateProgramSelectionPage($applicantid) {
        $programs_empty = false;
        $misc_empty = false;
        $programselect = "";

        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("programs");
        try {
            $programs = $query->result();
            if (!empty($programs)) {
                $programs = $programs[0];
            } else {
                $programs_empty = true;
            }
        } catch (Exception $e) {
            
        }

        try {
            $this->db->where("applicantid", $applicantid);
            $query = $this->db->get("miscellaneous");
            $misc = $query->result();
            if (!empty($misc)) {
                $misc = $misc[0];
            } else {
                $misc_empty = true;
            }
        } catch (Exception $e) {
            
        }

        if (!$programs_empty) {

            $programselect = '<div class="form-section" style="margin-top: 20px; position: relative;">
            <div class="overlay">
                <img src="/public/assets/lib/apptemplate/anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
            </div>
            <div class="form-group">
                <div class="form-section-lists">
                    <p>CHOICE OF PROGRAMME OF STUDY</p>               
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <label for="first-choice">First Choice:</label><input style="width: 98%;" class="input-text" value="' . $programs->firstchoice . '" type="text" id="first-choice"/><br/><br/>
                    <label for="second-choice">Second Choice:</label><input style="width: 98%;" class="input-text" value="' . $programs->secondchoice . '" type="text" id="second-choice"/><br/><br/>
                    <label for="third-choice">Third Choice:</label><input style="width: 98%;" class="input-text" value="' . $programs->thirdchoice . '" type="text" id="third-choice"/>
                </div><br/>
                <div class="form-section-lists">
                    <p>
                        SESSION OF ENROLLMENT SOUGHT
                    </p> 
                    <input style="width: 86%;" class="input-text" value="' . $programs->enrollmenttype . '" type="text" id="first-choice"/><br/><br/>

                </div>
        
                <div class="form-section-lists">
                    <p>
                        DO YOU NEED RESIDENTIAL ACCOMODATION?  
                    </p>';
        }
        if (!$misc_empty) {
            if ($misc->needaccomodation) {
                $programselect.= '<input style="width: 86%;" class="input-text" value="Yes" type="text" id="first-choice"/><br/><br/>';
            } else {
                $programselect.= '<input style="width: 86%;" class="input-text" value="No" type="text" id="first-choice"/><br/><br/>';
            }

            $programselect.='</div>
                <br/>
                <div class="form-section-lists">
                    DO YOU HAVE ANY FORM OF DISABILITY?       
                </div><br/>
                <div style=" text-align: left; max-width: 100%;">';
            if (!empty($misc->whatdisability)) {
                $programselect.=' <input style="width: 86%;" class="input-text" value="Yes, ' . $misc->whatdisability . '" type="text" id="first-choice"/><br/><br/>';
            } else {
                $programselect.=' <input style="width: 86%;" class="input-text" value="No" type="text" id="first-choice"/><br/><br/>';
            }

            $programselect.='</div>
                <br/>
                <div class="form-section-lists">
                    <p>
                        HOW DID YOU HEAR ABOUT ANUC?
                    </p>  
                </div>
                <div style="text-align: left; max-width: 100%;">';
            if (empty($misc->aboutother)) {

                $temp = ' <input class="input-text" style="width: 98%;" type="text" value="';

                if (!empty($misc->aboutnews)) {
                    $temp.= "News, ";
                }
                if (!empty($misc->aboutalumnus)) {
                    $temp.="Alumni, ";
                }
                if (!empty($misc->abouttele)) {
                    $temp.='Television, ';
                }
                if (!empty($misc->aboutstudent)) {
                    $temp.='Students, ';
                }
                if (!empty($misc->aboutradio)) {
                    $temp.='Radio, ';
                }
                if (!empty($misc->aboutfriend)) {
                    $temp.='Friend, ';
                }
                $programselect.=$temp . '"   id="media-phone"/>';
            } else {
                $programselect.='   <label for="media-phone">Information about medium</label>
                    <input class="input-text" style="width: 98%;" value="' . $misc->aboutspecific .
                        '" type="text" id="media-phone"/>';
            }
            $programselect.='</div>
</div>
<div class = "footer">
<div class = "footer-title"><div class = "footer-center">ANUC 04</div></div>
<div class = "footer-description"><div class = "footer-center">Equipped for every good work</div></div>
</div>
</div> ';
        }
        return $programselect;
    }

    private function GenerteDeclarationPage($applicantid) {

        $declare_empty = false;
        $confirm_empty = false;
        $affirm = "";
        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("declarations");
        try {
            $declare = $query->result();
            if (!empty($declare)) {
                $declare = $declare[0];
            } else {
                $declare_empty = true;
            }
        } catch (Exception $e) {
            
        }

        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("confirm");
        try {
            $confirm = $query->result();
            if (!empty($confirm)) {
                $confirm = $confirm[0];
            } else {
                $confirm_empty = true;
            }
        } catch (Exception $e) {
            
        }

        $affirm.='<div class="form-section" style="margin-top: 20px; position: relative;">
            <div class="overlay">
                <img src="/public/assets/lib/apptemplate/anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
            </div>
            <div class="form-group">
                <div style="text-align: center;">
                    <div class="header-sub4">PART \'D\'</div>
                </div>
                <div class="form-section-lists">
                    <p>AFFIRMATION OF INFORMATION SUPPLIED</p>  
                </div>
                <div style="text-align: left; max-width: 100%;">
                    I certify that the information I have supplied in this application is correct to the best of my 
                    knowledge.
                </div><br/>
                <div class="form-section-lists">
                    <p>NOTE:</p>  
                </div>
                <div style="max-width: 100%; text-align: justify">
                    <p>AN APPLICANT WHO MAKES A FALSE STATEMENT OR WITHHOLDS RELEVANT INFORMATION SHALL BE DENIED ADMISSION. IF HE / SHE HAS ALREADY COME TO THE INSTITUTION, HE / SHE SHALL BE ASKED TO WITHDRAW.
                    </p>
                </div><br/><br/>
                <div style="max-width: 100%; text-align: left; margin-top: -40px;">
                    <div style="width:100%; position: relative; text-align: center; height: 40px;">
                        <div style="width: 50%; position: absolute;">';
        if (!$confirm_empty) {
            $affirm.= '<input type="text" class="input-text" value="' . $confirm->sign . '"/><br/><p style="text-align: center;">(Signature)</p>
                    </div>
                        <div style="width: 50%; position: absolute; left: 50%;">
                            <input type="text" value="' . $confirm->dateaffirmed . '" class="input-text"/><br/><p style="text-align: center;">(Date)</p>
                        </div>
                    ';
        } else {
            $affirm.= '<input type="text" class="input-text" value=""/><br/><p style="text-align: center;">(Signature)</p>
                </div>
                        <div style="width: 50%; position: absolute; left: 50%;">
                            <input type="text" value="" class="input-text"/><br/><p style="text-align: center;">(Date)</p>
                        </div>
                    ';
        }
        if (!$declare_empty) {
            $affirm.='</div>
                </div><br/>
                <div style="text-align: center; max-width: 100%;">
                    <input type="text" class="input-text" ' . $declare->applicantfirstname . " " . $declare->applicantmiddlename . " " . $declare->applicantlastname . " " . ' style="width: 70%"/><br/>
                    Full Name (As it appears on your certificate)
                </div><br/>
                <div class="form-section-lists">
                    <p>DECLARATION BY A REPUTABLE PERSONALITY</p>  
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <p>This declaration should be signed by any of the following individuals who shouldd also<br/>
                        endorse the back of one of the three passport size photographs of the applicant.<br/>These individuals are:</p>
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <div style="width:100%; position: relative; text-align: left; height: 160px;">
                        <div style="width: 50%; position: absolute;">
                            <p>1. Clergy</p>
                            <p>2. Medical Officer</p>
                            <p>3. Bank Manager</p>
                            <p>4. Accountant (Certified)</p>
                            <p>5. Lawyer</p>
                        </div>
                        <div style="width: 50%; position: absolute; left: 50%;">
                            <p>6. Head of Educational Institution</p>
                            <p>7. Engineer</p>
                            <p>8. Police Officer (Inspector and above)</p>
                            <p>9. Army Officer (Captain and above)</p>
                            <p>10. Senior Civil Officer</p>
                        </div>
                    </div>
                </div><br/><br/>
                <div class="form-section-lists">
                    <p>THE APPLICATION WILL NOT BE VALID IF DECLARATION IS NOT SIGNED.</p>  
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <p>I certify that the photocopy endorsed by me is the true likeness of the applicant.<br/>
                    <input type="text" class="input-text" ' . $declare->applicantfirstname . " " . $declare->applicantmiddlename . " " . $declare->applicantlastname . " " . ' style="width: 70%"/><br/>
                        
<br/>who is personally known to me.</p>
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <div>
                        Name:<input type="text" class="input-text" value="' . $declare->endotitle . " " . $declare->endofirstname . " " . $declare->endomiddlename . " " . $declare->endolastname . '" style="width: 91%;"/>
                        Profession:
                        <input type="text" class="input-text" style="width: 23%;" value="' . $declare->endoprofession . '"/>
                    </div><br/>
                    <label for="ver-address">Address:</label>
                    <input type="text" class="input-text" id="ver-address" value="' . $declare->endoaddress1 . '" style="width: 91.3%;"/>
                    <input class="input-text" style="width: 98.7%; margin-top: 1%;" value="' . $declare->endostreet . " " .
                    $declare->endostate . " " . $declare->endocity . " " . $declare->endocountry . '" type="text" id="ver-address"/><br/><br/>
                    <label for="ver-telephone">Telephone Number:</label>
                    <input class="input-text" style="width: 98%;" type="text" value="' . $declare->endophone . '" id="ver-telephone" />
                    
                    <span class="small-text" style="margin-left:28%;">(Office)</span>
                    <span class="small-text" style="margin-left:20%;">(Residence)</span>
                    <span class="small-text" style="margin-left:20%;">(Mobile)</span>
                    <br/><br/>
                    <label for="ver-address">E-mail Address:</label>
                    <input class="input-text" style="width: 85%; text-transform:lowercase;" type="text" value="' . $declare->endoemail . '" id="ver-address"/><br/><br/>
                    <div>
                        Signature:<input type="text" class="input-text" style="width: 30.5%;"/> Date:<input type="text" class="input-text" style="width: 40%;"/>
                    </div><br/><br/><br/>
                    <div>
                        Stamp /  Seal of Officer <input type="text" class="input-text" style="width: 30%; margin-bottom:20px;"/>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footer-title"><div class="footer-center">ANUC 05</div></div>
                <div class="footer-description"><div class="footer-center">Equipped for every good work</div></div>
            </div>
            </div>';
        }

        return $affirm;
    }

    private function GenerateOfficePage($applicantid) {
        return '<div class="form-section" style="margin-top: 20px; position: relative;">
    <div class="overlay">
        <img src="anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
    </div>
    <div class="form-group">
        <div style="text-align: center;">
            <div class="header-office" style="text-decoration: underline;  margin: auto; width: 220px;">FOR OFFICE USE ONLY</div>
        </div><br/>
        <div style="text-align: center;">
            <div class="header-office" style="width: 270px;">STUDENT\'S ASSESSMENT FORM</div>
        </div><br/>
        <div style="text-align: left; max-width: 100%;">
            Applicant\'s Name: <input type="text" class="input-text" style="width: 80%"/>
        </div><br/>
        <div style="text-align: center;">
            <div class="header-office" style="margin: auto; width: 220px;">SSSCE / GBCE / WASSCE</div>
        </div><br/><br/>
        <div style="width: 100%; display: inline;">
            <div style="width: 50%; display: inline-block; text-align: left;">SUBJECT<br/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
            </div>
            
            
            <div style="width: 25%;  display: inline-block; text-align: left;">GRADE<br/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
            </div>
            
            
            <div style="width: 20%;  display: inline-block; text-align: left;">SCORE<br/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
                <input type="text" class="input-text" style="width: 90%"/>
            </div>
        </div>
        
        <div style="text-align: right; margin-right: 30px;"><br/>
            AGGREGATE <input type="text" class="input-text"/>
        </div>
        <br/><br/>
        <div style="text-align: center;">
            <div class="header-office" style="margin: auto; width: 220px;">OTHER QUALIFICATIONS</div>
        </div><br/><br/>
        <div style="text-align: left; max-width: 100%;">
            <label for="office-name">\'A\' Level / ABCE:</label>
            <input type="text" class="input-text" id="office-name" style="width: 80%;"/>
            <br/><br/>
            <label for="office-hnd">HND:</label>
            <input type="text" class="input-text" id="office-hnd" style="width: 90.5%;"/>
            <br/><br/>
            <label for="office-ftc">PART III / FTC:</label>
            <input type="text" class="input-text" id="office-ftc" style="width: 81.5%;"/>
            <br/><br/>
            <label for="office-teach">TEACHER\'S CERTIFICATE:</label>
            <input type="text" class="input-text" id="office-teach" style="width: 69%;"/>
            <br/><br/>
            <label for="office-other">OTHER CERTIFICATE:</label>
            <input type="text" class="input-text" id="office-other" style="width: 73.7%;"/>
            <br/><br/>
            <div class="small-text" style="text-align: center;">Original documents must be submitted, copies will be certified</div>
        </div><br/>
        <div style="text-align: center;">
            <div class="header-office" style="margin: auto; width: 290px;">REMARKS BY ADMISSION BOARD</div>
        </div><br/>
        <div style="text-align: left; max-width: 100%;">
            <label for="office-name">PROGRAMME:</label>
            <input type="text" class="input-text" id="office-name" style="width: 82%;"/>
            <br/><br/>
            ADMITTED TO:<br/><br/>
        </div>
        <div style="text-align: left; max-width: 100%; margin-top: -10px;">
            PRE-UNIVERSITY <input type="checkbox" style="margin-right: 4%"/>
            FOUNDATION <input type="checkbox" style="margin-right: 4%"/>
            LEVEL 100 <input type="checkbox" style="margin-right: 4%"/>
            LEVEL 200 <input type="checkbox" style="margin-right: 4%"/>
            LEVEL 300 <input type="checkbox" style="margin-right: 4%"/>
        </div><br/><br/>
        <div style="text-align: left;">
            <span style="margin-left: 46%;">Name</span><span style="margin-left: 25%;">Signature</span>
        </div>
        <div style="text-align: left; max-width: 100%;">
            <label for="office-phone" style="margin-right: 10%;">Admissions Officer</label>
            <input class="input-text" style="width: 25%; margin-right: 5%; margin-left: 10.2%;" type="text" id="office-phone"/>
            <input class="input-text" style="width: 25%;" type="text" id="office-phone"/><br/>
            <br/>
        </div>
        <div style="text-align: left; max-width: 100%;">
            <label for="office-phone" style="margin-right: 10%;">Chairman of Admissions Board</label>
            <input class="input-text" style="width: 25%; margin-right: 5%;" type="text" id="office-phone"/>
            <input class="input-text" style="width: 25%;" type="text" id="office-phone"/><br/>
        </div><br/>
        <div style="text-align: left; max-width: 100%;">
            <label for="office-phone" style="margin-right: 29.5%;">Registrar</label>
            <input class="input-text" style="width: 25%; margin-right: 5%;" type="text" id="office-phone"/>
            <input class="input-text" style="width: 25%;" type="text" id="office-phone"/><br/>
        </div><br/>
        <div style="text-align: left; max-width: 100%;">
            Date:
            <input class="input-text" type="text" style="width: 40%;"/>
        </div> <br/><br/>
        
        <div class="office-box">
            <p style="font-size: 15px; margin-bottom: 20px;">Please indicate below the Serial Number &amp; Code of a New WAEC Scratch Card for verification</p>
            
            <span style="width: 50%;">
            SERIAL NUMBER: <input type="text" style="padding-left:0%"/>
            </span>  &nbsp; &nbsp; &nbsp;
            <span style="width: 50%;">CODE: <input type="text" style="padding-left:0%"/></span>
            
        </div>
        <div style="width: 100%; text-align: left; margin-top: 10px;">
            <span style="margin-left: 90px;">NOTE: Your application will NOT be processed if the Serial Number and Code provided</span><br/>
            <span style="margin-left: 90px;">is incorrect. Application Form should be completely filled before submitting.</span>
        </div>
    </div>
    
    <div class="footer">
        <div class="footer-title"><div class="footer-center">ANUC 06</div></div>
        <div class="footer-description"><div class="footer-center">Equipped for every good work</div></div>
    </div>
</div><br/><br/>
<!--Ending of ANUC 6-->
<div style="height: 1000px; width: 100%;">
    <img src="/public/assets/apptemplate/bottom.png" style="width: 800px; margin-left: 14px; margin-top: 500px; max-width: 100%;
    height: auto;"/>
</div>
</body>
</html>';
    }

    private function BuildResultsTable($applicantid) {
        $results_ar = [];
        $results_empty = false;
        try {
            $this->db->where("applicantid", $applicantid);
            $query = $this->db->get("results");
            foreach ($query->result() as $row) {
                array_push($results_ar, $row);
            }
            if (empty($results_ar)) {
                $results_empty = true;
            }
        } catch (Exception $e) {
            
        }

        //Attaching the results
        //build results 
        $result_core_body = '';
        $result_elect_body = '';

        if (!$results_empty) {

            foreach ($results_ar as $result) {
                if ($result->iscore == 1) {
                    $result_core_body.='<tr>
<td>' . $result->name . '</td>
<td>' . $result->date . '</td>
<td>' . $result->grade . '</td>
</tr>';
                } else {
                    $result_elect_body.='<tr>
<td>' . $result->name . '</td>
<td>' . $result->date . '</td>
<td>' . $result->grade . '</td>
</tr>';
                }
            }

            return '<h4 style = " width: 100%;">Results For Core Subjects</h4>
<table style = "width: 100%">
<tbody>
<thead>
<tr>
<td style="width:70%">Subject</td>
<td style="width:15%">Date Taken</td>
<td style="width:15%">Grade</td>
</tr>
</thead>' . $result_core_body . '</tbody>
</table>
<h4 style = "width: 100%;">Results For Elective Subjects</h4>
<table style = "width: 100%">
<tbody>
<thead>
<tr>
<td style="width:70%">Subject</td>
<td style="width:15%">Date Taken</td>
<td style="width:15%">Grade</td>
</tr>
</thead>' . $result_elect_body . '</tbody>
</table>';
        }
    }

    private function BuildResitTable($applicantid) {
        $resits_ar = [];
        $resit_empty = false;
        try {
            $this->db->where("applicantid", $applicantid);
            $query = $this->db->get("resit_results");

            foreach ($query->result() as $row) {
                array_push($resits_ar, $row);
            }

            if (empty($resits_ar)) {
                $resit_empty = true;
            }
        } catch (Exception $e) {
            
        }
        if (!$resit_empty) {
            $result_resit_body = '';
            foreach ($resits_ar as $resit) {
                $result_resit_body = '<tr>
<td>' . $resit->centerno . '</td>
<td>' . $resit->index . '</td>
<td>' . $resit->name . '</td>
<td>' . $resit->date . '</td>
<td>' . $resit->grade . '</td>
</tr>';
            }

            return '<h4 style = " width: 100%;">Re-sit Results</h4>
<table style = "width: 100%">
<tbody>
<thead>
<tr>
<td style="width:20%">Center No.</td>
<td style="width:20%">Index No.</td>
<td style="width:30%">Subject</td>
<td style="width:15%">Date Taken</td>
<td style="width:15%">Grade</td>
</tr>
</thead>' . $result_resit_body . '</tbody>
</table>';
        }
    }

    private function BuildTransferTable($applicantid) {
        $transfer_empty = false;
        try {
            $this->db->where("applicantid", $applicantid);
            $query = $this->db->get("transfer");
            $transfer = $query->result();
            if (!empty($transfer)) {
                $transfer = $transfer[0];
            } else {
                $transfer_empty = true;
            }
        } catch (Exception $e) {
            
        }
        if (!$transfer_empty) {
            return '
<h4>Transfer Records </h4>
<label for = "mailing-address">Institution Now Attending</label>
<input class = "input-text" style = "width: 85%;" type = "text" value = "' . $transfer->currentschool . '" id = "mailing-address"/>
<label for = "mailing-address">Programme Studied</label>
<input class = "input-text" style = "width: 85%;" type = "text" value = "' . $transfer->program . '" id = "mailing-address"/>
<label for = "mailing-address">Number Of Years Spent At Current Institution</label>
<input class = "input-text" style = "width: 85%;" type = "text" value = "' . $transfer->curentyear . '" id = "mailing-address"/>
<label for = "mailing-address">Date of enrollment</label>
<input class = "input-text" style = "width: 85%;" type = "text" value = "' . $transfer->dateenrolled . '" id = "mailing-address"/>';
        }
    }

    public function GenerateApplicationPdf($applicantid) {
        $exams_empty = false;
        $programs_empty = false;
        $education_empty = false;
        $personal_empty = false;
        $family_empty = false;
        $misc_empty = false;
        $firm_empty = false;
        $confirm_empty = false;
        $declare_empty = false;
        $misc_empty = false;
        $history = "";

        //Return applicant details
        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("personalinformation");
        $personal = $query->result();
        try {
            $personal = $query->result();
            if (!empty($personal)) {
                $personal = $personal[0];
            } else {
                $personal_empty = true;
            }
        } catch (Exception $e) {
            
        }

        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("familyinformation");
        try {
            $family = $query->result();
            if (!empty($family)) {
                $family = $family[0];
            } else {
                $family_empty = true;
            }
        } catch (Exception $e) {
            
        }


        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("programs");
        try {
            $programs = $query->result();
            if (!empty($programs)) {
                $programs = $programs[0];
            } else {
                $programs_empty = true;
            }
        } catch (Exception $e) {
            
        }
        try {
            $this->db->where("applicantid", $applicantid);
            $query = $this->db->get("educationinformation");
            $education = $query->result();
            if (!empty($education)) {
                $education = $education[0];
            } else {
                $education_empty = true;
            }
        } catch (Exception $e) {
            
        }
        try {
            $this->db->where("applicantid", $applicantid);
            $query = $this->db->get("exams");
            $exams = $query->result();
            if (!empty($exams)) {
                $exams = $exams[0];
            } else {
                $exams_empty = true;
            }
        } catch (Exception $e) {
            
        }

        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("programs");
        try {
            $programs = $query->result();
            if (!empty($programs)) {
                $programs = $programs[0];
            } else {
                $programs_empty = true;
            }
        } catch (Exception $e) {
            
        }

        try {
            $this->db->where("applicantid", $applicantid);
            $query = $this->db->get("miscellaneous");
            $misc = $query->result();
            if (!empty($misc)) {
                $misc = $misc[0];
            } else {
                $misc_empty = true;
            }
        } catch (Exception $e) {
            
        }

        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("declarations");
        try {
            $declare = $query->result();
            if (!empty($declare)) {
                $declare = $declare[0];
            } else {
                $declare_empty = true;
            }
        } catch (Exception $e) {
            
        }

        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("confirm");
        try {
            $confirm = $query->result();
            if (!empty($confirm)) {
                $confirm = $confirm[0];
            } else {
                $confirm_empty = true;
            }
        } catch (Exception $e) {
            
        }

        $results_ar = [];
        $results_empty = false;
        try {
            $this->db->where("applicantid", $applicantid);
            $query = $this->db->get("results");
            foreach ($query->result() as $row) {
                array_push($results_ar, $row);
            }
            if (empty($results_ar)) {
                $results_empty = true;
            }
        } catch (Exception $e) {
            
        }




        $pdf = tcpdf();

// set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Natlink-Online application');
        $pdf->SetTitle('All Nations University College Application');
// set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 009', PDF_HEADER_STRING);

// set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
//        
        $pdf->SetMargins(0, 0, 0);
        $pdf->SetHeaderMargin(0);
        $pdf->SetFooterMargin(0);

// set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, 0);

// set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);


// set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once(dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

// add a page
        $pdf->AddPage(); //Create cover page
//        // set JPEG quality
        $pdf->setJPEGQuality(100);
//
//// Image method signature:
//// Image($file, $x='', $y='', $w=0, $h=0, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false)
// Image example with resizing
        $pdf->Image(APPPATH . '/helpers/tcpdf/examples/images/newform.jpg', 0, 0, $pdf->getPageWidth(), $pdf->getPageHeight(), 'jpg', '', '', false, 150, '', false, false, 1, false, false, false);

//
//        /*         * ***********************Definitions ******************************* */
        $ls = 5; //line separator
        $ph = $pdf->getPageHeight();
        $pw = $pdf->getPageWidth();


        /*         * *****************************Page 2************************************************************ */
        $pdf->AddPage(); //Add Personal Information page

        /*         * ************************************************************************************ */
        //Logo
        $pdf->Image(APPPATH . '/helpers/tcpdf/examples/images/anuc.jpg', ($pdf->getPageWidth() / 2) - 15, 9, 30, 30, 'jpg', '', '', false, 150, '', false, false, 0, false, false, false);

        //Draw border line for the pages
        $style = array('width' => .5, 'color' => array(153, 1, 0));
        $border_style = array('width' => .5, 'style' => 'solid', 'color' => array(153, 1, 0));

        $style3 = array('width' => .5, 'color' => array(255, 0, 0));
        $pdf->Rect(5, 5, $pdf->getPageWidth() - 10, $pdf->getPageHeight() - 10, 'D', array('all' => $style3));

        /*         * **************Logo on page 2 *************** */
        $pdf->SetFont('helvetica', '', 11);
        $html = '<h1 style="color:rgb(153, 1, 0);text-align:center; font-weight:bold">All Nations University College</h1>';
        $pdf->setX(-100);
        $pdf->setY(38);
        //$pdf->Text(-100, 36, $html);
        $pdf->writeHTML($html);
        $pdf->setY($pdf->GetY() + 3);
        $html = '<h2 style="color:rgb(153, 1, 0); font-weight:bold; text-align:center">Equip for every good work</h2>';

        $pdf->setFont("brush");
        $pdf->writeHTML($html);

        $pdf->setY($pdf->GetY() + 3);
        $pdf->setFont("courier");
        $pdf->setFontSize(13.5);
        $html = '<h2 style="text-align:center;"> UNDERGRADUATE APPLICATION FORM</h2>';
        $pdf->SetLineStyle(array('all' => array('width' => .5, 'color' => array(0, 0, 0))));
        $pdf->writeHtml($html);


        $pdf->SetLeftMargin($pdf->getPageWidth() / 2);
        $pdf->Line($pdf->getPageWidth() / 4 - 3.5, $pdf->GetY() - 1, 162, $pdf->GetY() - 1, array('width' => .5, 'color' => array(0, 0, 0)));

        $pdf->setY($pdf->GetY() + 6);

        /*         * **************************Page content******************** */
        $pdf->setFont("helvetica");
        $pdf->setY($pdf->GetY() + 6);
        $pdf->setFontSize(8);
        $pdf->SetLeftMargin(10);
        $html = '<h2 style="font-weight:bold">1.0 PERSONAL INFORMATION </h3>';
        $pdf->writeHtml($html);
        $pdf->SetY($pdf->GetY() + $ls);
        //Inserting profile picture
        try {
            $image = $this->file->getImagefile($applicantid . "_profile");
            $ext = explode('.', $image);

            if (count($ext) > 1) {
                $ext = $ext[1];

                //add image while file exist
                $pdf->Image($image, ($pdf->getPageWidth() - 15) - 30, $pdf->getPageHeight() / 4.5, 30, 30, $ext, '', '', false, 150, '', false, false, 1, false, false, false);
            }
        } catch (Exception $e) {
            
        }
        //$pdf->setX(10);
        /*         * *******************Section 1.1 ********************** */
        $pdf->SetLeftMargin(15); //Increase margin for sub items
        $pdf->setFontSize(11);
        $html = '<h3 style="font-weight:bold">1.1 Name of Applicant</h3>';
        $pdf->writeHtml($html);
        $pdf->SetY($pdf->GetY() + $ls);

        $pdf->SetLineWidth($pdf->GetLineWidth() / 2);

        $pdf->setY($pdf->GetY() + $ls);
        if (!$personal_empty) {
            $pdf->setFontSize(11);
            $pdf->writeHtml('<span style="font-weight:bold">Title: </span>');

            if (strcasecmp($personal->title, 'rev') == 0) {
                $pdf->SetXY(25, $pdf->GetY() - 5);
                $pdf->CheckBox("Rev", 10, true);
                $pdf->writeHtml('<label style="text-decoration:underline">Rev</label>');

                $pdf->SetXY($pdf->GetX() + 40, $pdf->GetY() - 5);
                $pdf->CheckBox("Mr", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Mr</label>');

                $pdf->SetXY($pdf->GetX() + 60, $pdf->GetY() - 5);
                $pdf->CheckBox("Mrs", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Mrs</label>');

                $pdf->SetXY($pdf->GetX() + 80, $pdf->GetY() - 5);
                $pdf->CheckBox("Miss", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Miss</label>');
            } else if (strcasecmp($personal->title, 'mr') == 0) {
                $pdf->SetXY(25, $pdf->GetY() - 5);
                $pdf->CheckBox("Rev", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Rev</label>');

                $pdf->SetXY($pdf->GetX() + 40, $pdf->GetY() - 5);
                $pdf->CheckBox("Mr", 10, true);
                $pdf->writeHtml('<label style="text-decoration:underline">Mr</label>');

                $pdf->SetXY($pdf->GetX() + 60, $pdf->GetY() - 5);
                $pdf->CheckBox("Mrs", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Mrs</label>');

                $pdf->SetXY($pdf->GetX() + 80, $pdf->GetY() - 5);
                $pdf->CheckBox("Miss", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Miss</label>');
            } else if (strcasecmp($personal->title, 'mrs') == 0) {
                $pdf->SetXY(25, $pdf->GetY() - 6);
                $pdf->CheckBox("Rev", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Rev</label>');

                $pdf->SetXY($pdf->GetX() + 35, $pdf->GetY() - 5);
                $pdf->CheckBox("Mr", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Mr</label>');

                $pdf->SetXY($pdf->GetX() + 60, $pdf->GetY() - 5);
                $pdf->CheckBox("Mrs", 10, true);
                $pdf->writeHtml('<label style="text-decoration:underline">Mrs</label>');

                $pdf->SetXY($pdf->GetX() + 80, $pdf->GetY() - 5);
                $pdf->CheckBox("Miss", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Miss</label>');
            } else if (strcasecmp($personal->title, 'miss') == 0) {
                $pdf->SetXY(25, $pdf->GetY() - 5);
                $pdf->CheckBox("Rev", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Rev</label>');

                $pdf->SetXY($pdf->GetX() + 40, $pdf->GetY() - 5);
                $pdf->CheckBox("Mr", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Mr</label>');

                $pdf->SetXY($pdf->GetX() + 60, $pdf->GetY() - 5);
                $pdf->CheckBox("Mrs", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Mrs</label>');

                $pdf->SetXY($pdf->GetX() + 80, $pdf->GetY() - 5);
                $pdf->CheckBox("Miss", 10, true);
                $pdf->writeHtml('<label style="text-decoration:underline">Miss</label>');
            }

            //Other titles
            $pdf->SetXY($pdf->GetX() + 106, $pdf->GetY() - 5);
            $html = '<label style="font-weight:bold">Other Title(s): <label>' . $personal->othertitles;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->getPageWidth() - 57, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Surname: </label>' . $personal->surname;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 20, $pdf->GetY(), ($pw / 2) - 10, $pdf->GetY());

            $pdf->SetXY(($pdf->GetY() / 2) + 40, $pdf->GetY() - 6);
            $html = '<label style="font-weight:bold">First Name: </label>' . $personal->firstname;
            $pdf->writeHTML($html);
            $pdf->Line(120, $pdf->GetY(), $pw - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Other Names: </label>' . $personal->othernames;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 30, $pdf->GetY(), $pw - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Date of Birth: </label>' . $personal->dateofbirth;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 30, $pdf->GetY(), $pw - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Place of Birth: </label>' . $personal->placeofbirth;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 30, $pdf->GetY(), ($pw / 2) - 10, $pdf->GetY());

            $pdf->SetXY(($pw / 2) - 10, $pdf->GetY() - 5);
            $html = '<label style="font-weight:bold">Country of Birth: </label>' . $personal->countryofbirth;
            $pdf->writeHTML($html);
            $pdf->Line(125, $pdf->GetY(), $pw - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Nationality: </label>' . $personal->nationality;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), ($pw / 2) - 10, $pdf->GetY());

            $pdf->SetXY(($pw / 2) - 10, $pdf->GetY() - 5);
            $html = '<label style="font-weight:bold">Passport Number: </label>' . $personal->passportno;
            $pdf->writeHTML($html);
            $pdf->Line(127, $pdf->GetY(), $pw - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Language(s) spoken: </label>' . $personal->languages;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 45, $pdf->GetY(), $pw - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->writeHtml('<span style="font-weight:bold">Gender: </span>');
            if (strcasecmp($personal->gender, 'm') == 0) {
                $pdf->SetXY(35, $pdf->GetY() - 5);
                $pdf->CheckBox("Rev", 10, true);
                $pdf->writeHtml('<label style="text-decoration:underline">Male</label>');

                $pdf->SetXY($pdf->GetX() + 40, $pdf->GetY() - 5);
                $pdf->CheckBox("Mr", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Female</label>');
            } else if (strcasecmp($personal->gender, 'f') == 0) {
                $pdf->SetXY(25, $pdf->GetY() - 5);
                $pdf->CheckBox("Rev", 10, false);
                $pdf->writeHtml('<label style="text-decoration:none">Male</label>');

                $pdf->SetXY($pdf->GetX() + 40, $pdf->GetY() - 5);
                $pdf->CheckBox("Mr", 10, true);
                $pdf->writeHtml('<label style="text-decoration:underline">Female</label>');
            }

            /*             * ***********************Section 1.2 ***************** */
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetLeftMargin(15); //Increase margin for sub items
            $pdf->setFontSize(11);
            $html = '<h3 style="font-weight:bold">1.2 Contact';
            $pdf->writeHtml($html);


            $pdf->setFontSize(13);
            $pdf->SetY($pdf->GetY() + $ls);

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Religion: </label>' . $personal->religion . $personal->otherreligion;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 20, $pdf->GetY(), ($pw / 2) + 20, $pdf->GetY());

            $pdf->SetXY(($pw / 2) + 20, $pdf->GetY() - 6);
            $html = '<label style="font-weight:bold">Marital Status: </label>' . $personal->maritalstatus;
            $pdf->writeHTML($html);
            $pdf->Line(($pw / 2) + 50, $pdf->GetY(), $pw - 7, $pdf->GetY());

            //Address
            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Mailing Address: </label>' . $personal->homeaddressl1 . " " . $personal->homeaddressl2;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 35, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->writeHtml($personal->homeaddressl2 . " " . $personal->street . " " . $personal->city . " " . $personal->state . " " . $personal->country);
            $pdf->Line($pdf->GetX(), $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Telephone No.: </label>' . $personal->mobiletelephone;
            $pdf->writeHTML($html);

            $pdf->setXY($pdf->GetX() + 95, $pdf->GetY() - 6);
            $pdf->writeHTML($personal->hometelephone);

            $pdf->setXY($pdf->GetX() + 155, $pdf->GetY() - 6);
            $pdf->writeHTML($personal->officetelephone);

            $pdf->Line($pdf->GetX() + 32, $pdf->GetY(), $pdf->GetX() + 85, $pdf->GetY());
            $pdf->Line($pdf->GetX() + 87, $pdf->GetY(), $pdf->GetX() + 145, $pdf->GetY());
            $pdf->Line($pdf->GetX() + 147, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->setX($pdf->GetX() + 60);
            $html = '<label style="font-style:italic; font-size:13px">(office) </label>';
            $pdf->writeHTML($html);

            $pdf->setXY($pdf->GetX() + 95, $pdf->GetY() - 6);
            $html = '<label style="font-style:italic; font-size:13px">(Residence) </label>';
            $pdf->writeHTML($html);

            $pdf->setXY($pdf->GetX() + 155, $pdf->GetY() - 6);
            $html = '<label style="font-style:italic; font-size:13px">(Mobile) </label>';
            $pdf->writeHTML($html);

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Email: </label>' . $personal->email;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 15, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
        }

        /*         * ****************************Page 3**************************** */

        if (!$family_empty) {
            $pdf->AddPage();
//Draw the border line;

            $style3 = array('width' => .5, 'color' => array(255, 0, 0));
            $pdf->Rect(5, 5, $pdf->getPageWidth() - 10, $pdf->getPageHeight() - 10, 'D', array('all' => $style3));
            $ls = 4;
            $pdf->SetLineStyle(array('width' => .5, 'color' => array(0, 0, 0)));
            $pdf->SetLineWidth($pdf->GetLineWidth() / 2);

            $pdf->SetLeftMargin(10); //Increase margin for sub items
            $pdf->setFontSize(11);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<h3 style="font-weight:bold">2.0 FAMILY DATA';
            $pdf->writeHtml($html);

            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetLeftMargin(15); //Increase margin for sub items
            $pdf->setFontSize(11);
            $html = '<h3 style="font-weight:bold">2.1 Father\'s Information';
            $pdf->writeHtml($html);

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Father\'s Name: </label>' . $family->ffirstname . "  " . $family->fmiddlename . "  " . $family->flastname;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 27, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());


            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Address: </label>' . $family->faddressl1;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 15, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->writeHtml($family->faddressl2);
            $pdf->Line($pdf->GetX(), $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Profession: </label>' . $family->fprofession;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 20, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Telephone No.: </label> ' . $family->ftelephone;
            $pdf->writeHTML($html);

            $pdf->Line($pdf->GetX() + 27, $pdf->GetY(), $pdf->GetX() + 85, $pdf->GetY());
            $pdf->Line($pdf->GetX() + 87, $pdf->GetY(), $pdf->GetX() + 145, $pdf->GetY());
            $pdf->Line($pdf->GetX() + 147, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->setX($pdf->GetX() + 60);
            $html = '<label style="font-style:italic; font-size:13px">(office) </label>';
            $pdf->writeHTML($html);
            $pdf->setXY($pdf->GetX() + 95, $pdf->GetY() - 5);
            $html = '<label style="font-style:italic; font-size:13px">(Residence) </label>';
            $pdf->writeHTML($html);
            $pdf->setXY($pdf->GetX() + 155, $pdf->GetY() - 5);
            $html = '<label style="font-style:italic; font-size:13px">(Mobile) </label>';
            $pdf->writeHTML($html);


            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Highest Qualification Earned: </label>' . $family->fhighestqualification;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 55, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Email: </label>' . $family->femail;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 10, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());


            //Mothers information
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetLeftMargin(15); //Increase margin for sub items
            $pdf->setFontSize(11);
            $html = '<h3 style="font-weight:bold">2.2 Mother\'s Information';
            $pdf->writeHtml($html);

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Mother\'s Name: </label>' . $family->mfirstname . "  " . $family->mmiddlename . "  " . $family->mlastname;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 27, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());


            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Address: </label>' . $family->maddressl1;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 15, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->writeHtml($family->maddressl2);
            $pdf->Line($pdf->GetX(), $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Profession: </label>' . $family->mprofession;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 20, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Telephone No.: </label> ' . $family->mtelephone;
            $pdf->writeHTML($html);

            $pdf->Line($pdf->GetX() + 27, $pdf->GetY(), $pdf->GetX() + 85, $pdf->GetY());
            $pdf->Line($pdf->GetX() + 87, $pdf->GetY(), $pdf->GetX() + 145, $pdf->GetY());
            $pdf->Line($pdf->GetX() + 147, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->setX($pdf->GetX() + 60);
            $html = '<label style="font-style:italic; font-size:13px">(office) </label>';
            $pdf->writeHTML($html);
            $pdf->setXY($pdf->GetX() + 95, $pdf->GetY() - 5);
            $html = '<label style="font-style:italic; font-size:13px">(Residence) </label>';
            $pdf->writeHTML($html);
            $pdf->setXY($pdf->GetX() + 155, $pdf->GetY() - 5);
            $html = '<label style="font-style:italic; font-size:13px">(Mobile) </label>';
            $pdf->writeHTML($html);

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Highest Qualification Earned: </label>' . $family->mhighestqualification;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 55, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Email: </label>' . $family->memail;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 10, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());




            //Guardian's Information
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetLeftMargin(15); //Increase margin for sub items
            $pdf->setFontSize(11);
            $html = '<h3 style="font-weight:bold">2.3 Guardian\'s Information';
            $pdf->writeHtml($html);

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Guardian\'s Name: </label>' . $family->gfirstname . "  " . $family->gmiddlename . "  " . $family->glastname;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 27, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());


            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Address: </label>' . $family->gaddressl1;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 15, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->writeHtml($family->gaddressl2);
            $pdf->Line($pdf->GetX(), $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Profession: </label>' . $family->gprofession;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 20, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Telephone No.: </label> ' . $family->gtelephone;
            $pdf->writeHTML($html);

            $pdf->Line($pdf->GetX() + 27, $pdf->GetY(), $pdf->GetX() + 85, $pdf->GetY());
            $pdf->Line($pdf->GetX() + 87, $pdf->GetY(), $pdf->GetX() + 145, $pdf->GetY());
            $pdf->Line($pdf->GetX() + 147, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->setX($pdf->GetX() + 60);
            $html = '<label style="font-style:italic; font-size:13px">(office) </label>';
            $pdf->writeHTML($html);
            $pdf->setXY($pdf->GetX() + 95, $pdf->GetY() - 5);
            $html = '<label style="font-style:italic; font-size:13px">(Residence) </label>';
            $pdf->writeHTML($html);
            $pdf->setXY($pdf->GetX() + 155, $pdf->GetY() - 5);
            $html = '<label style="font-style:italic; font-size:13px">(Mobile) </label>';
            $pdf->writeHTML($html);


            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Highest Qualification Earned: </label>' . $family->ghighestqualification;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 55, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Email: </label>' . $family->gemail;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 10, $pdf->GetY(), ($pw / 2) - 10, $pdf->GetY());

            $pdf->SetXY(($pw / 2) - 10, $pdf->GetY() - 4);
            $html = '<label style="font-weight:bold">Marital Status: </label>' . $family->gmaritalstatus;
            $pdf->writeHTML($html);
            $pdf->Line(122, $pdf->GetY(), $pw - 7, $pdf->GetY());



            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Emergency Contact: </label>' . $family->emergencyphone;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 35, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
        }


        /*         * ********************* Page 3*********************** */
        if (!$education_empty) {
            $pdf->AddPage();
            //Draw border line

            $style3 = array('width' => .5, 'color' => array(255, 0, 0));
            $pdf->Rect(5, 5, $pdf->getPageWidth() - 10, $pdf->getPageHeight() - 10, 'D', array('all' => $style3));
            $ls = 4;
            $pdf->SetLineStyle(array('width' => .5, 'color' => array(0, 0, 0)));
            $pdf->SetLineWidth($pdf->GetLineWidth() / 2);

            $pdf->SetLeftMargin(10); //Increase margin for sub items
            $pdf->setFontSize(11);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<h3 style="font-weight:bold">3.0 EDUCATIONAL HISTORY';
            $pdf->writeHtml($html);

            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetLeftMargin(15); //Increase margin for sub items
            $pdf->setFontSize(11);
            $html = '<h3 style="font-weight:bold">3.1 School / Institution';
            $pdf->writeHtml($html);
            $pdf->SetY($pdf->GetY() + $ls);

            $pdf->writeHtml('<span style="font-weight:bold">Entry Level: </span>');

            if (!$programs_empty) {
                if (strcasecmp($programs->entrylevel, 'regular') == 0) {
                    $pdf->SetXY(45, $pdf->GetY() - 5);
                    $pdf->CheckBox("Regular", 10, true);
                    $pdf->writeHtml('<label style="text-decoration:underline">Regular</label>');

                    $pdf->SetXY($pdf->GetX() + 60, $pdf->GetY() - 5);
                    $pdf->CheckBox("Mr", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Transfer</label>');

                    $pdf->SetXY($pdf->GetX() + 90, $pdf->GetY() - 5);
                    $pdf->CheckBox("Mrs", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Mature</label>');

                    $pdf->SetXY($pdf->GetX() + 120, $pdf->GetY() - 5);
                    $pdf->CheckBox("Miss", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Pre Uni.</label>');
                } else if (strcasecmp($programs->entrylevel, 'transfer') == 0) {
                    $pdf->SetXY(45, $pdf->GetY() - 5);
                    $pdf->CheckBox("Regular", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Regular</label>');

                    $pdf->SetXY($pdf->GetX() + 60, $pdf->GetY() - 5);
                    $pdf->CheckBox("transerf", 10, true);
                    $pdf->writeHtml('<label style="text-decoration:underline">Transfer</label>');

                    $pdf->SetXY($pdf->GetX() + 90, $pdf->GetY() - 5);
                    $pdf->CheckBox("Mrs", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Mature</label>');

                    $pdf->SetXY($pdf->GetX() + 120, $pdf->GetY() - 5);
                    $pdf->CheckBox("Miss", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Pre Uni.</label>');
                } else if (strcasecmp($programs->entrylevel, 'mature') == 0) {
                    $pdf->SetXY(45, $pdf->GetY() - 5);
                    $pdf->CheckBox("Regular", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Regular</label>');

                    $pdf->SetXY($pdf->GetX() + 60, $pdf->GetY() - 5);
                    $pdf->CheckBox("transfer", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Transfer</label>');

                    $pdf->SetXY($pdf->GetX() + 90, $pdf->GetY() - 5);
                    $pdf->CheckBox("mature", 10, true);
                    $pdf->writeHtml('<label style="text-decoration:underline">Mature</label>');

                    $pdf->SetXY($pdf->GetX() + 120, $pdf->GetY() - 5);
                    $pdf->CheckBox("pre", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Pre Uni.</label>');
                } else if (strcasecmp($programs->entrylevel, 'preu') == 0) {
                    $pdf->SetXY(45, $pdf->GetY() - 5);
                    $pdf->CheckBox("Regular", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Regular</label>');

                    $pdf->SetXY($pdf->GetX() + 60, $pdf->GetY() - 5);
                    $pdf->CheckBox("transfer", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Transfer</label>');

                    $pdf->SetXY($pdf->GetX() + 90, $pdf->GetY() - 5);
                    $pdf->CheckBox("mature", 10, false);
                    $pdf->writeHtml('<label style="text-decoration:none">Mature</label>');

                    $pdf->SetXY($pdf->GetX() + 120, $pdf->GetY() - 5);
                    $pdf->CheckBox("pre", 10, true);
                    $pdf->writeHtml('<label style="text-decoration:underline">Pre Uni.</label>');
                }
                $pdf->SetY($pdf->GetY() + $ls);
            }
            if (!$exams_empty) {
                switch ($exams->name) {
                    case 'WASSCE':
                        $html = '<label style="font-weight:bold">Qualification: </label> WASSCE';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                        break;
                    case 'SSSCE':
                        $html = '<label style="font-weight:bold">Qualification: </label> SSSCE';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                        break;
                    case 'GCE-A':
                        $html = '<label style="font-weight:bold">Qualification: </label> A-Level';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                        break;
                    case 'GCE-O':
                        $html = '<label style="font-weight:bold">Qualification:  </label> O-Level';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                        break;
                    case 'MATURE':
                        $html = '<label style="font-weight:bold">Qualification: </label> Matured';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                        break;
                    case 'Diploma':
                        $html = '<label style="font-weight:bold">Qualification: </label> Diploma';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                        break;
                    case 'HND':
                        $html = '<label style="font-weight:bold">Qualification: </label> HND';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                        break;
                    case 'HNC':
                        $html = '<label style="font-weight:bold">Qualification: </label> HNC';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

                        break;
                    case 'FTC':
                        $html = '<label style="font-weight:bold">Qualification: </label> FTC';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

                        break;

                    case 'Transfer':
                        $html = '<label style="font-weight:bold">Qualification: </label> Transfer';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

                        break;
                    case 'TEACH':

                        $html = '<label style="font-weight:bold">Qualification: </label> Teacher\' Certificate';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

                        break;
                    case 'TECH':
                        $html = '<label style="font-weight:bold">Qualification: </label> Technical Part 1,2,3 ';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                        break;
                    default:
                        $html = '<label style="font-weight:bold">Qualification: </label> ';
                        $pdf->writeHTML($html);
                        $pdf->Line($pdf->GetX() + 25, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                }
            }



            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Last Institution Attended: </label>' . $education->recentschool;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 40, $pdf->GetY(), ($pw / 2) + 50, $pdf->GetY());

            $pdf->SetXY(($pw / 2) + 50, $pdf->GetY() - 5);
            $html = '<label style="font-weight:bold">Year of Entry: </label>' . $education->recentschoolyear;
            $pdf->writeHTML($html);
            $pdf->Line($pw - ($pw / 4) + 20, $pdf->GetY(), $pw - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->writeHtml('<label style="font-weight:bold;">List Schools / Institution you have attended and completed </label>');
            $pdf->SetY($pdf->GetY() + $ls);
            $html = ' <table style="width: 95%; border:solid 2px thin; ">
                        <tbody >
                        <thead >
                            <tr style=" border:solid;">
                                <td style="width:40%; font-weight:bold; border:solid 2px thin;padding:5px">Name of School/Institution Type</td>
                                <td style="width:30%; font-weight:bold; border:solid 2px thin; padding:5px">Location of School</td>
                                <td style="width:15%; font-weight:bold; border:solid 2px thin; padding:5px">Start Date</td>
                                <td style="width:15%; font-weight:bold; border:solid 2px thin; padding:5px">End Date</td>
                            </tr>
                        </thead>
                        <tr style=" border-style:solid;"> 
                            <td style="width:40%; border:solid 2px thin;padding:5px">' . $education->firstotherschoolname . '</td>
                            <td style="width:30%; border:solid 2px thin;padding:5px">' . $education->firstotherschoollocation . '</td>
                            <td style="width:15%; border:solid 2px thin;padding:5px">' . $education->firstotherschoolfrom . '</td>
                            <td style="width:15%; border:solid 2px thin;padding:5px">' . $education->firstotherschoolto . '</td>
                        </tr>
                        <tr style=" border-style:solid;"> 
                            <td style="width:40%; border:solid 2px thin;padding:5px">' . $education->secondotherschoolname . '</td>
                            <td style="width:30%; border:solid 2px thin;padding:5px">' . $education->secondotherschoollocation . '</td>
                            <td style="width:15%; border:solid 2px thin;padding:5px">' . $education->secondotherschoolfrom . '</td>
                            <td style="width:15%; border:solid 2px thin;padding:5px">' . $education->secondotherschoolto . '</td>
                        </tr>
                        <tr style=" border-style:solid;"> 
                            <td style="width:40%; border:solid 2px thin;padding:5px">' . $education->thirdotherschoolname . '</td>
                            <td style="width:30%; border:solid 2px thin;padding:5px">' . $education->thirdotherschoollocation . '</td>
                            <td style="width:15%; border:solid 2px thin;padding:5px">' . $education->thirdotherschoolfrom . '</td>
                            <td style="width:15%; border:solid 2px thin;padding:5px">' . $education->thirdotherschoolto . '</td>
                        </tr>
                        
                        <tr style=" border-style:solid;"> 
                            <td style="width:40%; border:solid 2px thin;padding:5px"></td>
                            <td style="width:30%; border:solid 2px thin;padding:5px"></td>
                            <td style="width:15%; border:solid 2px thin;padding:5px"></td>
                            <td style="width:15%; border:solid 2px thin;padding:5px"></td>
                        </tr>
                        </tbody>
                    </table>';


            $pdf->writeHTML($html);

            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetLeftMargin(15); //Increase margin for sub items
            $pdf->setFontSize(11);
            $html = '<h3 style="font-weight:bold">3.2 Examinations / Transfer Records';
            $pdf->writeHtml($html);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);

            $pdf->writeHtml('<label style="font-weight:bold;"> Examination Taken</label>');
            $pdf->SetY($pdf->GetY() + $ls);

            $html = ' <table style="width: 95%; border:solid 2px thin; ">
                        <tbody >
                        <thead >
                            <tr style=" border:solid;">
                                <td style="font-weight:bold; border:solid 2px thin;padding:5px">Examination Type</td>
                                <td style="font-weight:bold; border:solid 2px thin; padding:5px">Center Number</td>
                                <td style="font-weight:bold; border:solid 2px thin; padding:5px">Index Number</td>
                            </tr>
                        </thead>
                        <tr style=" border-style:solid;"> 
                            <td style=" border:solid 2px thin;padding:5px">WASSCE</td>
                            <td style=" border:solid 2px thin;padding:5px">' . $exams->centerno . '</td>
                            <td style=" border:solid 2px thin;padding:5px">' . $exams->indexno . '</td>
                        </tr>
                        </tbody>
                    </table>';
            $pdf->writeHTML($html);

//Examination Reults

            $result_core_body = '';
            $result_elect_body = '';

            if (!$results_empty) {

                foreach ($results_ar as $result) {
                    if ($result->iscore == 1) {
                        $result_core_body.='<tr>
<td style = " border:solid 2px thin;padding:5px">' . $result->name . '</td>
<td style = " border:solid 2px thin;padding:5px">' . $result->date . '</td>
<td style = " border:solid 2px thin;padding:5px">' . $result->grade . '</td>
</tr>';
                    } else {
                        $result_elect_body.='<tr>
<td style = " border:solid 2px thin;padding:5px">' . $result->name . '</td>
<td style = " border:solid 2px thin;padding:5px">' . $result->date . '</td>
<td style = " border:solid 2px thin;padding:5px">' . $result->grade . '</td>
</tr>';
                    }
                }
                $pdf->writeHtml('<label style="font-weight:bold;">Results For Core Subjects</label>');
                $pdf->SetY($pdf->GetY() + $ls);
                $html = ' <table style="width: 95%; border:solid 2px thin; ">
                        <tbody >
                        <thead >
                            <tr style=" border:solid;">
                                <td style="font-weight:bold; border:solid 2px thin;padding:5px">Subject</td>
                                <td style="font-weight:bold; border:solid 2px thin; padding:5px">Date Taken</td>
                                <td style="font-weight:bold; border:solid 2px thin; padding:5px">Grade</td>
                            </tr>
                        </thead>'
                        .
                        $result_core_body
                        . '</tbody>
                    </table>';

                $pdf->writeHTML($html);

                $pdf->writeHtml('<label style="font-weight:bold;">Results For Elective Subjects</label>');
                $pdf->SetY($pdf->GetY() + $ls);
                $html = ' <table style="width: 95%; border:solid 2px thin; ">
                        <tbody >
                        <thead >
                            <tr style=" border:solid;">
                                <td style="font-weight:bold; border:solid 2px thin;padding:5px">Subject</td>
                                <td style="font-weight:bold; border:solid 2px thin; padding:5px">Date Taken</td>
                                <td style="font-weight:bold; border:solid 2px thin; padding:5px">Grade</td>
                            </tr>
                        </thead> ' .
                        $result_elect_body
                        . '</tbody>
                    </table>';

                $pdf->writeHTML($html);
            }

            /*             * ******************************RESIT TABLE************************** */
            $resits_ar = [];
            $resit_empty = false;
            try {
                $this->db->where("applicantid", $applicantid);
                $query = $this->db->get("resit_results");

                foreach ($query->result() as $row) {
                    array_push($resits_ar, $row);
                }

                if (empty($resits_ar)) {
                    $resit_empty = true;
                }
            } catch (Exception $e) {
                
            }
            if (!$resit_empty) {
                $result_resit_body = '';
                foreach ($resits_ar as $resit) {
                    $result_resit_body = '<tr>
<td style=" border:solid 2px thin;padding:5px">' . $resit->centerno . '</td>
<td style=" border:solid 2px thin;padding:5px">' . $resit->index . '</td>
<td style=" border:solid 2px thin;padding:5px">' . $resit->name . '</td>
<td style="border:solid 2px thin;padding:5px">' . $resit->date . '</td>
<td style="border:solid 2px thin;padding:5px">' . $resit->grade . '</td>
</tr>';
                }

                $pdf->writeHtml('<label style="font-weight:bold;">Results For Resit Papers</label>');
                $pdf->SetY($pdf->GetY() + $ls);

                $html = '<table style="width: 95%; border:solid 2px thin; ">
                        <tbody >
                        <thead >
                            <tr style=" border:solid;">
                                <td style="font-weight:bold; border:solid 2px thin;padding:5px">Center No.</td>
                                <td style="font-weight:bold; border:solid 2px thin;padding:5px">Index No.</td>
                                <td style="font-weight:bold; border:solid 2px thin;padding:5px">Subject</td>
                                <td style="font-weight:bold; border:solid 2px thin; padding:5px">Date Taken</td>
                                <td style="font-weight:bold; border:solid 2px thin; padding:5px">Grade</td>
                            </tr>
                        </thead> ' .
                        $result_resit_body
                        . '</tbody>
                    </table>';

                $pdf->writeHTML($html);
            }

            /*             * **************************TRANSFER *************************************** */

            $transfer_empty = false;
            try {
                $this->db->where("applicantid", $applicantid);
                $query = $this->db->get("transfer");
                $transfer = $query->result();
                if (!empty($transfer)) {
                    $transfer = $transfer[0];
                } else {
                    $transfer_empty = true;
                }
            } catch (Exception $e) {
                
            }
            if (!$transfer_empty) {

                $pdf->writeHtml('<label style="font-weight:bold;">Transfer Records</label>');
                $pdf->SetY($pdf->GetY() + $ls);


                $html = '<label style="font-weight:bold">Institution Now Attending: </label>' . $transfer->currentschool;
                $pdf->writeHTML($html);
                $pdf->Line($pdf->GetX() + 47, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                $pdf->SetY($pdf->GetY() + $ls);

                $html = '<label style="font-weight:bold">Programme Studied: </label>' . $transfer->program;
                $pdf->writeHTML($html);
                $pdf->Line($pdf->GetX() + 35, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                $pdf->SetY($pdf->GetY() + $ls);

                $html = '<label style="font-weight:bold">Year Spent At Current Institution: </label>' . $transfer->currentyear;
                $pdf->writeHTML($html);
                $pdf->Line($pdf->GetX() + 60, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                $pdf->SetY($pdf->GetY() + $ls);

                $html = '<label style="font-weight:bold">Date of Enrollment: </label>' . $transfer->dateenrolled;
                $pdf->writeHTML($html);
                $pdf->Line($pdf->GetX() + 35, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                $pdf->SetY($pdf->GetY() + $ls);
            }
        }


        /*         * *********************************PAGE 4 Program of choice **************************** */
        if (!$programs_empty) {
            $pdf->AddPage();
            //Draw border line
            $ls = 6;

            $style3 = array('width' => .5, 'color' => array(255, 0, 0));
            $pdf->Rect(5, 5, $pdf->getPageWidth() - 10, $pdf->getPageHeight() - 10, 'D', array('all' => $style3));
            $ls = 4;
            $pdf->SetLineStyle(array('width' => .5, 'color' => array(0, 0, 0)));
            $pdf->SetLineWidth($pdf->GetLineWidth() / 2);

            $pdf->SetLeftMargin(10); //Increase margin for sub items
            $pdf->setFontSize(11);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);

            $html = '<h3 style="font-weight:bold">4.0 PROGRAMME SELECTION';
            $pdf->writeHtml($html);

            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetLeftMargin(15); //Increase margin for sub items
            $pdf->setFontSize(11);
            $html = '<h3 style="font-weight:bold">4.1 Choice Of Programme';
            $pdf->writeHtml($html);
            $pdf->SetY($pdf->GetY() + $ls);

            $html = '<label style="font-weight:bold">First Choice: </label>' . $programs->firstchoice;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 23, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->SetY($pdf->GetY() + $ls);

            $html = '<label style="font-weight:bold">First Choice: </label>' . $programs->secondchoice;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 23, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->SetY($pdf->GetY() + $ls);

            $html = '<label style="font-weight:bold">First Choice: </label>' . $programs->thirdchoice;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 23, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->SetY($pdf->GetY() + $ls);

            if (!$misc_empty) {
                $pdf->SetY($pdf->GetY() + $ls);
                $html = '<h3 style="font-weight:bold">4.2 Other Requirements';
                $pdf->writeHtml($html);
                $pdf->SetY($pdf->GetY() + $ls);

                $html = '<label style="font-weight:bold"> Enrollement  Session: </label>' . $programs->enrollmenttype;
                $pdf->writeHTML($html);
                $pdf->Line($pdf->GetX() + 40, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                $pdf->SetY($pdf->GetY() + $ls);

                $html = '<label style="font-weight:bold"> Do You Need Residential Accomodation?</label>';
                $pdf->writeHTML($html);
                $pdf->SetY($pdf->GetY() + $ls);
                if ($misc->needaccomodation) {
                    $pdf->writeHTML('<p style="text-align:center" margin-left:20%;>YES</p>');
                    //$pdf->write(5,"Yes");
                } else {
                    $pdf->writeHTML('<p style="text-align:center" margin-left:20%;>NO</p>');
                }
                $pdf->Line($pdf->GetX(), $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                $pdf->SetY($pdf->GetY() + $ls);


                $html = '<label style="font-weight:bold"> Do you have any disablity?</label>';
                $pdf->writeHTML($html);
                $pdf->SetY($pdf->GetY() + $ls);

                if (!empty($misc->anydisability)) {
                    $pdf->writeHTML('<p style="text-align:center" margin-left:20%;>Yes, </p>' . $misc->whatdisability);
                } else {
                    $pdf->writeHTML('<p style="text-align:center" margin-left:20%;>NO</p>');
                }
                $pdf->Line($pdf->GetX(), $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
                $pdf->SetY($pdf->GetY() + $ls);
            }

            $html = '<label style="font-weight:bold"> How Did You Hear About ANUC?</label>';
            $pdf->writeHTML($html);
            $pdf->SetY($pdf->GetY() + $ls);
            if (empty($misc->aboutother)) {
                $temp = '<p style="text-align:center" margin-left:20%;>';

                if (!empty($misc->aboutnews)) {
                    $temp.= "News, ";
                }
                if (!empty($misc->aboutalumnus)) {
                    $temp.="Alumni, ";
                }
                if (!empty($misc->abouttele)) {
                    $temp.='Television, ';
                }
                if (!empty($misc->aboutstudent)) {
                    $temp.='Students, ';
                }
                if (!empty($misc->aboutradio)) {
                    $temp.='Radio, ';
                }
                if (!empty($misc->aboutfriend)) {
                    $temp.='Friend, ';
                }
                $pdf->writeHTML($temp);
            } else {
                $pdf->writeHTML('<p style="text-align:center" margin-left:20%;>' . $misc->aboutspecific . '</p>');
            }
            $pdf->Line($pdf->GetX(), $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->SetY($pdf->GetY() + $ls);
        }

        $pdf = $this->GenerateDeclarationPDF($applicantid, $pdf);

        //***************************Transcript / Results page****************************************************

        $image = $this->file->getImagefile($applicantid . "_transcript");
        $ext_r = explode('.', $image);
        if (count($ext_r) > 1) {
            $ext = $ext_r[1];

            $pdf->AddPage();
            //Draw border line
            $ls = 6;

            $style3 = array('width' => .5, 'color' => array(255, 0, 0));
            $pdf->Rect(5, 5, $pdf->getPageWidth() - 10, $pdf->getPageHeight() - 10, 'D', array('all' => $style3));
            $ls = 4;
            $pdf->SetLineStyle(array('width' => .5, 'color' => array(0, 0, 0)));
            $pdf->SetLineWidth($pdf->GetLineWidth() / 2);

            $pdf->SetLeftMargin(5); //Increase margin for sub items
            $pdf->setFontSize(11);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);


            $pdf->Image($image, 0, 0, $pdf->getPageWidth(), $pdf->getPageHeight(), $ext, '', '', false, 150, '', false, false, 1, false, false, false);
        }



//****************************OFFICE ONLY PAGE********************************
        //Inserting the office page
        $pdf->AddPage();
        //Draw border line
        $ls = 6;

        $style3 = array('width' => .5, 'color' => array(255, 0, 0));
        $pdf->Rect(5, 5, $pdf->getPageWidth() - 10, $pdf->getPageHeight() - 10, 'D', array('all' => $style3));
        $ls = 4;
        $pdf->SetLineStyle(array('width' => .5, 'color' => array(0, 0, 0)));
        $pdf->SetLineWidth($pdf->GetLineWidth() / 2);

        $pdf->SetLeftMargin(5); //Increase margin for sub items
        $pdf->setFontSize(11);
        $pdf->SetY($pdf->GetY() + $ls);
        $pdf->SetY($pdf->GetY() + $ls);
        $pdf->SetY($pdf->GetY() + $ls);
        $pdf->SetY($pdf->GetY() + $ls);


        $pdf->Image(APPPATH . '/helpers/tcpdf/examples/images/admin.jpg', 0, 0, $pdf->getPageWidth(), $pdf->getPageHeight(), 'jpg', '', '', false, 150, '', false, false, 1, false, false, false);


        $pdf->AddPage();
        //Draw border line
        $ls = 6;

        $style3 = array('width' => .5, 'color' => array(255, 0, 0));
        $pdf->Rect(5, 5, $pdf->getPageWidth() - 10, $pdf->getPageHeight() - 10, 'D', array('all' => $style3));
        $ls = 4;
        $pdf->SetLineStyle(array('width' => .5, 'color' => array(0, 0, 0)));
        $pdf->SetLineWidth($pdf->GetLineWidth() / 2);

        $pdf->SetLeftMargin(5); //Increase margin for sub items
        $pdf->setFontSize(11);
        $pdf->SetY($pdf->GetY() + $ls);
        $pdf->SetY($pdf->GetY() + $ls);
        $pdf->SetY($pdf->GetY() + $ls);
        $pdf->SetY($pdf->GetY() + $ls);

//        ***********************************Last Page*********************************

        $pdf->Image(APPPATH . '/helpers/tcpdf/examples/images/lastpage.jpg', 0, 0, $pdf->getPageWidth(), $pdf->getPageHeight(), 'jpg', '', '', false, 150, '', false, false, 1, false, false, false);


//Close and output PDF document 
        $pdf->Output($applicantid . '.pdf', 'I');
    }

    public function GenerateDeclarationPDF($applicantid, $pdf = null) {

        $declare_empty = false;
        $confirm_empty = false;
        $pdf_is_null = false;

        $affirm = "";
        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("declarations");
        try {
            $declare = $query->result();
            if (!empty($declare)) {
                $declare = $declare[0];
            } else {
                $declare_empty = true;
            }
        } catch (Exception $e) {
            
        }

        $this->db->where("applicantid", $applicantid);
        $query = $this->db->get("confirm");
        try {
            $confirm = $query->result();
            if (!empty($confirm)) {
                $confirm = $confirm[0];
            } else {
                $confirm_empty = true;
            }
        } catch (Exception $e) {
            
        }
        if (empty($pdf)) {
            $pdf = tcpdf();
            $pdf_is_null = true;

// set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Natlink-Online application');
            $pdf->SetTitle('All Nations University College Application');
// set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 009', PDF_HEADER_STRING);

// set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
//        
            $pdf->SetMargins(0, 0, 0);
            $pdf->SetHeaderMargin(0);
            $pdf->SetFooterMargin(0);

// set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, 0);

// set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

            // remove default header/footer
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);


// set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
                require_once(dirname(__FILE__) . '/lang/eng.php');
                $pdf->setLanguageArray($l);
            }
        }
        if (!$confirm_empty) {

            $pdf->AddPage();
            //Draw border line
            $ls = 6;

            $style3 = array('width' => .5, 'color' => array(255, 0, 0));
            $pdf->Rect(5, 5, $pdf->getPageWidth() - 10, $pdf->getPageHeight() - 10, 'D', array('all' => $style3));
            $ls = 4;
            $pdf->SetLineStyle(array('width' => .5, 'color' => array(0, 0, 0)));
            $pdf->SetLineWidth($pdf->GetLineWidth() / 2);

            $pdf->SetLeftMargin(10); //Increase margin for sub items
            $pdf->setFontSize(11);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);


            $html = '<h3 style="font-weight:bold">5.0 DECLARATION / AFFIRMATION';
            $pdf->writeHtml($html);

            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetLeftMargin(15); //Increase margin for sub items
            $pdf->setFontSize(11);
            $html = '<h3 style="font-weight:bold">5.1 Affirmation of Information Supplied';
            $pdf->writeHtml($html);
            $pdf->SetY($pdf->GetY() + $ls);

            $pdf->writeHTML('<p style="" margin-left:20%;>I certify that the information I have '
                    . 'supplied in this application is correct to the best of my knowlege</p>');

            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);

            $pdf->writeHTML('<h4 style="" margin-left:20%;>
AN APPLICANT WHO MAKES A FALSE STATEMENT OR WITHHOLDS RELEVANT INFORMATION <br>SHALL BE DENIED ADMISSION. IF HE / SHE HAS ALREADY COME TO THE INSTITUTION, HE / SHE SHALL BE ASKED TO WITHDRAW. 
</h4>');

            $pdf->Line($pdf->GetX(), $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetXY(120, $pdf->GetY());
            $pdf->writeHTML($confirm->dateaffirmed); //Date signed
            $pdf->Line(50, $pdf->GetY(), 100, $pdf->GetY());
            $pdf->Line(110, $pdf->GetY(), 160, $pdf->GetY());
            $pdf->SetXY(130, $pdf->GetY());
            $pdf->writeHTML('(Date)');
            $pdf->SetXY(70, $pdf->GetY() - 4);
            $pdf->writeHTML('(Sign)');
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);

            $pdf->SetXY(80, $pdf->GetY());
            $pdf->writeHTML('<p style="text-align:center;padding-left:20%; width:100%;">' . $declare->applicantfirstname .
                    " " . $declare->applicantmiddlename .
                    " " . $declare->applicantlastname . " " . '</p>');
            $pdf->Line(40, $pdf->GetY(), 170, $pdf->GetY());
            $pdf->SetXY(83, $pdf->GetY());
            $pdf->writeHTML('Applicant\'s Full Name ');
            $pdf->SetXY(75, $pdf->GetY());
            $pdf->writeHTML('(As it appears on your certificate) ');


            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetLeftMargin(15); //Increase margin for sub items
            $pdf->setFontSize(11);
            $html = '<h3 style="font-weight:bold">5.2 Declaration By A Reputable Personality</h3>';
            $pdf->writeHtml($html);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);

            $html = '<p>This declaration should be signed by any of the following individuals who should also endorse<br>the back of one of the three passport size photographs of the applicant.<br>These individuals are:</p>';
            $pdf->writeHtml($html);


            $html = '<table>
                        <tbody >
                        <thead >
                            <tr >
                                <td style="width:50%;"></td>
                                <td style="width:50%;"></td>
                               
                            </tr>
                        </thead> 
                        <tr>
                            <td style="width:50%;">1. Clergy</td>
                            <td style="width:50%;">6. Head of Educational Institution</td>                        
                         </tr>
                          <tr>
                            <td style="width:50%;">2. Medical Officer</td>
                            <td style="width:50%;">7. Engineer</td>                        
                         </tr>
                          <tr>
                            <td style="width:50%;">3. Bank Manager</td>
                            <td style="width:50%;">8. Police Officer (Inspector and above)</td>                        
                         </tr>
                          <tr>
                            <td style="width:50%;">4. Accountant (Certified)</td>
                            <td style="width:50%;">9. Army Officer (Captain and above)</td>                        
                         </tr>
                          <tr>
                            <td style="width:50%;">5. Lawyer</td>
                            <td style="width:50%;">10. Senior Civil Officer</td>                        
                         </tr>
                        </tbody>
                    </table>';

            $pdf->writeHTML($html);

            $html = '<h3 style="font-weight:bold">Applicant Will Not Be Valid If Declaration Is Not Signed</h3>';
            $pdf->writeHtml($html);
            $pdf->SetY($pdf->GetY() + $ls);

            $html = '<p>I certify that the photocopy endorsed by me is the true likeness of the applicant.</p>';
            $pdf->writeHtml($html);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->Line($pdf->GetX(), $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Endorser: </label>' . $declare->endotitle . " " . $declare->endofirstname . " " . $declare->endomiddlename . " " . $declare->endolastname;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 15, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Profession: </label>' . $declare->endoprofession;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 23, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());


            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Address: </label>' . $declare->endoaddress1;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 15, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->writeHtml($declare->endostreet . " " . $declare->endostate . " " . $declare->endocity . " " . $declare->endocountry);
            $pdf->Line($pdf->GetX(), $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Telephone No.: </label> ' . $declare->endophone;
            $pdf->writeHTML($html);

            $pdf->Line($pdf->GetX() + 27, $pdf->GetY(), $pdf->GetX() + 85, $pdf->GetY());
            $pdf->Line($pdf->GetX() + 87, $pdf->GetY(), $pdf->GetX() + 145, $pdf->GetY());
            $pdf->Line($pdf->GetX() + 147, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());
            $pdf->setX($pdf->GetX() + 60);
            $html = '<label style="font-style:italic; font-size:13px">(office) </label>';
            $pdf->writeHTML($html);
            $pdf->setXY($pdf->GetX() + 95, $pdf->GetY() - 5);
            $html = '<label style="font-style:italic; font-size:13px">(Residence) </label>';
            $pdf->writeHTML($html);
            $pdf->setXY($pdf->GetX() + 155, $pdf->GetY() - 5);
            $html = '<label style="font-style:italic; font-size:13px">(Mobile) </label>';
            $pdf->writeHTML($html);

            $pdf->SetY($pdf->GetY() + $ls);
            $html = '<label style="font-weight:bold">Email: </label>' . $declare->endoemail;
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 10, $pdf->GetY(), $pdf->getPageWidth() - 7, $pdf->GetY());

            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);
            $pdf->SetY($pdf->GetY() + $ls);

            $html = '<label style="font-weight:bold">Stamp / Seal of Officer: </label>';
            $pdf->writeHTML($html);
            $pdf->Line($pdf->GetX() + 40, $pdf->GetY(), $pdf->getPageWidth() / 2, $pdf->GetY());
        }

        //Output the object if not part full application generation
        if ($pdf_is_null) {
            $pdf->Output($applicantid . '.pdf', 'I');
        } else {
            return $pdf;
        }
    }

}
