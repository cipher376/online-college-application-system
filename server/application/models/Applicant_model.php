<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* * *
 * *This class should only display the footer and header of the page
 * *Angular will load the rest of the page
 * *An application can have several layouts 
 * * */

class PersonalInformation {

    public $applicantid = "";
    public $title = "";
    public $othertitles = "";
    public $surname = "";
    public $firstname = "";
    public $othernames = "";
    public $dateofbirth = "";
    public $placeofbirth = "";
    public $countryofbirth = "";
    public $nationality = "";
    public $passportno = "";
    public $languages = "";
    public $bloodgroup = "";
    public $gender = "";
    public $religion = "";
    public $otherreligion = "";
    public $maritalstatus = "";
    public $homeaddressl1 = "";
    public $homeaddressl2 = "";
    public $mailingaddressl1 = "";
    public $mailingaddressl2 = "";
    public $street = "";
    public $city = "";
    public $state = "";
    public $country = "";
    public $hometelephone = "";
    public $mobiletelephone = "";
    public $officetelephone = "";
    public $email = "";

}

class FamilyInfo {

    public $applicantid = "";
    public $ffirstname = "";
    public $fmiddlename = "";
    public $flastname = "";
    public $fprofession = "";
    public $fhighestqualification = "";
    public $faddressl1 = "";
    public $faddressl2 = "";
    public $ftelephone = "";
    public $femail = "";
    public $mfirstname = "";
    public $mmiddlename = "";
    public $mlastname = "";
    public $mprofession = "";
    public $mhighestqualification = "";
    public $maddressl1 = "";
    public $maddressl2 = "";
    public $mtelephone = "";
    public $memail = "";
    public $gfirstname = "";
    public $gmiddlename = "";
    public $glastname = "";
    public $gprofession = "";
    public $ghighestqualification = "";
    public $gaddressl1 = "";
    public $gaddressl2 = "";
    public $gtelephone = "";
    public $emergencyphone = "";
    public $gemail = "";
    public $gmaritalstatus = "";

}

class EducationInfo {

    public $applicantid = "";
    public $recentschool = "";
    public $recentschoolyear = "";
    public $firstotherschoolname = "";
    public $firstotherschoollocation = "";
    public $firstotherschoolfrom = "";
    public $firstotherschoolto = "";
    public $secondotherschoolname = "";
    public $secondotherschoollocation = "";
    public $secondotherschoolfrom = "";
    public $secondotherschoolto = "";
    public $thirdotherschoolname = "";
    public $thirdotherschoollocation = "";
    public $thirdotherschoolfrom = "";
    public $thirdotherschoolto = "";

}

class Programs {

    public $applicantid = "";
    public $firstchoice = "";
    public $secondchoice = "";
    public $thirdchoice = "";
    public $preU = '';
    public $enrollmenttype = '';
    public $entrylevel = '';

}

class Miscellaneous {

    public $applicantid = "";
    public $aboutspecific = "";
    public $satreading = "";
    public $satmaths = "";
    public $satwriting = "";
    public $satdate = "";
    public $prize1 = "";
    public $prize2 = "";
    public $needaccomodation = "";
    public $aboutother = "";
    public $aboutnews = "";
    public $aboutalumnus = "";
    public $aboutagent = "";
    public $abouttele = "";
    public $aboutstudent = "";
    public $aboutradio = "";
    public $aboutfriend = "";
    public $anydisability = "";
    public $whatdisability = "";

}

class Declaration {

    public $applicantid = "";
    public $applicanttitle = '';
    public $applicantfirstname = '';
    public $applicantmiddlename = '';
    public $applicantlastname = '';
    public $endotitle = '';
    public $endofirstname = '';
    public $endolastname = '';
    public $endomiddlename = '';
    public $endoaddress1 = '';
    public $endostreet = '';
    public $endostate = '';
    public $endocity = '';
    public $endocountry = '';
    public $endophone = '';
    public $endoemail = '';

}

class SignData {

    public $applicantid = "";
    public $sign = "";
    public $dateaffirmed = "";
    public $signdoc = "";

}

class Exams {

    public $applicantid = "";
    public $centerno = "";
    public $indexno = "";
    public $name = "";

}

class Result {

    public $applicantid = "";
    public $iscore = "";
    public $name = "";
    public $date = "";
    public $grade = "";

}

