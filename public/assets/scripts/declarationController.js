anucapp.controller("DeclarationController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout', 
            function ($scope, $rootScope, $window, $location, $timeout) {

                $rootScope.back = "miscellaneous";
                $rootScope.next = "affirmation";

                //$rootScope.applicantService.getApplicant($rootScope);
                //$rootScope.applicantService.getApplicantDataFromLocal($rootScope);
if(parseInt($rootScope.applicant_data.sectionno) < 7) {
                    $rootScope.applicant_data.sectionno = "7";
                }
                $scope.applicantService = $rootScope.applicantService;
                //console.log($scope.applicantService.declaration);

                try {
                    
                    if (!$rootScope.nullOrEmpty($scope.applicant_data.declaration)) {
                        // alert("Hello");
                        $rootScope.applicantService.declaration = JSON.parse($scope.applicant_data.declaration);
                    }
                } catch (e) {

                }


                //overwrite next button click
               
                $scope.backclick = function () {
                    $location.path($rootScope.back);  
                }
                //console.log($scope.applicantService.familyInformation);
                $scope.submitted = true;
                $scope.nextclick = function (event, isValid) {
                    //alert(isValid);
                    if (isValid) {
                        $scope.applicantService.saveupdatedeclarations($rootScope);

                        $location.path($rootScope.next);
                    } else {
                        $scope.showDangerAlert("Please complete the red fields");
                    }

                }
                try {
                    $scope.selectMenuItem();
                    //Restore menu
                    $rootScope.showWelcomeForApplicant(false);
                    $rootScope.hideSideBar(null);
                    $rootScope.tickFinishedItem($scope.applicant_data.sectionno);
                    $scope.$watch($scope.applicant_data.sectionno, function (newV, oldV) {
                        
                        $rootScope.tickFinishedItem($scope.applicant_data.sectionno);


                    });
//                    $scope.$watch($rootScope.applicantService, function (newV, oldV) {
//                        alert($rootScope.applicantService.personalInformation.title);
//                        $scope.applicantService.declaration.applicanttitle = $scope.applicantService.personalInformation.title;
//                        $scope.applicantService.declaration.applicantfirstname = $scope.applicantService.personalInformation.firstname;
//                        $scope.applicantService.declaration.applicantmiddlename = $scope.applicantService.personalInformation.othernames;
//                        $scope.applicantService.declaration.applicantlastname = $scope.applicantService.personalInformation.surname;
//
//
//                    });
                    
                } catch (e) {
                }

            }]);