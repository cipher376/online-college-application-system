<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017) */
?>
<!DOCTYPE html/>
<html>
    <head>
        <title>anu application</title>
        <link type="text/css" rel="stylesheet" href="/public/assets/lib/apptemplate/index.css"/>
    </head>
    <body>
        <!--Beginning of cover page code.-->
        <div style="width: 100%;">
            <img src="/public/assets/lib/apptemplate/newform.png" class="logo"/>
        </div>

        <!--Ending of cover page code.-->

        <!--Beginning of ANUC 1-->

        <div class="form-section" style="margin-top: 20px; position: relative;">
            <div class="overlay">
                <img src="/public/assets/lib/apptemplate/anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
            </div>

            <div class="form-group">
                <div style="width: auto; text-align: center;" >
                    <img src="/public/assets/lib/apptemplate/anuc.png" style="width: 130px; height: 130px;"/>
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
                    <div class="header-sub4">PART 'A'</div>
                </div>

                <!--Header for page one ended here.-->

                <!--Personal information section-->
                <div class="form-section-lists">
                    <p>PERSONAL INFORMATION</p>  
                </div> 
                <div style="text-align: left; max-width: 100%;">
                    <p style="font-weight: bold">Name of Applicant <span style="font-style: italic;">(As indicated on your WAEC Certificate/Result Slip)</span></p>
                    <div>

                        <label for="rev">Rev.</label><input type="checkbox" id="rev" style="margin-right: 8%;"/>
                        <label for="mr">Mr.</label><input type="checkbox" id="mr" style="margin-right: 8%;"/>
                        <label for="mrs">Mrs.</label><input type="checkbox" id="mrs" style="margin-right: 8%"/>
                        <label for="miss">Miss.</label><input type="checkbox" id="miss" style="margin-right: 8%;"/>
                        <label for="other-title">Other Title:</label><input class="input-text" type="text" id="other-title" style="width: 30%;"/>
                    </div><br/>
                    <div>
                        <label for="surname">Surname:</label><input class="input-text" type="text" id="surname" style="width: 40%;"/>
                        <label for="firstname">First Name:</label><input class="input-text" type="text" id="firstname" style="width: 40%;"/>
                    </div><br/>
                    <div>
                        <label for="other-name">Other names:</label><input class="input-text input-text-stretch" type="text" id="other-name" style="width: 87%;"/>
                    </div>
                </div><br/><br/>
                <div class="form-section-lists">
                    <p>
                        Date of Birth of Applicant (dd/mm/yyyy)
                        <input class="input-text input-text-small" type="text" id="day" style="width: 15%;"/>&#47;
                        <input class="input-text input-text-small" type="text" id="month" style="width: 15%;"/>&#47;
                        <input class="input-text input-text-small" type="text" id="year" style="width: 15%;"/>
                    </p>
                </div> 
                <div style="text-align: left; max-width: 100%;">
                    <div>
                        <label for="place-of-birth">Place of Birth:</label><input class="input-text" style="width: 36%" type="text" id="place-of-birth"/>
                        <label for="country-of-birth">Country of Birth:</label><input class="input-text" style="width: 35%" type="text" id="surname"/>
                    </div><br/>
                    <div>
                        <label for="nationality">Nationality:</label><input class="input-text" style="width: 38%" type="text" id="nationality"/>
                        <label for="nationality">Passport Number(<span class="small-text">if any</span>):</label><input style="width: 30%" class="input-text" type="text" id="nationality"/>
                    </div><br/>
                    <div>
                        <label for="lang">Language(s) spoken:</label>
                        <input class="input-text" style="width: 26.5%;" type="text" id="lang"/>
                        <input class="input-text" style="width: 26.5%;" type="text" id="lang"/>
                        <input class="input-text" style="width: 26.5%;" type="text" id="lang"/>
                    </div><br/>
                    <div>
                        <label for="blood">Blood Group</label><input class="input-text" type="text" id="blood"/><br/><br/>
                        Gender: &nbsp;&nbsp;&nbsp;<label for="male">Male</label><input type="checkbox" id="male" style="margin-right: 9%;"/>
                        <label for="female">Female</label><input type="checkbox" id="female"/>
                    </div>
                </div><br/><br/>
                <div class="form-section-lists">
                    <p>
                        Religious Background(
                        <span class="small-text">please tick as applicable</span>)
                    </p>  
                </div> 
                <div style="text-align: left; max-width: 100%;">
                    <label for="christian">Christian</label><input type="checkbox" id="christian" style="margin-right: 3%;"/>
                    <label for="muslim">Muslim</label><input type="checkbox" id="muslim"  style="margin-right: 3%;"/>
                    <label for="traditional">Traditional</label><input type="checkbox" id="traditional"  style="margin-right: 3%;"/>
                    <label for="other-religion">Others(<span class="small-text">please specify</span>)</label>
                    <input class="input-text" style="width: 40%;" type="text" id="other-religion"/>
                </div><br/><br/>
                <div class="form-section-lists">
                    <p>
                        Marital Status(
                        <span class="small-text">please tick as applicable</span>)
                    </p>  
                </div> 
                <div style="text-align: left; max-width: 100%;">
                    <label for="single">Single</label><input type="checkbox" id="single" style="margin-right: 8%;"/>
                    <label for="married">Married</label><input type="checkbox" id="married"  style="margin-right: 8%;"/>
                    <label for="separated">Separated</label><input type="checkbox" id="separated"  style="margin-right: 8%;"/>
                    <label for="divorced">Divorced</label><input type="checkbox" id="divorced"  style="margin-right: 8%;"/>
                    <label for="widowed">widowed</label><input type="checkbox" id="widowed"/>
                    <br/><br/>
                    <label for="home-address">Home Address:</label>
                    <input class="input-text" style="width: 85%;" type="text" id="home-address"/>
                    <input class="input-text" style="width: 98.7%; margin-top: 1%;" type="text" id="home-address"/><br/><br/>
                    <label for="mailing-address">Mailing Address:(<span class="small-text">If Different</span>)</label>
                    <input class="input-text" style="width: 74%; text-align: left;" type="text" id="mailing-address"/>
                    <br/><br/>
                    <label for="telephone">Telephone Number:</label>
                    <input class="input-text" style="width: 26.3%;" type="text" id="telephone" />/
                    <input class="input-text" style="width: 26.3%;" type="text" id="telephone"/>/
                    <input class="input-text" style="width: 26.3%;" type="text" id="telephone"/><br/>
                    <span class="small-text" style="margin-left:28%;">(Office)</span>
                    <span class="small-text" style="margin-left:20%;">(Residence)</span>
                    <span class="small-text" style="margin-left:20%;">(Mobile)</span>
                    <br/><br/>
                    <label for="mailing-address">E-mail Address:</label>
                    <input class="input-text" style="width: 85%;" type="text" id="mailing-address"/>
                </div>
                <br/>
            </div>
            <div class="footer">
                <div class="footer-title"><div class="footer-center">ANUC 01</div></div>
                <div class="footer-description"><div class="footer-center">Equipped for every good work</div></div>
            </div>
        </div>
        <!--Ending of ANUC 1-->
        <!--Begining of ANUC 2-->
        <div class="form-section" style="margin-top: 20px; position: relative;">
            <div class="overlay">
                <img src="anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
            </div>
            <div class="form-group">
                <div style="text-align: center;">
                    <div class="header-sub4">PART 'B'</div>
                </div>
                <div class="form-section-lists">
                    <p>FAMILY DATA</p>  
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <label for="father-name">Father's Name:</label>
                    <input type="text" class="input-text" id="father-name" style="width: 86%;"/>
                    <br/><br/>
                    <label for="father-address">Address:</label>
                    <input type="text" class="input-text" id="father-address" style="width: 91.3%;"/>
                    <br/>
                    <input class="input-text" style="width: 98.7%; margin-top: 1%;" type="text" id="home-address"/>
                    <br/><br/>
                    <label for="father-prof">Profession:</label>
                    <input type="text" class="input-text" id="father-prof" style="width: 89.3%;"/>
                    <br/><br/>
                    <label for="father-phone">Telephone Number:</label>
                    <input class="input-text" style="width: 26.3%;" type="text" id="father-phone" />/
                    <input class="input-text" style="width: 26.3%;" type="text" id="father-phone"/>/
                    <input class="input-text" style="width: 26.3%;" type="text" id="father-phone"/><br/>
                    <span class="small-text" style="margin-left:28%;">(Office)</span>
                    <span class="small-text" style="margin-left:20%;">(Residence)</span>
                    <span class="small-text" style="margin-left:20%;">(Mobile)</span>
                    <br/><br/>
                    <label for="father-qualification">Highest Qualification Earned:</label>
                    <input type="text" class="input-text" id="father-qualification" style="width: 74%;"/>
                    <br/><br/>
                    <label for="father-mail">e-mail Address:</label>
                    <input type="text" class="input-text" id="father-mail" style="width: 86%;"/>
                    <br/><br/><br/><br/>


                    <label for="mother-name">Mother's Name:</label>
                    <input type="text" class="input-text" id="mother-name" style="width: 85%;"/>
                    <br/><br/>
                    <label for="mother-address">Address:</label>
                    <input type="text" class="input-text" id="mother-address" style="width: 91.3%;"/>
                    <br/>
                    <input class="input-text" style="width: 98.7%; margin-top: 1%;" type="text" id="home-address"/>
                    <br/><br/>
                    <label for="mother-prof">Profession:</label>
                    <input type="text" class="input-text" id="mother-prof" style="width: 89.3%;"/>
                    <br/><br/>
                    <label for="mother-phone">Telephone Number:</label>
                    <input class="input-text" style="width: 26.3%;" type="text" id="mother-phone"/>/
                    <input class="input-text" style="width: 26.3%;" type="text" id="mother-phone"/>/
                    <input class="input-text" style="width: 26.3%;" type="text" id="mother-phone"/><br/>
                    <span class="small-text" style="margin-left:28%;">(Office)</span>
                    <span class="small-text" style="margin-left:20%;">(Residence)</span>
                    <span class="small-text" style="margin-left:20%;">(Mobile)</span>
                    <br/><br/>
                    <label for="mother-qualification">Highest Qualification Earned:</label>
                    <input type="text" class="input-text" id="mother-qualification" style="width: 74%;"/>
                    <br/><br/>
                    <label for="mother-mail">e-mail Address:</label>
                    <input type="text" class="input-text" id="mother-mail" style="width: 86%;"/>
                    <br/><br/><br/><br/>



                    <label for="guard-name">Guardian's Name:</label>
                    <input type="text" class="input-text" id="guard-name" style="width: 83%;"/>
                    <br/><br/>
                    <label for="guard-address">Address:</label>
                    <input type="text" class="input-text" id="guard-address" style="width: 91.3%;"/>
                    <br/>
                    <input class="input-text" style="width: 98.7%; margin-top: 1%;" type="text" id="guard-address"/>
                    <br/><br/>
                    <label for="guard-prof">Profession:</label>
                    <input type="text" class="input-text" id="guard-prof" style="width: 89.3%;"/>
                    <br/><br/>
                    <label for="guard-phone">Telephone Number:</label>
                    <input class="input-text" style="width: 26.3%;" type="text" id="guard-phone"/>/
                    <input class="input-text" style="width: 26.3%;" type="text" id="guard-phone"/>/
                    <input class="input-text" style="width: 26.3%;" type="text" id="guard-phone"/><br/>
                    <span class="small-text" style="margin-left:28%;">(Office)</span>
                    <span class="small-text" style="margin-left:20%;">(Residence)</span>
                    <span class="small-text" style="margin-left:20%;">(Mobile)</span>
                    <br/><br/>
                    <label for="guard-qualification">Highest Qualification Earned:</label>
                    <input type="text" class="input-text" id="guard-qualification" style="width: 74%;"/>
                    <br/><br/>
                    <label for="guard-mail">e-mail Address:</label>
                    <input type="text" class="input-text" id="guard-mail" style="width: 86%;"/>
                    <br/><br/><br/>
                </div>
                <div class="form-section-lists">
                    <p>
                        Marital Status of parents / Guardian
                        (<span class="small-text">Please tick as applicable</span>)
                    </p>
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <label for="married-guardian">Married</label>&nbsp;&nbsp;<input type="checkbox" id="married-guardian" style="margin-right: 10%;"/>
                    <label for="separated-guardian">Separated</label>&nbsp;&nbsp;<input type="checkbox" id="separated-guardian" style="margin-right: 10%;"/>
                    <label for="divorced-guardian">Divorced</label>&nbsp;&nbsp;<input type="checkbox" id="divorced-guardian"/>
                </div>
                <br/><br/>
            </div>
            <div class="footer">
                <div class="footer-title"><div class="footer-center">ANUC 02</div></div>
                <div class="footer-description"><div class="footer-center">Equipped for every good work</div></div>
            </div>
        </div>
        <!--Ending of ANUC 2-->

        <!--Begining of ANUC 3-->
        <div class="form-section" style="margin-top: 20px; position: relative;">
            <div class="overlay">
                <img src="/public/assets/lib/apptemplate/anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
            </div>
            <div class="form-group">
                <div style="text-align: center;">
                    <div class="header-sub4">PART 'C'</div>
                </div>
                <div class="form-section-lists">
                    <p>APPLICANT'S EDUCATIONAL HISTORY</p><br/><div style="margin-top: -30px;">ENTRY LEVEL</div>
                </div><br/>
                <div style="text-align: left; max-width: 100%; margin-top: -10px;">
                    <label for="entry-reg">Regular</label>&nbsp;<input type="checkbox" id="entry-reg" style="margin-right: 15%"/>
                    <label for="entry-mat">Mature</label>&nbsp;<input type="checkbox" id="entry-mat" style="margin-right: 15%"/>
                    <label for="entry-trans">Transfer</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="entry-trans" style="margin-right: 15%"/>
                    <label for="entry-pre">Pre-University</label>&nbsp;<input type="checkbox" id="entry-pre" />
                </div><br/>
                <div class="form-section-lists">
                    <p>QUALIFICATION(S)</p>               
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <label for="sssce" style="margin-right: 3%;">SSSCE</label><input type="checkbox" id="sssce" style="margin-right: 12%;"/>
                    <label for="abce" style="margin-right: 1%;">'A' Level / ABCE</label><input type="checkbox" id="abce" style="margin-right: 12%;"/>
                    <label for="wassce" style="margin-right: 10%;">WASSCE</label><input type="checkbox" id="wassce"/>
                    <br/>
                    <label for="diploma" style="margin-right: 1.88%;">Diploma</label><input type="checkbox" id="diploma" style="margin-right: 12%;"/>
                    <label for="hnd" style="margin-right: 11.4%;">HND</label><input type="checkbox" id="hnd" style="margin-right: 12%;"/>
                    <label for="teacher-cert" style="margin-right: 1%;">Teacher's Certificate</label><input type="checkbox" id="teacher-cert"/>
                    <br/>
                    <label for="hnc" style="margin-right: 4.7%;">HNC</label><input type="checkbox" id="hnc" style="margin-right: 12.3%;"/>
                    <label for="o-level" style="margin-right: 8.3%;">'O' Level</label><input type="checkbox" id="o-level" style="margin-right: 12%;"/>
                    <label for="ftc" style="margin-right: 14.3%;">FTC</label><input type="checkbox" id="ftc"/>
                    <br/>
                    <p>(Original documents must be submitted, copies will be certified and originals returned)</p>
                </div><br/>
                <div class="form-section-lists">
                    <p>
                        SCHOOL / INSTITUTION
                    </p>
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <label for="current-school">Current School / Institution and year of Entry:</label><br/>
                    <input type="text" class="input-text" id="current-school" style="width: 77%"/>&nbsp;&nbsp;
                    <input type="text" class="input-text" style="width: 20%"/>
                </div><br/><br/>
                <div class="form-section-lists">
                    <p>
                        List Schools / Institutions you have attended and completed
                    </p>
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <table style="width: 100%;">
                        <tr>
                            <td style="border-top: 2px solid transparent; border-left: 2px solid transparent; border-right: 2px solid transparent;"></td>
                            <td style="border-top: 2px solid transparent;  border-right: 2px solid transparent;"></td>
                            <td style="border-top: 2px solid transparent;"></td>
                            <td style="width: 25px; padding: 5px 15 5px 15px;">Dates</td>
                        </tr>
                        <tr>
                            <td style="width: 300px; height: 20px; padding: 5px 15px 5px 15px;">Name of School / Institution</td>
                            <td style="width: 50px; height: 20px; padding: 5px 15px 5px 15px;">Location</td>
                            <td style="width: 50px; height: 20px; padding: 5px 15px 5px 15px;">From</td>
                            <td style="width: 50px; height: 20px; padding: 5px 15px 5px 15px;">To</td>
                        </tr>
                        <tr>
                            <td style="width: 300px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                        </tr>
                        <tr>
                            <td style="width: 300px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                        </tr>
                        <tr>
                            <td style="width: 300px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                        </tr>
                        <tr>
                            <td style="width: 300px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                        </tr>
                        <tr>
                            <td style="width: 300px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                            <td style="width: 50px; height: 30px; padding: 5px 15px 5px 15px;"></td>
                        </tr>
                    </table>
                </div><br/><br/>
                <div class="form-section-lists">
                    <p>
                        EXAMINATION TAKEN
                    </p>
                </div>
                <div style="text-align: left; max-width: 100%;">
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
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <label style="text-align: center; width: 100%;">Results For Core Subjects</label>
                    <table style="width: 100%">
                        <tbody>
                        <thead>
                            <tr>
                                <td>Subject</td>
                                <td>Date Taken</td>
                                <td>Grade</td>
                            </tr>
                        </thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <label style="text-align: center; width: 100%;">Results For Elective Subjects</label>
                    <table style="width: 100%">
                        <tbody>
                        <thead>
                            <tr>
                                <td>Subject</td>
                                <td>Date Taken</td>
                                <td>Grade</td>
                            </tr>
                        </thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>

                    <label style="text-align: center; width: 100%;">Re-sit Results</label>
                    <table style="width: 100%">
                        <tbody>
                        <thead>
                            <tr>
                                <td>Center No.</td>
                                <td>Index No.</td>
                                <td>Subject</td>
                                <td>Date Taken</td>
                                <td>Grade</td>
                            </tr>
                        </thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <br/>
            </div>

            <div class="footer">
                <div class="footer-title"><div class="footer-center">ANUC 03</div></div>
                <div class="footer-description"><div class="footer-center">Equipped for every good work</div></div>
            </div>
        </div>
        <!--Ending of ANUC 3-->

        <!--Beginning of ANUC 4-->
        <div class="form-section" style="margin-top: 20px; position: relative;">
            <div class="overlay">
                <img src="/public/assets/lib/apptemplate/anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
            </div>
            <div class="form-group">
                <div class="form-section-lists">
                    <p>For Transfer Candidate</p>  
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <table style="width: 100%">
                        <tr>
                            <td style="width: 25%; height: 30px;">Institution Now Attending</td>
                            <td style="width: 25%; height: 30px;">Course Studied</td>
                            <td style="width: 25%; height: 30px;">Number of Years at Current Institution</td>
                            <td style="width: 25%; height: 30px;">Dates</td>
                        </tr>
                        <tr>
                            <td style="width: 25%; height: 30px;"></td>
                            <td style="width: 25%; height: 30px;"></td>
                            <td style="width: 25%; height: 30px;"></td>
                            <td style="width: 25%; height: 30px;"></td>
                        </tr>
                        <tr>
                            <td style="width: 25%; height: 30px;"></td>
                            <td style="width: 25%; height: 30px;"></td>
                            <td style="width: 25%; height: 30px;"></td>
                            <td style="width: 25%; height: 30px;"></td>
                        </tr>
                        <tr>
                            <td style="width: 25%; height: 30px;"></td>
                            <td style="width: 25%; height: 30px;"></td>
                            <td style="width: 25%; height: 30px;"></td>
                            <td style="width: 25%; height: 30px;"></td>
                        </tr>
                    </table>
                </div><br/>
                <div style="font-weight: bolder; text-align: left; max-width: 100%;">
                    NOTE: Complete the appropriate format.<br/>Attach OFFICIAL RESULTS SLIPS / TRANSCRIPTS / CERTIFICATES as appropriate and any other relevant awards, professional certificates, etc. 
                </div><br/>
                <div class="form-section-lists">
                    <p>CHOICE OF PROGRAMME OF STUDY</p>               
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <label for="first-choice">First Choice:</label><input style="width: 50%;" class="input-text" type="text" id="first-choice"/><br/><br/>
                    <label for="second-choice">Second Choice:</label><input style="width: 48%;" class="input-text" type="text" id="second-choice"/><br/><br/>
                    <label for="third-choice">Third Choice:</label><input style="width: 49.5%;" class="input-text" type="text" id="third-choice"/>
                </div><br/>
                <div class="form-section-lists">
                    <p>
                        SESSION OF ENROLLMENT SOUGHT
                    </p>               
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <label for="full-time">Full Time&nbsp;&nbsp;</label><input type="checkbox" id="full-time" style="margin-right: 14%;"/>
                    <label for="evening">Evening&nbsp;&nbsp;</label><input type="checkbox" id="evening" style="margin-right: 14%;"/>
                    <label for="weekend">Weekend&nbsp;&nbsp;</label><input type="checkbox" id="weekend"/>
                </div><br/>
                <div class="form-section-lists">
                    <p>
                        DO YOU NEED RESIDENTIAL ACCOMODATION?
                        (<span class="small-text">Please tick as applicable</span>)
                    </p>               
                </div>
                <div style=" text-align: left; max-width: 100%;">
                    <label for="resident-yes" >Yes</label><input type="checkbox" id="resident-yes" style="margin-right: 25%;"/>
                    <label for="resident-no">No</label><input type="checkbox" id="resident-no"/>
                    <p style="text-align: left;"><span style="font-weight: bold;">Please Note: </span>International Students are to stay in ANUC approved housing.</p>
                </div>
                <br/>
                <div class="form-section-lists">
                    DO YOU HAVE ANY FORM OF DISABILITY?
                    (<span class="small-text">Please tick as applicable</span>)            
                </div><br/>
                <div style=" text-align: left; max-width: 100%;">
                    <label for="disability-yes" >Yes</label><input type="checkbox" id="disability-yes" style="margin-right: 25%;"/>
                    <label for="disability-no">No</label><input type="checkbox" id="disability-no"/><br/>
                    <div style="margin-top: 1%;">
                        If yes, please specify: <input type="text" class="input-text" style="width: 81%;"/>
                    </div>
                </div>
                <br/>
                <div class="form-section-lists">
                    <p>
                        HOW DID YOU HEAR ABOUT ANUC?
                    </p>  
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <label for="newspaper">Newspaper</label>&nbsp;<input type="checkbox" id="newspaper" style="margin-right: 15%;"/>
                    <label for="television">Television</label>&nbsp;<input type="checkbox" id="television"  style="margin-right: 15%;"/>
                    <label for="radio">Radio</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="radio"  style="margin-right: 15.6%;"/>
                    <label for="friends">Friends</label>&nbsp;&nbsp;<input type="checkbox" id="friends"/>
                    <br/><br/>
                    <label for="students">Students</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="students" style="margin-right: 15%;"/>
                    <label for="alumnus">Alumnus</label>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="alumnus" style="margin-right: 15.7%;"/>
                    <label for="agents">Agents</label>&nbsp;&nbsp;<input type="checkbox" id="agents" style="margin-right: 15.6%;"/>
                    <label for="internet">Internet</label>&nbsp;&nbsp;<input type="checkbox" id="internet"/>
                    <br/><br/>
                    <p class="small-text">(Please state name of person of medium)</p>
                    <label for="name-medium">Name / Medium:</label>
                    <input class="input-text" style="width: 83.1%;" type="text" id="name-medium"/>
                    <br/><br/>
                    <label for="media-phone">Telephone Number:</label>
                    <input class="input-text" style="width: 26.3%;" type="text" id="media-phone"/>/
                    <input class="input-text" style="width: 26.3%;" type="text" id="media-phone"/>/
                    <input class="input-text" style="width: 26.3%;" type="text" id="media-phone"/><br/>
                    <span class="small-text" style="margin-left:28%;">(Office)</span>
                    <span class="small-text" style="margin-left:20%;">(Residence)</span>
                    <span class="small-text" style="margin-left:20%;">(Mobile)</span>
                </div>


            </div>
            <div class="footer">
                <div class="footer-title"><div class="footer-center">ANUC 04</div></div>
                <div class="footer-description"><div class="footer-center">Equipped for every good work</div></div>
            </div>
        </div>   
        <!--Ending of ANUC 4-->




        <!--Beginning of ANUC 5-->
        <div class="form-section" style="margin-top: 20px; position: relative;">
            <div class="overlay">
                <img src="/public/assets/lib/apptemplate/anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
            </div>
            <div class="form-group">
                <div style="text-align: center;">
                    <div class="header-sub4">PART 'D'</div>
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
                        <div style="width: 50%; position: absolute;">
                            <input type="text" class="input-text"/><br/><p style="text-align: center;">(Signature)</p>
                        </div>
                        <div style="width: 50%; position: absolute; left: 50%;">
                            <input type="text" class="input-text"/><br/><p style="text-align: center;">(Date)</p>
                        </div>
                    </div>
                </div><br/>
                <div style="text-align: center; max-width: 100%;">
                    <input type="text" class="input-text" style="width: 70%"/><br/>
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
                        Bishop/Rev. /Mr./Mrs./Miss.: (Print) <input type="text" class="input-text" style="width: 67%;"/><br/>who is personally known to me.</p>
                </div>
                <div style="text-align: left; max-width: 100%;">
                    <div>
                        Name:<input type="text" class="input-text" style="width: 60%;"/> Profession:<input type="text" class="input-text" style="width: 23%;"/>
                    </div><br/>
                    <label for="ver-address">Address:</label>
                    <input type="text" class="input-text" id="ver-address" style="width: 91.3%;"/>
                    <input class="input-text" style="width: 98.7%; margin-top: 1%;" type="text" id="ver-address"/><br/><br/>
                    <label for="ver-telephone">Telephone Number:</label>
                    <input class="input-text" style="width: 26.3%;" type="text" id="ver-telephone" />/
                    <input class="input-text" style="width: 26.3%;" type="text" id="ver-telephone"/>/
                    <input class="input-text" style="width: 26.3%;" type="text" id="ver-telephone"/><br/>
                    <span class="small-text" style="margin-left:28%;">(Office)</span>
                    <span class="small-text" style="margin-left:20%;">(Residence)</span>
                    <span class="small-text" style="margin-left:20%;">(Mobile)</span>
                    <br/><br/>
                    <label for="ver-address">E-mail Address:</label>
                    <input class="input-text" style="width: 85%;" type="text" id="ver-address"/><br/><br/>
                    <div>
                        Signature:<input type="text" class="input-text" style="width: 62.5%;"/> Date:<input type="text" class="input-text" style="width: 23%;"/>
                    </div><br/><br/><br/>
                    <div>
                        Stamp /  Seal of Officer <input type="text" class="input-text" style="width: 30%"/>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footer-title"><div class="footer-center">ANUC 05</div></div>
                <div class="footer-description"><div class="footer-center">Equipped for every good work</div></div>
            </div>
        </div>
        <!--Ending of  ANUC 5-->

        <!--Beginning of ANUC 6-->
        <div class="form-section" style="margin-top: 20px; position: relative;">
            <div class="overlay">
                <img src="/public/assets/lib/apptemplate/anuc.png" style="width: 250px; max-width: 100%; height: auto;"/>  
            </div>
            <div class="form-group">
                <div style="text-align: center;">
                    <div class="header-office" style="text-decoration: underline;  margin: auto; width: 220px;">FOR OFFICE USE ONLY</div>
                </div><br/>
                <div style="text-align: center;">
                    <div class="header-office" style="width: 270px;">STUDENT'S ASSESSMENT FORM</div>
                </div><br/>
                <div style="text-align: left; max-width: 100%;">
                    Applicant's Name: <input type="text" class="input-text" style="width: 80%"/>
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
                    <label for="office-name">'A' Level / ABCE:</label>
                    <input type="text" class="input-text" id="office-name" style="width: 80%;"/>
                    <br/><br/>
                    <label for="office-hnd">HND:</label>
                    <input type="text" class="input-text" id="office-hnd" style="width: 90.5%;"/>
                    <br/><br/>
                    <label for="office-ftc">PART III / FTC:</label>
                    <input type="text" class="input-text" id="office-ftc" style="width: 81.5%;"/>
                    <br/><br/>
                    <label for="office-teach">TEACHER'S CERTIFICATE:</label>
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
                        SERIAL NUMBER: <input type=text/>
                    </span>  &nbsp; &nbsp; &nbsp;
                    <span style="width: 50%;">CODE: <input type=text/></span>

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
            <img src="/public/assets/lib/apptemplate/bottom.png" style="width: 800px; margin-left: 45px; margin-top: 500px; max-width: 100%;
                 height: auto;"/>
        </div>
    </body>
</html>