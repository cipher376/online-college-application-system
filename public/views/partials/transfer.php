<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017) */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="panel panel-color panel-info"  ng-controller="AcademicBackgroundController">
    <div class="progress">
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-danger progress-bar-striped active">30%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-warning progress-bar-striped active">10%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;" class="progress-bar progress-bar-success progress-bar-striped active">2%</div>
    </div>

    <div class="panel-heading">
        <h3 class="panel-title">4. ACADEMIC BACKGROUND</h3>
    </div>
    <div class="panel-body">


        <form class="form-horizontal p-20" role="form" name="transferinfo">

            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        4.1 Examinations Taken
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
                            <label class="col-sm-2 control-label">Examination Type</label>
                            <div class="col-sm-10">
                                <select class="form-control col-sm-10" ng-model="examstype">
                                    <option value="#">&nbsp;</option>
                                    <option value="WASSCE">WASSCE</option> 
                                    <option value="SSSCE">SSSCE</option> 
                                    <option value="GCE-A">A-Level/ABCE</option>
                                    <option value="GCE-O">O-Level</option>   
                                    <option value="MATURE">Mature</option>    
                                    <option value="Diploma">Diploma</option>
                                    <option value="HND">HND</option>                                   
                                    <option value="FTC">FTC</option>
                                    <option value="HNC">HNC</option>
                                    <option value="Transfer">Transfer</option>
                                    <option value="TECH">Technical Part 1,2,3</option>                                    
                                    <option value="TEACH">Teacher's Certificate</option>
                                </select>
                            </div>
                        </div>


                        <!--------------*************************************************************
                        *****************************************************************************
                                           Transfer
                        *****************************************************************************
                        ***********************************************************************------>
                        <div class="portlet">
                            <div class="portlet-heading bg-warning">
                                <h5 class="portlet-title text-dark" style="font-size: .9em">
                                    Transfer
                                </h5>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#data-default"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="data-default" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Current Institution</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" required="" maxlength="200"
                                                   ng-model="transfer.currentschool" placeholder="Name of school transfering from">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Program Studied</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" ng-model="transfer.program" required="" maxlength="200"
                                                   placeholder="Program you enrrolled in">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Number Of Years Since Enrollment</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" maxlength="1"
                                                   ng-model="transfer.currentyear" required=""
                                                   placeholder="Number of years spent">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Date Enrolled </label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" required=""
                                                           ng-model="transfer.dateenrolled" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
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
                                        <span ng-show="dropAvailable">or Drop</span> to upload your Transcript
                                    </div>
                                    <div class="preview form-group">
                                        <div>Preview</div>
                                        <img class=''ngf-src="!files[0].$error && files[0]">
                                    </div>

                                </div> <!---Portlet-body Ends-->
                            </div>
                        </div> <!----- Portlet Ends ---->



                    </div> <!---Portlet-body Ends-->
                </div>
            </div> <!----- Portlet Ends ---->



    </div>
</div>
</div>


<div class="form-group">

    <div class="col-sm-6">
        <button type="button" class="btn btn-info w-lg m-b-5" ng-click="backclick()">Back</button>
    </div>
    <div class="col-sm-6 " >
        <button type="button" class="btn btn-success w-lg m-b-5" id='next-btn' ng-click="nextclick($event, transferinfo.$valid)">Next</button>
    </div>
</div>
</form>
</div>
</div>
<script src="public/assets/lib/js/jquery.js"></script>
<script src="public/assets/lib/js/bootstrap.min.js"></script>
<script src="public/assets/lib/js/modernizr.min.js"></script>
<script src="public/assets/lib/js/pace.min.js"></script>
<script src="public/assets/lib/js/wow.min.js"></script>
<script src="public/assets/lib/js/jquery.scrollTo.min.js"></script>
<script src="public/assets/lib/js/jquery.nicescroll.js" type="text/javascript"></script>

<script src="public/assets/lib/tagsinput/jquery.tagsinput.min.js"></script>
<script src="public/assets/lib/toggles/toggles.min.js"></script>
<script src="public/assets/lib/timepicker/bootstrap-timepicker.min.js"></script>
<script src="public/assets/lib/timepicker/bootstrap-datepicker.js"></script>
<script src="public/assets/lib/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>

<script type="text/javascript" src="public/assets/lib/spinner/spinner.min.js"></script>
<script src="public/assets/lib/select2/select2.min.js" type="text/javascript"></script>

<!-- Counter-up -->
<script src="public/assets/lib/js/waypoints.min.js" type="text/javascript"></script>
<script src="public/assets/lib/js/jquery.counterup.min.js" type="text/javascript"></script>

<!-- sparkline -->
<script src="public/assets/lib/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="public/assets/lib/sparkline-chart/chart-sparkline.js" type="text/javascript"></script>

<!-- skycons -->
<script src="public/assets/lib/js/skycons.min.js" type="text/javascript"></script>

<script>


            // Time Picker


            jQuery('#transfer-date').datepicker();

            try {
                $(".select2").select2({
                    width: '100%'
                });
            } catch (e) {

            }
            $(".select2").addClass("form-control");
</script>

