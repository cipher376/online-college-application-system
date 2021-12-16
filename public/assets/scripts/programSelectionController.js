anucapp.controller("ProgramSelectionController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout', 
            function ($scope, $rootScope, $window, $location, $timeout) {

                $rootScope.back = "wassce";
                $rootScope.next = "miscellaneous";
                $scope.applicantService = $rootScope.applicantService;
                //$rootScope.applicantService.getApplicant($rootScope);
                //$rootScope.applicantService.getApplicantDataFromLocal($rootScope);

                if(parseInt($rootScope.applicant_data.sectionno) < 5) {
                    $rootScope.applicant_data.sectionno = "5";
                }

                if (!$rootScope.nullOrEmpty($rootScope.applicant_data.programSelection)) {
                    $rootScope.applicantService.programSelection = JSON.parse($rootScope.applicant_data.programSelection);
                }
                
                
                $scope.backclick = function () {
                    $location.path($rootScope.back);  
                }

                console.log($scope.applicantService.programSelection);
                //console.log($scope.applicantService.familyInformation);
                $scope.submitted = true;
                $scope.nextclick = function (event, isValid) {
                    if (isValid) {
                        $scope.applicantService.saveupdateprogramselection($rootScope);
                        $location.path($rootScope.next);
                    } else {
                        $scope.showDangerAlert("Please complete the red fields");

                    }

                }
                try {
                    $scope.selectMenuItem();
                    $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);
                } catch (e) {
                }
                $scope.$watch($rootScope.applicant_data.sectionno, function (newV, oldV) {
                  
                    $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);

                });

                //Restore menu
                $rootScope.showWelcomeForApplicant(false);
                $rootScope.hideSideBar(null);
                
            }]);