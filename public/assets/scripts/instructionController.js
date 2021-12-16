anucapp.controller("InstructionController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout',
            function ($scope, $rootScope, $window, $location, $timeout) {
                $rootScope.back = "welcome";
                $rootScope.next = "personalinfo";
                $scope = $rootScope;
                
                //$rootScope.applicantService.getApplicant($rootScope);
                //$rootScope.applicantService.getApplicantDataFromLocal($rootScope);
                 $rootScope.getUser();

                //Get applicant information or create new information
                
                console.log($rootScope.applicant_data)

                if ($rootScope.nullOrEmpty($rootScope.applicant_data.applicantId)) {
                    $rootScope.applicantService.getApplicant($rootScope).then(function(){
                        $rootScope.applicantService.getApplicantDataFromLocal($rootScope);
                        
                        if (!$rootScope.nullOrEmpty($rootScope.applicant_data.applicantId)) {
                    $rootScope.applicantService.applicantId = $rootScope.applicant_data.applicantId;
                }
                alert($rootScope.applicantService.applicantId);

                    });
                }

                if ($rootScope.triggerReload) {
                    $rootScope.triggerReload = false;
                    window.location.reload(true);
                }
                try {
                    $scope.selectMenuItem();

                    //thick finished items;
                    $rootScope.tickFinishedItem($scope.applicant_data.sectionno);
                } catch (e) {
                }

                $scope.backclick = function () {
                   // if($window.location.href.indexOf(""))
                    $window.location.href = "/Main/welcome";
                }
                
                $scope.nextclick = function () {
                    $location.path($rootScope.next);
                }

                $rootScope.showWelcomeForApplicant(false);
                $rootScope.hideSideBar(null);


            }]);