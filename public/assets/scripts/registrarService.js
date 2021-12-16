/*
 * Author: Alfred Ntiamoah
 Company: New Age Developers Group
 Email: antiamoah890@gmail.com
 website: natlink.net
 License: Proprietary license
 All Right Reserved (2017)
 
 **/


function RegistrarService($resource, $location, $window) {
    var _resource = $resource('/Admin/GetData/:id', {id: "@id"},
            {
                loadData: {method: "POST", url: '/ApplicantUser/GetAllApplicants', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                deleteApplicant: {method: "POST", url: '/ApplicantUser/DeleteApplicant', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                processApplicant: {method: "POST", url: '/ApplicantUser/ProcessApplicant', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                unprocessApplicant: {method: "POST", url: '/ApplicantUser/UnprocessApplicant', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                // deleteGroup: {method: "POST", url: '/Admin/DeleteGroupByName', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                // givePermission: {method: "POST", url: '/Admin/GivePermission', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                // deletePermission: {method: "POST", url: '/Admin/DeletePermission', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
                // revokePermission: {method: "POST", url: '/Admin/RevokePermission', headers: {'Content-Type': 'application/x-www-form-urlencoded'}}
            });

    var factory = {};
    //properties 
    //hold single user, or currently selected user
    factory.data = [];


    factory.applicant = {
        name: '',
        id: '',
        email: '',
        gender: '',
        nationality: ''

    }

    //Operations
    factory.loadData = function (scope) {
        try {
            _resource.loadData()
                    .$promise.then(function (res) {
                        console.log(res);
                        if (!scope.nullOrEmpty(res.data)) {
                            scope.registrarService.data = res.data;
                            sessionStorage.setItem('data', JSON.stringify(scope.registrarService.data));

                            scope.datatable.setData(res.data);
                            scope.sort()

                            scope.showSuccessAlert("Data loaded successfully");
                        } else {
                            scope.showDangerAlert("No applicants found");
                        }
                    }, function (failed) {
                        //console.log(failed);
                        scope.showDangerAlert("No connection to server");

                    });
        } catch (e) {
            scope.showDangerAlert("Error occured");
        }
    };


 factory.deleteApplicant = function (scope) {
        try {
            _resource.deleteApplicant($.param(scope.selectedApplicant))
                    .$promise.then(function (res) {
                        console.log(res);
                        if (res.Succeeded==true) {
                            scope.showSuccessAlert("Applicant with ID: "+scope.selectedApplicant.id +" is deleted form database");
                            window.location.reload(true);
                        } else {
                            scope.showDangerAlert("Error occured deleting applicant "+scope.selectedApplicant.id );
                        }
                    }, function (failed) {
                        //console.log(failed);
                        scope.showDangerAlert("No connection to server");
                    });
        } catch (e) {
            scope.showDangerAlert("Error occured");
        }
    };
    factory.processApplicant = function (scope) {
        try {
            _resource.processApplicant($.param(scope.selectedApplicant))
                    .$promise.then(function (res) {
                        console.log(res);
                        if (res.Succeeded==true) {
                            scope.showSuccessAlert("Applicant with ID: "+scope.selectedApplicant.id +" is marked as processed");
                            window.location.reload(true);
                        } else {
                            scope.showDangerAlert("Error occured processing applicant "+scope.selectedApplicant.id );
                        }
                    }, function (failed) {
                        //console.log(failed);
                        scope.showDangerAlert("No connection to server");
                    });
        } catch (e) {
            scope.showDangerAlert("Error occured");
        }
    };
factory.unprocessApplicant = function (scope) {
        try {
            _resource.unprocessApplicant($.param(scope.selectedApplicant))
                    .$promise.then(function (res) {
                        console.log(res);
                        if (res.Succeeded==true) {
                            scope.showSuccessAlert("Applicant with ID: "+scope.selectedApplicant.id +" is marked as unprocessed");
                            window.location.reload(true);
                        } else {
                            scope.showDangerAlert("Error occured processing applicant "+scope.selectedApplicant.id );
                        }
                    }, function (failed) {
                        //console.log(failed);
                        scope.showDangerAlert("No connection to server");
                    });
        } catch (e) {
            scope.showDangerAlert("Error occured");
        }
    };


    return factory;

}
//
anucapp.factory("RegistrarService", ['$resource', '$location', '$window', RegistrarService]);