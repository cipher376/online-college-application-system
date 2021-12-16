<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017) */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    li{
        font-size: 16px;
    }
    .list-unstyled li>i{
        margin:8px;
        color: #844b4a;
    }
    .list-group-item-info{
        background: rgba(63, 183, 238, 0);
        color:#838F9A
    }
    .list-group-item-success{
        background:rgba(63, 183, 238, 0);
        color:#838F9A
    }
    .list-group i{
        color: #844b4a;
       
    }
    
</style>
<div class="panel panel-color panel-info" ng-controller="InstructionController">
     <div class="progress">
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" class="progress-bar progress-bar-danger progress-bar-striped active">0%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" class="progress-bar progress-bar-warning progress-bar-striped active">0%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" class="progress-bar progress-bar-success progress-bar-striped active">0%</div>
    </div>
    <div class="panel-heading">
        <h3 class="panel-title">INSTRUCTIONS</h3>
    </div>
    <div class="panel-body">
        <div class=" col-sm-12">
            <ul class="list-group">
                <li class="list-group-item row list-group-item-info"> 
                    <i class="zmdi zmdi-mail-send col-sm-1"></i>
                    <p class="col-sm-11">
                        Upload a passport size photographs at section 1.0 (Personal Information)
                    <p/>
                </li>

                <li class="list-group-item row list-group-item-success">
                    <i class="zmdi zmdi-mail-send col-sm-1"></i>
                    <p class="col-sm-11">Complete information on MOTHER or FATHER. That is their name, 
                        Address, profession, telephone number, highest qualification earned, 
                        phone number, e-mail address etc.</p>
                </li>
                <li class="list-group-item row list-group-item-info"> 
                    <i class="zmdi zmdi-mail-send col-sm-1"></i> 
                    <p class="col-sm-11">Complete the GUARDIAN if one other than parents is responsible for you.</p>
                </li>
                <li class="list-group-item row list-group-item-success">
                    <i class="zmdi zmdi-mail-send col-sm-1"></i>
                    <p class="col-sm-11">Applicants are to indicate their exam type (eg. WASSCE, SSSCE, ABCE, etc.) 
                        and indicate the grades obtained.</p>
                </li>
                <li class="list-group-item row list-group-item-info">
                    <i class="zmdi zmdi-mail-send col-sm-1"></i> 
                    <p class="col-sm-11"> Regular are applicants who are
                        applying with SSCE/WASSCE/GCE/OLEVEL/A-Level and are not supposed to 
                        take entrance level exams.</p>
                </li>
                <li class="list-group-item row list-group-item-success">
                    <i class="zmdi zmdi-mail-send col-sm-1"></i>
                    <p class="col-sm-11">Applicants with weak result is supposed to tick pre-university program.</p>
                </li>
                <li class="list-group-item row list-group-item-info">
                    <i class="zmdi zmdi-mail-send col-sm-1"></i>
                    <p class="col-sm-11">Mature candidates are candidates who are applying with HND/HNC/Diploma or other mature exams.</p>
                </li> 
                <li class="list-group-item row list-group-item-success" >
                    <i class="zmdi zmdi-mail-send col-sm-1"></i>
                    <p class="col-sm-11"> Transfer students are students who have transcript from other schools relevant 
                        to their programme of choice.</p>
                </li>
                <li class="list-group-item row list-group-item-info" >
                    <i class="zmdi zmdi-mail-send col-sm-1"></i>
                    <p class="col-sm-11">Applicants are required to upload original entry level certificates section 4 (Academic Background).</p> 
                </li>
                <li class="list-group-item row list-group-item-success">
                    <i class="zmdi zmdi-mail-send col-sm-1"></i> 
                    <p class="col-sm-11"> Transfer students are to complete the appropriate format.</p>
                </li>
                <li class="list-group-item row list-group-item-info" >
                    <i class="zmdi zmdi-mail-send col-sm-1"></i>
                    <p class="col-sm-11">Attach OFFICIAL RESULTS SLIPS/TRANSCRIPTS/CERTIFICATES as appropriate and any other relevant awards,
                        professional certificates, etc.</p>
                </li>
                <li class="list-group-item row list-group-item-success">
                    <i class="zmdi zmdi-mail-send col-sm-1"></i> 
                    <p class="col-sm-11">
                        Applicants are to choose three different programs according to their preference.
                    </p>
                </li>
                <li class="list-group-item row list-group-item-info" >
                    <i class="zmdi zmdi-mail-send col-sm-1"></i> 
                    <p class="col-sm-11">Applicants are require to download the endorsement form, sign it by a reputable person 
                        and then upload it at the completion of the application. </p>
                </li>
                <li class="list-group-item row list-group-item-success" >
                    <i class="zmdi zmdi-mail-send col-sm-1"></i>
                    <p class="col-sm-11">A reputable person includes Clergy, Medical Officer, Bank Manager, Accountant(Certified), Lawyer, 
                        Head of Educational Institution, Engineer, Police Officer (Inspector and above), Army officer(Captain and abve) and 
                        Senior Civil Officer</p>
                </li>
            </ul>
        </div>

    </div>
    <form class="form-horizontal p-20" role="form" action="#">

        <div class="form-group">
            <div class="col-sm-6">
                <button type="button" class="btn btn-info w-lg m-b-5" ng-click="backclick()">Back</button>
            </div>
            <div class="col-sm-6 " >
                <button type="button" class="btn btn-success w-lg m-b-5" id='next-btn' ng-click="nextclick()">Begin</button>
            </div>


        </div>
    </form>
</div>
