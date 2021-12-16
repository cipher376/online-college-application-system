anucapp.controller("AdminController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout','AdminService',
            function ($scope, $rootScope, $window, $location, $timeout,AdminService) {

                //Show the panels for the 
                //Admin
                sp = $scope;
                sp.adminService = AdminService;
                
                //Preload data from server
                sp.adminService.loadData(sp);
                
                //Member functons
                
                
                sp.addUserToGroup = function(){
                   sp.adminService.addUserToGroup(sp);
                }
                sp.deleteUserFromGroup = function(){
                    sp.adminService.deleteUserFromGroup(sp)
                }
                sp.createGroup = function(){
                    sp.adminService.createGroup(sp);
                }
                sp.deleteGroup = function(){
                    sp.adminService.deleteGroup(sp);
                }
                /*****************************UI***************************************/
                /**********************************************************************/

                //Hide other sidebars

              //  $rootScope.hideSideBar("registrar");
                
              $rootScope.showWelcomeForApplicant(true);


                /***************************************************************************/
            }]);