class ResultResit {

    public $applicantid = "";
    public $name = "";
    public $date = "";
    public $grade = "";

}

class TransferData {

    public $applicantid = "";
    public $currentschool = "";
    public $program = "";
    public $currentyear = "";
    public $dateenrolled = "";

}

class Applicant_model extends CI_Model {

    protected $personalInformation;
    protected $familyInformation;
    protected $eductionInformation;
    protected $programs;
    protected $miscellaneous;
    protected $declarations;
    protected $signdata;
    protected $exams;
    protected $result;
    protected $transfer;

    public function __construct() {
        parent:: __construct();
        $exams = new Exams();
        $result = new Result();
    }

    private function GenerateApplicantId() {
        $predicate = "ANU-AP";
        try {
            $date = (new DateTime())->format("Y");
            $year = intval($date) - 2000;

            //get the number of applicants for the current year;
            $applicantCount = $this->db->count_all('applicants');

            $applicantCount++;
            $tempid = "{$applicantCount}";
            switch (strlen($tempid)) {
                case 1:
                    $tempid = "000" . $tempid;
                    break;
                case 2:
                    $tempid = "00" . $tempid;
                    break;
                case 3:
                    $tempid = "0" . $tempid;
                    break;
            }
            //Assum that total application 
            // receive in a year wont exceed 10000
        } catch (Exception $e) {
            //die($e->getMessage()); 
        }

        // print_r($tempid);
        return $predicate . $year . "-" . $tempid;
    }

    public function AddNewApplicant($id) {
        $appid = $this->GenerateApplicantId();
        $data = array(
            'id' => '',
            'userid' => $id,
            'applicantid' => $appid,
            'completiondate' => '',
            'sectionno' => 1,
            'starteddate' => ''
        );

        $this->db->insert('applicants', $data);
        return $appid;
    }

    private function BindPersonalInformation($applicantid) {
        $this->personalInformation = new PersonalInformation();
        $this->personalInformation->applicantid = $applicantid;
        $this->personalInformation->title = $this->input->post('title');
        $this->personalInformation->othertitles = $this->input->post('othertitles');
        $this->personalInformation->surname = $this->input->post('surname');
        $this->personalInformation->firstname = $this->input->post('firstname');
        $this->personalInformation->othernames = $this->input->post('othernames');
        $this->personalInformation->dateofbirth = $this->input->post('dateofbirth');
        $this->personalInformation->placeofbirth = $this->input->post('placeofbirth');
        $this->personalInformation->countryofbirth = $this->input->post('countryofbirth');
        $this->personalInformation->nationality = $this->input->post('nationality');
        $this->personalInformation->passportno = $this->input->post('passportno');
        $this->personalInformation->languages = $this->input->post('languages');
        $this->personalInformation->bloodgroup = $this->input->post('bloodgroup');
        $this->personalInformation->gender = $this->input->post('gender');
        $this->personalInformation->religion = $this->input->post('religion');
        $this->personalInformation->otherreligion = $this->input->post('otherreligion');
        $this->personalInformation->maritalstatus = $this->input->post('maritalstatus');
        $this->personalInformation->homeaddressl1 = $this->input->post('homeaddressl1');
        $this->personalInformation->homeaddressl2 = $this->input->post('homeaddressl2');
        $this->personalInformation->mailingaddressl1 = $this->input->post('mailingaddressl1');
        $this->personalInformation->mailingaddressl2 = $this->input->post('mailingaddressl2');
        $this->personalInformation->street = $this->input->post('street');
        $this->personalInformation->city = $this->input->post('city');
        $this->personalInformation->state = $this->input->post('state');
        $this->personalInformation->country = $this->input->post('country');
        $this->personalInformation->hometelephone = $this->input->post('hometelephone');
        $this->personalInformation->mobiletelephone = $this->input->post('mobiletelephone');
        $this->personalInformation->officetelephone = $this->input->post('officetelephone');
        $this->personalInformation->email = $this->input->post('email');
    }

    public function AddPersonalInformation($applicantid) {
        $this->BindPersonalInformation($applicantid);
        $this->db->insert('personalinformation', $this->personalInformation);
    }

