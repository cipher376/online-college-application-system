anucapp.controller("CompletionController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout',
            function ($scope, $rootScope, $window, $location, $timeout) {
                $rootScope.back = "affirmation";

                //$rootScope.applicantService.getApplicant($rootScope);
                //$rootScope.applicantService.getApplicantDataFromLocal($rootScope);
               if(parseInt($rootScope.applicant_data.sectionno) < 8) {
                    $rootScope.applicant_data.sectionno = "8";
                }
                $scope.viewApplication = function () {
                    //alert("hello");
                    //alert(data.name);
                     var host='';
                   host =  $window.location.href.toLowerCase().split('main')[0];
                
                    $rootScope.pdfHtmlfile = host+'/Main/application/' +  $rootScope.applicant_data.applicantId;
                    $rootScope.showIframe($rootScope.applicant_data.applicantId);

                };
                
                $scope.backclick = function () {
                    $location.path($rootScope.back);  
                }
                
                $scope.printDeclaration = function () {
                    //alert("hey");
                    var host='';
                   host =  $window.location.href.toLowerCase().split('main')[0];
                    $rootScope.pdfHtmlfile = host+'/Main/createdeclarationpdf/' +  $rootScope.applicant_data.applicantId;
                    $rootScope.showIframe($rootScope.applicant_data.applicantId);
                };
                //Restore menu
                $rootScope.showWelcomeForApplicant(false);
                $rootScope.hideSideBar(null);
               
             
                $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);
                $scope.$watch($rootScope.applicant_data.sectionno, function (newV, oldV) {
                    $rootScope.tickFinishedItem($rootScope.applicant_data.sectionno);

                });
            }]);