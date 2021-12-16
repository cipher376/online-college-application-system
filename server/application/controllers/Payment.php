<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * To perform authentication and session management
 *
 * */
class Admin extends CI_Controller {

    public function __construct() {

        parent::__construct();

        //$this->load->library('session');
        $this->load->database();
        $this->load->dbforge();
        $this->load->helper('url');
        $this->load->library('Aauth');

        $this->load->model('User_model', 'user');
        $this->load->model('Permission_model', 'permission');
        $this->load->model('Group_model', 'group');
      
    }


    // Response to the get call from IPN (Instant Payment Notification)
    // parameters: {invoice_id}
    // method: get
    // 
    /* {"AA123": 
    {
        "tran_type": "test", 
        "payment_instrument": "*****000", 
        "invoice_id": "AA123", 
        "buyer_email": null, 
        "buyer_lastname": null, 
        "buyer_phone": null, 
        "narration": "Demo", 
        "buyer_firstname": null, 
        "extra": {
            "channel": "Airtel", 
            "wallet_issuer_hint": "airtel"
        }, 
        "gw_invoice_id": "00091272", 
        "amount": "1.00", 
        "status": "paid", 
        "as_at": "2017-03-25T10:22:15.741484+00:00"
    }
}*/
    // public function Connect () {
    //     // recive the data and store in database
    //     $invoice_id = $this->input->get('invoice_id');
    //     $info = array( );
    //     $merchant_key  = "";
    //     // get data for the notification
    //     if(empty($invoice_id)){
    //          $response = http_get("https://community.ipaygh.com/v1/gateway/json_status_chk?invoice_id=".$invoice_id."&merchant_key=".$merchant_key, array("timeout"=>2), $info.);

    //          if(!empty($info->error)){
    //             $response = $response[$invoice_id];

    //             // save response data to database
    //             $data = array("tran_type"=>$response->tran_type, "payment_instrument"=>$response->payment_instrument,
    //                 "invoice_id"=>$response->invoice_id, "buyer_email"=>$response->invoice_id, "buyer_lastname"=>$response->buyer_lastname, "buyer_phone" =>$response->buyer_phone, "narration"=>  $response->narration,
    //                 "buyer_firstname" => $response->buyer_firstname, "gw_invoice_id"=>$responsegw_invoice_id, "amount"=>$response->amount, "status"=>$response->status, "as_at" =>$response->as_at, "channel"=> $response->extra->channel, "wallet_issuer_hint" => $response->extra->wallet_issuer_hint);

    //             $this->db->insert('invoice', $data);

    //               if($this->db->affected_rows() > 0 ){

    //                 // success 
    //                  $returnData["msg"] = "Transaction data recieved";
    //     $returnData["Succeeded"] = true;
    //     echo json_encode($returnData);

    //     // send email
                   
    //                 return 
    //               }

    //               // failure
    //                 $returnData["msg"] = "Receiving transaction data failed";
    //     $returnData["Succeeded"] = false;        
    //     echo json_encode($returnData);
    //     // send email

    //               return;

    //          }

    //     }
       

    // }


    // issue a get request to the gateway
    // Gateway address: https://community.ipaygh.com/v1/gateway/json_status_chk?invoice_id=AA123&merchant_key=YOUR_MERCHANT_KEY
    // parameters: {invoice_id, merchant_key}
    public function GetNotificationData () {

    }

    // Request
    //POST https://community.ipaygh.com/v1/mobile_agents_v2
    // response:
    /*{
    "message": "Invoice successfully initiated", 
    "status": "new", 
    "success": true
    }
    */
    public function MakePayment () {

    }
    // Request 
    // GET https://community.ipaygh.com/v1/gateway/json_status_chk?invoice_id=&merchant_key=
    // Check after every payment is made
    //response:
    /* {"AA123": 
    {
        "tran_type": "test", 
        "payment_instrument": "*****000", 
        "invoice_id": "AA123", 
        "buyer_email": null, 
        "buyer_lastname": null, 
        "buyer_phone": null, 
        "narration": "Demo", 
        "buyer_firstname": null, 
        "extra": {
            "channel": "Airtel", 
            "wallet_issuer_hint": "airtel"
        }, 
        "gw_invoice_id": "00091272", 
        "amount": "1.00", 
        "status": "paid", 
        "as_at": "2017-03-25T10:22:15.741484+00:00"
    }
}*/
public function CheckPaymentStatus () {

}


public function GetInvoiceByApplicantId () {

}

public function GetInvoiceStatusByApplicantId () {

}


    /*
500 Internal Server Error – We had a problem with our server. Try again later.
503 Service Uniavailable – We’re temporarily offline for maintenance. Please try again later.
GW-001  merchant_key missing or empty
GW-002  invoice_id missing or empty
GW-003  total missing or empty
GW-004  invoice secret missing or empty
GW-005  non-unique invoice or invoice could not be retrieved
GW-006  no payment option provided
GW-007  invalid payment option
GW-008  specified merchant_key not valid for current site

*/



}