    public function UpdatePersonalInformation($applicantid) {
        $this->BindPersonalInformation($applicantid);
        //update user
        $this->db->where('applicantid', $applicantid);
        $this->db->update('personalinformation', $this->personalInformation);
    }

    public function BindFamilyInformation($applicantid) {
        $this->familyInformation = new FamilyInfo();
        $this->familyInformation->applicantid = $applicantid;
        $this->familyInformation->ffirstname = $this->input->post("ffirstname");
        $this->familyInformation->fmiddlename = $this->input->post("fmiddlename");
        $this->familyInformation->flastname = $this->input->post("flastname");
        $this->familyInformation->fprofession = $this->input->post("fprofession");
        $this->familyInformation->fhighestqualification = $this->input->post("fhighestqualification");
        $this->familyInformation->faddressl1 = $this->input->post("faddressl1");
        $this->familyInformation->faddressl2 = $this->input->post("faddressl2");
        $this->familyInformation->ftelephone = $this->input->post("ftelephone");
        $this->familyInformation->femail = $this->input->post("femail");
        $this->familyInformation->mfirstname = $this->input->post("mfirstname");
        $this->familyInformation->mmiddlename = $this->input->post("mmiddlename");
        $this->familyInformation->mlastname = $this->input->post("mlastname");
        $this->familyInformation->mprofession = $this->input->post("mprofession");
        $this->familyInformation->mhighestqualification = $this->input->post("mhighestqualification");
        $this->familyInformation->maddressl1 = $this->input->post("maddressl1");
        $this->familyInformation->maddressl2 = $this->input->post("maddressl2");
        $this->familyInformation->mtelephone = $this->input->post("mtelephone");
        $this->familyInformation->memail = $this->input->post("memail");
        $this->familyInformation->gfirstname = $this->input->post("gfirstname");
        $this->familyInformation->gmiddlename = $this->input->post("gmiddlename");
        $this->familyInformation->glastname = $this->input->post("glastname");
        $this->familyInformation->gprofession = $this->input->post("gprofession");
        $this->familyInformation->ghighestqualification = $this->input->post("ghighestqualification");
        $this->familyInformation->gaddressl1 = $this->input->post("gaddressl1");
        $this->familyInformation->gaddressl2 = $this->input->post("gaddressl2");
        $this->familyInformation->gtelephone = $this->input->post("gtelephone");
        $this->familyInformation->emergencyphone = $this->input->post("emergencyphone");
        $this->familyInformation->gemail = $this->input->post("gemail");
        $this->familyInformation->gmaritalstatus = $this->input->post("gmaritalstatus");
    }

    public function AddFamilyInformation($applicantid) {
        $this->BindFamilyInformation($applicantid);
        $this->db->insert('familyinformation', $this->familyInformation);
    }

    public function UpdateFamilyInformation($applicantid) {
        $this->BindFamilyInformation($applicantid);
        //update user
        $this->db->where('applicantid', $applicantid);
        $this->db->update('familyinformation', $this->familyInformation);
    }

    public function BindEducationInformation($applicantid) {
        $this->educationInformation = new EducationInfo();
        $this->educationInformation->applicantid = $applicantid;
        $this->educationInformation->recentschool = $this->input->post("recentschool");
        $this->educationInformation->recentschoolyear = $this->input->post("recentschoolyear");
        $this->educationInformation->firstotherschoolname = $this->input->post("firstotherschoolname");
        $this->educationInformation->firstotherschoollocation = $this->input->post("firstotherschoollocation");
        $this->educationInformation->firstotherschoolfrom = $this->input->post("firstotherschoolfrom");
        $this->educationInformation->firstotherschoolto = $this->input->post("firstotherschoolto");
        $this->educationInformation->secondotherschoolname = $this->input->post("secondotherschoolname");
        $this->educationInformation->secondotherschoollocation = $this->input->post("secondotherschoollocation");
        $this->educationInformation->secondotherschoolfrom = $this->input->post("secondotherschoolfrom");
        $this->educationInformation->secondotherschoolto = $this->input->post("secondotherschoolto");
        $this->educationInformation->thirdotherschoolname = $this->input->post("thirdotherschoolname");
        $this->educationInformation->thirdotherschoollocation = $this->input->post("thirdotherschoollocation");
        $this->educationInformation->thirdotherschoolfrom = $this->input->post("thirdotherschoolfrom");
        $this->educationInformation->thirdotherschoolto = $this->input->post("thirdotherschoolto");
    }

