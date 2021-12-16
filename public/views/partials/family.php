<?php
/*
  Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017)
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="panel panel-color panel-info" ng-controller="FamilyInfoController">
    <div class="progress">
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-danger progress-bar-striped active">20%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;" class="progress-bar progress-bar-warning progress-bar-striped active">2%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;" class="progress-bar progress-bar-success progress-bar-striped active">2%</div>
    </div>

    <div class="panel-heading"> 
        <h3 class="panel-title">2. FAMILY INFORMATION</h3> 
    </div> 
    <div class="panel-body"> 
        <form class="form-horizontal p-20" role="form" name="familyinfo" >

            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        2.1 Father's Information
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
                            <label class="col-sm-2 control-label">Full Name</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="First name" required=""                                     
                                       minlength="2" maxlength="50" ng-model="applicantService.familyInformation.ffirstname">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Middle name" maxlength="50"
                                       ng-model="applicantService.familyInformation.fmiddlename">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Last name" required=""                                     
                                       minlength="2" maxlength="50"
                                       ng-model="applicantService.familyInformation.flastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Profession</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Profession" required=""                                     
                                       minlength="2" maxlength="100"
                                       ng-model="applicantService.familyInformation.fprofession">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Highest Qualification</label>
                            <div class="col-sm-10">
                                <select class="form-control" required=""  ng-model="applicantService.familyInformation.fhighestqualification">
                                    <option value="#">&nbsp;</option>
                                    <option value="Diploma">PHD</option>
                                    <option value="Diploma">Doctoral Degree</option>                                                            
                                    <option value="Diploma">Master's Degree</option>
                                    <option value="Diploma">Bachelor's Degree</option>
                                    <option value="Diploma">Diploma</option> 
                                    <option value="HND">HND/HNC</option> 
                                    <option value="HND">A-Level</option> 
                                    <option value="HND">Some High School</option>


                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Home Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Line 1"  required="" maxlength="200"
                                       ng-model="applicantService.familyInformation.faddressl1">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="text" class="form-control" placeholder="Line 2" maxlength="100"
                                       ng-model="applicantService.familyInformation.faddressl2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Telephone</label>
                            <div class="col-sm-10">
                                <input type="tel" placeholder="" required="" minlength="6" maxlength="15"
                                       ng-model="applicantService.familyInformation.ftelephone" class="form-control">
                                <span class="help-inline">(+999) 999-999-999</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control"  maxlength="50"
                                       placeholder="example@anuc.edu.gh" ng-model="applicantService.familyInformation.femail">
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        2.2 Mother's Information
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
                            <label class="col-sm-2 control-label">Full Name</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" 
                                       placeholder="First name" required="" min="2" maxlength="50"
                                       ng-model="applicantService.familyInformation.mfirstname">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Middle name" 
                                       ng-model="applicantService.familyInformation.mmiddlename">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"
                                       placeholder="Last name" required="" min="2" maxlength="50"
                                       ng-model="applicantService.familyInformation.mlastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Profession</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Profession"
                                       required="" min="2" maxlength="100"
                                       ng-model="applicantService.familyInformation.mprofession">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Highest Qualification</label>
                            <div class="col-sm-10">
                                <select class="form-control" required="" ng-model="applicantService.familyInformation.mhighestqualification">
                                    <option value="#">&nbsp;</option>
                                    <option value="Diploma">PHD</option>
                                    <option value="Diploma">Doctoral Degree</option>                                                            
                                    <option value="Diploma">Master's Degree</option>
                                    <option value="Diploma">Bachelor's Degree</option>
                                    <option value="Diploma">Diploma</option> 
                                    <option value="HND">HND/HNC</option> 
                                    <option value="HND">A-Level</option> 
                                    <option value="HND">Some High School</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Home Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Line 1" required="" min="2" maxlength="100"
                                       ng-model="applicantService.familyInformation.maddressl1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="text" class="form-control" placeholder="Line 2" maxlength="100"
                                       ng-model="applicantService.familyInformation.maddressl2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Telephone</label>
                            <div class="col-sm-10">
                                <input type="tel" required="" 
                                       class="form-control" ng-model="applicantService.familyInformation.mtelephone">
                                <span class="help-inline">(+999) 999-999-999</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" maxlength="50"
                                       placeholder="example@anuc.edu.gh"
                                       ng-model="applicantService.familyInformation.memail">
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        2.3 Guardian's Information(Optional)
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
                            <label class="col-sm-2 control-label">Full Name</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control"  maxlength="50"
                                       ng-model="applicantService.familyInformation.gfirstname" 
                                       placeholder="First name">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" maxlength="50"
                                       ng-model="applicantService.familyInformation.gmiddlename" placeholder="Middle name">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"   maxlength="50"
                                       ng-model="applicantService.familyInformation.glastname" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Profession</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  maxlength="100"
                                       ng-model="applicantService.familyInformation.gprofession" placeholder="Profession">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Highest Qualification</label>
                            <div class="col-sm-10">
                                <select class="form-control"  
                                        ng-model="applicantService.familyInformation.ghighestqualification">
                                    <option value="#">&nbsp;</option>
                                    <option value="Diploma">PHD</option>
                                    <option value="Diploma">Doctoral Degree</option>                                                            
                                    <option value="Diploma">Master's Degree</option>
                                    <option value="Diploma">Bachelor's Degree</option>
                                    <option value="Diploma">Diploma</option> 
                                    <option value="HND">HND/HNC</option> 
                                    <option value="HND">A-Level</option> 
                                    <option value="HND">Some High School</option>
                                    <option value="None">None</option>


                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Home Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  maxlength="100"
                                       ng-model="applicantService.familyInformation.gaddressl1" placeholder="Line 1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="text" class="form-control" maxlength="100"
                                       ng-model="applicantService.familyInformation.gaddressl2" placeholder="Line 2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Telephone Office</label>
                            <div class="col-sm-10">
                                <input type="tel" placeholder=""  maxlength="15" 
                                       ng-model="applicantService.familyInformation.gtelephone" class="form-control">
                                <span class="help-inline">(+999) 999-999-999</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Emergency Contact</label>
                            <div class="col-sm-10">
                                <input type="tel" maxlength="15" minlength="8" required=""
                                       ng-model="applicantService.familyInformation.emergencyphone" class="form-control">
                                <span class="help-inline">(+999) 999-999-999</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" maxlength="50"
                                       ng-model="applicantService.familyInformation.gemail" placeholder="example@anuc.edu.gh">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Marital Status</label>
                            <div class="col-md-10">
                                <div class="radio-inline">
                                    <label class="cr-styled" for="single-radio">
                                        <input type="radio" id="single-radio" 
                                               ng-model="applicantService.familyInformation.gmaritalstatus" name="marrital-status" value="single"> 
                                        <i class="fa"></i>
                                        Single 
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="married-radio">
                                        <input type="radio" id="married-radio" 
                                               name="marrital-status" value="married"
                                               ng-model="applicantService.familyInformation.gmaritalstatus"> 
                                        <i class="fa"></i> 
                                        Married
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="divorced-radio">
                                        <input type="radio" id="divorced-radio"  
                                               ng-model="applicantService.familyInformation.gmaritalstatus" name="marrital-status" value="divorced"> 
                                        <i class="fa"></i> 
                                        Divorced
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-info w-lg m-b-5" ng-click="backclick()">Back</button>
                </div>
                <div class="col-sm-6 " >
                    <button type="submit" class="btn btn-success w-lg m-b-5" id='next-btn' 
                            ng-click="nextclick($event, familyinfo.$valid)">Next</button>
                </div>


            </div>
        </form>
    </div>
</div>

