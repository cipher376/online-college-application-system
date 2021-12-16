<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017) */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="panel panel-color panel-info" ng-controller="MiscellaneousController">
    <div class="progress">
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-danger progress-bar-striped active">30%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-warning progress-bar-striped active">30%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;" class="progress-bar progress-bar-success progress-bar-striped active">2%</div>
    </div>
    <div class="panel-heading">
        <h3 class="panel-title">6. Miscellaneous</h3>
    </div>
    <div class="panel-body">


        <form class="form-horizontal p-20" role="form" name="misc">
            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        6.1 Accommodation
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

                            <div class="alert alert-danger alert-dismissable " style="text-align:center; display: block; visibility: visible; opacity: 1;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                International Students are to stay in ANUC approved housing.
                            </div>
                            <label class="col-md-5 control-label ">Will you need accommodation?</label>
                            <div class="col-md-7">
                                <div class="radio-inline">
                                    <label class="cr-styled" for="acc-yes-radio">
                                        <input required="" type="radio" id="acc-yes-radio" name="accommodation" 
                                               ng-model="applicantService.miscellaneous.needaccomodation" value='true' checked=""> 
                                        <i class="fa"></i>
                                        Yes
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="acc-no-radio">
                                        <input required="" type="radio" id="acc-no-radio" 
                                               ng-model="applicantService.miscellaneous.needaccomodation" value='false' name="accommodation"> 
                                        <i class="fa"></i> 
                                        No
                                    </label>
                                </div>


                            </div>
                        </div>

                    </div> <!---Portlet-body Ends-->
                </div>
            </div> <!----- Portlet Ends ---->
            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        6.2 Disability
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


                            <label class="col-md-5 control-label ">Do you have any disability?</label>
                            <div class="col-md-7">
                                <div class="radio-inline">
                                    <label class="cr-styled" for="dis-yes-radio">
                                        <input required="" type="radio" id="dis-yes-radio" name="disability" 
                                               ng-model="applicantService.miscellaneous.anydisability" value='true'> 
                                        <i class="fa"></i>
                                        Yes
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="dis-no-radio">
                                        <input required="" type="radio" id="dis-no-radio" 
                                               ng-model="applicantService.miscellaneous.anydisability" value='false' checked="checked" name="disability"> 
                                        <i class="fa"></i> 
                                        No
                                    </label>
                                </div>


                            </div>
                            <br>
                            <p class="row"></p>
                        </div>
                        <div class="form-group" ng-show="applicantService.miscellaneous.anydisability === 'true'" >
                            <label class="col-sm-4 control-label">Please describe your situation</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder=""
                                       ng-model="applicantService.miscellaneous.whatdisability">
                            </div>
                        </div>


                    </div> <!---Portlet-body Ends-->
                </div>
            </div> <!----- Portlet Ends ---->
            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        6.3 About Us
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

                            <label class="col-md-4 control-label ">How did you find us ?</label>
                            <div class="col-md-10 col-md-offset-2">

                                <div class="checkbox-inline">
                                    <label class="cr-styled">
                                        <input type="checkbox" value="News paper"
                                               ng-model="applicantService.miscellaneous.aboutNews">
                                        <i class="fa"></i> 
                                        News paper
                                    </label>
                                </div>
                                <div class="checkbox-inline">
                                    <label class="cr-styled">
                                        <input type="checkbox" value="Television"
                                               ng-model="applicantService.miscellaneous.abouttele">
                                        <i class="fa"></i> 
                                        Television
                                    </label>
                                </div>
                                <div class="checkbox-inline">
                                    <label class="cr-styled">
                                        <input type="checkbox" value="Fm Station"
                                               ng-model="applicantService.miscellaneous.aboutradio">
                                        <i class="fa"></i> 
                                        Radio
                                    </label>
                                </div>
                                <div class="checkbox-inline">
                                    <label class="cr-styled">
                                        <input type="checkbox" value="students"
                                               ng-model="applicantService.miscellaneous.aboutstudent">
                                        <i class="fa"></i> 
                                        Students/Friends
                                    </label>
                                </div>
                                <div class="checkbox-inline">
                                    <label class="cr-styled">
                                        <input type="checkbox" value="friends"
                                               ng-model="applicantService.miscellaneous.aboutfriend">
                                        <i class="fa"></i> 
                                        Students/Friends
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 col-md-offset-2">
                                <div class="checkbox-inline">
                                    <label class="cr-styled">
                                        <input type="checkbox" value="Alumni"
                                               ng-model="applicantService.miscellaneous.aboutalumnus">
                                        <i class="fa"></i> 
                                        Alumnus
                                    </label>
                                </div>
                                <div class="checkbox-inline">
                                    <label class="cr-styled">
                                        <input type="checkbox" value="Agent"
                                               ng-model="applicantService.miscellaneous.aboutagent">
                                        <i class="fa"></i> 
                                        Agent
                                    </label>
                                </div>
                                <div class="checkbox-inline">
                                    <label class="cr-styled">
                                        <input type="checkbox" value="Other" 
                                               ng-model="applicantService.miscellaneous.aboutother">
                                        <i class="fa"></i> 
                                        Other
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" ng-show="applicantService.miscellaneous.aboutother !== ''" >
                            <label class="col-sm-4 control-label">Name of Person/Medium</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="eg. ANUC FM"
                                       ng-model="applicantService.miscellaneous.aboutspecific">
                            </div>
                        </div>
                    </div> <!---Portlet-body Ends-->
                </div>
            </div> <!----- Portlet Ends ---->

            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        6.4 Prizes / Awars / Aptitude Test (Optional)
                    </h4>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#prize-default"><i class="ion-minus-round"></i></a>
                        <span class="divider"></span>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="prize-default" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <div class="form-group">

                            <label class="col-md-5 control-label ">Please Input SAT score if taken.</label>
                            <div class="col-md-12 col-md-offset-3">
                                <div class="col-sm-3">
                                    <div id="sat-score-reading">
                                        <div class="input-group" >
                                            <input type="text" class="spinner-input form-control" maxlength="3"
                                                   ng-model="applicantService.miscellaneous.satreading" >
                                            <div class="spinner-buttons input-group-btn">
                                                <button type="button" class="btn btn-default spinner-up">
                                                    <i class="fa fa-angle-up"></i>
                                                </button>
                                                <button type="button" class="btn btn-default spinner-down">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                            </div>

                                        </div>  <span class="help-block"><small>Reading</small></span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div id="sat-score-maths">
                                        <div class="input-group" >
                                            <input type="text" class="spinner-input form-control" maxlength="3"
                                                   ng-model="applicantService.miscellaneous.satmaths" >
                                            <div class="spinner-buttons input-group-btn">
                                                <button type="button" class="btn btn-default spinner-up">
                                                    <i class="fa fa-angle-up"></i>
                                                </button>
                                                <button type="button" class="btn btn-default spinner-down">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div><span class="help-block"><small>Maths</small></span>
                                </div>
                                <div class="col-sm-3">
                                    <div id="sat-score-writing">
                                        <div class="input-group" >
                                            <input type="number" class="spinner-input form-control" maxlength="3"
                                                   ng-model="applicantService.miscellaneous.satwriting" >
                                            <div class="spinner-buttons input-group-btn">
                                                <button type="button" class="btn btn-default spinner-up">
                                                    <i class="fa fa-angle-up"></i>
                                                </button>
                                                <button type="button" class="btn btn-default spinner-down">
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div><span class="help-block"><small>Writing</small></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Date taken</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <datepicker date-format='yyyy-MM-dd'>
                                        <input class="form-control" 
                                               ng-model="applicantService.miscellaneous.satdate" type="text"/>
                                    </datepicker>

                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="col-sm-12 control-label" style="text-align: center">Prizes/Awards</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Prize/Award 1</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Describe" maxlength="300"
                                       ng-model="applicantService.miscellaneous.prize1">
                            </div>
                            <label class="col-sm-3 control-label">Prize/Award 2</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Describe" maxlength="300"
                                       ng-model="applicantService.miscellaneous.prize2">
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
                    <button type="submit" class="btn btn-success w-lg m-b-5" id='next-btn' ng-click="nextclick($event, misc.$valid)">Next</button>
                </div>


            </div>
        </form>
    </div>
</div>