    public function AddEducationInformation($applicantid) {
        $this->BindEducationInformation($applicantid);
        // die();
        $this->db->insert('educationinformation', $this->educationInformation);
    }

    public function UpdateEducationInformation($applicantid) {
        $this->BindEducationInformation($applicantid);
        //update user
        $this->db->where('applicantid', $applicantid);
        $this->db->update('educationinformation', $this->educationInformation);
    }

    public function BindPrograms($applicantid) {

        $this->programs = new Programs();
        $this->programs->applicantid = $applicantid;
        $this->programs->firstchoice = $this->input->post("firstchoice");
        $this->programs->secondchoice = $this->input->post("secondchoice");
        $this->programs->thirdchoice = $this->input->post("thirdchoice");
        $this->programs->preU = $this->input->post("preU");
        $this->programs->enrollmenttype = $this->input->post("enrollmenttype");
        $this->programs->entrylevel = $this->input->post("entrylevel");
    }

    public function AddPrograms($applicantid) {

        $this->BindPrograms($applicantid);
        $this->db->insert('programs', $this->programs);
    }

    public function UpdatePrograms($applicantid) {
        $this->BindPrograms($applicantid);
        //update user
        $this->db->where('applicantid', $applicantid);
        $this->db->update('programs', $this->programs);
    }

    public function BindMiscellaneous($applicantid) {
        $this->miscellaneous = new Miscellaneous();
        $this->miscellaneous->applicantid = $applicantid;
        $this->miscellaneous->needaccomodation = $_POST["needaccomodation"];

        $this->miscellaneous->aboutnews = $this->input->post("aboutnews");
        $this->miscellaneous->aboutalumnus = $this->input->post("aboutalumnus");
        $this->miscellaneous->aboutagent = $this->input->post("aboutagent");
        $this->miscellaneous->abouttele = $this->input->post("abouttele");
        $this->miscellaneous->aboutother = $this->input->post("aboutother");
        $this->miscellaneous->aboutstudent = $this->input->post("aboutstudent");
        $this->miscellaneous->aboutradio = $this->input->post("aboutradio");
        $this->miscellaneous->aboutfriend = $this->input->post("aboutfriend");

        $this->miscellaneous->aboutspecific = $this->input->post("aboutspecific");
        $this->miscellaneous->satreading = $this->input->post("satreading");
        $this->miscellaneous->satwriting = $this->input->post("satwriting");
        $this->miscellaneous->satmaths = $this->input->post("satmaths");
        $this->miscellaneous->satdate = $this->input->post("satdate");
        $this->miscellaneous->prize1 = $this->input->post("prize1");
        $this->miscellaneous->prize2 = $this->input->post("prize2");
        $this->miscellaneous->anydisability = $this->input->post("anydisability");
        $this->miscellaneous->whatdisability = $this->input->post("whatdisability");
    }

    public function AddMiscellaneous($applicantid) {
        $this->BindMiscellaneous($applicantid);
        $this->db->insert('miscellaneous', $this->miscellaneous);
    }

    public function UpdateMiscellaneous($applicantid) {
        $this->BindMiscellaneous($applicantid);
        //update user
        $this->db->where('applicantid', $applicantid);
        $this->db->update('miscellaneous', $this->miscellaneous);
    }

    public function BindDeclaration($applicantid) {
        $this->declarations = new Declaration();
        $this->declarations->applicantid = $applicantid;
        $this->declarations->applicanttitle = $this->input->post('applicanttitle');
        $this->declarations->applicantfirstname = $this->input->post('applicantfirstname');
        $this->declarations->applicantmiddlename = $this->input->post('applicantmiddlename');
        $this->declarations->applicantlastname = $this->input->post('applicantlastname');
        $this->declarations->endotitle = $this->input->post('endotitle');
        $this->declarations->endofirstname = $this->input->post('endofirstname');
        $this->declarations->endolastname = $this->input->post('endolastname');
        $this->declarations->endomiddlename = $this->input->post('endomiddlename');
        $this->declarations->endoaddress1 = $this->input->post('endoaddress1');
        $this->declarations->endostreet = $this->input->post('endostreet');
        $this->declarations->endostate = $this->input->post('endostate');
        $this->declarations->endocity = $this->input->post('endocity');
        $this->declarations->endocountry = $this->input->post('endocountry');
        $this->declarations->endophone = $this->input->post('endophone');
        $this->declarations->endoemail = $this->input->post('endoemail');
    }

