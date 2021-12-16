<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017) */
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>

  <div class="panel panel-color panel-info">
    <div class="progress">
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;" class="progress-bar progress-bar-danger progress-bar-striped active">35%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;" class="progress-bar progress-bar-warning progress-bar-striped active">35%</div>
        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-success progress-bar-striped active">30%</div>
    </div>

    <div class="panel-heading">
        <h3 class="panel-title">9. Completion</h3>
    </div>
    <div class="panel-body">


        <form class="form-horizontal p-20" role="form" action="#">

            <div class="form-group" style="font-size:18px">

                <div class="alert alert-success " style="text-align:center;font-size:22px">

                    Congratulation !!
                </div>
                <label class="col-md-12 control-label " style="text-align: center"> 

                    You have successfully completed the application process.
                    <br>Any information will be forward to your 
                    email.<br><br>
                    The school will notify you in due time if you are eligible for admission.
                    <br><br><br>

                    <div class="row" style="text-align:left;color:#0e541d;">

                        <h5>
                        You are suppose to pay an amount of  GH&cent 50.0 for local student and $50 for international student as a processing fee. Payment must be made before your application is processed. Failure to make the payment will void your application.</h5>
                        <h6> Make payment with Visa card, Master card (foreign students) and any mobile money platform in Ghana (MTN, Airtel, Tigo, Vodafone) for local students.</h6>

                        <a href="/Payment/form">Click here to make payment</a>
                        
                    </div>


                    <div class="alert alert-warning  " style="text-align:left;color:#0e541d;">


                        <p> Please we recommend you to verify your information by clicking on VIEW APPLICATION button below.</p>
                        
                        <p>To obtain a paper copy of your application,<br> Click on VIEW APPLICATION.<br> Scroll to the bottom of the page,<br> then click on PRINT TO PDF</p>
                        
                        <p class="alert alert-danger">NOTICE:</p>
                        <h4 class='Warning'> Download the declaration form by clicking on PRINT DECLARATION. Find a Reputable person as described on the form to endorse your application. Submit this form when you obtain admission</h4>
                        <h4> Failure to submit your declaration form can void your admission even if its granted</h4>
                    </div>


                </label><br>
            </div>


            <div class="form-group">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info w-lg m-b-5" ng-click="viewApplication()">View Application</button>
                </div>

                <div class="col-sm-4">
                    <button type="button" class="btn btn-info w-lg m-b-5" ng-click="printDeclaration()">Print Declaration</button>
                </div>

                <div class="col-sm-4">
                    <button type="button" class="btn btn-info w-lg m-b-5" ng-click="backclick()">Back</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(function () {
        $("li").removeClass("active");
        $("li.completion").addClass("active");
    })
</script>