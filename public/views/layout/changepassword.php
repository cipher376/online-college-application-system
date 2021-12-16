<!DOCTYPE html>
<html lang="en" ng-app="anucapp">
<head>
	<title>ANUC Online Application</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="ANUC online application portal"/>
	<style>
	[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
		display: none !important;
	}
</style>
<link href="/public/assets/lib/css/angular-datepicker.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/public/assets/lib/css_spinner/spinner.css">
<link rel="stylesheet" type="text/css" href="/public/assets/lib/Jqalert/css/dialogbox.css">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/public/assets/lib/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/public/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/public/assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/public/assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/public/assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/public/assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/public/assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/public/assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/public/assets/login/css/util.css">
<link rel="stylesheet" type="text/css" href="/public/assets/login/css/main.css">
<!--===============================================================================================-->
<style>
.page-title{
	width:100%;
	color:  white;
	padding-bottom: 5%;
	color: white;
}

.login-spinner{
	background: #0402058f;
	 display: none; 
	width: 100%;
	height: 100vh;
	position: absolute;
	margin-top: -100vh;
	/* margin-top: -100%; */
	padding-top: 30vh;
	z-index: 1000;
}
#register{
	display: none;
}
.change-log {
	color: white;
}
.change-reg {
	color: white;
}

a {
	cursor: pointer;
}

.spinner {
	background: #0402058f;
	width: 80px;
	height: 80px;
	position: relative;
	margin: 100px auto;
	/* width: 100%; */
	border-radius: 100px;
	/* color: #040205; */
}

.double-bounce1, .double-bounce2 {
	width: 100%;
	height: 100%;
	border-radius: 50%;
	background-color: #333;
	opacity: 0.6;
	position: absolute;
	top: 0;
	left: 0;

	-webkit-animation: sk-bounce 2.0s infinite ease-in-out;
	animation: sk-bounce 2.0s infinite ease-in-out;
}

.double-bounce2 {
	-webkit-animation-delay: -1.0s;
	animation-delay: -1.0s;
}

@-webkit-keyframes sk-bounce {
	0%, 100% { -webkit-transform: scale(0.0) }
	50% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bounce {
	0%, 100% {
		transform: scale(0.0);
		-webkit-transform: scale(0.0);
		} 50% {
			transform: scale(1.0);
			-webkit-transform: scale(1.0);
		}
	}

</style>
</head>
<body  ng-controller="MainController">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/public/assets/images/bg.jpg');">
			<div class="wrap-login100">
				<div class="row text-center w-100 m-0">
					<h4 class="page-title">All Nations University College <br>Online Application Portal</h4>
				</div>
				<form  id="login" class="login100-form validate-form" name="loginForm" method="post" class="ng-cloak">
					<span class="login100-form-logo">
						<a href="http://www.anuc.edu.gh" target="_blank"style="padding: 7%;margin-top: 7%;margin-right: 2%;">
							<img src="/public/assets/images/anulogo.png"
							height="100px" width="100px" style="padding: 10%;">
						</a>
					</span>

					<span class="login100-form-title p-b-20 p-t-27">
						Change Password
					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter new password">
						<input class="input100"  placeholder="New Password" name="resetpassword" class="pass" type="password"
						required="" ng-model="account.user.password" minlength="6">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class ="wrap-input100 validate-input" data-validate="Confirm password">
						<input class="input100"  placeholder="Confirm Password" name="resetpasswordconfirm" class="pass" type="password"
						required="" ng-model="account.user.confirmpassword" minlength="6">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="go to application"   ng-click="changePassword()">
							Reset
						</button>
					</div>

					<div class="text-center p-t-60 change-reg">
						<a class="txt1 mr-20" id="login-register" class="change-log" href="/Auth/Login_register">
							Goto Login
						</a>
						<div class="row text-center">
							<p class="row text-center small" style="text-align: center">For any enquiries, call the Tech team <span class="fa fa-phone"></span>  0201742690 \ 0241605585</p>
							<div class="clear-fix m-t-5"></div>
							<p class="row small m-t-10 w-100 text-center " style="text-align: center; font-size: .6em;padding-left: 6%;">
								Developed by   <a style=" font-size: 1.2em;"href="http://www.cypherzone.xyz" target="_blank"> Alfred Ntiamoah (antiamoah890@gmail.com)  </a> 2018
							</div>

						</div>
					</form>


				</div>
			</div>
		</div>
		<div id="dropDownSelect1"></div>


		<!----- Loader/Spinner template ------>
		<div  class="login-spinner" >
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div> <!-- ======== End of loader ----->





		<!--===============================================================================================-->
		<script src="/public/assets/lib/js/jquery.js"></script>


		<script src="/public/assets/lib/angular/angular.min.js" type="text/javascript"></script>
		<!--===============================================================================================-->
		<script src="/public/assets/login/vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<!-- <script src="/public/assets/lib/js/popper.js"></script> -->
		<script src="/public/assets/lib/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="/public/assets/lib/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="/public/assets/lib/daterangepicker/moment.min.js"></script>
		<script src="/public/assets/lib/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="/public/assets/lib/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="/public/assets/login/js/main.js"></script>



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
                //$(".login-spinner").fadeOut();
                $("#register").fadeOut();

            // $(".change-log").click(function (e) {

            //     $("#login").fadeOut();
            //     $("#register").fadeIn(1000);
            //       alert("click");
            //                     //Clear all input fields
            //                     $("#login-register input").val("");
            //                 });

            // $(".change-reg").click(function (e) {
            //     alert("click");
            //     $("#register").fadeOut("slow");
            //     $("#login").fadeIn("slow");

            //                     //Clear all input fields
            //                     $("#register-login input").val("");
            //                 });

          });
        </script>

      </body>
      </html>