    public function AddDeclaration($applicantid) {
        $this->BindDeclaration($applicantid);
        $this->db->insert('declarations', $this->declarations);
    }

    public function UpdateDeclaration($applicantid) {
        $this->BindDeclaration($applicantid);
        //update user
        $this->db->where('applicantid', $applicantid);
        $this->db->update('declarations', $this->declarations);
    }

    public function BindSign($applicantid) {
        $this->signdata = new SignData();
        $this->signdata->applicantid = $applicantid;
        $this->signdata->sign = $this->input->post('sign');
        $this->signdata->dateaffirmed = $this->input->post('dateaffirmed');
        // 
    }

    public function Sign($applicantid) {
        $this->BindSign($applicantid);
        $this->db->insert('confirm', $this->signdata);
    }

    public function UpdateSign($applicantid) {
        $this->BindSign($applicantid);
        //update user
        $this->db->where('applicantid', $applicantid);

        $this->db->update('confirm', $this->signdata);
    }

    public function AddExams() {
        //Clean database first before entering new exams details
        $this->db->where('applicantid', $this->input->post('applicantid'));
        $this->db->delete('exams');

        //Clear resit papers
        //Clean database first before entering new exams details
        $this->db->where('applicantid', $this->input->post('applicantid'));
        $this->db->delete('resit_results');

        $exams = new Exams();
        $exams->centerno = $this->input->post('centerno');
        $exams->indexno = $this->input->post('index');
        $exams->name = $this->input->post('exams');
        $exams->applicantid = $this->input->post('applicantid');
        //die($exams->applicantid);
        $this->db->insert('exams', $exams);
    }

