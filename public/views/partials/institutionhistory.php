<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017)
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="panel panel-color panel-info" ng-controller="EducationHistoryController">
    <div class="progress">
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-danger progress-bar-striped active">30%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;" class="progress-bar progress-bar-warning progress-bar-striped active">2%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;" class="progress-bar progress-bar-success progress-bar-striped active">2%</div>
    </div>

    <div class="panel-heading">
        <h3 class="panel-title">3. SCHOOL / INSTITUTION HISTORY</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal p-20" role="form" name="education">

            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        3.1 Current School/Institution
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
                            <label class="col-sm-2 control-label">Recent School Attended</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" placeholder="School Name" required="" maxlength="100" minlength="5"
                                       ng-model="applicantService.educationInformation.recentschool"  >
                            </div>
                            <label class="col-sm-1 control-label">year</label>
                            <div class="col-sm-4">
                                <div id="current-school-year">
                                    <div class="input-group" >
                                        <datepicker date-format='yyyy'>
                                            <input class="form-control" 
                                                   ng-model="applicantService.educationInformation.recentschoolyear" type="text"/>
                                        </datepicker>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        3.2 List Of Schools/Institutions Attended
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

                        <!-----------------  First School Attended --------------------->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">First </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required="" min="5" maxlength="50"
                                       ng-model="applicantService.educationInformation.firstotherschoolname" placeholder="School Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <input type="text" class="form-control" placeholder="Location" required="" min="5" maxlength="100"
                                       ng-model="applicantService.educationInformation.firstotherschoollocation">
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <datepicker date-format='yyyy-MM-dd'>
                                        <input class="form-control" required=""
                                               ng-model="applicantService.educationInformation.firstotherschoolfrom" placeholder="Date Started" type="text"/>
                                    </datepicker>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <datepicker date-format='yyyy-MM-dd'>
                                        <input class="form-control" required="" placeholder="Date Ended"
                                               ng-model="applicantService.educationInformation.firstotherschoolto" type="text"/>
                                    </datepicker>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-----------------  Second School Attended --------------------->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Second </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="School Name"  maxlength="50" 
                                       ng-model="applicantService.educationInformation.secondotherschoolname">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <input type="text" class="form-control" placeholder="Location" maxlength="100"
                                       ng-model="applicantService.educationInformation.secondotherschoollocation">
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <datepicker date-format='yyyy-MM-dd'>
                                        <input class="form-control" 
                                               ng-model="applicantService.educationInformation.secondotherschoolfrom" placeholder="Date Started"  type="text"/>
                                    </datepicker>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <datepicker date-format='yyyy-MM-dd'>
                                        <input class="form-control"  placeholder="Date Ended"
                                               ng-model="applicantService.educationInformation.secondotherschoolto" type="text"/>
                                    </datepicker>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-----------------  Third School Attended --------------------->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Third </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="School Name"  maxlength="50" 
                                       ng-model="applicantService.educationInformation.thirdotherschoolname">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <input type="text" class="form-control" placeholder="Location"  maxlength="50"
                                       ng-model="applicantService.educationInformation.thirdotherschoollocation">
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <datepicker date-format='yyyy-MM-dd'>
                                        <input class="form-control" 
                                               ng-model="applicantService.educationInformation.thirdotherschoolfrom"  placeholder="Date Started" type="text"/>
                                    </datepicker>
                                   
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                     <datepicker date-format='yyyy-MM-dd'>
                                        <input class="form-control"  placeholder="Date Ended"
                                               ng-model="applicantService.educationInformation.thirdotherschoolto" type="text"/>
                                    </datepicker>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
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
                    <button type="submit" class="btn btn-success w-lg m-b-5" id='next-btn' ng-click="nextclick($event, education.$valid)">Next</button>
                </div>


            </div>
        </form>
    </div>
</div>
