<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017) */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="panel panel-color panel-info"ng-controller="AffirmationController">
    <div class="progress">
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;" class="progress-bar progress-bar-danger progress-bar-striped active">35%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;" class="progress-bar progress-bar-warning progress-bar-striped active">35%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-success progress-bar-striped active">20%</div>
    </div>
    <div class="panel-heading">
        <h3 class="panel-title">8. AFFIRMATION</h3>
    </div>
    <div class="panel-body">


        <form class="form-horizontal p-20" role="form" name='aff'>
            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
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

                            <div class="alert alert-danger alert-dismissable " style="text-align:center;font-size: 18px;font-weight: bold">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                AN APPLICANT WHO MAKES A FALSE STATEMENT OR WITHHOLDS RELENT INFORMATION SHALL BE 
                                DENIED ADMISSION. IF HE / SHE HAS ALREADY COME TO THE INSTITUTION, HE/SHE SHALL BE 
                                ASKED TO WITHDRAW.
                            </div>
                            <label class="col-md-12 control-label " style="text-align: center"> 
                                I certify that the information I have supplied in this application is correct to the 
                                best of my knowledge.
                            </label><br>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sign</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control text-uppercase" required="" maxlength="10" minlength="3"
                                       ng-model="applicantService.affirmData.sign" placeholder="Initials e.g A.N">
                            </div>

                            <div class="col-sm-3">
                                <div class="input-group">
                                    <datepicker date-format='yyyy-MM-dd'>
                                        <input class="form-control" 
                                               ng-model="applicantService.affirmData.dateaffirmed" type="text"/>
                                    </datepicker>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
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
                    <button type="submit" class="btn btn-success w-lg m-b-5" id='next-btn' 
                            ng-click="nextclick($event,aff.$valid)">Sign  <i class="glyphicon glyphicon-pencil"></i></button>
                </div>

            </div>
        </form>
    </div>
</div>