    public function AddResults() {
        //Clean database first before entering new results
        $this->db->where('applicantid', $this->input->post('applicantid'));
        $this->db->delete('results');
        //die( $_POST['core1']['name']);
        //do new insertion
        try {
            $core1 = new Result();
            if (isset($_POST['core1']) && $_POST['core1']['date'] !== "") {
                $core1->applicantid = $_POST['applicantid'];
                $core1->iscore = true;
                $core1->date = $_POST['core1']['date'];
                $core1->grade = $_POST['core1']['grade'];
                $core1->name = $_POST['core1']['name'];
                $this->db->insert('results', $core1);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            if (isset($_POST['core2']) && $_POST['core2']['date'] !== "") {
                $core2 = new Result();
                $core2->applicantid = $_POST['applicantid'];
                $core2->iscore = true;
                $core2->date = $_POST['core2']['date'];
                $core2->grade = $_POST['core2']['grade'];
                $core2->name = $_POST['core2']['name'];
                $this->db->insert('results', $core2);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            if (isset($_POST['core3']) && $_POST['core3']['date'] !== "") {
                $core3 = new Result();
                $core3->applicantid = $_POST['applicantid'];
                $core3->iscore = true;
                $core3->date = $_POST['core3']['date'];
                $core3->grade = $_POST['core3']['grade'];
                $core3->name = $_POST['core3']['name'];
                $this->db->insert('results', $core3);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        try {
            if (isset($_POST['core4']) && $_POST['core4']['date'] !== "") {
                $core4 = new Result();
                $core4->applicantid = $_POST['applicantid'];
                $core4->iscore = true;
                $core4->date = $_POST['core4']['date'];
                $core4->grade = $_POST['core4']['grade'];
                $core4->name = $_POST['core4']['name'];
                $this->db->insert('results', $core4);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        try {
            if (isset($_POST['elect1']) && $_POST['core5']['date'] !== "") {
                $elect1 = new Result();
                $elect1->applicantid = $_POST['applicantid'];
                $elect1->iscore = false;
                $elect1->date = $_POST['elect1']['date'];
                $elect1->grade = $_POST['elect1']['grade'];
                $elect1->name = $_POST['elect1']['name'];
                $this->db->insert('results', $elect1);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        try {
            if (isset($_POST['elect2'])) {
                $elect2 = new Result();
                $elect2->applicantid = $_POST['applicantid'];
                $elect2->iscore = false;
                $elect2->date = $_POST['elect2']['date'];
                $elect2->grade = $_POST['elect2']['grade'];
                $elect2->name = $_POST['elect2']['name'];
                $this->db->insert('results', $elect2);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        try {
            if (isset($_POST['elect3'])) {
                $elect3 = new Result();
                $elect3->applicantid = $_POST['applicantid'];
                $elect3->iscore = false;
                $elect3->date = $_POST['elect3']['date'];
                $elect3->grade = $_POST['elect3']['grade'];
                $elect3->name = $_POST['elect3']['name'];
                $this->db->insert('results', $elect3);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            if (isset($_POST['elect4'])) {
                $elect4 = new Result();
                $elect4->applicantid = $_POST['applicantid'];
                $elect4->iscore = false;
                $elect4->date = $_POST['elect4']['date'];
                $elect4->grade = $_POST['elect4']['grade'];
                $elect4->name = $_POST['elect4']['name'];
                $this->db->insert('results', $elect4);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        try {
            if (isset($_POST['elect5'])) {
                $elect5 = new Result();
                $elect5->applicantid = $_POST['applicantid'];
                $elect5->iscore = false;
                $elect5->date = $_POST['elect5']['date'];
                $elect5->grade = $_POST['elect5']['grade'];
                $elect5->name = $_POST['elect5']['name'];
                $this->db->insert('results', $elect5);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            if (isset($_POST['elect6'])) {
                $elect6 = new Result();
                $elect6->applicantid = $_POST['applicantid'];
                $elect6->iscore = false;
                $elect6->date = $_POST['elect6']['date'];
                $elect6->grade = $_POST['elect6']['grade'];
                $elect6->name = $_POST['elect6']['name'];
                $this->db->insert('results', $elect6);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            if (isset($_POST['elect7'])) {
                $elect7 = new Result();
                $elect7->applicantid = $_POST['applicantid'];
                $elect7->iscore = false;
                $elect7->date = $_POST['elect7']['date'];
                $elect7->grade = $_POST['elect7']['grade'];
                $elect7->name = $_POST['elect7']['name'];
                $this->db->insert('results', $elect7);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            if (isset($_POST['elect8'])) {
                $elect8 = new Result();
                $elect8->applicantid = $_POST['applicantid'];
                $elect8->iscore = false;
                $elect8->date = $_POST['elect8']['date'];
                $elect8->grade = $_POST['elect8']['grade'];
                $elect8->name = $_POST['elect8']['name'];
                $this->db->insert('results', $elect8);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            if (isset($_POST['elect9'])) {
                $elect9 = new Result();
                $elect9->applicantid = $_POST['applicantid'];
                $elect9->iscore = false;
                $elect9->date = $_POST['elect9']['date'];
                $elect9->grade = $_POST['elect9']['grade'];
                $elect9->name = $_POST['elect9']['name'];
                $this->db->insert('results', $elect9);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }


        //Handling Resit papers
        try {
            //Handling Resit papers
            if (isset($_POST['resit1']) && $_POST['resit1']['name'] !== '' && $_POST['resit1']['date'] !== "") {
                $resit1 = new ResultResit();
                $resit1->applicantid = $_POST['applicantid'];
                $resit1->date = $_POST['resit1']['date'];
                $resit1->grade = $_POST['resit1']['grade'];
                $resit1->name = $_POST['resit1']['name'];
                $resit1->centerno = $_POST['resit1']['centerno'];
                $resit1->index = $_POST['resit1']['index'];
                $this->db->insert('resit_results', $resit1);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            //Handling Resit papers
            if (isset($_POST['resit2']) && $_POST['resit2']['name'] !== '' && $_POST['resit2']['date'] !== "") {
                $resit2 = new ResultResit();
                $resit2->applicantid = $_POST['applicantid'];
                $resit2->date = $_POST['resit2']['date'];
                $resit2->grade = $_POST['resit2']['grade'];
                $resit2->name = $_POST['resit2']['name'];
                $resit2->centerno = $_POST['resit2']['centerno'];
                $resit2->index = $_POST['resit2']['index'];
                $this->db->insert('resit_results', $resit2);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            //Handling Resit papers
            if (isset($_POST['resit3']) && $_POST['resit3']['name'] !== '' && $_POST['resit3']['date'] !== "") {
                $resit3 = new ResultResit();
                $resit3->applicantid = $_POST['applicantid'];
                $resit3->date = $_POST['resit3']['date'];
                $resit3->grade = $_POST['resit3']['grade'];
                $resit3->name = $_POST['resit3']['name'];
                $resit3->centerno = $_POST['resit3']['centerno'];
                $resit3->index = $_POST['resit3']['index'];
                $this->db->insert('resit_results', $resit3);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            //Handling Resit papers
            if (isset($_POST['resit4']) && $_POST['resit4']['name'] !== '' && $_POST['resit4']['date'] !== "") {
                $resit4 = new ResultResit();
                $resit4->applicantid = $_POST['applicantid'];
                $resit4->date = $_POST['resit4']['date'];
                $resit4->grade = $_POST['resit4']['grade'];
                $resit4->name = $_POST['resit4']['name'];
                $resit4->centerno = $_POST['resit4']['centerno'];
                $resit4->index = $_POST['resit4']['index'];
                $this->db->insert('resit_results', $resit4);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            //Handling Resit papers
            if (isset($_POST['resit5']) && $_POST['resit5']['name'] !== '' && $_POST['resit3']['date'] !== "") {
                $resit5 = new ResultResit();
                $resit5->applicantid = $_POST['applicantid'];
                $resit5->date = $_POST['resit5']['date'];
                $resit5->grade = $_POST['resit5']['grade'];
                $resit5->name = $_POST['resit5']['name'];
                $resit5->centerno = $_POST['resit5']['centerno'];
                $resit5->index = $_POST['resit5']['index'];
                $this->db->insert('resit_results', $resit5);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            //Handling Resit papers
            if (isset($_POST['resit6']) && $_POST['resit6']['name'] !== '' && $_POST['resit6']['date'] !== "") {
                $resit6 = new ResultResit();
                $resit6->applicantid = $_POST['applicantid'];
                $resit6->date = $_POST['resit6']['date'];
                $resit6->grade = $_POST['resit6']['grade'];
                $resit6->name = $_POST['resit6']['name'];
                $resit6->centerno = $_POST['resit6']['centerno'];
                $resit6->index = $_POST['resit6']['index'];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            //Handling Resit papers
            if (isset($_POST['resit7']) && $_POST['resit7']['name'] !== '' && $_POST['resit7']['date'] !== "") {
                $resit7 = new ResultResit();
                $resit7->applicantid = $_POST['applicantid'];
                $resit7->date = $_POST['resit7']['date'];
                $resit7->grade = $_POST['resit7']['grade'];
                $resit7->name = $_POST['resit7']['name'];
                $resit7->centerno = $_POST['resit7']['centerno'];
                $resit7->index = $_POST['resit7']['index'];
                $this->db->insert('resit_results', $resit7);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        try {
            //Handling Resit papers
            if (isset($_POST['resit8']) && $_POST['resit8']['name'] !== '' && $_POST['resit8']['date'] !== "") {
                $resit8 = new ResultResit();
                $resit8->applicantid = $_POST['applicantid'];
                $resit8->date = $_POST['resit1']['date'];
                $resit8->grade = $_POST['resit1']['grade'];
                $resit8->name = $_POST['resit1']['name'];
                $resit8->centerno = $_POST['resit1']['centerno'];
                $resit8->index = $_POST['resit1']['index'];

                $this->db->insert('resit_results', $resit8);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function AddTransfer($applicantid) {
        //Clear results papers
        //Clean database first before entering new exams details
        $this->db->where('applicantid', $this->input->post('applicantid'));
        $this->db->delete('results');
        
        $this->db->where('applicantid', $this->input->post('applicantid'));
        $this->db->delete('transfer');

        $this->transfer = new TransferData();

        $this->transfer->applicantid = $applicantid;
        $this->transfer->currentschool = $this->input->post('currentschool');
        $this->transfer->currentyear = $this->input->post('currentyear');
        $this->transfer->dateenrolled = $this->input->post('dateenrolled');
        $this->transfer->program = $this->input->post('program');
          $this->db->insert("transfer",$this->transfer);
    }

    public function SetSection($section) {
        $this->db->where('applicantid', $this->input->post('applicantid'));
        $this->db->set('sectionno', $section);
        $this->db->update('applicants');
    }

}
