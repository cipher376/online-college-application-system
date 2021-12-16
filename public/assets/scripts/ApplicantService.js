/*Author: Alfred Ntiamoah
 Company: New Age Developers Group
 Email: antiamoah890@gmail.com
 website: natlink.net
 License: Proprietary license
 All Right Reserved (2017)*/

 function ApplicantService($resource, $location, $window) {
    var _resource = $resource('/ApplicantUser/GetApplicant/:id', {id: '@id'},
    {
        getApplicant: {method: "POST", url: '/ApplicantUser/GetApplicant', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
        savePersonInformation: {method: "POST", url: '/ApplicantUser/savepersonalinfo', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
        saveFamilyInfo: {method: "POST", url: '/ApplicantUser/savefamilyinfo', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
        saveEducationInfo: {method: "POST", url: '/ApplicantUser/saveeducationinfo', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
        saveProgram: {method: "POST", url: '/ApplicantUser/saveprograms', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
        saveMiscellaneous: {method: "POST", url: '/ApplicantUser/savemiscellaneous', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
        saveDeclarations: {method: "POST", url: '/ApplicantUser/savedeclaration', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
        saveAffirmation: {method: "POST", url: '/ApplicantUser/sign', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
        saveResults: {method: "POST", url: '/ApplicantUser/saveresults', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
        saveTransfer: {method: "POST", url: '/ApplicantUser/savetransfer', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
        uploadProfilePic: {method: "POST", url: '/ApplicantUser/savetransfer', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
        uploadTranscript: {method: "POST", url: '/ApplicantUser/savetransfer', headers: {'Content-Type': 'application/x-www-form-urlencoded'}},
    });

    var getUser  = function () {
        var user = {};
        var  sessionId = "";
        try{
            sessionId =  document.cookie.split(" ")[1].split("=")[1];
            if(sessionStorage.getItem(sessionId)) {
                user =  JSON.parse(sessionStorage.getItem(sessionId));
            }
        }catch(e)
        {
            console.log("Main.js: Cookie not set");
        }
        return user;
    }

    var user = getUser();
    try {
        var id = user.uid; //user id
        var applicantid = scope.applicant_data.applicantId;
    } catch (e) {

    }
    var factory = {};
    factory.result = {};
    factory.applicantId = "";
    factory.sectionno = "";//this holds the current sessiont the applicant is on
    factory.personalInformation = {
        start: "", //just for padding
        title: "",
        othertitles: "",
        surname: "",
        firstname: "",
        othernames: "",
        dateofbirth: "",
        placeofbirth: "",
        countryofbirth: "",
        nationality: "",
        passportno: "",
        languages: "",
        bloodgroup: "",
        gender: "",
        religion: "",
        otherreligion: "",
        maritalstatus: "",
        homeaddressl1: "",
        homeaddressl2: " ",
        mailingaddressl1: "",
        mailingaddressl2: "",
        street: "",
        city: "",
        state: "",
        country: "",
        hometelephone: "",
        mobiletelephone: "",
        officetelephone: "",
        email: "",
        end: ''//jsut for padding
    };
    factory.familyInformation = {
        start: "", //just for padding
        id: id, //user id
        applicantid: applicantid,
        ffirstname: "",
        fmiddlename: "",
        flastname: "",
        fprofession: "",
        fhighestqualification: "",
        faddressl1: "",
        faddressl2: "",
        ftelephone: "",
        femail: "",
        mfirstname: "",
        mmiddlename: "",
        mlastname: "",
        mprofession: "",
        mhighestqualification: "",
        maddressl1: "",
        maddressl2: "",
        mtelephone: "",
        memail: "",
        gfirstname: "",
        gmiddlename: "",
        glastname: "",
        gprofession: " ",
        ghighestqualification: "",
        gaddressl1: " ",
        gaddressl2: "",
        gtelephone: "",
        emergencyphone: "",
        gemail: "",
        gmaritalstatus: "",
        end: ""//just for padding
    }
    factory.educationInformation = {
        start: '', //padding
        id: id,
        applicantid: applicantid,
        recentschool: "",
        recentschoolyear: "",
        firstotherschoolname: "",
        firstotherschoollocation: "",
        firstotherschoolfrom: "",
        firstotherschoolto: "",
        secondotherschoolname: "",
        secondotherschoollocation: "",
        secondotherschoolfrom: "",
        secondotherschoolto: "",
        thirdotherschoolname: "",
        thirdotherschoollocation: "",
        thirdotherschoolfrom: "",
        thirdotherschoolto: "",
        end: ''//padding
    }
    factory.programSelection = {
        start: '',
        id: id,
        applicantid: applicantid,
        firstchoice: "",
        secondchoice: "",
        thirdchoice: "",
        preU: '',
        enrollmenttype: '',
        entrylevel: '',
        end: ''
    };
    factory.miscellaneous = {
        start: "",
        id: id,
        applicantid: applicantid,
        needaccomodation: true,
        aboutnews: "",
        abouttele: "",
        aboutstudent: "",
        aboutfriend: "",
        aboutradio: "",
        aboutagent: "",
        aboutalumnus: "",
        aboutother: "",
        aboutspecific: "",
        satreading: "",
        satmaths: "",
        satwriting: "",
        satdate: "",
        prize1: "",
        prize2: "",
        anydisability: "",
        whatdisability: "",
        stop: ""
    };
    factory.declaration = {
        id: id,
        applicantid: applicantid,
        applicanttitle: '',
        applicantfirstname: '',
        applicantmiddlename: '',
        applicantlastname: '',
        endotitle: '',
        endofirstname: '',
        endolastname: '',
        endomiddlename: '',
        endoaddress1: '',
        endostreet: '',
        endostate: '',
        endocity: '',
        endocountry: '',
        endophone: '',
        endoemail: ''

    }
    factory.affirmData = {
        id: id,
        applicantid: applicantid,
        sign: "",
        dateaffirmed: ""
    };


    //Academic background data factory
    factory.alevel = {
        id: id,
        applicantid: "",
        centerno: "",
        index: "",
        exams: "",
        core1: {
            name: "",
            date: "",
            grade: "",
        },
        elect1: {
            name: "",
            date: "",
            grade: ""
        },
        elect2: {
            name: "e",
            date: "",
            grade: ""
        },
        elect3: {
            name: "",
            date: "",
            grade: ""
        },
        //resit papers 
        resit1: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit2: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit3: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        }
    };
    factory.wassce = {
        id: id,
        applicantid: applicantid,
        applicantid: "",
        centerno: "",
        index: "",
        exams: "",
        core1: {
            name: "English Language",
            date: "",
            grade: ""
        },
        core2: {
            name: "Mathematics (Core)",
            date: "",
            grade: ""
        },
        core3: {
            name: "Integrated Science",
            date: "",
            grade: ""
        },
        core4: {
            name: "Social Studies",
            date: "",
            grade: ""
        },
        elect1: {
            name: "",
            date: "",
            grade: ""
        },
        elect2: {
            name: "",
            date: "",
            grade: ""
        },
        elect3: {
            name: "",
            date: "",
            grade: ""
        },
        elect4: {
            name: "",
            date: "",
            grade: ""
        },
        //resit papers 
        resit1: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit2: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit3: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit4: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit5: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit6: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit7: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit8: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        }
    };
    factory.olevel = {
        id: id,
        applicantid: applicantid,
        applicantid: "",
        centerno: "",
        index: "",
        exams: "",
        core1: {
            name: "",
            date: "",
            grade: "",
        },
        elect1: {
            name: "",
            date: "",
            grade: ""
        },
        elect2: {
            name: "",
            date: "",
            grade: ""
        },
        elect3: {
            name: "",
            date: "",
            grade: ""
        },
        elect4: {
            name: "",
            date: "",
            grade: ""
        },
        elect5: {
            name: "",
            date: "",
            grade: ""
        },
        elect6: {
            name: "",
            date: "",
            grade: ""
        },
        elect7: {
            name: "",
            date: "",
            grade: ""
        },
        elect8: {
            name: "",
            date: "",
            grade: ""
        },
        elect9: {
            name: "",
            date: "",
            grade: ""
        },
        //resit papers 
        resit1: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit2: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit3: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit4: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit5: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        },
        resit6: {
            name: "",
            date: "",
            grade: "",
            centerno: "",
            index: ""
        }
    };
    factory.transfer = {
        id: id,
        applicantid: applicantid,
        exams: '',
        currentschool: "",
        program: "",
        currentyear: "",
        dateenrolled: ""
    };
    factory.degree = {
        id: id,
        applicantid: applicantid,
        centerno: "",
        index: "",
        exams: "",
        core1: {
            name: "",
            date: "",
            grade: ""
        },
        elect1: {
            name: "",
            date: "",
            grade: ""
        },
        elect2: {
            name: "",
            date: "",
            grade: ""
        },
        elect3: {
            name: "",
            date: "",
            grade: ""
        },
        elect4: {
            name: "",
            date: "",
            grade: ""
        },
        elect5: {
            name: "",
            date: "",
            grade: ""
        },
        elect6: {
            name: "",
            date: "",
            grade: ""
        },
        elect7: {
            name: "",
            date: "",
            grade: ""
        },
        elect8: {
            name: "",
            date: "",
            grade: ""
        },
        elect9: {
            name: "",
            date: "",
            grade: ""
        }
    };

    factory.saveupdatepersonalinfo = function (scope) {
        console.log(factory.personalInformation);
        //Sert applicant id
        try {
            factory.personalInformation.applicantid = scope.applicant_data.applicantId;
            // save a copy to disk
            scope.applicant_data.personalInformation = factory.personalInformation;
            factory.saveApplicantDataToDisk(scope);
        } catch (e) {
        }

        _resource.savePersonInformation($.param(factory.personalInformation))
        .$promise.then(function (res) {
            console.log(res);
                    //alert(res);
                    if (res.Succeeded === true) {
                        //alert(res.msg);
                        scope.showSuccessAlert(res.msg)
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                        //wait for 4s and take the person to the next page 
                        setTimeout(function () {


                        }, 4000);
                    } else {
                        //  alert
                        scope.showDangerAlert(res.msg)
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };
    factory.saveupdatefamilyinfo = function (scope) {
        //console.log($.param(factory.familyInformation));
        try {
            factory.familyInformation.applicantid = scope.applicant_data.applicantId;
             // save a copy to disk
            scope.applicant_data.familyInformation = factory.familyInformation;
            factory.saveApplicantDataToDisk(scope);
        } catch (e) {
        }

        _resource.saveFamilyInfo($.param(factory.familyInformation))
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                        //alert(res.msg);
                        scope.showSuccessAlert(res.msg)
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                        //wait for 4s and take the person to the next page 
                        setTimeout(function () {
                        }, 4000);
                    } else {
                        //  alert
                        scope.showDangerAlert(res.msg)
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };

    factory.saveupdateeducationinfo = function (scope) {
        console.log($.param(factory.educationInformation));
        factory.educationInformation.applicantid = scope.applicant_data.applicantId;
        //save to disk
         scope.applicant_data.educationInformation = factory.educationInformation;
            factory.saveApplicantDataToDisk(scope);
            
        _resource.saveEducationInfo($.param(factory.educationInformation))
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                        //alert(res.msg);
                        scope.showSuccessAlert(res.msg)
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                        //wait for 4s and take the person to the next page 
                        setTimeout(function () {
                        }, 4000);
                    } else {
                        //  alert
                        scope.showDangerAlert(res.msg)
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };
    factory.saveupdateprogramselection = function (scope) {
        console.log($.param(factory.programSelection));
        factory.programSelection.applicantid = scope.applicant_data.applicantId;
         //save to disk
         scope.applicant_data.programSelection = factory.programSelection;
            factory.saveApplicantDataToDisk(scope);
            
        _resource.saveProgram($.param(factory.programSelection))
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                        //alert(res.msg);
                        scope.showSuccessAlert(res.msg)
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                        //wait for 4s and take the person to the next page 
                        setTimeout(function () {
                        }, 4000);
                    } else {
                        //  alert
                        scope.showDangerAlert(res.msg)
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };
    factory.saveupdatemiscellaneous = function (scope) {
        console.log($.param(factory.miscellaneous));
        factory.miscellaneous.applicantid = scope.applicant_data.applicantId;
         //save to disk
         scope.applicant_data.miscellaneous = factory.miscellaneous;
            factory.saveApplicantDataToDisk(scope);
        _resource.saveMiscellaneous($.param(factory.miscellaneous))
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                        //alert(res.msg);
                        scope.showSuccessAlert(res.msg)
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                        //wait for 4s and take the person to the next page 
                        setTimeout(function () {
                        }, 4000);
                    } else {
                        //  alert
                        scope.showDangerAlert(res.msg)
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };
    factory.saveupdatedeclarations = function (scope) {
        console.log($.param(factory.declaration));
        factory.declaration.applicantid = scope.applicant_data.applicantId;
         //save to disk
         scope.applicant_data.declaration = factory.declaration;
            factory.saveApplicantDataToDisk(scope);
        _resource.saveDeclarations($.param(factory.declaration))
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                        //alert(res.msg);
                        scope.showSuccessAlert(res.msg)
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                        //wait for 4s and take the person to the next page 
                        setTimeout(function () {
                        }, 4000);
                    } else {
                        //  alert
                        scope.showDangerAlert(res.msg)
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };
    factory.sign = function (scope) {
        console.log($.param(factory.affirmData));
        factory.affirmData.applicantid = scope.applicant_data.applicantId;
         //save to disk
         scope.applicant_data.affirmData = factory.affirmData;
            factory.saveApplicantDataToDisk(scope);
            
        _resource.saveAffirmation($.param(factory.affirmData))
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                        //alert(res.msg);
                        scope.showSuccessAlert(res.msg)
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                        //wait for 4s and take the person to the next page 
                        setTimeout(function () {
                        }, 4000);
                    } else {
                        //  alert
                        scope.showDangerAlert(res.msg)
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };

    //Academic background service
    factory.saveupdateresult = function (result, scope) {
        console.log($.param(result));
        //return; 
        result.applicantid = scope.applicant_data.applicantId;
        //alert(result.applicantid)
        _resource.saveResults($.param(result))
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                        //alert(res.msg);
                        scope.showSuccessAlert("Exams results has been updated successfully.")
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                        //wait for 4s and take the person to the next page 
                        setTimeout(function () {
                        }, 4000);
                    } else {
                        //  alert
                        scope.showDangerAlert("Some errors occured updating the result.\
                         <br>Please go back and check if your results is ok<br> If ok, ignore the error")
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };
    factory.saveupdatetransfer = function (result, scope) {
        factory.result.applicantid = scope.applicant_data.applicantId;
        console.log($.param(result));
        _resource.saveTransfer($.param(result))
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                        //alert(res.msg);
                        scope.showSuccessAlert(res.msg)
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                        //wait for 4s and take the person to the next page 
                        setTimeout(function () {
                        }, 4000);
                    } else {
                        //  alert
                        scope.showDangerAlert(res.msg)
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };

    factory.getApplicant = function (scope) {
        try {
            console.log($.param({id: user.uid}));

        } catch (e) {
            return;
        }
        return _resource.getApplicant($.param({id: user.uid}))
        .$promise.then(function (res) {
                    // alert("im called");
                    console.log(res);
                    try {
                        if (parseInt(res.sectionno) >= 1) {
                            //  alert(res.sectionno);
                            //Updating selectedapplicant on client device
                            // store applicant data
                            var data = {};
                            data.affirmData = JSON.stringify(res.declaration);
                            data.personalInformation = JSON.stringify(res.personalInformation);
                            data.familyInformation = JSON.stringify(res.familyInformation);
                            data.educationInformation =  JSON.stringify(res.educationInformation);
                            data.programSelection = JSON.stringify(res.programSelection);
                            data.miscellaneous = JSON.stringify(res.miscellaneous);
                            data.declaration = JSON.stringify(res.declaration);
                            data.alevel = JSON.stringify(res.academicbackground);
                            data.wassce = JSON.stringify(res.academicbackground);
                            data.olevel = JSON.stringify(res.academicbackground);
                            data.degree = JSON.stringify(res.academicbackground);
                            data.transfer = JSON.stringify(res.tranfer);
                            data.sectionno =  res.sectionno;
                            data.applicantId = res.applicantId;

                            scope.applicant_sessionId = scope.sessionId+"_applicant";
                            sessionStorage.setItem(scope.applicant_sessionId, JSON.stringify(data));


                            // sessionStorage.setItem('affirmData', JSON.stringify(res.declaration));
                            // sessionStorage.setItem('personalInformation', JSON.stringify(res.personalInformation));
                            // sessionStorage.setItem('familyInformation', JSON.stringify(res.familyInformation));
                            // sessionStorage.setItem('educationInformation', JSON.stringify(res.educationInformation));
                            // sessionStorage.setItem('programSelection', JSON.stringify(res.programSelection));
                            // sessionStorage.setItem('miscellaneous', JSON.stringify(res.miscellaneous));
                            // sessionStorage.setItem('declaration', JSON.stringify(res.declaration));
                            // sessionStorage.setItem('alevel', JSON.stringify(res.academicbackground));
                            // sessionStorage.setItem('wassce', JSON.stringify(res.academicbackground));
                            // sessionStorage.setItem('olevel', JSON.stringify(res.academicbackground));
                            // sessionStorage.setItem('degree', JSON.stringify(res.academicbackground));
                            // sessionStorage.setItem('transfer', JSON.stringify(res.tranfer));
                            // sessionStorage.setItem('sectionno', res.sectionno);
                            // sessionStorage.setItem('applicantId', res.applicantId);

                            //Alert data loaded successfully
                            scope.tickFinishedItem(res.sectionno);
//                              
//                              factory.affirmData = res.declaration;
//                              factory.personalInformation = res.personalInformation;
//                              factory.familyInformation = res.familyInformation;
//                              factory.educationInformation = res.educationInformation;
//                              factory.programSelection = res.programSelection;
//                              factory.miscellaneous = res.miscellaneous;
//                              facotry.alevel = res.academicbackground;
//                              facotry.olevel = res.academicbackground;
//                              facotry.degree = res.academicbackground;
//                              facotry.wassce = res.academicbackground;
//                              factory.transfer =res.tranfer;
//                              factory.applicantId = res.applicantId;
//                              factory.sectionno = res.sectionno;
//                              
//
//                              //bring everythin to scope
//                              scope.applicantService =factory;

                            //$scope.apply();

                        } else {
                            // alert("failed");
                        }
                    } catch (e) {

                    }
                }, function () {
                    alert("No connection to server");
                });
    }

    factory.uploadProfilePic = function (scope) {
        factory.result.applicantid = scope.applicant_data.applicantId;
        console.log($.param(result));
        _resource.uploadProfilePic($.param(result))
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                        //alert(res.msg);
                        scope.showSuccessAlert(res.msg)
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                        //wait for 4s and take the person to the next page 
                        setTimeout(function () {
                        }, 4000);
                    } else {
                        //  alert
                        scope.showDangerAlert(res.msg)
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };
    factory.uploadTranscript = function (scope) {
        factory.result.applicantid = scope.applicant_data.applicantId;
        console.log($.param(result));
        _resource.uploadTranscript($.param(result))
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                        //alert(res.msg);
                        scope.showSuccessAlert(res.msg)
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                        //wait for 4s and take the person to the next page 
                        setTimeout(function () {
                        }, 4000);
                    } else {
                        //  alert
                        scope.showDangerAlert(res.msg)
                    }
                }, function () {
                    scope.showDangerAlert("No connection to server");
                });
    };






    factory.getallapplicants = function ($scope) {
        _resource.getallapplicants({howmany: factory.howmanyToFetch, reset: factory.reset})
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                        // alert(res.msg);
                        //Saving applicants to client device
                        sessionStorage.setItem('applicants', JSON.stringify(res.applicants));
                        //Take it to scope
                        $scope.ApplicantService.applicants = res.applicants;
                    } else {
                        alert(res.msg);
                    }
                }, function () {
                    alert("No connection to server");
                });
    };

    factory.getapplicant = function ($scope) {
        _resource.getapplicant(factory.selectedApplicantId)
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                alert(res.msg);
                        //Saving applicants to client device
                        sessionStorage.setItem('applicant', JSON.stringify(res.applicant));
                        //take it to scope
                        $scope.ApplicantService.selectedApplicant = res.applicant;
                    } else {
                        alert(res.msg);
                    }
                }, function () {
                    alert("No connection to server");
                });
    }

    factory.saveupdateapplicant = function ($scope) {
        _resource.saveupdateapplicant(factory.selectedApplicant)
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                alert(res.msg);
                        //Updating selectedapplicant on client device
                        sessionStorage.setItem('applicant', JSON.stringify(factory.selectedApplicant));
                    } else {
                        alert(res.msg);
                    }
                }, function () {
                    alert("No connection to server");
                });
    }

    factory.SaveUpdateApplicants = function ($scope) {
        _resource.saveupdateapplicant(factory.applicantsToUpdate)
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                alert(res.msg);
                        //replace the applicants in scope with the new ones
                        factory.getallapplicants($scope);
                    } else {
                        alert(res.msg);
                    }
                }, function () {
                    alert("No connection to server");
                });
    }

    factory.deleteapplicant = function ($scope) {
        _resource.saveupdateapplicant(factory.selectedApplicantId)
        .$promise.then(function (res) {
            console.log(res);
            if (res.Succeeded === true) {
                alert(res.msg);
                        //replace the applicants in scope with the new ones
                    } else {
                        alert(res.msg);
                    }
                }, function () {
                    alert("No connection to server");
                });
    }

    factory.getApplicantDataFromLocal = function(scope) {
         var data = JSON.parse(sessionStorage.getItem(scope.sessionId+"_applicant"));
         scope.applicant_data = data;
    }
    factory.saveApplicantDataToDisk = function (scope){
        sessionStorage.setItem(scope.sessionId+"_applicant",JSON.stringify(scope.applicant_data));
    }



    //Load all applicants into scope
    //factory.getallapplicants();
    //factory.getapplicantqueue();

    return factory;

}

anucapp.service("ApplicantService", ['$resource', '$location', '$window', ApplicantService]);