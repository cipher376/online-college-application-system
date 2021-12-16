<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017) */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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


        <form class="form-horizontal p-20" role="form" name="olevelinfo">

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
                                    <option value="GCE-O">Other Equivalent</option>   
                                </select>
                            </div>
                        </div>


                        <!--------------*************************************************************
                        *****************************************************************************
                                           O-Level
                        *****************************************************************************
                        ***********************************************************************------>
                        <div class="portlet">
                            <div class="portlet-heading bg-warning">
                                <h5 class="portlet-title text-dark" style="font-size: .9em">
                                    O-Level 
                                </h5>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#olevel"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="olevel" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" 
                                                   ng-model="olevel.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" 
                                                   ng-model="olevel.index" placeholder="Index Number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Core Subjects</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" 
                                                           ng-model="olevel.core1.name"
                                                           placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.core1.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                            <select  class="form-control" ng-model="olevel.core1.grade">
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
                                                           ng-model="olevel.elect1.name"
                                                           placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.elect1.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select  class="form-control" ng-model="olevel.elect1.grade">
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
                                                           ng-model="olevel.elect2.name"
                                                           placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.elect2.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                            <select  class="form-control" ng-model="olevel.elect2.grade">
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
                                                           ng-model="olevel.elect3.name" placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.elect3.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select  class="form-control" ng-model="olevel.elect3.grade">
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
                                                           ng-model="olevel.elect4.name" placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.elect4.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select  class="form-control" ng-model="olevel.elect4.grade">
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
                                                           ng-model="olevel.elect5.name" placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.elect5.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select  class="form-control" ng-model="olevel.elect5.grade">
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
                                                           ng-model="olevel.elect6.name" placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.elect6.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select  class="form-control" ng-model="olevel.elect6.grade">
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
                                                           ng-model="olevel.elect7.name"placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.elect7.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select  class="form-control" ng-model="olevel.elect7.grade">
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
                                                           ng-model="olevel.elect8.name"  
                                                           placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.elect8.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select  class="form-control" ng-model="olevel.elect8.grade">
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
                                                           ng-model="olevel.elect9.name" placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.elect9.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select  class="form-control" ng-model="olevel.elect9.grade">
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


                                </div> <!---Portlet-body Ends-->
                            </div>
                        </div> <!----- Portlet Ends ---->

                        <div class="portlet">
                            <div class="portlet-heading bg-warning">
                                <h5 class="portlet-title text-dark" style="font-size: .9em">
                                    O-Level Resit (Optional)
                                </h5>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#olevel-resit"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="olevel-resit" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <!---------************ Resit O-Level Subjects =------------------------>

                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 1</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"
                                                   ng-model="olevel.resit1.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" 
                                                   ng-model="olevel.resit1.index" placeholder="Index Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control"
                                                           ng-model="olevel.resit1.name" placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.resit1.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                            <select  class="form-control" ng-model="olevel.resit1.grade">
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
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 2</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" 
                                                   ng-model="olevel.resit2.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" 
                                                   ng-model="olevel.resit2.index" placeholder="Index Number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control"
                                                           ng-model="olevel.resit2.name"placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.resit2.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" ng-model="olevel.resit2.grade">
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
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 3</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" 
                                                   ng-model="olevel.resit3.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" 
                                                   ng-model="olevel.resit3.index" placeholder="Index Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control"
                                                           ng-model="olevel.resit3.name" placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.resit3.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" ng-model="olevel.resit3.grade">
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
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 4</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="olevel.resit4.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"
                                                   ng-model="olevel.resit4.index" placeholder="Index Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control"
                                                           ng-model="olevel.resit4.name" placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.resit4.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select  class="form-control" ng-model="olevel.resit4.grade">
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
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 5</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"
                                                   ng-model="olevel.resit5.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" 
                                                   ng-model="olevel.resit5.index" placeholder="Index Number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control"
                                                           ng-model="olevel.resit5.name" placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.resit5.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select  class="form-control" ng-model="olevel.resit5.grade">
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
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 6</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"
                                                   ng-model="olevel.resit6.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"
                                                   ng-model="olevel.resit6.index" placeholder="Index Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" 
                                                           ng-model="olevel.resit6.name" placeholder="Subject Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="olevel.resit6.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" ng-model="olevel.resit6.grade">
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
                                        <span ng-show="dropAvailable">or Drop</span> to upload Results slip / Certificate
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
        <button type="button" class="btn btn-success w-lg m-b-5" id='next-btn' ng-click="nextclick($event, olevelinfo.$valid)">Next</button>
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
<script id="async-scripts"></script>
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


            jQuery('#olevel-core').datepicker();
            jQuery('#olevel-sub1').datepicker();
            jQuery('#olevel-sub2').datepicker();
            jQuery('#olevel-sub3').datepicker();

            jQuery('#olevel-sub4').datepicker();
            jQuery('#olevel-sub5').datepicker();
            jQuery('#olevel-sub6').datepicker();
            jQuery('#olevel-sub7').datepicker();
            jQuery('#olevel-sub8').datepicker();
            jQuery('#olevel-sub9').datepicker();

            jQuery('#alevel-resit-sub1').datepicker();
            jQuery('#alevel-resit-sub2').datepicker();
            jQuery('#alevel-resit-sub3').datepicker();

            jQuery('#olevel-resit-sub4').datepicker();
            jQuery('#olevel-resit-sub5').datepicker();
            jQuery('#olevel-resit-sub6').datepicker();
            //
            try {
                $(".select2").select2({
                    width: '100%'
                });
            } catch (e) {

            }
            $(".select2").addClass("form-control");
</script>
