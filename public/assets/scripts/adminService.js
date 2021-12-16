/*
 * Author: Alfred Ntiamoah
 Company: New Age Developers Group
 Email: antiamoah890@gmail.com
 website: natlink.net
 License: Proprietary license
 All Right Reserved (2017)
 
 **/


function AdminService($resource, $location, $window) {
    var _resource = $resource('/Admin/GetData/:id', {id: "@id"},
            {
                loadData: {method: "POST", url: '/Admin/GetAdminData', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                addUserToGroup: {method: "POST", url: '/Admin/AddMemberToGroupByName', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                deleteUserFromGroup: {method: "POST", url: '/Admin/RemoveMemberFromGroup', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                createGroup: {method: "POST", url: '/Admin/CreateGroup', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                deleteGroup: {method: "POST", url: '/Admin/DeleteGroupByName', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                givePermission: {method: "POST", url: '/Admin/GivePermission', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                deletePermission: {method: "POST", url: '/Admin/DeletePermission', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                revokePermission: {method: "POST", url: '/Admin/RevokePermission', headers: {'Content-Type': 'application/x-www-form-urlencoded'}}
            });

    var factory = {};
    //properties 
    //hold single user, or currently selected user
    factory.data = {
        start: "",
        groups: [],
        permissions: [],
        users: [],
        end: ''
    };

    factory.group = {
        id:'',
        name: '',
        def: ''
    }
    
    factory.permission = {
        id:'',
        name: '',
        def: ''
    }
    
    factory.user = {
        name: '',
        id: '',
        password:'',
        email:'',
        remember:''
    }

    //Operations
    factory.loadData = function (scope) {
        try {
            _resource.loadData()
                    .$promise.then(function (res) {
                        console.log(res);
                        if (res.Succeeded === true) {
                            scope.adminService.data = res.data;
                            scope.$digest();
                            scope.showSuccessAlert("Data loaded successfully");
                        } else {
                            scope.showDangerAlert("Loading data from server failed.<br>Please refresh!");
                        }
                    }, function () {
                        scope.showDangerAlert("No connection to server");

                    });
        } catch (e) {
            scope.showDangerAlert("Error occured");
        }
    };

    factory.addUserToGroup = function (scope) {
        console.log(factory.user);
        _resource.addUserToGroup($.param(
                {
                    group: factory.group,
                    user: factory.user
                }
        )).$promise.then(function (res) {
            if (res.Succeeded === true) {
                scope.showSuccessAlert("User with id" +factory.user.id + "has been added to " + factory.group.name + " group");
                //Reload data
                factory.loadData(scope);
            } else {
                scope.showDangerAlert("Error occured adding user to group" +
                        "<br>User might already be in that group.<br>View user information to confirm");
            }
        }, function () {
            scope.showDangerAlert("Check your internet connection");
        });
    };
    factory.deleteUserFromGroup = function (scope) {
        //console.log(factory.user);
        console.log($.param({user:factory.user, group: factory.group}));
        _resource.deleteUserFromGroup($.param({user:factory.user, group: factory.group}))
                .$promise.then(function (res) {
                    console.log(res);
                    if (res.Succeeded === true) {
                        scope.showSuccessAlert(factory.user.email + " is deleted from "+ factory.group.name);
                        //Reload data
                        factory.loadData(scope);
                    } else {
                        scope.showDangerAlert("Unable to delete "+factory.user.email+" from " + factory.group.name +" group");
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };

    factory.createGroup = function (scope) {
        console.log(factory.group);
        _resource.createGroup($.param({group: factory.group}))
                .$promise.then(function (res) {
                    console.log(res);
                    if (res.Succeeded === true) {
                        scope.showSuccessAlert( factory.group.name + " created successfuly");
                        //Reload data
                        factory.loadData(scope);
                    } else {
                        scope.showDangerAlert(factory.group.name + " group creation failed");
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };
    factory.deleteGroup = function (scope) {
        _resource.deleteGroup($.param({group: factory.group}))
                .$promise.then(function (res) {
                    console.log(res);
                    if (res.Succeeded === true) {
                        scope.showSuccessAlert(factory.group.name + "is deleted");
                        //Reload data
                        factory.loadData(scope);
                    } else {
                        scope.showDangerAlert("Unable to delete group " + factory.group.name);
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };
    
    factory.givePermission = function (scope) {
        //TODO:
    };
    
    factory.revokePermission = function (scope) {
        //TODO:
    };
    
    
    return factory;

}
//
anucapp.factory("AdminService", ['$resource', '$location', '$window', AdminService]);