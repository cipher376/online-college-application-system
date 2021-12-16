anucapp.controller("AcademicBackgroundController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout',
            function ($scope, $rootScope, $window, $location, $timeout) {
                $rootScope.back = "education";
                $rootScope.next = "programselection";
                $scope.invalidFiles = [];
                $scope.profilePicUrl = '/ApplicantUser/UploadImage';

                //$rootScope.applicantService.getApplicant($rootScope);
                //$rootScope.applicantService.getApplicantDataFromLocal($rootScope);
                if(parseInt($rootScope.applicant_data.sectionno) < 4) {
                    $rootScope.applicant_data.sectionno = "4";
                }
                $scope.$watch($rootScope.applicantService, function (n, o) {
                    try {
                        
                        if (!$rootScope.nullOrEmpty($rootScope.applicant_data.alevel)) {
                            $rootScope.applicantService.alevel = JSON.parse($rootScope.applicant_data.alevel);
                            $scope.examstype = $rootScope.applicantService.alevel.exams;
                        }
                        if (!$rootScope.nullOrEmpty($rootScope.applicant_data.wassce)) {
                            $rootScope.applicantService.wassce = JSON.parse($rootScope.applicant_data.wassce);
                            $scope.examstype = $rootScope.applicantService.wassce.exams;

                        }
                        if (!$rootScope.nullOrEmpty($rootScope.applicant_data.olevel)) {
                            $rootScope.applicantService.olevel = JSON.parse($rootScope.applicant_data.olevel);
                            $scope.examstype = $rootScope.applicantService.olevel.exams;

                        }
                        if (!$rootScope.nullOrEmpty($rootScope.applicant_data.degree)) {
                            $rootScope.applicantService.degree = JSON.parse($rootScope.applicant_data.degree);
                            $scope.examstype = $rootScope.applicantService.degree.exams;

                        }
                        if (!$rootScope.nullOrEmpty($rootScope.applicant_data.transfer)) {
                            $rootScope.applicantService.transfer = JSON.parse($rootScope.applicant_data.transfer);
                            $scope.examstype = $rootScope.applicantService.transfer.exams;

                        }
                    } catch (e) {
                        $scope.showDangerAlert("Error occured loading local storage");

                    }

                    // try {
                    //     var tem = sessionStorage.getItem("alevel");
                    //     if (!$rootScope.nullOrEmpty(tem)) {
                    //         $rootScope.applicantService.alevel = JSON.parse(sessionStorage.getItem("alevel"));
                    //         $scope.examstype = $rootScope.applicantService.alevel.exams;
                    //     }
                    //     tem = sessionStorage.getItem("wassce");
                    //     if (!$rootScope.nullOrEmpty(tem)) {
                    //         $rootScope.applicantService.wassce = JSON.parse(sessionStorage.getItem("wassce"));
                    //         $scope.examstype = $rootScope.applicantService.wassce.exams;

                    //     }
                    //     tem = sessionStorage.getItem("olevel");
                    //     if (!$rootScope.nullOrEmpty(tem)) {
                    //         $rootScope.applicantService.olevel = JSON.parse(sessionStorage.getItem("olevel"));
                    //         $scope.examstype = $rootScope.applicantService.olevel.exams;

                    //     }
                    //     tem = sessionStorage.getItem("degree");
                    //     if (!$rootScope.nullOrEmpty(tem)) {
                    //         $rootScope.applicantService.degree = JSON.parse(sessionStorage.getItem("degree"));
                    //         $scope.examstype = $rootScope.applicantService.degree.exams;

                    //     }
                    //     tem = sessionStorage.getItem("transfer");
                    //     if (!$rootScope.nullOrEmpty(tem)) {
                    //         $rootScope.applicantService.transfer = JSON.parse(sessionStorage.getItem("transfer"));
                    //         $scope.examstype = $rootScope.applicantService.transfer.exams;

                    //     }
                    // } catch (e) {
                    //     $scope.showDangerAlert("Error occured loading local storage");

                    // }


                    //console.log($rootScope.applicantService.transfer);

                    $scope.applicantService = $rootScope.applicantService;
                    console.log($scope.applicantService);
                    $scope.alevel = $scope.applicantService.alevel;
                    $scope.wassce = $scope.applicantService.wassce;

                    $scope.olevel = $scope.applicantService.olevel;
                    $scope.transfer = $scope.applicantService.transfer;
                    $scope.degree = $scope.applicantService.degree;

                    //Switch between different exams form
                    if ($rootScope.nullOrEmpty($scope.examstype)) {
                        $scope.examstype = $rootScope.examstype;
                    }
                    //alert($scope.alevel.name);

                    //$rootScope.switchAcademicView( $scope.examstype);

                });

                $scope.$watch("examstype", function (newV, oldV) {

                    $scope.switchAcademicView(newV);
                    //$scope.examstype = newV;
                    //$rootScope.examstype = newV;
                    $rootScope.applicantService.alevel.exams = newV;
                    $rootScope.applicantService.wassce.exams = newV;
                    $rootScope.applicantService.degree.exams = newV;
                    $rootScope.applicantService.olevel.exams = newV;
                    $rootScope.applicantService.transfer.exams = newV;

                    $rootScope.applicant_data.alevel =JSON.stringify($rootScope.applicantService.alevel);
                    $rootScope.applicant_data.alevel.wassce = JSON.stringify($rootScope.applicantService.wassce);
                    $rootScope.applicant_data.alevel.olevel = JSON.stringify($rootScope.applicantService.olevel);
                    $rootScope.applicant_data.alevel.degree= JSON.stringify($rootScope.applicantService.degree);
                    $rootScope.applicant_data.alevel.transfer=  JSON.stringify($rootScope.applicantService.transfer);
                    
                    // update the session storage data
                    sessionStorage.setItem($scope.applicant_sessionId, JSON.stringify($rootScope.applicant_data));


                    // sessionStorage.setItem('alevel', JSON.stringify($rootScope.applicantService.alevel));
                    // sessionStorage.setItem('wassce', JSON.stringify($rootScope.applicantService.wassce));
                    // sessionStorage.setItem('olevel', JSON.stringify($rootScope.applicantService.olevel));
                    // sessionStorage.setItem('degree', JSON.stringify($rootScope.applicantService.degree));
                    // sessionStorage.setItem('transfer', JSON.stringify($rootScope.applicantService.transfer));
                });

                $scope.$watch('files', function (files) {
                    // alert("hello");
                    //$scope.formUpload = false;
                    if (files != null) {
                        // make files array for not multiple to be able to be used in ng-repeat in the ui
                        if (!angular.isArray(files)) {
                            $timeout(function () {
                                $scope.files = files = [files];
                            });
                            return;
                        }

                    }
                });

                $scope.submitted = true;

                function sendMatureData() {

                    //format date
                    $scope.applicantService.saveupdateresult($scope.degree, $rootScope);
                    $location.path($rootScope.next);


                }

                function sendTransferData() {
                    console.log($scope.transfer);

                    //format date
                    $scope.applicantService.saveupdatetransfer($scope.transfer, $rootScope);
                    $location.path($rootScope.next);


                }

                function sendOlevelData() {

                    //format date
                    $scope.applicantService.saveupdateresult($scope.olevel, $rootScope);
                    $location.path($rootScope.next);

                }

                function sendAlevelData() {

                    //format date
                    $scope.applicantService.saveupdateresult($scope.alevel, $rootScope);
                    $location.path($rootScope.next);

                }
                function sendWassceData() {

                    //format date
                    $scope.applicantService.saveupdateresult($scope.wassce, $rootScope);
                    $location.path($rootScope.next);
                }
                
                $scope.backclick = function () {
                    $location.path($rootScope.back);  
                }

                $scope.submitted = true;
                //overwrite next button click
                $scope.nextclick = function (event, isValid) {
                    //console.log($scope.wassce);
                    //console.log($scope.wassce)
                    //alert($scope.examstype);
                    if (isValid) {
                        if ($scope.examstype === "") {
                            $rootScope.showDangerAlert("Please select exams type");
                            return;
                        }
                        switch ($location.path()) {
                            case "/alevel":
                                $scope.alevel.core1.name = "General Paper";
                                $scope.alevel.exams = $scope.examstype;
                                if ($rootScope.nullOrEmpty($scope.files)) {
                                    $scope.showDangerAlert("Please scan and upload your A-Level results slip");
                                    return;
                                } else {
                                    //change the name to applicant id and mark as profile
                                    var url = $scope.profilePicUrl + '?id=' + $rootScope.applicantService.applicantId + "_transcript";

                                    //upload image and if successful, send form data 
                                    //console.log($scope.files[0]);
                                    $scope.uploadPic($scope.files, url, sendAlevelData());
                                }
                                break;
                            case "/olevel":
                                $scope.olevel.exams = $scope.examstype;
                                //$scope.olevel.core1.name = "English Language";
                                if ($rootScope.nullOrEmpty($scope.files)) {
                                    $scope.showDangerAlert("Please scan and upload your O-Level results slip");
                                    return;
                                } else {
                                    //change the name to applicant id and mark as profile
                                    var url = $scope.profilePicUrl + '?id=' + $rootScope.applicantService.applicantId + "_transcript";

                                    //upload image and if successful, send form data 
                                    //console.log($scope.files[0]);
                                    $scope.uploadPic($scope.files, url, sendOlevelData());
                                }

                                break;
                            case "/wassce":
                                //alert($location.path());
                                $scope.wassce.exams = $scope.examstype;
                                $scope.wassce.core1.name = "English Language";
                                $scope.wassce.core2.name = "Mathematics(core)";
                                $scope.wassce.core3.name = "Integrated Science";
                                $scope.wassce.core4.name = "Social Studies";

                                //$scope.olevel.core1.name = "English Language";
                                if ($rootScope.nullOrEmpty($scope.files)) {
                                    $scope.showDangerAlert("Please scan and upload your WASSCE / SSSCE results slip");
                                    return;
                                } else {
                                    //change the name to applicant id and mark as profile
                                    var url = $scope.profilePicUrl + '?id=' + $rootScope.applicantService.applicantId + "_transcript";

                                    //upload image and if successful, send form data 
                                    //console.log($scope.files[0]);
                                    $scope.uploadPic($scope.files, url, sendWassceData());
                                }

                                break;
                            case "/maturediploma":
                                $scope.degree.exams = $scope.examstype;
                                if ($rootScope.nullOrEmpty($scope.files)) {
                                    $scope.showDangerAlert("Please scan and upload your results slip or certificate");
                                    return;
                                } else {
                                    //change the name to applicant id and mark as profile
                                    var url = $scope.profilePicUrl + '?id=' + $rootScope.applicantService.applicantId + "_transcript";

                                    //upload image and if successful, send form data 
                                    //console.log($scope.files[0]);
                                    $scope.uploadPic($scope.files, url, sendMatureData());
                                }

                                break;
                            case "/transfer":
                                $scope.transfer.exams = $scope.examstype;
                                if ($rootScope.nullOrEmpty($scope.files)) {
                                    $scope.showDangerAlert("Please scan and upload your Transcript");
                                    return;
                                } else {
                                    //change the name to applicant id and mark as profile
                                    var url = $scope.profilePicUrl + '?id=' + $rootScope.applicantService.applicantId + "_transcript";

                                    //upload image and if successful, send form data 
                                    //console.log($scope.files[0]);
                                    $scope.uploadPic($scope.files, url, sendTransferData());
                                }

                                break;
                            default:
                                //Switch to wassce
                                $scope.showDangerAlert("Invalid exams type");
                                break;
                        }//end of switch 

                    } else {
                        // alert("Pleassssssss")
                        $scope.showDangerAlert("Please complete the red fields,\n\
                        <br>Click on all the fields and if any marks red, fill it<br>\n\
                        Check if examination type is selected");
                    }
                };

                //console.log($scope.applicantService.wassce);

                $scope.selectMenuItem();
                //thick finished items;
                $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);
                //Restore menu
                $rootScope.showWelcomeForApplicant(false);
                $rootScope.hideSideBar(null);
                $scope.$watch($rootScope.applicantService.sectionno, function (newV, oldV) {
                    $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno.sectionno);

                });

                // alert($scope.examstype);

            }]);