anucapp.controller("ApplicantWelcomeController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout',
            function ($scope, $rootScope, $window, $location, $timeout) {
                $rootScope.back = "welcome";
                $rootScope.next = "instruction";
                $scope = $rootScope;
              
                $rootScope.showWelcomeForApplicant(true);
                  $(".logo-text").fadeIn();


            }]);