anucapp.controller("FamilyInfoController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout',  'ApplicantService',
            function ($scope, $rootScope, $window, $location, $timeout, ApplicantService) {

                $rootScope.back = "personalinfo";
                $rootScope.next = "education";

                //$rootScope.applicantService.getApplicantDataFromLocal($rootScope);
                if(parseInt($rootScope.applicant_data.sectionno) < 2) {
                    $rootScope.applicant_data.sectionno = "2";
                }

                //$scope.applicantService = $rootScope.applicantService;
                try {
                    if (!$rootScope.nullOrEmpty($rootScope.applicant_data.familyInformation)) {
                        $rootScope.applicantService.familyInformation = JSON.parse($rootScope.applicant_data.familyInformation);
                    }
                } catch (e) {
                }
                
                
                $scope.backclick = function () {
                    $location.path($rootScope.back);  
                }

                //console.log($scope.applicantService.familyInformation);
                $scope.submitted = true;
                //overwrite next button click
                $scope.nextclick = function (event, isValid) {
                    //alert(isValid);
                    console.log($scope.applicantService.familyInformation);
                    if (isValid) {
                        //format date
                        $scope.applicantService.saveupdatefamilyinfo($rootScope);
                        $location.path($rootScope.next);
                    } else {
                        $scope.showDangerAlert("Please complete the red fields");
                    }

                }
                try {
                    $scope.selectMenuItem();
                } catch (e) {
                }

                //thick finished items;
                $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);
                //Restore menu
                $rootScope.showWelcomeForApplicant(false);
                $rootScope.hideSideBar(null);
                $scope.$watch($rootScope.applicant_data.sectionno, function (newV, oldV) {
                    
                    $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);

                });



            }]);