/*Author: Alfred Ntiamoah
 Company: New Age Developers Group
 Email: antiamoah890@gmail.com
 website: natlink.net
 License: Proprietary license
 All Right Reserved (2017)*/

'use strict';

var anucapp = angular.module('anucapp', ['ngRoute', 'ngFileUpload', 'ngResource','720kb.datepicker','ultimateDataTableServices']);
var version = '11.1.3';
function cfg($routeProvider, $locationProvider) {
    $routeProvider
            .when('/welcome', {
                templateUrl: "Main/welcome",
                controller: "MainController"
            }).when('/', {
                templateUrl: "",
                controller: "MainController"
            })
            .when('/approot', {
                templateUrl: "Main/approot",
                controller: "MainController"
            }).when('/instruction', {
        templateUrl: "Main/instruction",
        controller: ""
    }).when('/personalinfo', {
        templateUrl: "Main/personalinformation",
        controller: "PersonalInfoController"
    }).when('/familyinfo', {
        templateUrl: "Main/family",
        controller: "FamilyInfoController"
    }).when('/education', {
        templateUrl: "Main/institutionhistory",
        controller: "EducationHistoryController"
    }).when('/alevel', {
        templateUrl: "Main/alevel",
        controller: "AcademicBackgroundController"
    }).when('/olevel', {
        templateUrl: "Main/olevel",
        controller: "AcademicBackgroundController"
    }).when('/wassce', {
        templateUrl: "Main/wassce",
        controller: "AcademicBackgroundController"
    }).when('/transfer', {
        templateUrl: "Main/transfer",
        controller: "AcademicBackgroundController"
    }).when('/maturediploma', {
        templateUrl: "Main/maturehncdiploma",
        controller: "AcademicBackgroundController"
    }).when('/programselection', {
        templateUrl: "Main/programselection",
        controller: "ProgramSelectionController"
    }).when('/miscellaneous', {
        templateUrl: "Main/miscellaneous",
        controller: "MiscellaneousController"
    }).when('/declaration', {
        templateUrl: "Main/declaration",
        controller: "DeclarationController"
    }).when('/affirmation', {
        templateUrl: "Main/affirmation",
        controller: "AffirmationController"
    }).when('/completion', {
        templateUrl: "Main/completion",
        controller: "CompletionController"
    });
//    
//    .when('/error404', {
//        templateUrl: "Main/error404",
//        controller: "CompletionController"
//    }).otherwise("/error404");


  //$locationProvider.html5Mode(true);
}

cfg.$inject = ['$routeProvider', '$locationProvider'];
anucapp.config(cfg);

 