anucapp.controller("RegistrarController",
        ["$scope", "$rootScope", "$window", "$location", '$timeout', 'RegistrarService', 'datatable',
            function ($scope, $rootScope, $window, $location, $timeout, RegistrarService, datatable) {

                //Admin
                sp = $scope;
                sp.registrarService = RegistrarService;
                sp.selectedApplicant = {id: '' };
                $rootScope.selectedApplicant={};
                //Configuration for DATATABLES
                var datatableConfig = {
                    "name": "simple_datatable",
                    "extraHeaders": {number: 1},
                    "columns": [
                        {
                            "header": "ID",
                            "property": "id",
                            "order": true,
                            "type": "text",
                            "showFilter": false,
                            "groupMethod": "collect",
                            "hide": true,
                        },
                        {
                            "header": "Name",
                            "property": "name",
                            "order": true,
                            "group": true,
                            "type": "text",
                            "edit": false,
                            "hide": true,
                        },
                        {
                            "header": "Gender",
                            "property": "gender",
                            "order": true,
                            "type": "text",
                            "hide": true,
                        },
                        {
                            "header": "Nationlity",
                            "property": "nationality",
                            "order": false,
                            "showFilter": false,
                            "type": "text",
                            "edit": false,
                            "hide": true,
                            "required": true,
                        },
                        {
                            "header": "Email",
                            "property": "email",
                            "order": false,
                            "showFilter": false,
                            "type": "text",
                            "edit": false,
                            "hide": true,
                            "required": true,
                        },
                        {
                            "header": "Processed",
                            "property": "processed",
                            "order": false,
                            "showFilter": false,
                            "type": "text",
                            "edit": false,
                            "hide": false,
                            "required": true,
                        },
//                        {
//                            "header": "Picture",
//                            "property": "picture",
//                            "order": true,
//                            "showFilter": false,
//                            "type": "text",
//                            "edit": true,
//                            "groupMethod": "collect",
//                            "render": "<a target='blank' ng-href='{{cellValue}}'>{{cellValue}}</a>",
//                            "hide": true,
//                            "extraHeaders": {"0": "H2"}
//                        },

                    ],
                    "edit": {
                        "active": false,
                        "columnMode": true
                    },
                    "filter": {
                        "active": true,
                        "highlight": true,
                        "columnMode": true
                    },
                    "pagination": {
                        "mode": 'local',
                        numberRecordsPerPageList: [{
                                number: 10,
                                clazz: ''
                            }, {
                                number: 25,
                                clazz: ''
                            }]
                    },
                    "order": {
                        "mode": 'local'
                    },
                    "remove": {
                        "active": false,
                        "mode": 'local'
                    },
                    "save": {
                        "active": false,
                        "mode": 'local'
                    },
                    "add": {
                        "active": false,
                        "showButton": false
                    },
                    "group": {
                        "active": true,
                    },
                    "compact": false,
                    "exportCSV": {
                        active: false, //Active or not
                        showButton: false, //Show the export button in the toolbar
                        delimiter: ";"//Set the delimiter
                    },
                    "hide": {
                        "active": true,
                        "byDefault": ["about"]
                    },
                    "mouseevents": {
                        "active": true,
//                        "overCallback": function (line, data) {
//                            console.log("callback mouseover:", line, data);
//                        },
//                        "leaveCallback": function (line, data) {
//                            console.log("callback mouseover:", line, data);
//                        },
                        "clickCallback": function (line, data) {
                            console.log(data);
                            sp.selectedApplicant = data;
                            $rootScope.selectedApplicant = data;
                            //sp.getApplicantDetails(line, data)
                        }
                    }
                };

                var datatableData = [
                ];

                sp.datatable = datatable(datatableConfig);


                sp.sort = function () {
                    sp.incomplete = [];
                    sp.newapps = [];
                    sp.processed = [];

                    //alert("Sorting");
                    //console.log(sp.registrarService.data);
                    //Manual sorting of data
                    sp.incomplete = [];
                    sp.newapps = [];
                    sp.processed = [];
                    for ($i = 0; $i < sp.registrarService.data.length; $i++) {
                        if (sp.registrarService.data[$i].processed > 0) {
                            sp.processed.push(sp.registrarService.data[$i]);
                        } else {
                            sp.newapps.push(sp.registrarService.data[$i]);
                        }
                        if (sp.registrarService.data[$i].sectionno < 8) {
                            sp.incomplete.push(sp.registrarService.data[$i]);
                        }
                    }
                    $rootScope.incomplete = sp.incomplete;
                    $rootScope.newapps = sp.newapps;
                    $rootScope.processed = sp.processed;
                    $rootScope.data = sp.registrarService.data;

                }

                try {
                    sp.registrarService.data = JSON.parse(sessionStorage.getItem('data'));
                } catch (e) {

                }

                //Preload data from server
                switch (sessionStorage.getItem('dataToLoad')) {
                    case 'processed':
                        sp.sort();
                        if (!$rootScope.nullOrEmpty(sp.processed))
                            sp.datatable.setData(sp.processed);

                        break;
                    case 'newapps':
                        sp.sort();
                        if (!$rootScope.nullOrEmpty(sp.newapps))
                            sp.datatable.setData(sp.newapps);
                        break;
                    case 'incomplete':
                        sp.sort();
                        if (!$rootScope.nullOrEmpty(sp.incomplete))
                            sp.datatable.setData(sp.incomplete);
                        break;
                    default:
                        sp.registrarService.loadData(sp);
                        break;
                }
                
                sp.getApplicantDetails = function (data) {
                    console.log(data.id);
                    
                   var host='';
                   host =  $window.location.href.toLowerCase().split('main')[0];
                
                   console.log(host);
                    $rootScope.pdfHtmlfile = host+'/Main/createpdf/' + data.id;
                    $rootScope.showIframe(data.id)
                }

                $rootScope.processedClick = function () {
                    sessionStorage.setItem('dataToLoad', 'processed');
                    window.location.reload(false);
                }

                $rootScope.newappsClick = function () {
                    sessionStorage.setItem('dataToLoad', 'newapps');
                    window.location.reload(false);
                }

                $rootScope.incompleteClick = function () {
                    sessionStorage.setItem('dataToLoad', 'incomplete');
                    window.location.reload(false);
                }
                $rootScope.allClick = function () {
                    sessionStorage.setItem('dataToLoad', 'all');
                    window.location.reload(false);
                }

                $rootScope.performAction = function () {
                    switch ($('#action').val()) {
                        case 'View':
                            if (!$rootScope.nullOrEmpty(sp.selectedApplicant.id)) {
                                sp.getApplicantDetails(sp.selectedApplicant);
                            }
                            console.log(sp.selectedApplicant);
                            break;
                        case 'Delete':
                            //alert("hello");
                            sp.registrarService.deleteApplicant(sp);
                            break;
                        case 'Process':
                            sp.registrarService.processApplicant(sp);
                            break;
                        case 'Unprocess':
                            sp.registrarService.unprocessApplicant(sp);
                            break;
                        default:
                           
                           sp.showSuccessAlert("Please select and action to perform");
                            break;

                    }

                }
                //Member functions
                /********************UI************************************/
                /**********************************************************/
                $rootScope.showWelcomeForApplicant(false);
                $rootScope.hideSideBar('registrar');

                //fix search bar error datatable
                if ($("div").attr("ng-if") === "udtTable.config.filter.active === true") {

                }

//    position: relative;
//    width: 72%;
//    margin: 14px;

            }]);