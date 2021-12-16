anucapp.controller("EducationHistoryController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout', 'ApplicantService',
            function ($scope, $rootScope, $window, $location, $timeout, ApplicantService) {

                $rootScope.back = "familyinfo";
                $rootScope.next = "wassce";


                $scope.applicantService = $rootScope.applicantService;
                //console.log($scope.applicantService.educationInformation);
                //
                //$rootScope.applicantService.getApplicant($rootScope);
                //$rootScope.applicantService.getApplicantDataFromLocal($rootScope);
                if(parseInt($rootScope.applicant_data.sectionno) < 3) {
                    $rootScope.applicant_data.sectionno = "3";
                }

                if (!$rootScope.nullOrEmpty($rootScope.applicant_data.educationInformation)) {
                    $rootScope.applicantService.educationInformation = JSON.parse($rootScope.applicant_data.educationInformation);
                }
                
                $scope.backclick = function () {
                    $location.path($rootScope.back);  
                }

                //overwrite next button click
                $scope.nextclick = function (event, isValid) {
                    if (isValid) {
                        //format date
                        $scope.applicantService.saveupdateeducationinfo($rootScope);
                        $location.path($rootScope.next);
                    } else {
                        $scope.showDangerAlert("Please complete the red fields");
                    }

                }
                $scope.$watch($rootScope.applicant_data.sectionno, function (newV, oldV) {
                   
                    $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);

                });
                //   alert("hello");
                try {

                    $scope.selectMenuItem();
                    $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);

                    //Restore menu
                    $rootScope.showWelcomeForApplicant(false);
                    $rootScope.hideSideBar(null);

                } catch (e) {
                }

            }]);