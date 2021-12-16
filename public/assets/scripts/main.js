
anucapp.controller("MainController",
        ["$rootScope", "$scope", "$window", "$location", '$timeout', 'Upload', '$http', 'ApplicantService', 'AccountService',
            function ($rootScope, $scope, $window, $location, $timeout, Upload, $http, ApplicantService, AccountService) {


                //Helper function
                $rootScope.nullOrEmpty = function (arg) {
                    if (arg === null) {
                        return true;
                    } else if (arg === 'null') {
                        return true;
                    } else if (arg === undefined) {
                        return true;
                    } else if (arg === 'undefined') {
                        return true;
                    } else if (arg == "") {
                        return true;
                    } else {
                        return false;
                    }
                };

                $rootScope.getUser = function () {
                    $rootScope.user = {};
                    $rootScope.sessionId = "";
                    try {
                        $rootScope.sessionId = document.cookie.split(" ")[1].split("=")[1];
                        if (sessionStorage.getItem($rootScope.sessionId)) {
                            $rootScope.user = JSON.parse(sessionStorage.getItem($rootScope.sessionId));
                        } 
                        
                        console.log($location);
                
                if(!$rootScope.sessionId && $location.path()=='/'){
                    // take the user to login
                    if($location.absUrl().toLowerCase().indexOf('reset')>-1||
                    $location.absUrl().toLowerCase().indexOf('changepass')>-1){
                        return; // Allow password reset
                    }else{
                        document.cookie = "";
                     sessionStorage.clear();
                    $rootScope.logout();
                    $window.location.href="/Main/Login_Register"
                    }
                    
                    
                }
                    } catch (e)
                    {
                        console.log("Main.js: Cookie not set");
                    }

                }
               

                // console.log("User from cookie: ");
                //console.log($rootScope.getUser());



                //Get user data if logged in already
                $rootScope.account = AccountService;
                $rootScope.applicantService = ApplicantService;
                
                $rootScope.applicantService.getApplicant($rootScope).then(() => {
                    // Load data from local storage
                    $rootScope.applicantService.getApplicantDataFromLocal($rootScope);
                    $rootScope.getUser(); // read the user object from local
                    //alert($rootScope.applicant_data.applicantId);
                    if ($rootScope.applicant_data) { 
                        // Applicant is logged in
                        
                        try {
                            if (!$rootScope.nullOrEmpty($rootScope.applicant_data.applicantId)) {
                                $rootScope.applicantService.applicantId = $rootScope.applicant_data.applicantId;
                            }

                            if (!$rootScope.nullOrEmpty($rootScope.applicant_data.sectionno)) {
                                $rootScope.applicantService.sectionno = $rootScope.applicant_data.sectionno;
                            }
                            
                if ($rootScope.user !== undefined &&
                        $rootScope.user !== '' &&
                        $rootScope.user !== null) {
                    //Account is empty, 
                    //alert("hello");
                    //Create new user account
                    $rootScope.account.user.email = $rootScope.user.email;
                    $rootScope.account.user.isAuthenticated = $rootScope.user.isAuthenticated;
                    $rootScope.account.user.userId = $rootScope.user.uid;
                    $rootScope.uid = $rootScope.user.uid;

                }
            
                    // set download link
                            var host = '';
                            host = $window.location.href.toLowerCase().split('main')[0];

                            $rootScope.pdfHtmlfile = host + '/Main/application/' + $rootScope.applicant_data.applicantId;
                            $scope.pdfHtmlfile = $rootScope.pdfHtmlfile;
                            $rootScope.last_section = parseInt($rootScope.applicant_data.sectionno);

                        } catch (e) {
                            console.log(e);
                        }
                    }else{
                        
                        
                    }
                });


                // if (!$rootScope.nullOrEmpty($location.path()) && $location.path() !== '/welcome') {
                //     //  $rootScope.applicantService.getApplicant($rootScope);
                // }


                //Loading data into application 

                //console.log($rootScope.applicantService);

                //var user = JSON.parse(sessionStorage.getItem("user"));
               

                //console.log($rootScope.account.user);
                //console.log(user);

                if ($rootScope.applicantService === undefined) {
                    $rootScope.applicantService = ApplicantService;
                }

                //Global used for form validation
                $rootScope.isValid = true;
                $rootScope.formErrors = "";
                $rootScope.errorMsg = "";
                $rootScope.loginAlertTitle = "";
                $rootScope.loginConfirmMsg = "dafdfa";
                $rootScope.pdfHtmlfile = "";
                $rootScope.triggerReload = false;
                $rootScope.examstype = "";
                $rootScope.back = "";
                $rootScope.next = "instruction";
                $rootScope.profileImageUrl = "/ApplicantUser/Upload?id=" + $rootScope.applicantService.applicantId;

//                *********************FILE UPLOAD*********************
                $scope.invalidFiles = [];
// make invalidFiles array for not multiple to be able to be used in ng-repeat in the ui

                $scope.uploadPic = function (files, url, callback) {
                    $scope.formUpload = true;
                    if (!$rootScope.nullOrEmpty(files)) {
                        if (files[0].size > 8000000) {
                            alert(files[0].size);
                            $rootScope.showDangerAlert("Your picture is too large to upload<br> size should be less than 10mb");
                            return;
                        }
                        // alert();
                        uploadUsing$http(files, url, callback);
                    }
                };

                function uploadUsing$http(files, url, callback) {
                    console.log($scope.getReqParams());

                    var form_data = new FormData();
                    angular.forEach(files, function (file) {
                        form_data.append('file', file);
                    });

                    files.upload = Upload.http({
                        url: url + $scope.getReqParams(),
                        method: 'POST',
                        transformRequest: angular.identity,
                        headers: {
                            //'Content-Type': file.type,
                            'Content-Type': undefined,
                            'Process-Data': false
                        },
                        data: form_data
                    });

                    files.upload.then(function (response) {
                        files.result = response.data;
                    }, function (response) {
                        if (response.Succeded !== true) {
                            $scope.errorMsg = response.status + ': ' + response.data;
                        } else {
                            //alert("hello");
                            callback();
                        }
                    });

                    files.upload.progress(function (evt) {
                        files.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
                    });
                }


                $scope.confirm = function () {
                    return confirm('Are you sure? Your local changes will be lost.');
                };

                $scope.getReqParams = function () {
                    return $scope.generateErrorOnServer ? '?errorCode=' + $scope.serverErrorCode +
                            '&errorMessage=' + $scope.serverErrorMsg : '';
                };

                angular.element(window).bind('dragover', function (e) {
                    e.preventDefault();
                });
                angular.element(window).bind('drop', function (e) {
                    e.preventDefault();
                });

                $scope.modelOptionsObj = {};
                $scope.$watch('validate+dragOverClass+modelOptions+resize+resizeIf', function (v) {
                    $scope.validateObj = eval('(function(){return ' + $scope.validate + ';})()');
                    $scope.dragOverClassObj = eval('(function(){return ' + $scope.dragOverClass + ';})()');
                    $scope.modelOptionsObj = eval('(function(){return ' + $scope.modelOptions + ';})()');
                    $scope.resizeObj = eval('(function($file){return ' + $scope.resize + ';})()');
                    $scope.resizeIfFn = eval('(function(){var fn = function($file, $width, $height){return ' + $scope.resizeIf + ';};return fn;})()');
                });

                $timeout(function () {
                    $scope.capture = localStorage.getItem('capture' + version) || 'camera';
                    $scope.pattern = localStorage.getItem('pattern' + version) || 'image/*,audio/*,video/*';
                    $scope.acceptSelect = localStorage.getItem('acceptSelect' + version) || 'image/*,audio/*,video/*';
                    $scope.modelOptions = localStorage.getItem('modelOptions' + version) || '{debounce:100}';
                    $scope.dragOverClass = localStorage.getItem('dragOverClass' + version) || '{accept:\'dragover\', reject:\'dragover-err\', pattern:\'image/*,audio/*,video/*,text/*\'}';
                    $scope.disabled = localStorage.getItem('disabled' + version) == 'true' || false;
                    $scope.multiple = localStorage.getItem('multiple' + version) == 'true' || false;
                    $scope.allowDir = localStorage.getItem('allowDir' + version) == 'true' || true;
                    $scope.validate = localStorage.getItem('validate' + version) || '{size: {max: \'20MB\', min: \'10B\'}, height: {max: 12000}, width: {max: 12000}, duration: {max: \'5m\'}}';
                    $scope.keep = localStorage.getItem('keep' + version) == 'true' || false;
                    $scope.keepDistinct = localStorage.getItem('keepDistinct' + version) == 'true' || false;
                    $scope.orientation = localStorage.getItem('orientation' + version) == 'true' || false;
                    $scope.runAllValidations = localStorage.getItem('runAllValidations' + version) == 'true' || false;
                    $scope.resize = localStorage.getItem('resize' + version) || "{width: 1000, height: 1000, centerCrop: true}";
                    $scope.resizeIf = localStorage.getItem('resizeIf' + version) || "$width > 5000 || $height > 5000";
                    $scope.dimensions = localStorage.getItem('dimensions' + version) || "$width < 12000 || $height < 12000";
                    $scope.duration = localStorage.getItem('duration' + version) || "$duration < 10000";
                    $scope.maxFiles = localStorage.getItem('maxFiles' + version) || "500";
                    $scope.ignoreInvalid = localStorage.getItem('ignoreInvalid' + version) || "";
                    $scope.$watch('validate+capture+pattern+acceptSelect+disabled+capture+multiple+allowDir+keep+orientation+' +
                            'keepDistinct+modelOptions+dragOverClass+resize+resizeIf+maxFiles+duration+dimensions+ignoreInvalid+runAllValidations', function () {
                                localStorage.setItem('capture' + version, $scope.capture);
                                localStorage.setItem('pattern' + version, $scope.pattern);
                                localStorage.setItem('acceptSelect' + version, $scope.acceptSelect);
                                localStorage.setItem('disabled' + version, $scope.disabled);
                                localStorage.setItem('multiple' + version, $scope.multiple);
                                localStorage.setItem('allowDir' + version, $scope.allowDir);
                                localStorage.setItem('validate' + version, $scope.validate);
                                localStorage.setItem('keep' + version, $scope.keep);
                                localStorage.setItem('orientation' + version, $scope.orientation);
                                localStorage.setItem('keepDistinct' + version, $scope.keepDistinct);
                                localStorage.setItem('dragOverClass' + version, $scope.dragOverClass);
                                localStorage.setItem('modelOptions' + version, $scope.modelOptions);
                                localStorage.setItem('resize' + version, $scope.resize);
                                localStorage.setItem('resizeIf' + version, $scope.resizeIf);
                                localStorage.setItem('dimensions' + version, $scope.dimensions);
                                localStorage.setItem('duration' + version, $scope.duration);
                                localStorage.setItem('maxFiles' + version, $scope.maxFiles);
                                localStorage.setItem('ignoreInvalid' + version, $scope.ignoreInvalid);
                                localStorage.setItem('runAllValidations' + version, $scope.runAllValidations);
                            });
                });

                /*****************************UPLOADS ENDS HERE*******************************/



                /*********************GLOBAL FUNCTION **************/

                //$rootScope.backclick = function () {
                  //  $location.path($rootScope.back);
                //};

                $rootScope.nextclick = function () {
                    $window.location.href = "/Main/#!/" + $rootScope.next;
                };

//Registration function
                $rootScope.register = function () {
                    $rootScope.spin(true);
                    if ($rootScope.account.user.password !== $rootScope.account.user.confirmpassword) {
                        $rootScope.spin(false);
                        $rootScope.errorMsg = "Password do not much!";
                        $rootScope.loginAlertTitle = "Confirm Password";
                        //clear the password field
                        $scope.account.user.password = "";
                        $scope.account.user.confirmpassword = "";
                        $rootScope.showLoginAlert();
                        return;
                    }
                    $rootScope.account.create();
                };

                $rootScope.login = function () {
                    if ($rootScope.account.user.email === "" ||
                            $rootScope.account.user.password.length < 6) {
                        $rootScope.spin(false);
                        return;
                    } else {
                        $rootScope.spin(true);
                    }

                    $rootScope.account.login($rootScope);

                };

                $rootScope.logout = function () {
                    sessionStorage.removeItem($rootScope.sessionId);
                    $rootScope.account.logout($rootScope);
                };

                $rootScope.resetPassword = function () {
                    if ($rootScope.nullOrEmpty($rootScope.account.user.email)){
                        $rootScope.spin(false);
                        $rootScope.errorMsg = "Enter your email address you registered with the system";
                        $rootScope.loginAlertTitle = "Prompt";
                        $rootScope.showLoginAlert();
                        return;
                    }
                    $rootScope.account.resetpassword($rootScope);
                };

                $rootScope.changePassword = function () {
                    //console.log($rootScope.account.user.password);
                    
                   // return;
                    if (!$rootScope.nullOrEmpty($rootScope.account.user.password) &&
                            $rootScope.account.user.password.indexOf($rootScope.account.user.confirmpassword) > -1) {
                        // set authentication token
                        var token = $location.search().id;
                        
                        //alert(token);
                        //return;
                        $rootScope.account.user.userId = token;
                        //console.log(token);
                        //return;
                        
                        $rootScope.account.changePassword($rootScope);
    
                    }else{
                        $rootScope.spin(false);
                        $rootScope.errorMsg = "Password do not much!";
                        $rootScope.loginAlertTitle = "Confirm Password";
                        $rootScope.showLoginAlert();
                    }
                };  

                $rootScope.welcome = function () {
                    $window.location.href = "/Main/#!/welcome";
                };

                $rootScope.convertDateToUnix = function (date) {

                    var dateAr = date.split("/");
                    var newdate = dateAr[2] + "-" + dateAr[1] + "-" + dateAr[0];
                    if (newdate.length !== 10)
                    {
                        // alert(newdate);
                        return "";
                    } else {
                        return newdate;
                    }
                }

                /*************************EVENTS HANDLING **************************/
                onRouteChangeOff = $scope.$on('$locationChangeStart', routeChange);
                function routeChange(event, newUrl, oldUrl) {
                    if ($location.path() === "/welcome" ||
                            $location.path() === "/") {
                        $(".progress").fadeOut();
                    } else {
                        $(".progress").fadeIn(3000);
                    }
                    return;
                }

//************************************************************************
//                        UI CONTROLS
//************************************************************************

//Highlight the corresponding menu
                $rootScope.selectMenuItem = function () {
                    switch ($location.path()) {
                        case "/":
                            $("li").removeClass("active");
                            $("li.welcome").addClass("active");
                            break;
                        case "/instruction":
                            $("li").removeClass("active");
                            $("li.instruction").addClass("active");
                            break;
                        case "/personalinfo":
                            $("li").removeClass("active");
                            $("li.personalinfo").addClass("active");
                            break;
                        case "/familyinfo":
                            $("li").removeClass("active");
                            $("li.familyinfo").addClass("active");
                            break;
                        case "/education":
                            $("li").removeClass("active");
                            $("li.education").addClass("active");
                            break;
                        case "/wassce":
                            $("li").removeClass("active");
                            $("li.wassce").addClass("active");
                            break;
                        case "/programselection":
                            $("li").removeClass("active");
                            $("li.programselection").addClass("active");
                            break;
                        case "/miscellaneous":
                            $("li").removeClass("active");
                            $("li.miscellaneous").addClass("active");
                            break;
                        case "/declaration":
                            $("li").removeClass("active");
                            $("li.declaration").addClass("active");
                            break;
                        case "/affirmation":
                            $("li").removeClass("active");
                            $("li.affirmation").addClass("active");
                            break;
                        case "/completion":
                            $("li").removeClass("active");
                            $("li.completion").addClass("active");
                            break;
                        default:
                        //console.log($location.path());
                    }
                }
                $rootScope.markAsFinished = function (link) {
                    $("." + link + ">a>i").removeClass("zmdi-view-dashboard")
                            .addClass("zmdi-check-circle").css("color", "#34c73b");
                };
                $rootScope.markAsUntouched = function (link) {
                    $("." + link + ">a>i").removeClass("zmdi-view-dashboard")
                            .addClass("zmdi-view-dashboard").css("color", "#838F9A");
                };
                /**************************************************
                 0. Instructions
                 1. Personal information
                 2. Family Information
                 3. Educational History
                 4. Academic Background
                 5. Program Selection
                 6. Miscellaneous
                 7. Declaration
                 8. Affirmation
                 9. Completion
                 ***************************************************/

                $rootScope.tickFinishedItem = function (section) {
                    //alert(section);
                    switch (parseInt(section)) {
                        case 0:
                            $rootScope.markAsFinished("instruction");
                            break;
                        case 1:
                            $rootScope.markAsFinished("instruction");
                            $rootScope.markAsFinished("personalinfo");
                            break;
                        case 2:
                            $rootScope.markAsFinished("instruction");
                            $rootScope.markAsFinished("personalinfo");
                            $rootScope.markAsFinished("familyinfo");
                            break;
                        case 3:
                            $rootScope.markAsFinished("instruction");
                            $rootScope.markAsFinished("personalinfo");
                            $rootScope.markAsFinished("familyinfo");
                            $rootScope.markAsFinished("education");
                            break;
                        case 4:
                            $rootScope.markAsFinished("instruction");
                            $rootScope.markAsFinished("personalinfo");
                            $rootScope.markAsFinished("familyinfo");
                            $rootScope.markAsFinished("education");
                            $rootScope.markAsFinished("wassce");

                            break;
                        case 5:
                            $rootScope.markAsFinished("instruction");
                            $rootScope.markAsFinished("personalinfo");
                            $rootScope.markAsFinished("familyinfo");
                            $rootScope.markAsFinished("education");
                            $rootScope.markAsFinished("wassce");
                            $rootScope.markAsFinished("programselection");

                            break;
                        case 6:
                            $rootScope.markAsFinished("instruction");
                            $rootScope.markAsFinished("personalinfo");
                            $rootScope.markAsFinished("familyinfo");
                            $rootScope.markAsFinished("education");
                            $rootScope.markAsFinished("wassce");
                            $rootScope.markAsFinished("programselection");
                            $rootScope.markAsFinished("miscellaneous");

                            break;
                        case 7:
                            $rootScope.markAsFinished("instruction");
                            $rootScope.markAsFinished("personalinfo");
                            $rootScope.markAsFinished("familyinfo");
                            $rootScope.markAsFinished("education");
                            $rootScope.markAsFinished("wassce");
                            $rootScope.markAsFinished("programselection");
                            $rootScope.markAsFinished("miscellaneous");
                            $rootScope.markAsFinished("declaration");

                            break;
                        case 8:
                            $rootScope.markAsFinished("instruction");
                            $rootScope.markAsFinished("personalinfo");
                            $rootScope.markAsFinished("familyinfo");
                            $rootScope.markAsFinished("education");
                            $rootScope.markAsFinished("wassce");
                            $rootScope.markAsFinished("programselection");
                            $rootScope.markAsFinished("miscellaneous");
                            $rootScope.markAsFinished("declaration");
                            $rootScope.markAsFinished("affirmation");
                            break;
                        case 9:
                            $rootScope.markAsFinished("instruction");
                            $rootScope.markAsFinished("personalinfo");
                            $rootScope.markAsFinished("familyinfo");
                            $rootScope.markAsFinished("education");
                            $rootScope.markAsFinished("wassce");
                            $rootScope.markAsFinished("programselection");
                            $rootScope.markAsFinished("miscellaneous");
                            $rootScope.markAsFinished("declaration");
                            $rootScope.markAsFinished("affirmation");
                            $rootScope.markAsFinished("completion");
                            break;
                    }
                };

                //Switch different views between examination types               
                $rootScope.switchAcademicView = function (newV) {
                    switch (newV) {
                        case "WASSCE":
                            $rootScope.examstype = "WASSCE";
                            $location.path("wassce");
                            break;
                        case "SSSCE":
                            $rootScope.examstype = "SSSCE";
                            $location.path("wassce");
                            break;
                        case "GCE-A":
                            $rootScope.examstype = "GCE-A";
                            $location.path("alevel");
                            break;
                        case "GCE-O":
                            $rootScope.examstype = "GCE-O";
                            $location.path("olevel");
                            break;
                        case "MATURE":
                            $rootScope.examstype = "MATURE";
                            $location.path("maturediploma");
                            break;
                        case "DBS":
                            $rootScope.examstype = "DBS";
                            $location.path("maturediploma");
                            break;
                        case "HND":
                            $rootScope.examstype = "HND";
                            $location.path("maturediploma");
                            break;
                        case "Transfer":
                            $rootScope.examstype = "Transfer";
                            $location.path("transfer");
                            break;
                        case "TECH":
                            $rootScope.examstype = "TECH";
                            $location.path("maturediploma");
                            break;
                        case "TAECH":
                            $rootScope.examstype = "TECH";
                            $location.path("maturediploma");
                            break;
                        case "HNC":
                            $rootScope.examstype = "TECH";
                            $location.path("maturediploma");
                            break;

                        default:
                            break;

                    }//end of switch

                };

                $rootScope.showLoginAlert = function () {
                    var data = '<div style="padding:20px;">' + $rootScope.errorMsg + '</div>';
                    $.dialogbox({
                        type: 'default',
                        title: $rootScope.loginAlertTitle,
                        content: data,
                        closeCallback: function () {
                            $rootScope.errorMsg = "";
                            $rootScope.loginAlertTitle = "";
//                                $.dialogbox.prompt({
//                                    content: $rootScope.loginConfirmMsg,
//                                    time: 1000
//                                });
                        }

                    });
                };

                $rootScope.spin = function ($state) {
                    if ($state === true) {
                        $(".login-spinner").css('display', 'block');
                        // alert($state);
                    } else {
                        $(".login-spinner").css('display', 'none');
                    }
                };
                $rootScope.showIframe = function (id) {
                    $.dialogbox({
                        type: 'iframe',
                        title: 'Generated Application Form',
                        content: 'Applicant ID: ' + id,
                        url: $rootScope.pdfHtmlfile,
                        width: 900,
                        height: 650
                    });
                };

                $rootScope.showSuccessAlert = function (msg) {
                    $("#overlay").css("display", "block");
                    var template = ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' + msg
                            + '<a href="#" class="alert-link"></a>.';
                    $(".alert-success-temp").html(template)
                            .css("visibility", "visible")
                            .fadeIn(1000);

                    //hide alert after 5sec
                    setTimeout(function () {
                        $(".alert-success-temp").fadeOut(3000).css("visibility", "collapse");
                        $("#overlay").css("display", "none");
                    }, 10000);

                }

                $rootScope.showDangerAlert = function (msg) {
                    $("#overlay").css("display", "block");
                    var template = ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' + msg
                            + '<a href="#" class="alert-link"></a>.';
                    $(".alert-danger-temp").html(template).css("visibility", "visible").fadeIn(1000);

                    //hide alert after 5sec
                    setTimeout(function () {
                        $(".alert-danger-temp").fadeOut(3000).css("visibility", "collapse");
                        $("#overlay").css("display", "none");
                    }, 10000);
                }

                $rootScope.selectMenuItem();
                //turn of spinner
                $rootScope.spin(false);
                //hide progress bar on welcome page if the 
                //welcome page is for the admin only;
                $rootScope.showWelcomeForApplicant = function ($isApplicant) {
                    if ($isApplicant) {
                        if ($window.location.href.indexOf("Main/welcome") > 0 ||
                                $window.location.href.indexOf("Main/#!/approot") > 0) {
                            $(".progress").fadeOut();
                            $(".left-panel").fadeOut();
                            $(".content").css('margin-left', 0);
                            $("header").css({"width": "100%", "left": "0"});
                            $("#applicant-id").fadeOut();
                            $("#bread").fadeOut();
                            $(".logo-small").fadeOut();
                            $rootScope.triggerReload = true;
                            //alert("here");
                        } else {
                            $(".progress").fadeIn();
                            $(".left-panel").fadeIn();
                            $(".content").css('margin-left');
                            $("header").removeAttr("width");
                            $("header").removeAttr("left");
                            $("#applicant-id").fadeIn();
                            $("#bread").fadeIn();
                            $(".logo-small").fadeIn();
                            $(".logo-text").fadeOut();
                            //alert("im coalle")
                        }
                    }
                }
                $rootScope.hideSideBar = function ($group) {
                    if ($group === "admin") {
                        $("#admin-sidebar").fadeIn();
                        $("#applicant-sidebar").fadeOut();
                        $("#registrar-sidebar").fadeOut();
                        $(".logo-small").fadeOut();
                        $(".logo-text").fadeOut();
                        $("#applicant-id").fadeOut();
                    } else if ($group === "registrar") {
                        //alert();
                        $("#applicant-sidebar").css("visibility", "collapse");
                        $("#registrar-sidebar").fadeIn().css('visibility', 'visible');
                        $(".left-panel").fadeIn();
                        $(".content").removeAttr('margin-left');
                        $("header").removeAttr("width");
                        $("header").removeAttr("left");
                        $("#applicant-id").css('visibility', 'collapse');
                        $("#bread").fadeIn();
                        $(".logo-small").fadeIn();
                        $(".logo-text").fadeOut();
                    } else {
                        $("#admin-sidebar").fadeOut().css("visibility", "collapse");
                        $("#applicant-sidebar").fadeIn().css('visibility', 'visible');
                        $("#registrar-sidebar").fadeOut().css("visibility", "collapse");
                        $(".logo-text").fadeOut();
                    }
                }


                //if the page contains a slider then its the applicant
                //welcome page

                if (!$rootScope.nullOrEmpty($("#jssor_1").html())) {
                    //alert("hel");
                    $rootScope.showWelcomeForApplicant(true);

                }
                $rootScope.changeLog = function () {

                    $("#login").fadeOut(1);
                    $("#register").fadeIn(1000);
                    //alert("changeLog");
                    //Clear all input fields
                    $("#login-register input").val("");
                }

                $rootScope.changeReg = function () {
                    //alert("change reg");
                    $("#register").fadeOut(1);
                    $("#login").fadeIn(1000);

                    //Clear all input fields
                    $("#register-login input").val("");
                }
 
                    //alert($rootScope.applicant_data.applicantId);
                    //alert("hello");

                try {
                    $("#login-spinner").fadeOut(1);
                    $("#register").fadeOut(1);
                    $rootScope.spin(false);
                   
                    
                
                    

                } catch (e) {
                }
//*******************************UI ENDS*********************//
            }]);





