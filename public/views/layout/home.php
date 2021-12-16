<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" ng-app="anucapp">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <base href="/">
        <style>
            [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
                display: none !important;
            }
        </style>

        <link rel="shortcut icon" href="public/assets/images/anulogo.png">
        <link type="text/css" rel="stylesheet" href="public/assets/styles/main/common.css">
        <title>ANUC Online Application</title>

        <!-- Bootstrap core CSS -->

        <link href="public/assets/lib/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/assets/lib/css/bootstrap-reset.css" rel="stylesheet">
        <link href="public/assets/lib/css/angular-datepicker.min.css" rel="stylesheet">
        <!--Animation css-->
        <link href="public/assets/lib/css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="public/assets/fonts/font-awesome.min.css" rel="stylesheet" />
        <link href="public/assets/fonts/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="public/assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet" />

        <!--Animation css-->
        <link href="public/assets/lib/css/animate.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="public/assets/lib/sweet-alert/sweet-alert.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/public/assets/lib/Jqalert/css/dialogbox.css">

        <!-- Plugins css-->
        <link href="public/assets/lib/tagsinput/jquery.tagsinput.css" rel="stylesheet" />
        <link href="public/assets/lib/toggles/toggles.css" rel="stylesheet" />
        <link href="public/assets/lib/timepicker/bootstrap-timepicker.min.css" rel="stylesheet" />
        <link href="public/assets/lib/timepicker/bootstrap-datepicker.min.css" rel="stylesheet" />
        <!--<link rel="stylesheet" type="text/css" href="public/assets/lib/jquery-multi-select/multi-select.css" />-->
        <!--<link rel="stylesheet" type="text/css" href="public/assets/lib/select2/select2.css" />-->


        <!-- Custom styles for this template -->
        <link href="public/assets/styles/main/style.css" rel="stylesheet">
        <link href="public/assets/styles/main/helper.css" rel="stylesheet">
        <link rel="stylesheet" href="public/assets/lib/datatables/dist/3.3.1-SNAPSHOT/css/ultimate-datatable-3.3.1-SNAPSHOT.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-62751496-1', 'auto');
            ga('send', 'pageview');


        </script>
        <style>
            #next-btn{
                float:right;
            }
            .logo-text{
                margin-bottom: -60px;  
                width: 250px;
            }
            #profile-name .username{
                visibility: visible;
            }
            .logo-small{
                margin-top: 18px;
                width: 57px;
                height: 40px;
                margin-right: 20px;
                visibility: collapse;
            }
            #profile-name img{
                float: left;
            }
            .logo{
                height: 119px;
            }
            .navbar-toggle {
                margin: 12px 17px 9px -87px;
            }
            header .navbar-default .navbar-nav>li> .logo-label{
                font-size: 14px;
            }
            header .navbar-default .navbar-nav>li> .logo-label>i{
                font-size: 14px;
            }
            .progress{
                float: right;
                height: 11px;
                width: 100%;
                background:white;
                margin-left: -20px;
                margin-top: 0px;
                z-index: 100000;
                border-radius: 0;
            }
            .progress-lg{
                margin-bottom:10px;
                margin-top:0px;
            }
            .ng-scope{
                margin-top: -6px;
            }
            .navigation ul li a .zmdi-home{
                font-size: 41px;
                margin-right: 17px;
                color:#3289c8;
            }
            .logo-expanded-collapsed{
                width: 70px;
                margin-left: -8px;
                margin-top: 22px;

            }
            .correct-content-top-when-collapsed{
                margin-top:-10px;
            }
            .correct-logo-when-collapsed{
                height: 102px;
            }
            .correct-main-row-collapsed{
                margin-top: -84px;
            }
            @media only screen and (max-width:888px){
                .ng-scope{
                    margin-top: 18px;
                }
            }
            /*Correct next button position on smaller devices*/
            @media only screen and (max-width:769px){
                #next-btn{
                    float:none;
                }
                .logo-expanded img{
                    height: 50px;
                    width: 50px;
                    z-index: 2000;
                }
                .logo-expanded{
                    z-index: 2000;
                }
                #profile-name .username{
                    visibility: collapse;
                }
                .logo-small{
                    visibility:visible;
                }
                #profile-name img{
                    float: right;
                }
                .top-menu li >a{
                    font-size: 13px;
                } 
                .logo{
                    height:50px;
                }
                .ng-scope{
                    margin-top: -14px;
                }
                .logo-text{
                    width: 224px; 
                }

            }
            @media only screen and (min-width:769px){
                aside.left-panel.collapsed .navigation {
                    margin: -2px 0px 20px;
                }
            }
            @media only screen and (max-width:500px){
                .ng-scope{
                    margin-top: -9px;
                }
                .logo-text{
                    width: 203px; 
                }
            }
            @media only screen and (max-width:355px){
                .ng-scope{
                    margin-top: 17px;
                }
            }
            .navigation > ul > li.active > a{
                background:rgba(63, 183, 238, 0.64);
            }
            .select2-container .select2-choice {
                line-height: 16px;
                border:none;
            }
            .select2-container .select2-choice .select2-arrow b {
                margin-top: -8px;
            }
            .navbar-toggle {
                margin: 12px 17px 9px 0px;
            }

            /* Angular validation erros */

            form .ng-invalid.ng-touched {
                box-shadow: 1px 1px 5px #FA787E;
            }

            form .ng-valid.ng-touched {
                box-shadow: 1px 1px 5px #78FA89;
            }
            .form-control{
                border-color: rgba(86,80,80,.3);
                text-transform: capitalize;
            }
            input,select,option{
                text-transform: capitalize;
            }


            [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
                display: none !important;
            }
        </style>

    </head>


    <body ng-controller="MainController">
        <!--***********************Templates for notification **************-->
        <style>
            .alert-success-temp,.alert-danger-temp{
                width: 100%;
                z-index: 111;
                visibility: collapse;
            }
            #overlay {
                position: fixed; /* Sit on top of the page content */
                width: 400px; /* Full width (cover the whole page) */
                height: 87px; /* Full height (cover the whole page) */
                top: 14vh;
                right: 10px;
                bottom: 0;
                background-color: rgba(0,0,0,0); /* Black background with opacity */
                z-index: 10; /* Specify a stack order in case you're using a different order for other elements */
                cursor: pointer; /* Add a pointer on hover */
                display: none;
            }
        </style>

        <div id="overlay">
            <div class="alert alert-success  alert-success-temp alert-dismissable">
            </div>
            <div class="alert alert-danger alert-danger-temp alert-dismissable">
            </div>
        </div>



        <!****************************Notification template ends ***************->

        <div class="form-group" style="visibility: collapse">
            <label class="col-sm-2 control-label">Examination Type</label>
            <div class="col-sm-10">
                <select class="select2" data-placeholder="">
                </select>
            </div>
        </div>
        <!-- Aside Start-->
        <!**********************APPLICANT SIDE BAR!*****************->
        <aside class="left-panel" id="applicant-sidebar" style="visibility: collapse">

            <!-- brand -->
            <div class="logo">
                <a  class="logo-expanded">
                    <img class="nav-label" src="public/assets/images/logo_text-sm.png" /><br>
                </a>
            </div>
            <!-- / brand -->

            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li ><a> <span class="nav-label"></span></a></li>
                    <li class="active welcome"><a ng-click="welcome()"><i class="zmdi zmdi-home"></i> 
                            <span  style="color: #844b4a; font-weight: bold;font-size: 19px;">Welcome</span></a>
                    </li>
                    <li><hr></li>
                    <li class="instruction"><a><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Instructions</span></a></li>
                    <li class="personalinfo"><a ><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Personal Information</span></a></li>
                    <li class="familyinfo"><a ><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Family Information </span></a></li>
                    <li class="education"><a ><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Educational History</span></a></li>
                    <li class="wassce"><a ><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Academic Background</span></a></li>
                    <li class="programselection"><a ><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Program Selection</span></a></li>
                    <li class="miscellaneous"><a ><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Miscellaneous</span></a></li>
                    <li class="declaration"><a ><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Declaration</span></a></li>                  
                    <li class="affirmation"><a ><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Affirmation</span></a></li>
                    <li class="completion"><a ><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Completion</span></a></li>
                </ul>
            </nav>

        </aside> 
        <!*********************Admin Sidebar!*****************->
        <!--        <aside class="left-panel" id="admin-sidebar">
        
                     brand 
                    <div class="logo">
                        <a  class="logo-expanded">
                            <img class="nav-label" src="public/assets/images/logo_text-sm.png" /><br>
                        </a>
                    </div>
                     / brand 
        
                     Navbar Start 
                    <nav class="navigation">
                        <ul class="list-unstyled">
                            <li ><a> <span class="nav-label"></span></a></li>
                            <li class="active welcome"><a ng-click="welcome()"><i class="zmdi zmdi-home"></i> 
                                    <span  style="color: #844b4a; font-weight: bold;font-size: 19px;">Welcome</span></a>
                            </li>
                            <li><hr></li>
                            <li class="instruction">
                                <a href="#manage-users"><i class="zmdi zmdi-view-dashboard"></i> 
                                    <span class="nav-label">Manage Groups</span>
                                </a>
                                <a href="#manage-users" data-toggle="tab" aria-expanded="true"> 
                            <span class="visible-xs"><i class="fa fa-home"></i></span> 
                            <span class="hidden-xs">Manage Users</span> 
                        </a> 
                            </li>
                            <li class="personalinfo"><a href="#manage-users"><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Manage Privileges</span></a></li>
                            <li class="familyinfo"><a href="#manage-users"><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Manage User</span></a></li>
                        </ul>
                    </nav>
        
                </aside> -->
        <!**********************Registrars Sidebar!*****************->
        <aside class="left-panel" id="registrar-sidebar" style="visibility:collapse">
            <!-- brand -->
            <div class="logo">
                <a  class="logo-expanded">
                    <img class="nav-label" src="public/assets/images/logo_text-sm.png" /><br>
                </a>
            </div>
            <!-- / brand -->

            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li ><a> <span class="nav-label"></span></a></li>
                    <li class="active welcome"><a ng-click="welcome()"><i class="zmdi zmdi-home"></i> 
                            <span  style="color: #844b4a; font-weight: bold;font-size: 19px;">Welcome</span></a>
                    </li>
                    <li><hr></li>
                    <li class="instruction"><a ng-click="allClick()"><i class="zmdi zmdi-accounts-outline"></i> <span class="nav-label">All Applications</span>
                            <span class="badge bg-success" style="background:#17278c;" ng-cloak>{{data.length}}</span></a></li>

                    <li class="instruction"><a ng-click="newappsClick()"><i class="zmdi zmdi-accounts-outline"></i> <span class="nav-label">New Applications</span>
                            <span class="badge bg-success" ng-cloak>{{newapps.length}}</span></a></li>
                    <li class="instruction"><a ng-click="processedClick()"><i class="zmdi zmdi-accounts-outline"></i> 
                            <span class="nav-label">Processed </span>
                            <span class="badge bg-warning" ng-cloak>{{processed.length}}</span>
                        </a></li>
                    <li class="instruction"><a ng-click="incompleteClick()"><i class="zmdi zmdi-accounts-outline">

                            </i> <span class="nav-label">Incomplete </span>
                            <span class="badge bg-danger" ng-cloak>{{incomplete.length}}</span>
                        </a></li>
                </ul>
            </nav>

        </aside> 
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">

            <!-- Header -->
            <header class="top-head container-fluid">

                <img alt="" src="/public/assets/images/logo_text-sm.png" class="img-circle profile-img thumb-sm pull-left logo-small" style="display:none">
                <img alt="" src="/public/assets/images/logowithtext.png" class=" logo-text" style="display:none">
                <button type="button" class="navbar-toggle pull-left" id="bread" style="display: none">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Left navbar -->
                <nav class=" navbar-default" role="navigation">
                    <ul class="nav navbar-nav hidden-xs">
                    </ul>
                    <ul class="nav navbar-nav navbar-left top-menu top-left-menu" style="float:left;" id="applicant-id"> <!-- Notification -->
                        <li>
                            <a ng-bind="'Applicant ID: '+applicantService.applicantId"></a>
                        </li>
                    </ul>
                    <!-- Right navbar -->
                    <ul class="nav navbar-nav navbar-right top-menu top-right-menu">


                        <!-- /Notification -->

                        <!-- user login dropdown start-->
                        <li class="dropdown text-center">
                            <a  id="profile-name" >

                                <img alt="" src="/public/assets/images/user.png" class="img-circle profile-img thumb-sm" >
                                <span class="username" ng-cloak>{{account.user.email.split('@')[0]}} </span> 

                            </a>

                        </li>
                        <li>
                            <a ng-click="logout()" class="logo-label"><i class="fa fa-sign-out"></i> Log Out</a>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- End right navbar -->
                </nav>

            </header>
            <!-- Header Ends -->

            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">

                <div class="row my-row">
                    <div class="col-md-12" ng-view="">

                    </div>
                </div>
            </div>
            <!-- Page Content Ends -->

        </section>


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="public/assets/lib/js/jquery.js"></script>
        <script type="text/javascript" src="public/assets/lib/Jqalert/js/dialogbox.js"></script>

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
        <!-- Counter-up -->
        <script src="public/assets/lib/js/waypoints.min.js" type="text/javascript"></script>
        <script src="public/assets/lib/js/jquery.counterup.min.js" type="text/javascript"></script>

        <script src="public/assets/lib/angular/angular.min.js" type="text/javascript"></script>
        <script src="public/assets/lib/angular/angular-resource.min.js" type="text/javascript"></script>
        <script src="public/assets/lib/angular/angular-route.min.js" type="text/javascript"></script>
        <script src="public/assets/lib/angular/ng-file-upload-shim.min.js" type="text/javascript"></script>
        <script src="public/assets/lib/angular/ng-file-upload.min.js" type="text/javascript"></script>

        <script src="public/assets/lib/angular/angular-datepicker.min.js" type="text/javascript"></script>
        <script src="public/assets/lib/datatables/dependencies/momentjs/momentjs.js" type="text/javascript" charset="utf-8"></script>
        <script src="public/assets/lib/datatables/dependencies/fileSaver/fileSaver.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="public/assets/lib/datatables/ultimate-datatable.min.js" type="text/javascript" charset="utf-8"></script>


        <script src="public/assets/scripts/configuration.js" type="text/javascript"></script>
        <script src="public/assets/scripts/main.js" type="text/javascript"></script>
        <script src="public/assets/scripts/accountService.js" type="text/javascript"></script>
        <script src="public/assets/scripts/adminService.js" type="text/javascript"></script>    
        <script src="public/assets/scripts/registrarService.js" type="text/javascript"></script>
        <script src="public/assets/scripts/ApplicantService.js" type="text/javascript"></script>

        <script src="public/assets/scripts/academicBackgroundController.js" type="text/javascript"></script>
        <script src="public/assets/scripts/affirmationController.js" type="text/javascript"></script>
        <script src="public/assets/scripts/completionController.js" type="text/javascript"></script>
        <script src="public/assets/scripts/declarationController.js" type="text/javascript"></script>
        <script src="public/assets/scripts/educationHistoryController.js" type="text/javascript"></script>
        <script src="public/assets/scripts/familyInfoController.js" type="text/javascript"></script>
        <script src="public/assets/scripts/instructionController.js" type="text/javascript"></script>
        <script src="public/assets/scripts/miscellaneousController.js" type="text/javascript"></script>
        <script src="public/assets/scripts/personalInfoController.js" type="text/javascript"></script>
        <script src="public/assets/scripts/programSelectionController.js" type="text/javascript"></script>
        <script src="public/assets/scripts/adminController.js" type="text/javascript"></script>
        <script src="public/assets/scripts/registrarController.js" type="text/javascript"></script>    
        <script src="public/assets/scripts/applicantWelcomeController.js" type="text/javascript"></script>




        <script type="text/javascript">
                                        jQuery(document).ready(function ($) {
                                            /* Counter Up */
                                            $('.counter').counterUp({
                                                delay: 100,
                                                time: 1200
                                            });



                                        });
                                        /* BEGIN SVG WEATHER ICON */
                                        if (typeof Skycons !== 'undefined') {
                                            var icons = new Skycons(
                                                    {"color": "#fff"},
                                                    {"resizeClear": true}
                                            ),
                                                    list = [
                                                        "clear-day", "clear-night", "partly-cloudy-day",
                                                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                                                        "fog"
                                                    ],
                                                    i;

                                            for (i = list.length; i--; )
                                                icons.set(list[i], list[i]);
                                            icons.play();
                                        }
                                        ;
                                        $("#profile-name").click(function (e) {

                                        });



                                        // Tags Input
                                        jQuery('#tags').tagsInput({width: 'auto'});

                                        // Form Toggles
                                        jQuery('.toggle').toggles({on: true});

                                        // Time Picker
                                        jQuery('#timepicker').timepicker({defaultTIme: false});
                                        jQuery('#timepicker2').timepicker({showMeridian: false});
                                        jQuery('#timepicker3').timepicker({minuteStep: 15});

                                        // Date Picker

                                        $(".select2").addClass("form-control");

                                        $(".navbar-toggle").click(function () {
                                            $(".logo-expanded img").toggleClass("logo-expanded-collapsed");
                                            $(".logo").toggleClass("correct-logo-when-collapsed");
                                            $(".content").toggleClass("correct-content-top-when-collapsed");
                                            $(".welcome span").toggleClass("toggle-welcome-label");
                                            $(".my-row").toggleClass("correct-main-row-collapsed");
                                        });


        </script>

        <style>
            .toggle-welcome-label{
                visibility:collapse;
            }
        </style>

    </body>

</html>
