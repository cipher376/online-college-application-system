/*
 Author: Alfred Ntiamoah
 Company: New Age Developers Group
 Email: antiamoah890@gmail.com
 website: natlink.net
 License: Proprietary license
 All Right Reserved (2017)
 */

anucapp.controller("PersonalInfoController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout', "$http", "Upload",
            function ($scope, $rootScope, $window, $location, $timeout, $http, Upload) {
                $rootScope.back = "instruction";
                $rootScope.next = "familyinfo";
                $scope.invalidFiles = [];
                $scope.profilePicUrl = '/ApplicantUser/UploadImage';

                //$rootScope.applicantService.getApplicantDataFromLocal($rootScope);

                if(parseInt($rootScope.applicant_data.sectionno) < 1) {
                    $rootScope.applicant_data.sectionno = "1";
                }

                //console.log(JSON.parse($rootScope.applicant_data.personalInformation));

                try {
                    if (!$rootScope.nullOrEmpty($rootScope.applicant_data.applicantId)) {
                        $rootScope.applicantService.applicantId = $rootScope.applicant_data.applicantId;
                    }

                    if (!$rootScope.nullOrEmpty($rootScope.applicant_data.personalInformation)) {
                        //alert("here");
                        //console.log(tem);
                        $rootScope.applicantService.personalInformation = JSON.parse($rootScope.applicant_data.personalInformation);
                    }
                } catch (e) {
                    $scope.showDangerAlert("Error occured loading local storage");
                }

                $scope.applicantService = $rootScope.applicantService;
                //   console.log($scope.applicantService.applicantId);

                $scope.submitted = true;

                function sendData(isValid) {
                    if (isValid) {
                        //format date
                        $scope.applicantService.saveupdatepersonalinfo($rootScope);
                        $location.path($rootScope.next);
                    } else {
                        $scope.showDangerAlert("Please complete the red fields");

                    }
                }

                $scope.backclick = function () {
                    $location.path($rootScope.back);  
                }
                //overwrite $scope.submitted=false;e next button click
                $scope.nextclick = function (event, isValid) {

                    if ($rootScope.nullOrEmpty($scope.files)) {
                        $scope.showDangerAlert("Please Upload passport picture");
                        return;
                    } else {
                        //change the name to applicant id and mark as profile
                        //$scope.files[0].name = $rootScope.applicantService.applicantId + "_profile";
                        var url = $scope.profilePicUrl + '?id=' + $rootScope.applicantService.applicantId + "_profile";
                        //upload image and if successful, send form data 
                        //console.log($scope.files[0]);
                        $scope.uploadPic($scope.files, url, sendData(isValid));

                    }
                };



                /****************************Upload UI***********************/
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


//************************************************************************
//                        UI CONTROLS
//************************************************************************
//
                $scope.selectMenuItem();

                //thick finished items;
                $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);

                //Restore menu
                $rootScope.showWelcomeForApplicant(false);
                $rootScope.hideSideBar(null);
                $scope.$watch($rootScope.applicant_data.sectionno, function (newV, oldV) {

                    $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);

                });


            }]);