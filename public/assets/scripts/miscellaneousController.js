anucapp.controller("MiscellaneousController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout', 
            function ($scope, $rootScope, $window, $location, $timeout) {

                $rootScope.back = "programselection";
                $rootScope.next = "declaration";

                // $rootScope.applicantService.getApplicant($rootScope);
                //$rootScope.applicantService.getApplicantDataFromLocal($rootScope);
                
                if(parseInt($rootScope.applicant_data.sectionno) < 6) {
                    $rootScope.applicant_data.sectionno = "6";
                }
                $scope.applicantService = $rootScope.applicantService;
                //console.log($scope.applicantService.miscellaneous);
                
                if (!$rootScope.nullOrEmpty($rootScope.applicant_data.miscellaneous)) {
                    $rootScope.applicantService.miscellaneous = JSON.parse($rootScope.applicant_data.miscellaneous);
                }

                //console.log($scope.applicantService.familyInformation);
                $scope.submitted = true;
                //overwrite next button click
                
                $scope.backclick = function () {
                    $location.path($rootScope.back);  
                }
                $scope.nextclick = function (event, isValid) {
                    //alert(isValid);
                    if (isValid) {
                        //format date
                        $scope.applicantService.saveupdatemiscellaneous($rootScope);

                        $location.path($rootScope.next);
                    } else {
                        $scope.showDangerAlert("Please complete the red fields");
                    }

                }
                try {
                    $scope.selectMenuItem();
                    $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno.split('"')[1]);
                } catch (e) {
                }
                //Restore menu
                $rootScope.showWelcomeForApplicant(false);
                $rootScope.hideSideBar(null);
                $scope.$watch($rootScope.applicant_data.sectionno, function (newV, oldV) {
                    
                    $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);

                });
            }]);