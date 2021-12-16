<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017) */
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-color panel-info" ng-controller="AcademicBackgroundController">
            <div class="progress">
                <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-danger progress-bar-striped active">30%</div>
                <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-warning progress-bar-striped active">10%</div>
                <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;" class="progress-bar progress-bar-success progress-bar-striped active">2%</div>
            </div>

            <div class="panel-heading">
                <h3 class="panel-title">4. ACADEMIC BACKGROUND</h3>
            </div>
            <div class="panel-body">


                <form class="form-horizontal p-20" role="form" name="matureinfo">
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
                                            <option value="MATURE">Mature</option>    
                                            <option value="Diploma">Diploma</option>
                                            <option value="HND">HND</option>                                   
                                            <option value="FTC">FTC</option>
                                            <option value="HNC">HNC</option>
                                            <option value="Transfer">Transfer</option>
                                            <option value="TECH">Technical Part 1,2,3</option>                                    
                                            <option value="TEACH">Teacher's Certificate</option>
                                            <option value="GCE-O">Other Equivalent Exams</option>   
                                        </select>
                                    </div>
                                </div>


                                <!--------------*************************************************************
                                *****************************************************************************
                                                   Mature, HND, HNC, DIPLOMA
                                *****************************************************************************
                                ***********************************************************************------>
                                <div class="portlet">
                                    <div class="portlet-heading bg-warning">
                                        <h5 class="portlet-title text-dark" style="font-size: .9em">
                                            Mature/HND/HNC/Diploma
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
                                                <label class="col-sm-4 control-label">Examination ID</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" 
                                                           ng-model="degree.centerno" placeholder="Center Number">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control"
                                                           ng-model="degree.index" placeholder="Index Number">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-12 control-label" style="text-align: center">Core Subjects</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">English Language</label>
                                                <div class="col-sm-4">

                                                    <div class="input-group">
                                                        <datepicker date-format='yyyy-MM-dd'>
                                                            <input class="form-control" required=""
                                                                   ng-model="degree.core1.date" placeholder="Date Taken" type="text"/>
                                                        </datepicker>
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select required="" class="form-control" ng-model="degree.core1.grade">
                                                        <option value="">Grade</option>
                                                        <option value="A1">A1</option> 
                                                        <option value="B2">B2</option> 
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>   
                                                        <option value="C5">C5</option>    
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="D8">E8</option>
                                                        <option value="F9">F9</option>
                                                        <option value="A">A</option> 
                                                        <option value="B">B</option> 
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>   
                                                        <option value="E">E</option>    
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!--------- Other Subjects =------------------------>
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label" style="text-align: center">Other Subjects</label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control"
                                                                   ng-model="degree.elect1.name" placeholder="Subject Name">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">

                                                    <div class="input-group">
                                                        <datepicker date-format='yyyy-MM-dd'>
                                                            <input class="form-control" required=""
                                                                   ng-model="degree.elect1.date" placeholder="Date Taken" type="text"/>
                                                        </datepicker>
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select required="" class="form-control" ng-model="degree.elect1.grade">
                                                        <option value="">Grade</option>
                                                        <option value="A1">A1</option> 
                                                        <option value="B2">B2</option> 
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>   
                                                        <option value="C5">C5</option>    
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="D8">E8</option>
                                                        <option value="F9">F9</option>
                                                        <option value="A">A</option> 
                                                        <option value="B">B</option> 
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>   
                                                        <option value="E">E</option>    
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>
                                            </div><!--- End of form-group -->
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" 
                                                                   ng-model="degree.elect2.name" placeholder="Subject Name">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <datepicker date-format='yyyy-MM-dd'>
                                                            <input class="form-control" required=""
                                                                   ng-model="degree.elect2.date" placeholder="Date Taken" type="text"/>
                                                        </datepicker>
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select required="" class="form-control" ng-model="degree.elect2.grade">
                                                        <option value="">Grade</option>
                                                        <option value="A1">A1</option> 
                                                        <option value="B2">B2</option> 
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>   
                                                        <option value="C5">C5</option>    
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="D8">E8</option>
                                                        <option value="F9">F9</option>
                                                        <option value="A">A</option> 
                                                        <option value="B">B</option> 
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>   
                                                        <option value="E">E</option>    
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>


                                            </div><!--- End of form-group -->
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" 
                                                                   ng-model="degree.elect3.name" placeholder="Subject Name">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <datepicker date-format='yyyy-MM-dd'>
                                                            <input class="form-control" required=""
                                                                   ng-model="degree.elect3.date" placeholder="Date Taken" type="text"/>
                                                        </datepicker>
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select required="" class="form-control" ng-model="degree.elect3.grade">
                                                        <option value="">Grade</option>
                                                        <option value="A1">A1</option> 
                                                        <option value="B2">B2</option> 
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>   
                                                        <option value="C5">C5</option>    
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="D8">E8</option>
                                                        <option value="F9">F9</option>
                                                        <option value="A">A</option> 
                                                        <option value="B">B</option> 
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>   
                                                        <option value="E">E</option>    
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" 
                                                                   ng-model="degree.elect4.name" placeholder="Subject Name">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <datepicker date-format='yyyy-MM-dd'>
                                                            <input class="form-control" required=""
                                                                   ng-model="degree.elect4.date" placeholder="Date Taken" type="text"/>
                                                        </datepicker>
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select required="" class="form-control" ng-model="degree.elect4.grade">
                                                        <option value="">Grade</option>
                                                        <option value="A1">A1</option> 
                                                        <option value="B2">B2</option> 
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>   
                                                        <option value="C5">C5</option>    
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="D8">E8</option>
                                                        <option value="F9">F9</option>
                                                        <option value="A">A</option> 
                                                        <option value="B">B</option> 
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>   
                                                        <option value="E">E</option>    
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>
                                            </div><!--- End of form-group -->
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control"
                                                                   ng-model="degree.elect5.name" placeholder="Subject Name">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <datepicker date-format='yyyy-MM-dd'>
                                                            <input class="form-control" required=""
                                                                   ng-model="degree.elect5.date" placeholder="Date Taken" type="text"/>
                                                        </datepicker>
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select required="" class="form-control" ng-model="degree.elect5.grade">
                                                        <option value="">Grade</option>
                                                        <option value="A1">A1</option> 
                                                        <option value="B2">B2</option> 
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>   
                                                        <option value="C5">C5</option>    
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="D8">E8</option>
                                                        <option value="F9">F9</option>
                                                        <option value="A">A</option> 
                                                        <option value="B">B</option> 
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>   
                                                        <option value="E">E</option>    
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>


                                            </div><!--- End of form-group -->
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control"
                                                                   ng-model="degree.elect6.name" placeholder="Subject Name">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <datepicker date-format='yyyy-MM-dd'>
                                                            <input class="form-control" 
                                                                   ng-model="degree.elect6.date" placeholder="Date Taken" type="text"/>
                                                        </datepicker>
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select  class="form-control" ng-model="degree.elect6.grade">
                                                        <option value="">Grade</option>
                                                        <option value="A1">A1</option> 
                                                        <option value="B2">B2</option> 
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>   
                                                        <option value="C5">C5</option>    
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="D8">E8</option>
                                                        <option value="F9">F9</option>
                                                        <option value="A">A</option> 
                                                        <option value="B">B</option> 
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>   
                                                        <option value="E">E</option>    
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control"
                                                                   ng-model="degree.elect7.name" placeholder="Subject Name">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <datepicker date-format='yyyy-MM-dd'>
                                                            <input class="form-control" 
                                                                   ng-model="degree.elect7.date" placeholder="Date Taken" type="text"/>
                                                        </datepicker>
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="form-control" ng-model="degree.elect7.grade">
                                                        <option value="">Grade</option>
                                                        <option value="A1">A1</option> 
                                                        <option value="B2">B2</option> 
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>   
                                                        <option value="C5">C5</option>    
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="D8">E8</option>
                                                        <option value="F9">F9</option>
                                                        <option value="A">A</option> 
                                                        <option value="B">B</option> 
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>   
                                                        <option value="E">E</option>    
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>
                                            </div><!--- End of form-group -->
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" 
                                                                   ng-model="degree.elect8.name" placeholder="Subject Name">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <datepicker date-format='yyyy-MM-dd'>
                                                            <input class="form-control" 
                                                                   ng-model="degree.elect8.date" placeholder="Date Taken" type="text"/>
                                                        </datepicker>
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="form-control" ng-model="degree.elect8.grade">
                                                        <option value="">Grade</option>
                                                        <option value="A1">A1</option> 
                                                        <option value="B2">B2</option> 
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>   
                                                        <option value="C5">C5</option>    
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="D8">E8</option>
                                                        <option value="F9">F9</option>
                                                        <option value="A">A</option> 
                                                        <option value="B">B</option> 
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>   
                                                        <option value="E">E</option>    
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>


                                            </div><!--- End of form-group -->
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" ng-model="degree.elect9.name" placeholder="Subject Name">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <datepicker date-format='yyyy-MM-dd'>
                                                            <input class="form-control" 
                                                                   ng-model="degree.elect9.date" placeholder="Date Taken" type="text"/>
                                                        </datepicker>
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select  class="form-control" ng-model="degree.elect9.grade">
                                                        <option value="">Grade</option>
                                                        <option value="A1">A1</option> 
                                                        <option value="B2">B2</option> 
                                                        <option value="B3">B3</option>
                                                        <option value="C4">C4</option>   
                                                        <option value="C5">C5</option>    
                                                        <option value="C6">C6</option>
                                                        <option value="D7">D7</option>
                                                        <option value="D8">E8</option>
                                                        <option value="F9">F9</option>
                                                        <option value="A">A</option> 
                                                        <option value="B">B</option> 
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>   
                                                        <option value="E">E</option>    
                                                        <option value="F">F</option>
                                                    </select>
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
                                                <span ng-show="dropAvailable">or Drop</span> to upload Results slip or Certificate
                                            </div>
                                            <div class="preview form-group">
                                                <div>Preview</div>
                                                <img class=''ngf-src="!files[0].$error && files[0]">
                                            </div>

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
                            <button type="button" class="btn btn-success w-lg m-b-5" id='next-btn' ng-click="nextclick($event, matureinfo.$valid)">Next</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(".select2").addClass("form-control");
</script>