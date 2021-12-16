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
    <link rel="stylesheet" href="public/assets/lib/datatables/3.3.1-SNAPSHOT/css/ultimate-datatable-3.3.1-SNAPSHOT.css">

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
    #applicant-id{
        display: none;
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
                            <li class="instruction"><a ng-click="newappsClick()"><i class="zmdi zmdi-accounts-outline"></i> <span class="nav-label">New Applications</span>
                                <span class="badge bg-success">{{newapps.length}}</span></a></li>
                                <li class="instruction"><a ng-click="processedClick()"><i class="zmdi zmdi-accounts-outline"></i> 
                                    <span class="nav-label">Processed </span>
                                    <span class="badge bg-warning">{{processed.length}}</span>
                                </a></li>
                                <li class="instruction"><a ng-click="incompleteClick()"><i class="zmdi zmdi-accounts-outline">

                                </i> <span class="nav-label">Incomplete </span>
                                <span class="badge bg-danger">{{incomplete.length}}</span>
                            </a></li>
                        </ul>
                    </nav>

                </aside> 
                <!-- Aside Ends-->


                <!--Main Content Start -->
                <section class="content">

                    <!-- Header -->
                    <header class="top-head container-fluid">

                        <img alt="" src="/public/assets/images/logo_text-sm.png" class="img-circle profile-img thumb-sm pull-left logo-small" style="display: none">
                        <img alt="" src="/public/assets/images/logowithtext.png" class=" logo-text" style="display:none;">
                        <button type="button" class="navbar-toggle pull-left" id="bread" style="display:none;">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Left navbar -->
                        <nav class=" navbar-default" role="navigation">
                            <ul class="nav navbar-nav hidden-xs">
                            </ul>
                            <ul class="nav navbar-nav navbar-left top-menu top-left-menu" style="float:left;diplay:none" id="applicant-id"> <!-- Notification -->
                                <li>
                                    <a >Applicant ID: {{ applicantService.applicantId}}</a>
                                </li>

                            </ul>
                            <!-- Right navbar -->
                            <ul class="nav navbar-nav navbar-right top-menu top-right-menu">

                                <li ng-if="last_section >=8">
                                <a href="/Payment/form">Click here to make payment <span class="fa fa-credit-card"></span></a>
                                </li>
                                <!-- /Notification -->
                                <li ng-if="last_section >=8">
                                    <a href="{{pdfHtmlfile}}" >Download Application  <span class="fa fa-download"></span></a>
                                </li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <!-- user login dropdown start-->
                                <li class="dropdown text-center">
                                    <a  id="profile-name" >

                                        <img alt="" src="/public/assets/images/user.png" class="img-circle profile-img thumb-sm" >
                                        <span class="username" ng-bind="account.user.email.split('@')[0]"> </span> 

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
                            <div class="col-md-12" >

                                <div class="col-md-12" ng-controller="ApplicantWelcomeController">
                                    <!-- #region Jssor Slider Begin -->
                                    <!-- Generator: Jssor Slider Maker -->
                                    <!-- Source: https://www.jssor.com -->
                                    <script src="/public/assets/lib/sliderintro/js/jssor.slider-25.2.1.min.js" type="text/javascript"></script>
                                    <script type="text/javascript">
                                        jssor_1_slider_init = function () {

                                            var jssor_1_SlideoTransitions = [
                                            [{b: 0, d: 600, y: -290, e: {y: 27}}],
                                            [{b: 0, d: 1000, y: 185}, {b: 1000, d: 500, o: -1}, {b: 1500, d: 500, o: 1}, {b: 2000, d: 1500, r: 360}, {b: 3500, d: 1000, rX: 30}, {b: 4500, d: 500, rX: -30}, {b: 5000, d: 1000, rY: 30}, {b: 6000, d: 500, rY: -30}, {b: 6500, d: 500, sX: 1}, {b: 7000, d: 500, sX: -1}, {b: 7500, d: 500, sY: 1}, {b: 8000, d: 500, sY: -1}, {b: 8500, d: 500, kX: 30}, {b: 9000, d: 500, kX: -30}, {b: 9500, d: 500, kY: 30}, {b: 10000, d: 500, kY: -30}, {b: 10500, d: 500, c: {x: 87.50, t: -87.50}}, {b: 11000, d: 500, c: {x: -87.50, t: 87.50}}],
                                            [{b: 0, d: 600, x: 410, e: {x: 27}}],
                                            [{b: -1, d: 1, o: -1}, {b: 0, d: 600, o: 1, e: {o: 5}}],
                                            [{b: -1, d: 1, c: {x: 175.0, t: -175.0}}, {b: 0, d: 800, c: {x: -175.0, t: 175.0}, e: {c: {x: 7, t: 7}}}],
                                            [{b: -1, d: 1, o: -1}, {b: 0, d: 600, x: -570, o: 1, e: {x: 6}}],
                                            [{b: -1, d: 1, o: -1, r: -180}, {b: 0, d: 800, o: 1, r: 180, e: {r: 7}}],
                                            [{b: 0, d: 1000, y: 80, e: {y: 24}}, {b: 1000, d: 1100, x: 570, y: 170, o: -1, r: 30, sX: 9, sY: 9, e: {x: 2, y: 6, r: 1, sX: 5, sY: 5}}],
                                            [{b: 2000, d: 600, rY: 30}],
                                            [{b: 0, d: 500, x: -105}, {b: 500, d: 500, x: 230}, {b: 1000, d: 500, y: -120}, {b: 1500, d: 500, x: -70, y: 120}, {b: 2600, d: 500, y: -80}, {b: 3100, d: 900, y: 160, e: {y: 24}}],
                                            [{b: 0, d: 1000, o: -0.4, rX: 2, rY: 1}, {b: 1000, d: 1000, rY: 1}, {b: 2000, d: 1000, rX: -1}, {b: 3000, d: 1000, rY: -1}, {b: 4000, d: 1000, o: 0.4, rX: -1, rY: -1}]
                                            ];

                                            var jssor_1_options = {
                                                $AutoPlay: 1,
                                                $Idle: 2000,
                                                $CaptionSliderOptions: {
                                                    $Class: $JssorCaptionSlideo$,
                                                    $Transitions: jssor_1_SlideoTransitions,
                                                    $Breaks: [
                                                    [{d: 2000, b: 1000}]
                                                    ]
                                                },
                                                $ArrowNavigatorOptions: {
                                                    $Class: $JssorArrowNavigator$
                                                },
                                                $BulletNavigatorOptions: {
                                                    $Class: $JssorBulletNavigator$
                                                }
                                            };

                                            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                                            /*#region responsive code begin*/
                                            function ScaleSlider() {
                                                var containerElement = jssor_1_slider.$Elmt.parentNode;
                                                var containerWidth = containerElement.clientWidth;
                                                if (containerWidth) {
                                                    var MAX_WIDTH = 980;

                                                    var expectedWidth = containerWidth;

                                                    if (MAX_WIDTH) {
                                                        expectedWidth = Math.min(MAX_WIDTH, expectedWidth);
                                                    }

                                                    jssor_1_slider.$ScaleWidth(expectedWidth);
                                                } else {
                                                    window.setTimeout(ScaleSlider, 30);
                                                }
                                            }

                                            ScaleSlider();
                                            $Jssor$.$AddEvent(window, "load", ScaleSlider);
                                            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                                            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                                            /*#endregion responsive code end*/
                                        };
                                    </script>
                                    <style>
                                    /* jssor slider loading skin double-tail-spin css */

                                    .jssorl-004-double-tail-spin img {
                                        animation-name: jssorl-004-double-tail-spin;
                                        animation-duration: 1.2s;
                                        animation-iteration-count: infinite;
                                        animation-timing-function: linear;
                                    }

                                    @keyframes jssorl-004-double-tail-spin {
                                        from {
                                            transform: rotate(0deg);
                                        }

                                        to {
                                            transform: rotate(360deg);
                                        }
                                    }


                                    .jssorb052 .i {position:absolute;cursor:pointer;}
                                    .jssorb052 .i .b {fill:#000;fill-opacity:0.3;stroke:#fff;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.7;}
                                    .jssorb052 .i:hover .b {fill-opacity:.7;}
                                    .jssorb052 .iav .b {fill-opacity: 1;}
                                    .jssorb052 .i.idn {opacity:.3;}

                                    .jssora053 {display:block;position:absolute;cursor:pointer;}
                                    .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
                                    .jssora053:hover {opacity:.8;}
                                    .jssora053.jssora053dn {opacity:.5;}
                                    .jssora053.jssora053ds {opacity:.3;pointer-events:none;}
                                </style>
                                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                                    <!-- Loading Screen -->
                                    <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="/public/assets/lib/sliderintro/img/double-tail-spin.svg" />
                                    </div>
                                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                        <div>
                                            <img data-u="image" src="/public/assets/lib/sliderintro/img/001.jpg" />
                                            <div data-u="caption" data-t="0" style="position:absolute;top:320px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(255,188,5,0.8);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">
                                                <b>15th Matriculation Ceremony</b>
                                            </div>
                                        </div>
                                        <div data-p="170.00">
                                            <img data-u="image" src="/public/assets/lib/sliderintro/img/002.jpg" />
                                            <div data-u="caption" data-t="1" data-3d="1" style="position:absolute;top:-50px;left:125px;width:350px;height:30px;z-index:0;background-color:rgba(255,188,5,0.8);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">
                                                Community of diverse students
                                            </div>
                                        </div>
                                        <div>
                                            <img data-u="image" src="/public/assets/lib/sliderintro/img/003.jpg" />
                                            <div data-u="caption" data-t="2" style="position:absolute;top:30px;left:-380px;width:350px;height:30px;z-index:0;background-color:rgba(255,188,5,0.8);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">
                                                Dedicated professors
                                            </div>
                                        </div>
                                        <div>
                                            <img data-u="image" src="/public/assets/lib/sliderintro/img/004.jpg" />
                                            <div data-u="caption" data-t="3"
                                            style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(255,188,5,0.8);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">
                                            The Dean
                                        </div>
                                    </div>
                                    <div>
                                        <img data-u="image" src="/public/assets/lib/sliderintro/img/005.jpg" />
                                        <div data-u="caption" data-t="4" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(255,188,5,0.8);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">
                                            Session in progress
                                        </div>
                                    </div>
                                    <div>
                                        <img data-u="image" src="/public/assets/lib/sliderintro/img/006.jpg" />

                                        <div data-u="caption" data-t="4" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(255,188,5,0.8);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">
                                            Christian values at the heart of ANUC
                                        </div>
                                    </div>
                                    <div>
                                        <img data-u="image" src="/public/assets/lib/sliderintro/img/009.jpg" />
                                        <div data-u="caption" data-t="6" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(255,188,5,0.8);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">
                                            Supportive SRC
                                        </div>
                                    </div>
                                    <div>
                                        <img data-u="image" src="/public/assets/lib/sliderintro/img/007.jpg" />
                                        <div data-u="caption" data-t="6" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(255,188,5,0.8);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">
                                            Social and educative environment
                                        </div>
                                    </div>
                                    <div data-b="0">
                                        <img data-u="image" src="/public/assets/lib/sliderintro/img/008.jpg" />
                                        <div data-u="caption" data-t="10" data-3d="1" style="position:absolute;top:25px;left:100px;width:250px;height:100%;z-index:0;background-color:#3289c8">
                                            <div style="margin: 15px; font-size: 13px;color:white">
                                                <h3 style="color:red">Mission</h3>
                                                <p>All Nations University College's mission is to provide quality higher education that promotes
                                                development and to raise leaders with Christian values and ethics to serve society.</p>



                                                <h3 style="color:red">Vision</h3>
                                                <p>All Nations University College's 
                                                    vision is to provide higher education, 
                                                    pursued in a Christian environment 
                                                of truth and integrity.</p>
                                                <a style="color:#34c73b" href="http://anuc.edu.gh/home/aboutus/10/aboutus.html" target="_blank">
                                                    About ANUC
                                                </a> 
                                                <img src="/public/assets/images/anulogo.png" /> 

                                            </div>

                                        </div>
                                    </div>



                                    <a data-u="any" href="https://www.jssor.com" style="display:none">bootstrap slider</a>
                                </div>
                                <!-- Bullet Navigator -->
                                <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Arrow Navigator -->
                                <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                    </svg>
                                </div>
                                <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                                    </svg>
                                </div>
                            </div>
                            <script type="text/javascript">jssor_1_slider_init();</script>
                            <!-- #endregion Jssor Slider End -->
                            <div class="panel-body">
                                <div class="panel panel-default " > 
                                    <div class="panel-heading" style="background:#3289c8; ">
                                        <h3 class="panel-title" style="color:white"> SCHOOLS  </h3>
                                    </div> 
                                    <div class="panel-body col-md-4">
                                        <table class="table col-md-6"> 
                                            <thead> 
                                                <tr> 
                                                    <th style="width:50%;">School of Business</th> 

                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                <tr> 
                                                    <td class="middle-align"> 1. Business Administration in Accounting</td> 

                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">2. Business Administration in Banking Finance</td> 

                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">3. Business Administration in Entrepreneurship</td> 

                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">4. Business Administration in Human Resource Management</td> 

                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align"> 5. Business Administration in Marketing</td> 

                                                </tr>
                                            </tbody> 
                                        </table> 
                                    </div>
                                    <div class="panel-body col-md-4">

                                        <table class="table col-md-6"> 
                                            <thead> 
                                                <tr> 
                                                    <th style="width:50%;"> School of Engineering</th> 

                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                <tr> 
                                                    <td class="middle-align">1. Bachelor of Engineering( Oil & Gas)</td> 

                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">2. Bachelor of Engineering(Biomedical)</td> 

                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">3. Bachelor of Engineering (Electronics & Communications)</td> 

                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">4. Bachelor of Engineering(Computer )</td> 

                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align"> 5. Bachelor of Engineering  Science((Hons)</td> 

                                                </tr>
                                            </tbody> 
                                        </table> 
                                    </div>
                                    <div class="panel-body col-md-4">

                                        <table class="table col-md-6"> 
                                            <thead> 
                                                <tr> 
                                                    <th style="width:50%;">  School of Humanities & Sciences</th> 

                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                <tr> 
                                                    <td class="middle-align">1.Bachelor of Arts in Biblical Studies with Business Administration</td> 

                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align"> 2. BSc. Nursing</td> 

                                                </tr> 

                                            </tbody> 
                                        </table> 
                                    </div>
                                </div>
                            </div>
                        </p>

                        <form class="form-horizontal p-20" role="form" action="#">
                            <div class="form-group">
                                <div class=" col-sm-offset-2 col-sm-8" >
                                    <button type="button" class="btn btn-success w-lg m-b-5 col-sm-12" id='next-btn' ng-click="nextclick()">
                                        Click To Begin
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Content Ends -->

</section>


<!-- js placed at the end of the document so the pages load faster -->
<script src="public/assets/lib/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="public/assets/lib/Jqalert/js/dialogbox.js"></script>
<script type="text/javascript" src="/public/assets/lib/popper.js/dist/popper.min.js"></script>
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
