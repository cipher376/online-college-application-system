/*Author: Alfred Ntiamoah
 Company: New Age Developers Group
 Email: antiamoah890@gmail.com
 website: natlink.net
 License: Proprietary license
 All Right Reserved (2017)*/


function AccountService($resource, $location, $window) {
    var _resource = $resource('/Account/Login/:id', {id: "@id"},
            {
                register: {method: "POST", url: '/Auth/Register', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                delete: {method: "POST", url: '/Auth/Delete', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                get: {method: "GET", url: '/Auth/GetUser', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                query: {method: "GET", url: '/Auth/GetAll', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                forgotpassword: {method: "POST", url: '/Auth/ForgotPassword', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                resetpassword: {method: "POST", url: '/Auth/ResetPassword', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                changePassword: {method: "POST", url: '/Auth/ProcessPasswordChange', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                login: {method: "POST", url: '/Auth/Login', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                logout: {method: "POST", url: '/Auth/Logout', headers: {'Content-Type': 'application/x-www-form-urlencoded'}}
            });

    var factory = {};
    //properties 
    //hold single user, or currently selected user
    factory.user = {
        start: "",
        accounttype: "",
        firstname: "",
        lastname: "",
        middlename: "",
        email: "",
        password: "",
        confirmpassword: "",
        remember: false,
        code: "", //for password reset"
        userId: '',
        isAuthenticated: false,
        end: ''
    };

    //Check if username is email
    function emailValidation(username) {
        var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        return filter.test(username);
    }
    //Holds list of all users
    factory.list = [];

    //Operations
    factory.create = function (scope) {
        //console.log(factory.user);
        //console.log($.param(factory.user));
        try {
            _resource.register($.param(factory.user))
                    .$promise.then(function (res) {
                        console.log(res);
                        if (res.Succeeded === true) {
                            //alert("Inforamtion saved, proceed to login?");

                            //Take user to login page
                            $window.location.href = "/Auth/Login_Register";
                        } else {
                            scope.errorMsg = res.msg;
                            scope.loginAlertTitle = "Registration";
                            scope.spin(false);
                            scope.showLoginAlert();
                            setTimeout(function () {

                            }, 3000);
                        }
                    }, function () {
                        scope.showDangerAlert("No connection to server");

                    });
        } catch (e) {
            scope.showDangerAlert("Error occured");
        }
    };

    factory.login = function (scope) {
        console.log(factory.user);
        _resource.login($.param(factory.user))
                .$promise.then(function (res) {
                    if (res.Succeeded === true) {
                        //alert(res.msg);
                        //Saving user data on sessionStorage
                        var user = res;
                        
                        user.isAuthenticated = true;
                        user.userId = res.uid;
                        // sessionStorage.setItem('user', JSON.stringify(res));
                        // sessionStorage.setItem('uid', res.uid);
                        // sessionStorage.setItem('email', res.email);

                        // session id for the current user
                        scope.sessionId = document.cookie.split(" ")[1].split("=")[1];
                        sessionStorage.setItem(scope.sessionId, JSON.stringify(user))

                        sessionStorage.setItem('accounttype', JSON.stringify(res.accounttype[0]))
                        
                        if (scope.nullOrEmpty(res.accounttype) || res.accounttype[0]==="Default") { //applicant 
                            $window.location.href = "/Main/welcome";
                           // alert(res.accounttype);
                        }else{
                            //Go to admin page
                           $window.location.href = "/Main/#!/approot";
                           //alert(res.accounttype);
                        }
                    } else {
                        //alert(res.msg);
                        scope.errorMsg = "Please check your email and password";
                        scope.loginAlertTitle = "Login failed";
                        scope.spin(false);
                        scope.showLoginAlert();
                        //$window.location.href = "/Auth/Login_Register";

                    }
                }, function () {
                    scope.errorMsg = "Check your internet connection";
                    scope.loginAlertTitle = "Connection Failed";
                    scope.spin(false);
                    scope.showLoginAlert();
                    // $window.location.href = "/Auth/Login_Register";

                });
    };
    factory.logout = function (scope) {
        _resource.logout($.param({id: scope.uid}))
                .$promise.then(function (res) {

                    console.log(res);
                    if (res.Succeeded === true) {
                        //Remove all items stored in session
                        //sessionStorage.clear();
                        sessionStorage.removeItem(scope.sessionId)
                        $window.location.href = "/Auth/Login_Register";
                    } else {
                        scope.showDangerAlert("Logout failed");
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };
    // factory.forgotpassword = function () {
    //     _resource.forgotpassword({data: $.param(factory.user)})
    //             .$promise.then(function (res) {
    //                 console.log(res);
    //                 if (res.Succeeded === true) {
    //                     alert(res.msg);
    //                     $window.location.href = "/Account/ResetPassword";

    //                 } else {
    //                     alert(res.msg);
    //                     $window.location.href = "/Account/ForgotPasswordConfirmation";
    //                 }
    //             }, function () {
    //                 scope.showDangerAlert("No connection to server");
    //             });
    // };

    factory.resetpassword = function (scope) {
        _resource.resetpassword({data: $.param(factory.user)})
                .$promise.then(function (res) {
                    console.log(res);
                    if (res.Succeeded === true) {
                        //alert(res.msg);
                        $window.location.href = "/Auth/PasswordResetConfirmation";
                    } else {
                        //alert(res.msg);
                      $window.location.href = "/Auth/ResetPassword";
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };

factory.changePassword = function (scope) {
        _resource.changePassword({data: $.param(factory.user)})
                .$promise.then(function (res) {
                    console.log(res);
                    if (res.Succeeded === true) {
                        
                        $window.location.href = "/Auth/Login_Register";
                   
                    } else {
                        //alert(res.msg);
                      $window.location.href = "/Auth/ResetPassword";
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };

    return factory;

}
//
anucapp.factory("AccountService", ['$resource', '$location', '$window', AccountService]);
