<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017) */
?>
<div class="panel panel-color panel-info" ng-controller="AcademicBackgroundController as ctrl">
    <div class="progress">
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-danger progress-bar-striped active">30%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-warning progress-bar-striped active">10%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;" class="progress-bar progress-bar-success progress-bar-striped active">2%</div>
    </div>

    <div class="panel-heading">
        <h3 class="panel-title">4. ACADEMIC BACKGROUND</h3>
    </div>
    <div class="panel-body">


        <form class="form-horizontal p-20" role="form" name="wassceinfo">
            <div class="portlet">
                <div class="portlet-heading ">
                    <h4 class="portlet-title text-dark">
                        4.1 Examinations Taken
                    </h4>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#name-default"><i class="ion-minus-round"></i></a>
                        <span class="divider"></span>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="name-default" class="panel-collapse collapse in">
                    <div class="portlet-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Examination Type</label>
                            <div class="col-sm-10">
                                <select class="form-control col-sm-10" ng-model="examstype">
                                    <option value="#">&nbsp;</option>
                                    <option value="WASSCE">WASSCE</option> 
                                    <option value="SSSCE">SSSCE</option> 
                                    <option value="GCE-A">A-Level/ABCE</option>
                                    <option value="MATURE">Mature</option>    
                                    <option value="Diploma">Diploma</option>
                                    <option value="HND">HND</option>                                   
                                    <option value="FTC">FTC</option>
                                    <option value="HNC">HNC</option>
                                    <option value="Transfer">Transfer</option>
                                    <option value="TECH">Technical Part 1,2,3</option>                                    
                                    <option value="TEACH">Teacher's Certificate</option>
                                    <option value="GCE-O">Other Equivalent</option>   
                                </select>
                            </div>
                        </div>

                        <!-------------- WASSCE/SSCE1 ------------------>
                        <div class="portlet">
                            <div class="portlet-heading bg-warning">
                                <h5 class="portlet-title text-dark" style="font-size: .9em">
                                    WASSCE/SSCE 
                                </h5>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#wassce1-ssce-default"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="wassce1-ssce-default" class="panel-collapse collapse in">
                                <div class="portlet-body">

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"
                                                   ng-model="wassce.centerno" required="" minlength="5" maxlength="20"placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.index" required="" minlength="5" maxlength="20" placeholder="Index Number">
                                        </div>
                                    </div>
                                    <!-----------------Core Subjects --------------------->
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Core Subjects</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">English</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" required=""
                                                           ng-model="wassce.core1.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select required="" class="form-control" ng-model="wassce.core1.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Maths(Core)</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  required=""
                                                           ng-model="wassce.core2.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>

                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" required="" ng-model="wassce.core2.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Integrated Science</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  required=""
                                                           ng-model="wassce.core3.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" required=""
                                                    ng-model="wassce.core3.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Social Studies</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  required=""
                                                           ng-model="wassce.core4.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" required=""
                                                    ng-model="wassce.core4.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--------------------------Elective Subjects ----------------->
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Elective Subjects</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class=" waec-sub form-control" required="" ng-model="wassce.elect1.name">
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  required=""
                                                           ng-model="wassce.elect1.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" required=""
                                                    ng-model="wassce.elect1.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class=" form-control" required="" ng-model="wassce.elect2.name">
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  required=""
                                                           ng-model="wassce.elect2.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" required=""
                                                    ng-model="wassce.elect2.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class="form-control waec-sub" ng-model="wassce.elect3.name">
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="wassce.elect3.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control"  ng-model="wassce.elect3.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class="form-control waec-sub"  ng-model="wassce.elect4.name">
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="wassce.elect4.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control"  ng-model="wassce.elect4.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>


                                </div><!----End of portlet-body --->


                            </div>
                        </div><!----- End of portlet---->
                        <!-------------- WASSCE/SSCE Resit ------------------>
                        <div class="portlet" style="display: none">
                            <div class="portlet-heading bg-warning">
                                <h5 class="portlet-title text-dark" style="font-size: .9em">
                                    WASSCE/SSCE Re-Sit (Optional)
                                </h5>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#wassce1-ssce-resit-default"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="wassce1-ssce-resit-default" class="panel-collapse collapse in">
                                <div class="portlet-body">

                                    <!--------------- Resit Subjects ------->
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 1</label>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" maxlength="20"
                                                   ng-model="wassce.resit1.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" maxlength="20"
                                                   ng-model="wassce.resit1.index" placeholder="Index Number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class="form-control waec-sub"  ng-model="wassce.resit1.name"
                                                    >
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  
                                                           ng-model="wassce.resit1.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" maxlength=""
                                                    ng-model="wassce.resit1.grade" >
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!------ End of paper 1------>

                                    <!------ Paper 2 -------->
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 2</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit2.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit2.index" placeholder="Index Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class="form-control waec-sub" ng-model="wassce.resit2name">
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  
                                                           ng-model="wassce.resit2.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>

                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control"
                                                    ng-model="wassce.resit2.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A1">A</option> 
                                                <option value="B2">B</option> 
                                                <option value="B3">C</option>
                                                <option value="C4">D</option>   
                                                <option value="C5">E</option>    
                                                <option value="C6">F</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!------ End of paper 2------>

                                    <!------ Paper 3 -------->
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 3</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit3.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit3.index" placeholder="Index Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class="form-control waec-sub" 
                                                    ng-model="wassce.resit3.grade">
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  
                                                           ng-model="wassce.resit3.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>

                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control"
                                                    ng-model="wassce.resit3.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!------ End of paper 3------>

                                    <!------ Paper 4 -------->
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 4</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit4.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit4.index" placeholder="Index Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class="form-control waec-sub" 
                                                    ng-model="wassce.resit4.grade">
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  
                                                           ng-model="wassce.resit4.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" 
                                                    ng-model="wassce.resit4.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!------ End of paper 4------>


                                    <!--------------- Paper 5 ------->
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 5</label>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit5.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit5.index" placeholder="Index Number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class="form-control waec-sub" 
                                                    ng-model="wassce.resit5.grade">
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control" 
                                                           ng-model="wassce.resit5.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control"
                                                    ng-model="wassce.resit5.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!------ End of paper 5------>

                                    <!------ Paper 6 -------->
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 6</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit6.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit6.index" placeholder="Index Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class="form-control waec-sub" 
                                                    ng-model="wassce.resit6.grade">
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  
                                                           ng-model="wassce.resit6.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>

                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" 
                                                    ng-model="wassce.resit6.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A1">A</option> 
                                                <option value="B2">B</option> 
                                                <option value="B3">C</option>
                                                <option value="C4">D</option>   
                                                <option value="C5">E</option>    
                                                <option value="C6">F</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!------ End of paper 6------>

                                    <!------ Paper 7 -------->
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 7</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit7.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit7.index" placeholder="Index Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class="form-control waec-sub" 
                                                    ng-model="wassce.resit7.grade">
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  
                                                           ng-model="wassce.resit7.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>

                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control"
                                                    ng-model="wassce.resit7.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!------ End of paper 7------>

                                    <!------ Paper 8 -------->
                                    <div class="form-group">
                                        <label class="col-sm-12 control-label" style="text-align: center">Resit Paper 8</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Examination ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit8.centerno" placeholder="Center Number">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" ng-model="wassce.resit8.index" placeholder="Index Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <select class="form-control waec-sub" 
                                                    ng-model="wassce.resit8.grade" >
                                                <option value="">Select Subject</option>
                                                <option value='Agricultural Science'> Agricultural Science</option>
                                                <option value='Animal Husbandry(Alternative A)'> Animal Husbandry(Alternative A)</option> 
                                                <option value='Animal Husbandry(Alternative B)'> Animal Husbandry(Alternative B)</option> 
                                                <option value='Auto Body Repairs And Spray Painting'> Auto Body Repairs And Spray Painting</option>
                                                <option value='Auto Electrical Work'> Auto Electrical Work</option>
                                                <option value=' Auto Mechanics'> Auto Mechanics</option>
                                                <option value='Auto Mechanical Work'> Auto Mechanical Work</option>
                                                <option value='Basic Electronics / Electronics'> Basic Electronics / Electronics</option>
                                                <option value='Basic Electricity / Applied Electricity'> Basic Electricity / Applied Electricity</option>
                                                <option value='Biology'> Biology</option>
                                                <option value='Auto Parts Merchandising'> Auto Parts Merchandising</option>
                                                <option value='Business Management'> Business Management</option>
                                                <option value='Book Keeping'> Book Keeping</option>
                                                <option value=' Block Laying, Brick Laying And Concreting'> Block Laying, Brick Laying And Concreting</option>
                                                <option value='Basketry'> Basketry</option>
                                                <option value='Building Construction'> Building Construction</option>
                                                <option value='Catering Craft Practice'> Catering Craft Practice</option>
                                                <option value='Carpentry And Joinery'> Carpentry And Joinery</option>
                                                <option value=' Ceramics'> Ceramics</option>
                                                <option value='Christian Religious Studies'> Christian Religious Studies</option>
                                                <option value='Civic Education'> Civic Education</option>
                                                <option value='Chemistry'> Chemistry</option>
                                                <option value='Clothing And Textiles'> Clothing And Textiles</option>
                                                <option value='Core / General Mathematics'> Core / General Mathematics</option>
                                                <option value='Commerce'> Commerce</option>
                                                <option value='Computer Studies'> Computer Studies</option>
                                                <option value='Cosmetology'> Cosmetology</option>
                                                <option value='Cost Accounting'> Cost Accounting</option>
                                                <option value='Crop Husbandry And Horticulture'> Crop Husbandry And Horticulture</option>
                                                <option value='Data Processing'> Data Processing</option>
                                                <option value=' Economics'> Economics</option>
                                                <option value='Efik'> Efik</option>
                                                <option value='Elective / Further Mathematics'> Elective / Further Mathematics</option>
                                                <option value='Electrical Installation And Maintenance Work'> Electrical Installation And Maintenance Work</option>
                                                <option value=' Electronics'> Electronics</option>
                                                <option value='English Language (Alternative A)'> English Language (Alternative A)—For Ghanaian Candidates</option> 
                                                <option value='English Language (Alternative B)'> English Language (Alternative B)(For Candidates In The Gambia, Nigeria, Sierra Leone And Liberia Only)</option> 
                                                <option value='Arabic Examination Scheme'> Arabic Examination Scheme</option>
                                                <option value='Arabic'> Arabic</option>
                                                <option value='Arabic List Of Selected Texts'> Arabic List Of Selected Texts</option>
                                                <option value='Financial Accounting'> Financial Accounting</option>
                                                <option value='Fisheries (Alternative A)'> Fisheries (Alternative A)</option>
                                                <option value='Fisheries (Alternative B)'> Fisheries (Alternative B)</option>
                                                <option value='Food And Nutrition'> Food And Nutrition</option>
                                                <option value='Forestry'> Forestry</option>
                                                <option value='French'> French</option>
                                                <option value='Furniture Making'> Furniture Making</option>
                                                <option value='General Knowledge In Art'> General Knowledge In Art</option>
                                                <option value='Geography'> Geography</option>
                                                <option value='Ghanaian Languages'> Ghanaian Languages</option>
                                                <option value='Government'> Government</option>
                                                <option value='Graphic Design'> Graphic Design</option>
                                                <option value='GSM Phones Maintenance And Repairs'> GSM Phones Maintenance And Repairs</option>
                                                <option value='Hausa'> Hausa</option>
                                                <option value='Health Education'> Health Education</option>
                                                <option value='History'> History</option>
                                                <option value='Home Management'> Home Management</option>
                                                <option value='Ibibio'> Ibibio</option>
                                                <option value='Igbo'> Igbo</option>
                                                <option value='Information And Communication Technology (Core)'> Information And Communication Technology (Core)</option>
                                                <option value='Information And Communication Technology (Elective)'> Information And Communication Technology (Elective)</option>
                                                <option value='Insurance'> Insurance</option>
                                                <option value='Integrated Science'> Integrated Science</option>
                                                <option value='Islamic Studies'> Islamic Studies</option>
                                                <option value='Jewellery'> Jewellery</option>
                                                <option value='Leather Goods'> Leather Goods</option>
                                                <option value='Leatherwork'> Leatherwork</option>
                                                <option value='Literature In English'> Literature In English</option>
                                                <option value='Machine Woodworking'> Machine Woodworking</option>
                                                <option value='Marketing'> Marketing</option>
                                                <option value=' Metalwork'> Metalwork</option>
                                                <option value='Mining'> Mining</option>
                                                <option value='Office Practice'> Office Practice</option>
                                                <option value='Painting And Decorating'> Painting And Decorating</option>
                                                <option value='Photography'> Photography</option>
                                                <option value='Physical Education'> Physical Education</option>
                                                <option value='Physics'> Physics</option>
                                                <option value='Picture Making'> Picture Making</option>
                                                <option value='Printing Craft Practise'> Printing Craft Practise</option>
                                                <option value='Radio, Television And Electronics Works'> Radio, Television And Electronics Works</option>
                                                <option value='Refrigeration And Air-conditioning'> Refrigeration And Air-conditioning</option>
                                                <option value='Salesmanship'> Salesmanship</option>
                                                <option value='Sculpture'> Sculpture</option>
                                                <option value='Shorthand'> Shorthand</option>
                                                <option value=' Social Studies'> Social Studies</option>
                                                <option value='Store Keeping'> Store Keeping</option>
                                                <option value='Store Management'> Store Management</option>
                                                <option value=' Technical Drawing'> Technical Drawing</option>
                                                <option value='Textiles'> Textiles</option>
                                                <option value='Tourism'> Tourism</option>
                                                <option value='Upholstery'> Upholstery</option>
                                                <option value='Visual Art'> Visual Art</option>
                                                <option value='Welding And Fabrication Engineering Craft Practice'> Welding And Fabrication Engineering Craft Practice</option>
                                                <option value='West African Traditional Religion (W.A.T.R)'> West African Traditional Religion (W.A.T.R)</option>
                                                <option value='Woodwork General'> Woodwork General</option> 
                                                <option value='Woodwork Ghana'> Woodwork Ghana</option> 
                                                <option value='Yoruba'> Yoruba</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <datepicker date-format='yyyy-MM-dd'>
                                                    <input class="form-control"  
                                                           ng-model="wassce.resit8.date" placeholder="Date Taken" type="text"/>
                                                </datepicker>

                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" 
                                                    ng-model="wassce.resit8.grade">
                                                <option value="">Grade</option>
                                                <option value="A1">A1</option> 
                                                <option value="B2">B2</option> 
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>   
                                                <option value="C5">C5</option>    
                                                <option value="C6">C6</option>
                                                <option value="D7">D7</option>
                                                <option value="D8">E8</option>
                                                <option value="F9">F9</option>
                                                <option value="A">A</option> 
                                                <option value="B">B</option> 
                                                <option value="C">C</option>
                                                <option value="D">D</option>   
                                                <option value="E">E</option>    
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!------ End of paper 8------>
                                </div><!----End of portlet-body --->
                            </div>
                        </div><!----- End of portlet---->
                    </div>

                </div>
                <div ngf-select ngf-drop ng-model="files" ngf-model-invalid="invalidFiles"
                     ngf-model-options="modelOptionsObj"
                     ngf-multiple="multiple" ngf-pattern="pattern" ngf-accept="acceptSelect"
                     ng-disabled="disabled" ngf-capture="capture"
                     ngf-drag-over-class="dragOverClassObj"
                     ngf-validate="validateObj"
                     ngf-resize="resizeObj"
                     ngf-resize-if="resizeIfFn($file, $width, $height)"
                     ngf-dimensions="dimensionsFn($file, $width, $height)"
                     ngf-duration="durationFn($file, $duration)"
                     ngf-keep="keepDistinct ? 'distinct' : keep"
                     ngf-fix-orientation="orientation"
                     ngf-max-files="maxFiles"
                     ngf-ignore-invalid="ignoreInvalid"
                     ngf-run-all-validations="runAllValidations"
                     ngf-allow-dir="allowDir" class="drop-box" ngf-drop-available="dropAvailable">Click 
                    <span ng-show="dropAvailable">or Drop</span> to upload Results slip or Certificate
                </div>
                <div class="preview form-group">
                    <div>Preview</div>
                    <img class=''ngf-src="!files[0].$error && files[0]">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-info w-lg m-b-5" ng-click="backclick()">Back</button>
                </div>
                <div class="col-sm-6 " >
                    <button type="submit" class="btn btn-success w-lg m-b-5" id='next-btn' ng-click="nextclick($event, wassceinfo.$valid)">Next</button>
                </div>


            </div>
        </form>
    </div>
</div>
