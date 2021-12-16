
<!DOCTYPE html>
<html ng-app="anucapp">
    <head>
        <title>ANUC Online Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="ANUC online application portal"/>
         <style>
            [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
                display: none !important;
            }
        </style>
         <script src="/public/assets/lib/js/jquery.js"></script>
        <script src="/public/assets/lib/angular/angular.min.js" type="text/javascript"></script>
        <!-- css files -->
        <link href="/public/assets/lib/css/angular-datepicker.min.css" rel="stylesheet">    
        <link rel="stylesheet" type="text/css" href="/public/assets/lib/css_spinner/spinner.css">
        <link rel="stylesheet" type="text/css" href="/public/assets/lib/Jqalert/css/dialogbox.css">
        <link href="/public/assets/styles/login/style.css" rel="stylesheet" type="text/css" media="all">
        <link href="/public/assets/fonts/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <!-- //css files -->
        <!-- online-fonts --> 
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
       
       

    </head>

    <body ng-controller="MainController"> 
        <div class="help">
            <p style=" ">Help line <span class="fa fa-phone"></span><br>  0201742690 / 0241605585</p>
            </div>
        <div style=" " class="reglog-link">
            <p><span style="cursor:pointer; color:#fea; "  class="change-log">Register</span> / <span style="cursor:pointer; color:#fea;"  class="change-reg">Login</span></p>
        </div>
        <!--header-->
        <div class="header-w3l">
            <h1>All Nations University College <br>Online Application Portal</h1>
        </div>
        <!--//header-->
        <!--main-->
        <div class="logo">
            <img src="/public/assets/images/anulogo.png" 
                 height="100px" width="100px">
        </div>
        <div class="main-agileits" id="login">
            <h3 class="sub-head"><i class="fa fa-user"></i>  Login</h3>

            <div class="sub-main" >	
                <form  name="loginForm" method="post">
                    <input placeholder="Email" name="loginemail" class="mail" type="email" required="" minlength="5"
                           ng-model="account.user.email">
                    <span style="color:#da7373" class="icon1" ng-show="loginForm.loginemail.$touched && loginForm.loginemail.$invalid" ><i class="fa fa-times-circle-o"></i></span>
                    <span style="color:rgba(0, 0, 0, 0.83)" class="icon1" ng-show="!(loginForm.loginemail.$touched && loginForm.loginemail.$invalid)"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
                    <input  placeholder="Password" name="loginpassword" class="pass" type="password" 
                            required="" ng-model="account.user.password" minlength="6">
                    <span style="color:#da7373" class="icon2" ng-show="loginForm.loginpassword.$touched && loginForm.loginpassword.$invalid" ><i class="fa fa-times-circle-o"></i></span>
                    <span style="color:rgba(0, 0, 0, 0.83)" class="icon2" ng-show="!(loginForm.loginpassword.$touched && loginForm.loginpassword.$invalid)"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>

                    <span style="color:#da7373; " class="ng-hide"  ng-show="loginForm.loginemail.$touched && loginForm.loginemail.$invalid">Invalid email</span><br>
                    <span style="color:#da7373; " class="ng-hide"  ng-show="loginForm.loginpassword.$touched && loginForm.loginpassword.$invalid" >Password length must be greater than 6</i></span><br>

                    <input type="submit" value="go to application"   ng-click="login()"><br>
                    <a  style="color:white; cursor:pointer;" id="login-register" class="change-log">Not registered? </a>

                </form>
            </div>
        </div>
        <div class="main-agileits" id="register" >
            <h3 class="sub-head"> <i class="fa fa-user-plus"></i>  Register</h3>
            <div class="sub-main"  >	
                <form name="registerform" method="post">
                    <input placeholder="Email" name="regemail" class="mail" type="email" required="" ng-model="account.user.email">
                    <span style="color:red" class="icon1" ng-show="registerform.regemail.$touched && registerform.regemail.$invalid" ><i class="fa fa-times-circle-o"></i></span>
                    <span style="color:rgba(0, 0, 0, 0.83)" class="icon1" ng-show="!(registerform.regemail.$touched && registerform.regemail.$invalid)"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>

                    <input  placeholder="Password" name="regpassword"  class="pass" type="password" required="" ng-model="account.user.password">
                    <span style="color:red" class="icon2" ng-show="registerform.regpassword.$touched && registerform.regpassword.$invalid" ><i class="fa fa-times-circle-o"></i></span>
                    <span style="color:rgba(0, 0, 0, 0.83)" class="icon2" ng-show="!(registerform.regpassword.$touched && registerform.regpassword.$invalid)"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>

                    <input  placeholder="Confirm Password" type="password" name="conregpassword" class="pass" required="" ng-model="account.user.confirmpassword">
                    <span style="color:red" class="icon3" ng-show="registerform.conregpassword.$touched && registerform.conregpassword.$invalid" ><i class="fa fa-times-circle-o"></i></span>
                    <span style="color:rgba(0, 0, 0, 0.83)" class="icon3" ng-show="!(registerform.conregpassword.$touched && registerform.conregpassword.$invalid)"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>

                    <span style="color:red"  ng-show="registerform.regemail.$touched && registerform.regemail.$invalid">Invalid email</span><br>
                    <span style="color:red"  ng-show="registerform.regpassword.$touched && registerform.regpassword.$invalid" >Password length must be greater than 6</i></span><br>

                    <input type="submit" value="Register"  ng-disabled="loginForm.$invalid"  ng-click="register()">
                    <a  style="color:white; cursor:pointer;" id="register-login" class="change-reg"><br>Registered Already?</a>
                </form>
            </div>
            <div class="clear"></div>
        </div>
        <!--//main-->

        <!----- Loader/Spinner template ------>
        <div class="container" id="login-spinner" >
            <div class="container-dot dot-a">
                <div class="dot"></div>
            </div>
            <div class="container-dot dot-b">
                <div class="dot"></div>
            </div>
            <div class="container-dot dot-c">
                <div class="dot"></div>
            </div>

            <div class="container-dot dot-d">
                <div class="dot"></div>
            </div>

            <div class="container-dot dot-e">
                <div class="dot"></div>
            </div>

            <div class="container-dot dot-f">
                <div class="dot"></div>
            </div>
            <div class="container-dot dot-g">
                <div class="dot"></div>
            </div>

            <div class="container-dot dot-h">
                <div class="dot"></div>
            </div>
        </div> <!-- ======== End of loader ----->


        <!--footer-->
        <div class="footer-w3">
            <div style="color:white;">
                <p style="  ">For any enquiries, call the admission desk <span class="fa fa-phone"></span> 0201742690 \ 0241605585</p>
            </div>
            <h6 class="m-t-10">&copy; 2017 Online Application portal. All rights reserved | Developed by <a href="">Alfred Ntiamoah (antiamoah890@gmail.com)</a></h6>
        
        </div>
        <!--//footer-->

        <!-- Alert -->

        <script type="text/javascript" src="/public/assets/lib/Jqalert/js/dialogbox.js"></script>

        <script src="/public/assets/lib/angular/angular-resource.min.js" type="text/javascript"></script>
        <script src="/public/assets/lib/angular/angular-route.min.js" type="text/javascript"></script>
        <script src="/public/assets/lib/angular/angular-cookies.min.js" type="text/javascript"></script>
        <script src="/public/assets/lib/angular/ng-file-upload.min.js" type="text/javascript"></script>
        <script src="/public/assets/lib/angular/angular-datepicker.min.js" type="text/javascript"></script>
        <script src="/public/assets/lib/datatables/dependencies/momentjs/momentjs.js" type="text/javascript" charset="utf-8"></script>
        <script src="/public/assets/lib/datatables/dependencies/fileSaver/fileSaver.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="/public/assets/lib/datatables/ultimate-datatable.min.js" type="text/javascript" charset="utf-8"></script>


        <script src="/public/assets/scripts/configuration.js" type="text/javascript"></script>
        <script src="/public/assets/scripts/accountService.js" type="text/javascript"></script>
        <script src="/public/assets/scripts/ApplicantService.js" type="text/javascript"></script>
        <script src="/public/assets/scripts/main.js" type="text/javascript"></script>


        <script>
                        $(function () {
                            $("#login-spinner").fadeOut();
                            $("#register").fadeOut();

                            $(".change-log").click(function (e) {

                                $("#login").fadeOut();
                                $("#register").fadeIn(1000);

                                //Clear all input fields
                                $("#login-register input").val("");
                            });

                            $(".change-reg").click(function (e) {
                                $("#register").fadeOut("slow");
                                $("#login").fadeIn("slow");

                                //Clear all input fields
                                $("#register-login input").val("");
                            });

                        });
        </script>

    </body>
</html>