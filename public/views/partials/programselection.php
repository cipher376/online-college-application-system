<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017) */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="panel panel-color panel-info" ng-controller="ProgramSelectionController">
    <div class="progress">
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-danger progress-bar-striped active">30%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-warning progress-bar-striped active">20%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;" class="progress-bar progress-bar-success progress-bar-striped active">2%</div>
    </div>

    <div class="panel-heading">
        <h3 class="panel-title">5. PROGRAM SELECTION</h3>
    </div>
    <div class="panel-body">


        <form class="form-horizontal p-20" role="form" name="programinfo">
            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        5.1 Program Of Choice
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
                            <label class="col-sm-2 control-label">First Choice</label>
                            <div class="col-sm-10">
                                <select class="form-control" required="" ng-model="applicantService.programSelection.firstchoice">
                                    <option value="#">&nbsp;</option>
                                    <option value='Bachelor of Arts in Biblical Studies with Business Administration'>Bachelor of Arts in Biblical Studies with Business Administration</option>
                                    <option value='Bachelor of Business Administration in Accounting'>Bachelor of Business Administration in Accounting</option>
                                    <option value='Bachelor of Business Administration in Banking and Finance'>Bachelor of Business Administration in Banking and Finance</option>
                                    <option value='Bachelor of Business Administration in Entrepreneurship'>Bachelor of Business Administration in Entrepreneurship</option>
                                    <option value='Bachelor of Business Administration in Human Resource Management'>Bachelor of Business Administration in Human Resource Management</option>
                                    <option value='Bachelor of Business Administration in Marketing'>Bachelor of Business Administration in Marketing</option>
                                    <option value='Bachelor of Science (Hons) (Computer Science)'>Bachelor of Science (Hons) (Computer Science)</option>
                                    <option value='Bachelor of Engineering (Computer Engineering)'>Bachelor of Engineering (Computer Engineering)</option>
                                    <option value='Bachelor of Engineering (Biomedical Engineering)'>Bachelor of Engineering (Biomedical Engineering)</option>
                                    <option value='Bachelor of Engineering (Electronics & Communication Engineering)'>Bachelor of Engineering (Electronics & Communication Engineering)</option>
                                    <option value='Bachelor of Engineering (Oil & Gas)'>Bachelor of Engineering (Oil & Gas)</option>
                                    <option value='Diploma in Biblical studies with a minor in Business Administration'>Diploma in Biblical studies with a minor in Business Administration</option>
                                    <option value='Certificate in Biblical Studies'>Certificate in Biblical Studies</option>
                                    <option value='Certificate in Information Communication Technology(I.C.T)'>Certificate in Information Communication Technology(I.C.T)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Second Choice</label>
                            <div class="col-sm-10">
                                <select class="form-control" required="" ng-model="applicantService.programSelection.secondchoice">
                                    <option value="#">&nbsp;</option>
                                    <option value='Bachelor of Arts in Biblical Studies with Business Administration'>Bachelor of Arts in Biblical Studies with Business Administration</option>
                                    <option value='Bachelor of Business Administration in Accounting'>Bachelor of Business Administration in Accounting</option>
                                    <option value='Bachelor of Business Administration in Banking and Finance'>Bachelor of Business Administration in Banking and Finance</option>
                                    <option value='Bachelor of Business Administration in Entrepreneurship'>Bachelor of Business Administration in Entrepreneurship</option>
                                    <option value='Bachelor of Business Administration in Human Resource Management'>Bachelor of Business Administration in Human Resource Management</option>
                                    <option value='Bachelor of Business Administration in Marketing'>Bachelor of Business Administration in Marketing</option>
                                    <option value='Bachelor of Science (Hons) (Computer Science)'>Bachelor of Science (Hons) (Computer Science)</option>
                                    <option value='Bachelor of Engineering (Computer Engineering)'>Bachelor of Engineering (Computer Engineering)</option>
                                    <option value='Bachelor of Engineering (Biomedical Engineering)'>Bachelor of Engineering (Biomedical Engineering)</option>
                                    <option value='Bachelor of Engineering (Electronics & Communication Engineering)'>Bachelor of Engineering (Electronics & Communication Engineering)</option>
                                    <option value='Bachelor of Engineering (Oil & Gas)'>Bachelor of Engineering (Oil & Gas)</option>
                                    <option value='Diploma in Biblical studies with a minor in Business Administration'>Diploma in Biblical studies with a minor in Business Administration</option>
                                    <option value='Certificate in Biblical Studies'>Certificate in Biblical Studies</option>
                                    <option value='Certificate in Information Communication Technology(I.C.T)'>Certificate in Information Communication Technology(I.C.T)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Third Choice</label>
                            <div class="col-sm-10">
                                <select class="form-control" required="" ng-model="applicantService.programSelection.thirdchoice">
                                    <option value="#">&nbsp;</option>
                                    <option >Bachelor of Arts in Biblical Studies with Business Administration</option>
                                    <option value='Bachelor of Business Administration in Accounting'>Bachelor of Business Administration in Accounting</option>
                                    <option value='Bachelor of Business Administration in Banking and Finance'>Bachelor of Business Administration in Banking and Finance</option>
                                    <option value='Bachelor of Business Administration in Entrepreneurship'>Bachelor of Business Administration in Entrepreneurship</option>
                                    <option value='Bachelor of Business Administration in Human Resource Management'>Bachelor of Business Administration in Human Resource Management</option>
                                    <option value='Bachelor of Business Administration in Marketing'>Bachelor of Business Administration in Marketing</option>
                                    <option value='Bachelor of Science (Hons) (Computer Science)'>Bachelor of Science (Hons) (Computer Science)</option>
                                    <option value='Bachelor of Engineering (Computer Engineering)'>Bachelor of Engineering (Computer Engineering)</option>
                                    <option value='Bachelor of Engineering (Biomedical Engineering)'>Bachelor of Engineering (Biomedical Engineering)</option>
                                    <option value='Bachelor of Engineering (Electronics & Communication Engineering)'>Bachelor of Engineering (Electronics & Communication Engineering)</option>
                                    <option value='Bachelor of Engineering (Oil & Gas)'>Bachelor of Engineering (Oil & Gas)</option>
                                    <option value='Diploma in Biblical studies with a minor in Business Administration'>Diploma in Biblical studies with a minor in Business Administration</option>
                                    <option value='Certificate in Biblical Studies'>Certificate in Biblical Studies</option>
                                    <option value='Certificate in Information Communication Technology(I.C.T)'>Certificate in Information Communication Technology(I.C.T)</option>
                                </select>
                            </div>
                        </div>

                    </div> <!---Portlet-body Ends-->
                </div>
            </div> <!----- Portlet Ends ---->

            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        5.2 Enrollment
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
                            <label class="col-md-3 control-label "style="text-align: left;">Require pre-university program?</label>
                            <div class="col-md-7">
                                <div class="radio-inline">
                                    <label class="cr-styled" for="yes-radio">
                                        <input required="" required="" type="radio" id="yes-radio" 
                                               name="preu" value="Yes"
                                               ng-model="applicantService.programSelection.preU"> 
                                        <i class="fa"></i>
                                        Yes
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="no-radio">
                                        <input required="" type="radio" id="no-radio" name="preu"
                                               ng-model="applicantService.programSelection.preU" value="No"> 
                                        <i class="fa"></i> 
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label "style="text-align: left;">Choose Level Of Entry</label>
                            <div class="col-md-7">
                                <div class="radio-inline">
                                    <label class="cr-styled" for="regular-radio">
                                        <input required="" type="radio" id="regular-radio" 
                                               name="regular" value="regular"
                                               ng-model="applicantService.programSelection.entrylevel"> 
                                        <i class="fa"></i>
                                        Regular
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="mature-radio">
                                        <input required="" required="" type="radio" id="mature-radio" name="mature"
                                               ng-model="applicantService.programSelection.entrylevel" value="mature"> 
                                        <i class="fa"></i> 
                                        Mature
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="transfer-radio">
                                        <input required="" required="" type="radio" id="transfer-radio" name="transfer"
                                               ng-model="applicantService.programSelection.entrylevel" value="transfer"> 
                                        <i class="fa"></i> 
                                        Transfer
                                    </label>
                                </div>
                                 <div class="radio-inline">
                                    <label class="cr-styled" for="ent-preu-radio">
                                        <input required="" required="" type="radio" id="ent-preu-radio" name="ent-preu"
                                               ng-model="applicantService.programSelection.entrylevel" value="preu"> 
                                        <i class="fa"></i> 
                                        Pre-University
                                    </label>
                                </div>

                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label "style="text-align: left;">Choose Enrollment Type</label>
                            <div class="col-md-7">
                                <div class="radio-inline">
                                    <label class="cr-styled" for="fulltime-radio">
                                        <input required="" type="radio" id="fulltime-radio" 
                                               name="enrollment-type" value="fulltime"
                                               ng-model="applicantService.programSelection.enrollmenttype"> 
                                        <i class="fa"></i>
                                        Full Time 
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="evening-radio">
                                        <input required="" required="" type="radio" id="evening-radio" name="enrollment-type"
                                               ng-model="applicantService.programSelection.enrollmenttype" value="evening"> 
                                        <i class="fa"></i> 
                                        Evening
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="weekend-radio">
                                        <input required="" required="" type="radio" id="weekend-radio" name="enrollment-type"
                                               ng-model="applicantService.programSelection.enrollmenttype" value="weekend"> 
                                        <i class="fa"></i> 
                                        Weekend
                                    </label>
                                </div>

                            </div>
                        </div>

                    </div> <!---Portlet-body Ends-->
                </div>
            </div> <!----- Portlet Ends ---->

            <div class="form-group">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-info w-lg m-b-5" ng-click="backclick()">Back</button>
                </div>
                <div class="col-sm-6 " >
                    <button type="button" class="btn btn-success w-lg m-b-5" id='next-btn' ng-click="nextclick($event, programinfo.$valid)">Next</button>
                </div>


            </div>
        </form>
    </div>
</div>
