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


    <div class="panel-heading">
        <h3 class="panel-title">Payment</h3>
    </div>
    <div class="panel-body">


        <form class="form-horizontal p-20" role="form" action="#">

            <div class="form-group" style="font-size:18px">
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

                        <a href="" target="_blank"> Pay for application.</a>
                        <form method=POST action="https://community.ipaygh.com/gateway">
                            <input type=hidden name=merchant_key value="tk_c74ba68d-946a-ebc8-d908-e49dc61f89bc" />
                            <input type=hidden name=success_url value="" />
                            <input type=hidden name=cancelled_url value="" />
                            <input type=hidden name=deferred_url value="" />
                            Invoice ID <input type=text name=invoice_id value="dededswedfdwsedwsasderfre" />
                            <table cellspacing=0px cellpadding=0px border=0>
                                <tr >
                                    <td align=right><b>GH&cent;</b><input name=total type=text size=10 /><input type=submit /></td>
                                </tr>
                            </table>
                        </form>
                        
                    </div>

                </label><br>
            </div>
        </form>
    </div>
</div>
