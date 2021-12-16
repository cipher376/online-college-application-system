anucapp.controller("AffirmationController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout', 
            function ($scope, $rootScope, $window, $location, $timeout) {
                $rootScope.back = "declaration";
                $rootScope.next = "completion";
                
                //$rootScope.applicantService.getApplicantDataFromLocal($rootScope);
                //$rootScope.applicantService.getApplicant($rootScope);
if(parseInt($rootScope.applicant_data.sectionno) < 8) {
                    $rootScope.applicant_data.sectionno = "8";
                }
                $scope.applicantService = $rootScope.applicantService;
                //console.log($scope.applicantService.affirmData);
                try {
                    //Get selected applicant from storage
                    if (!$rootScope.nullOrEmpty($rootScope.applicant_data.affirmData)) {

                    }

                } catch (e) {
                     $scope.showErroAlert("Error occured loading data from the server");
                }
                
                
                $scope.backclick = function () {
                    $location.path($rootScope.back);  
                }
                $scope.submitted = true;

                //overwrite next button click
                $scope.nextclick = function (event, isValid) {
                    //alert(isValid);
                    if (isValid) {
                        //format date
                        $scope.applicantService.sign($rootScope);
                        $location.path($rootScope.next);
                    } else {
                        $scope.showDangerAlert("Please complete the red fields");
                    }
                }

                $scope.selectMenuItem();
                  //Restore menu
                $rootScope.showWelcomeForApplicant(false);
                $rootScope.hideSideBar(null);
                $scope.$watch($rootScope.applicantService.sectionno, function (newV, oldV) {
                    
                    $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);

                });
                 //thick finished items;
                 try{
                $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);
                 }catch(e){}
                
            }]);