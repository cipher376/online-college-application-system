<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="panel panel-color panel-info" ng-controller="PersonalInfoController">
    <div class="progress">
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-danger progress-bar-striped active">10%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;" class="progress-bar progress-bar-warning progress-bar-striped active">2%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;" class="progress-bar progress-bar-success progress-bar-striped active">2%</div>
    </div>

    <div class="panel-heading"> 
        <h3 class="panel-title">1. PERSONAL INFORMATION</h3> 
    </div> 
    <div class="panel-body"> 
        <form class="form-horizontal p-20" role="form"  name="personinfo">

            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        1.1 Name of applicant
                    </h4>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#name-default"><i class="ion-minus-round"></i></a>
                        <span class="divider"></span>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="name-default" class="panel-collapse collapse in">
                    <div class="portlet-body">


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-4">
                                <select class="form-control"  required="" minlength='1'
                                        ng-model="applicantService.personalInformation.title" >
                                    <option></option>
                                    <option value="Rev">Rev.</option>
                                    <option value="Mr">Mr.</option>
                                    <option Value='Mrs'>Mrs.</option>
                                    <option value='Miss'>Miss</option>
                                </select>
                            </div>
                            <label class="col-sm-2 control-label">Other Title(s)</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Other Title(s)" 
                                       ng-model="applicantService.personalInformation.othertitles">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Surname</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required="" maxlength="100"
                                       ng-model="applicantService.personalInformation.surname" placeholder="Surname">   
                            </div></div>

                        <div class="form-group">

                            <label class="col-sm-2 control-label">First name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required="" maxlength="100"
                                       ng-model="applicantService.personalInformation.firstname" placeholder="First name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Other name(s)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                       ng-model="applicantService.personalInformation.othernames"
                                       placeholder="Other name(s)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        1.2 Origin
                    </h4>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#origin-default"><i class="ion-minus-round"></i></a>
                        <span class="divider"></span>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="origin-default" class="panel-collapse collapse in">
                    <div class="portlet-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Date of birth</label>
                            <div class="col-sm-10"> 
                                <datepicker date-format='yyyy-MM-dd'>
                                    <input class="form-control" 
                                           ng-model="applicantService.personalInformation.dateofbirth" type="text"/>
                                </datepicker>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Place of birth</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required="" maxlength="100"
                                       ng-model="applicantService.personalInformation.placeofbirth"  
                                       placeholder="Place of birth">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Country Of Birth</label>
                            <div class="col-sm-10">
                                <select name="countryofbirth" class="form-control "
                                        required="" minlength="1" ng-model="applicantService.personalInformation.countryofbirth" >
                                    <option value="#">&nbsp;</option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curacao">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Barthelemy">Saint Barthelemy</option>
                                    <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nationality</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required="" maxlength="100"
                                       ng-model="applicantService.personalInformation.nationality"  
                                       placeholder="Nationality">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Passport No.</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                       ng-model="applicantService.personalInformation.passportno" 
                                       placeholder="Passport Number(Optional)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Language(s) </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  required="" maxlength="100"
                                       ng-model="applicantService.personalInformation.languages"
                                       placeholder="e.g English, French, Espanol">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Blood Group</label>
                            <div class="col-sm-10">
                                <select class="form-control" required=""
                                        ng-model="applicantService.personalInformation.bloodgroup">
                                    <option></option>
                                    <option value="A-">A-</option>
                                    <option value="A+">A+</option>
                                    <option value="B-">B-</option>
                                    <option value="B+">B+</option>
                                    <option value="AB-">AB-</option> 
                                    <option value="AB+">AB+</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Gender</label>
                            <div class="col-md-9">
                                <div class="radio-inline">
                                    <label class="cr-styled" for="male-radio">
                                        <input type="radio" id="male-radio" name="gender" value="m" required=""
                                               ng-model="applicantService.personalInformation.gender"> 
                                        <i class="fa"></i>
                                        Male 
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="female-radio">
                                        <input type="radio" id="female-radio" name="gender" required=""
                                               ng-model="applicantService.personalInformation.gender" value="f"> 
                                        <i class="fa"></i> 
                                        Female
                                    </label>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        1.3 Religious
                    </h4>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#religion-default"><i class="ion-minus-round"></i></a>
                        <span class="divider"></span>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="religion-default" class="panel-collapse collapse in">
                    <div class="portlet-body">

                        <div class="form-group">
                            <label class="col-md-2 control-label">Religion</label>
                            <div class="col-md-10">
                                <div class="radio-inline">
                                    <label class="cr-styled" for="christian-radio">
                                        <input type="radio" id="christian-radio" required=""
                                               name="religion" value="christian"
                                               ng-model="applicantService.personalInformation.religion"> 
                                        <i class="fa"></i>
                                        Christian 
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="muslim-radio">
                                        <input type="radio" id="muslim-radio" required="" 
                                               ng-model="applicantService.personalInformation.religion"
                                               name="religion" value="muslim"> 
                                        <i class="fa"></i> 
                                        Muslim
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="traditional-radio">
                                        <input type="radio" id="traditional-radio"
                                               ng-model="applicantService.personalInformation.religion" required=""
                                               name="religion" value="traditional"> 
                                        <i class="fa"></i> 
                                        Traditional
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="other-radio">
                                        <input type="radio" id="other-radio"
                                               ng-model="applicantService.personalInformation.religion"  
                                               required="" name="religion" value="other"> 
                                        <i class="fa"></i> 
                                        Other
                                    </label>
                                </div>
                            </div>

                        </div> 
                        <div class="form-group" ng-show="applicantService.personalInformation.religion === 'other'">
                            <label class="col-sm-2 control-label">Other Religion (Specify)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                       ng-require="applicantService.personalInformation.religion==='other'"
                                       ng-model="applicantService.personalInformation.otherreligion" 
                                       placeholder="Enter religion name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Marital Status</label>
                            <div class="col-md-10">
                                <div class="radio-inline">
                                    <label class="cr-styled" for="single-radio">
                                        <input type="radio" id="single-radio" 
                                               name="marrital-status" value="single" required=""
                                               ng-model="applicantService.personalInformation.maritalstatus"> 
                                        <i class="fa"></i>
                                        Single 
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="married-radio">
                                        <input type="radio" id="married-radio" required=""
                                               ng-model="applicantService.personalInformation.maritalstatus"
                                               name="marrital-status" value="married"> 
                                        <i class="fa"></i> 
                                        Married
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="divorced-radio">
                                        <input type="radio" id="divorced-radio" 
                                               name="marrital-status" value="divorced" required=""
                                               ng-model="applicantService.personalInformation.maritalstatus"> 
                                        <i class="fa"></i> 
                                        Divorced
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="widow-radio">
                                        <input type="radio" id="widow-radio" 
                                               name="marrital-status" value="widow" required=""
                                               ng-model="applicantService.personalInformation.maritalstatus"> 
                                        <i class="fa"></i> 
                                        Widow
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        1.4 Contact
                    </h4>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#contact-default"><i class="ion-minus-round"></i></a>
                        <span class="divider"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="contact-default" class="panel-collapse collapse in">
                    <div class="portlet-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Home Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required="" maxlength="100"
                                       ng-model="applicantService.personalInformation.homeaddressl1" 
                                       placeholder="Line 1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="text" class="form-control" maxlength="100"
                                       ng-model="applicantService.personalInformation.homeaddressl2" 
                                       placeholder="Line 2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mailing Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required="" maxlength="100"
                                       ng-model="applicantService.personalInformation.mailingaddressl1"
                                       placeholder="Line 1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-5 ">
                                <input type="text" class="form-control "  maxlength="100"
                                       ng-model="applicantService.personalInformation.street"
                                       placeholder="Street">
                            </div>
                            <div class="col-sm-5 ">
                                <input type="text" class="form-control " required="" maxlength="100"
                                       ng-model="applicantService.personalInformation.city"
                                       placeholder="City">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-5 ">
                                <input type="text" class="form-control "  required="" maxlength="100"
                                       ng-model="applicantService.personalInformation.state" placeholder="State / Region">
                            </div>
                            <div class="col-sm-5 ">
                                <select name="countryofbirth" class="form-control "
                                        required="" minlength="1" ng-model="applicantService.personalInformation.country" >
                                    <option value="#">&nbsp;</option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curacao">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Barthelemy">Saint Barthelemy</option>
                                    <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Telephone (Home)</label>
                            <div class="col-sm-10">
                                <input type="tel" placeholder=""  required="" maxlength="20" min="10"
                                       ng-model="applicantService.personalInformation.hometelephone" class="form-control">
                                <span class="help-inline">(+999) 999-999-999</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Telephone (Mobile)</label>
                            <div class="col-sm-10">
                                <input type="tel" placeholder=""   maxlength="20" min="10"
                                       ng-model="applicantService.personalInformation.mobiletelephone" class="form-control">
                                <span class="help-inline">(00233) 999-999-999</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Telephone (Office)</label>
                            <div class="col-sm-10">
                                <input type="tel" placeholder="" 
                                       ng-model="applicantService.personalInformation.officetelephones" class="form-control">
                                <span class="help-inline">(+999) 999-999-999</span>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" placeholder="example@anuc.edu.gh" 
                                       required=""  maxlength="50" min="5"
                                       ng-model="applicantService.personalInformation.email"
                                       class="form-control">
                            </div>
                        </div>

                        <!--Uploading image-->
                        <div ngf-select ngf-drop ng-model="files" ngf-model-invalid="invalidFiles"
                             ngf-model-options="modelOptionsObj"
                             ngf-multiple="multiple" ngf-pattern="pattern" ngf-accept="acceptSelect"
                             ng-disabled="disabled" ngf-capture="capture"
                             ngf-drag-over-class="dragOverClassObj"
                             ngf-validate="validateObj"
                             ngf-resize="resizeObj"
                             ngf-resize-if="resizeIfFn($file, $width, $height)"
                             ngf-dimensions="dimensionsFn($file, $width, $height)"
                             ngf-duration="durationFn($file, $duration)"
                             ngf-keep="keepDistinct ? 'distinct' : keep"
                             ngf-fix-orientation="orientation"
                             ngf-max-files="maxFiles"
                             ngf-ignore-invalid="ignoreInvalid"
                             ngf-run-all-validations="runAllValidations"
                             ngf-allow-dir="allowDir" class="drop-box" ngf-drop-available="dropAvailable">Click 
                            <span ng-show="dropAvailable">or Drop</span> to upload passport picture
                        </div>
                        <div class="preview form-group">
                            <div>Preview</div>
                            <img class=''ngf-src="!files[0].$error && files[0]">
                        </div>

                        <!--End of uploads-->

                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-info w-lg m-b-5" ng-click="backclick()">Back</button>
                </div>
                <div class="col-sm-6 " >
                    <button type="submit" class="btn btn-success w-lg m-b-5"
                            id='next-btn' ng-click="nextclick($event, personinfo.$valid)"
                            >Next</button>
                </div>
            </div>
        </form>
    </div> 
</div>
