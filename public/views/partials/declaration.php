<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017) */
defined('BASEPATH') OR exit('No direct script access allowed');
?>




<div class="panel panel-color panel-info" ng-controller="DeclarationController">
    <div class="progress">
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-danger progress-bar-striped active">30%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-warning progress-bar-striped active">30%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-success progress-bar-striped active">10%</div>
    </div>
    <div class="panel-heading">
        <h3 class="panel-title">7. DECLARATION</h3>
    </div>
    <div class="panel-body">


        <form class="form-horizontal p-20" role="form" name="dec">
            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        7.1 Declaration / Signing
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

                            <div class="alert alert-danger alert-dismissable " style="text-align:center;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                This declaration should be signed by any of the following individuals who should also endorse 
                                the back of one of the three passport size photographs of the applicant.
                                Individual includes Clergy, Medical Officer, Bank Manager, Accountant(Certified),
                                Lawyer, Head of Educational Institution, Engineer, Police Officer(Inspector and above),
                                Army Officer(Captain and above), Senior Civil Officer
                            </div>
                            <label class="col-md-12 control-label " style="text-align: center">I certify that the photocopy endorsed by me is the true likeness of the applicant,
                            </label><br>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <select    maxlength="100" class="form-control" ng-model="applicantService.declaration.applicanttitle">
                                    <option value="">Applicant's</option> 
                                    <option value="Dr.">Dr.</option>
                                    <option value="Rev.">Rev.</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Miss">Miss</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Applicant's</label>
                            <div class="col-sm-3">
                                <input   maxlength="100" type="text" class="form-control" 
                                       placeholder="First name" ng-model="applicantService.declaration.applicantfirstname">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" ng-model="applicantService.declaration.applicantmiddlename"
                                       placeholder="Middle name">
                            </div>
                            <div class="col-sm-4">
                                <input   maxlength="100" type="text" class="form-control" 
                                       ng-model="applicantService.declaration.applicantlastname" placeholder="Last name">
                            </div>
                            <label class="col-md-12 control-label " style="text-align: center">
                                who is personally know to me.
                            </label><br>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <select    maxlength="100" class="form-control"  ng-model="applicantService.declaration.endotitle">
                                    <option>Endorsor's Title</option> 
                                    <option value="Dr.">Dr.</option>
                                    <option value="Rev.">Rev.</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Miss">Miss</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group" >
                            <label class="col-sm-2 control-label">Endorsor's</label>
                            <div class="col-sm-3">
                                <input   maxlength="100" type="text" class="form-control" 
                                       placeholder="First name" ng-model="applicantService.declaration.endofirstname">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" 
                                       ng-model="applicantService.declaration.endomiddlename" placeholder="Middle name">
                            </div>
                            <div class="col-sm-4">
                                <input   maxlength="100" type="text" class="form-control" ng-model="applicantService.declaration.endolastname"
                                       placeholder="Last name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <input   maxlength="100" type="text" class="form-control" 
                                       ng-model="applicantService.declaration.endoaddress1"
                                       placeholder="Line 1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-5 ">
                                <input type="text" class="form-control " 
                                       ng-model="applicantService.declaration.endostreet" placeholder="Street">
                            </div>
                            <div class="col-sm-5 ">
                                <input   maxlength="100" type="text" class="form-control " ng-model="applicantService.declaration.endocity"
                                       placeholder="City">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-5 ">
                                <input   maxlength="100" type="text" class="form-control " ng-model="applicantService.declaration.endostate"
                                       placeholder="State / Region">
                            </div>
                            <div class="col-sm-5 ">
                                <input   maxlength="100" type="text" class="form-control " ng-model="applicantService.declaration.endocountry"
                                       placeholder="Country">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Telephone </label>
                            <div class="col-sm-10">
                                <input   maxlength="15" minlength="6" type="tel" 
                                       placeholder="" ng-model="applicantService.declaration.endophone"
                                       class="form-control">
                                <span class="help-inline">(+999) 999-999-999</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input   maxlength="100" type="Email" placeholder="example@anuc.com"
                                       ng-model="applicantService.declaration.endoemail" class="form-control">

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
                    <button type="submit" class="btn btn-success w-lg m-b-5"
                            id='next-btn' ng-click="nextclick($event, dec.$valid)">Endorse</button>
                </div>


            </div>
        </form>
    </div>
