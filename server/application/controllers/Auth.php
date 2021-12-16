<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * To perform authentication and session management
 *
 * */
class Auth extends CI_Controller {

    protected $returnData = [];

    public function __construct() {

        parent::__construct();

        //$this->load->library('session');
        $this->load->database();
        $this->load->dbforge();
        $this->load->helper('url');
        $this->load->library('Aauth');
        //$this->load->library('encryption');

        $this->load->model('User_model', 'user');
        $this->user->email = $this->input->post('email');
        $this->user->password = $this->input->post('password');
        $this->user->remember = $this->input->post('remember');
        $this->user->username = $this->input->post('username');
        $this->user->userId = $this->input->post('userId');

        if (empty($this->user->username)) {
            $this->user->username = explode("@", $this->user->email)[0]; //slash the email
        }
    }

    // Views

    public function Login_Register() {
        $this->load->view('layout/login.php');
    }

    public function PasswordReset() {
        $this->load->view('layout/passwordreset.php');
    }

    public function PasswordResetConfirmation() {
        $this->load->view('layout/passwordresetconfirmation.php');
    }

    public function changePassword() {
        $this->load->view('layout/changepassword.php');
    }

    public function Admin() {
        $this->load->view('layout/login.php');
    }

    // Backend codes

    public function Erorr404() {
        // $this->load->view('layout/login.php');
    }

    //Index is the default page layout
    public function Login() {

        $returnData = array();
        //print_r($this->user);
        //die($this->user->password);
        //die($this->user->email);

        if ($this->aauth->login($this->user->email, $this->user->password, $this->user->remember)) {

            $returnData["msg"] = "Login successful";
            $returnData["Succeeded"] = true;
            //get user id
            $this->db->where('email', $this->user->email);
            $result = $this->db->get("aauth_users");
            $returnData['uid'] = $result->row()->id;
            $returnData['email'] = $this->user->email;
            //Return the groups the user belongs to
            //get the groups name
            $groups = $this->aauth->get_user_groups($result->row()->id);
            $group_name = array();
            $i = 0;
            foreach ($groups as $group) {
                $group_name[$i] = $group->name;
                $i++;
            }

            $returnData['accounttype'] = $group_name;

            // die( $returnData['uid']);
        } else {

            $returnData["msg"] = 'Login failed';
            $returnData["Succeeded"] = false;
        }
        echo json_encode($returnData);
    }

    public function Logout() {
        $this->aauth->logout();
        $returnData["msg"] = "Login successful";
        $returnData["Succeeded"] = true;
        echo json_encode($returnData);
    }

    public function Register() {

        if ($this->aauth->create_user($this->user->email, $this->user->password,
                $this->user->username)) {
            $returnData["msg"] = "Account creation successful";
            $returnData["Succeeded"] = true;
            echo json_encode($returnData);
            return;
        }
        $returnData["msg"] = "Account creation failed";
        $returnData["Succeeded"] = false;
        echo json_encode($returnData);
    }

    public function DeleteAccount() {
        $this->delete_user($user_id);
    }

    public function UpdateAccount() {
        //Todo get user id
    }

    public function ProcessPasswordChange() {
        // get the session id
        $encrypt_text = $this->user->userId;
        //echo $encrypt_text;
        //return;
        
        
        $query = $this->db->get("passwordreset");
        $result = $query->result()[0];
        //print_r($query);
        //print_r($result);
        //return;
        
        if (!empty($result)) {
            // user validated 
            if ($this->aauth->update_user($result->userid, $result->email,
                    $this->user->password)) {
                        
                // delete reset token from passwordreset table
                $this->db->where("resettoken", $encrypt_text);
                $this->db->delete("passwordreset");
                
                $returnData["msg"] = "Reset successful";
                $returnData["Succeeded"] = true;
                echo json_encode($returnData);
                return;
            }
        }

        // $returnData["msg"] = "Reset failed";
        $returnData["Succeeded"] = false;
        echo json_encode($returnData);
        return;
    }

    public function ResetPassword() {
        // check if user exist
        $userId = $this->aauth->get_user_id($this->user->email);
        try {
            if ($userId > 0) {
                // user exist
                // generate new key to encrypt user email
                $key = bin2hex($this->encryption->create_key(16));

                $this->encryption->initialize(
                        array(
                            'cipher' => 'aes-256',
                            'mode' => 'ctr',
                            'key' => $key,
                        )
                );
                $ciphertext = $this->encryption->encrypt($this->user->email);

                $data = array('id' => null, 'userid' => $userId, 'resettoken' => $ciphertext, 
                    'enckey' => $key, 'email' => $this->user->email);

                // token
                $this->db->insert('passwordreset', $data);
                if ($this->db->affected_rows() > 0) {
                    //success inserting data to database
                   // $link = "http://anucportal.anuc.edu.gh/Auth/changePassword?id=" . $ciphertext;
                   $link = "http://anucportal.cypherzone.xyz/Auth/changePassword#!/?id=" . $ciphertext;
                    // generate email
                    if ($this->phpmailer($link)) {
                        //print_r("here");
                        //return;
                        $returnData = array();
                        $returnData["msg"] = "Reset link have been sent to your email";
                        $returnData["Succeeded"] = true;
                        echo json_encode($returnData);

                        return;
                    }
                }
            }
        } catch (Exception $e) {
            
        }

        // reset failed;
        // remove data from passwordreset table
        $this->db->delete('passwordreset', array('userid' => $userId));

        $returnData = array();
        $returnData["msg"] = "Password reset failed, try again later";
        $returnData["Succeeded"] = false;

        echo json_encode($returnData);
    }

    function phpmailer($link) {
        $this->load->library("PhpMailerLib");
        $mail = $this->phpmailerlib->load();
        try {
            $mail->isSMTP();

            //Server settings
            //$mail->SMTPDebug = 1; // Enable verbose debug output
            // Set mailer to use SMTP
            //  $mail->Host = 'mail.cypherzone.xyz';  // Specify main and backup SMTP servers
            //  $mail->SMTPAuth = true;                               // Enable SMTP authentication
            //  $mail->Username = 'admin@cypherzone.xyz';                         // SMTP username
            //  $mail->Password = '#Achiah376@';                         // SMTP password
            //  // $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            //  $mail->Port = 465;                                    // TCP port to connect to
            $mail->isSMTP(true); // telling the class to use SMTP
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ),
            );
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'tls://smtp.gmail.com';

            //$mail->Host =  'smtp.gmail.com';  //gmail SMTP server
            //$mail->Host = gethostbyname('smtp.gmail.com');
            $mail->SMTPAuth = true;
            $mail->Username = 'antiamoah890@gmail.com'; //username
            $mail->Password = 'alfred890'; //password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            //Recipients
            //$mail->setFrom('noreply@cypherzone.xyz', 'Anuc online application portal');
            $mail->setFrom('antiamoah890@gmail.com', 'Anuc online application portal');
            $mail->addAddress($this->user->email); // Add a recipient
            //$mail->addAddress('RECEIPIENTEMAIL02');               // Name is optional
            $mail->addReplyTo('antiamoah890@gmail.com', 'No Reply');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            //Content
            $mail->isHTML(true);
            // Set email format to HTML
            $mail->Subject = 'Password Reset';
            $mail->Body = $this->getHtmlMailTemplate($link);
            $mail->AltBody = 'You will need a chrome or firefox browser to be able to read.';

            $mail->send();
            //echo 'Message has been sent';
            return true;
        } catch (Exception $e) {
            //echo 'Message could not be sent.';
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
        return false;
    }

    function getHtmlMailTemplate($link) {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="format-detection" content="telephone=no" /> <!-- disable auto telephone linking in iOS -->
        <title>ANUC online portal mail at your service</title>
        <style type="text/css">
        /* RESET STYLES */
        html { background-color:#E1E1E1; margin:0; padding:0; }
        body, #bodyTable, #bodyCell, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;font-family:Helvetica, Arial, "Lucida Grande", sans-serif;}
        table{border-collapse:collapse;}
        table[id=bodyTable] {width:100%!important;margin:auto;max-width:500px!important;color:#7A7A7A;font-weight:normal;}
        img, a img{border:0; outline:none; text-decoration:none;height:auto; line-height:100%;}
        a {text-decoration:none !important;border-bottom: 1px solid;}
        h1, h2, h3, h4, h5, h6{color:#5F5F5F; font-weight:normal; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left; letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;}

        /* CLIENT-SPECIFIC STYLES */
        .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
        table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
        #outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
        img{-ms-interpolation-mode: bicubic;display:block;outline:none; text-decoration:none;} /* Force IE to smoothly render resized images. */
        body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; font-weight:normal!important;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
        .ExternalClass td[class="ecxflexibleContainerBox"] h3 {padding-top: 10px !important;} /* Force hotmail to push 2-grid sub headers down */

        /* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */

        /* ========== Page Styles ========== */
        h1{display:block;font-size:26px;font-style:normal;font-weight:normal;line-height:100%;}
        h2{display:block;font-size:20px;font-style:normal;font-weight:normal;line-height:120%;}
        h3{display:block;font-size:17px;font-style:normal;font-weight:normal;line-height:110%;}
        h4{display:block;font-size:18px;font-style:italic;font-weight:normal;line-height:100%;}
        .flexibleImage{height:auto;}
        .linkRemoveBorder{border-bottom:0 !important;}
        table[class=flexibleContainerCellDivider] {padding-bottom:0 !important;padding-top:0 !important;}

        body, #bodyTable{background-color:#E1E1E1;}
        #emailHeader{background-color:#E1E1E1;}
        #emailBody{background-color:#FFFFFF;}
        #emailFooter{background-color:#E1E1E1;}
        .nestedContainer{background-color:#F8F8F8; border:1px solid #CCCCCC;}
        .emailButton{background-color:#205478; border-collapse:separate;}
        .buttonContent{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
        .buttonContent a{color:#FFFFFF; display:block; text-decoration:none!important; border:0!important;}
        .emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
        .emailCalendarMonth{background-color:#205478; color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
        .emailCalendarDay{color:#205478; font-family:Helvetica, Arial, sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
        .imageContentText {margin-top: 10px;line-height:0;}
        .imageContentText a {line-height:0;}
        #invisibleIntroduction {display:none !important;} /* Removing the introduction text from the view */

        /*FRAMEWORK HACKS & OVERRIDES */
        span[class=ios-color-hack] a {color:#275100!important;text-decoration:none!important;} /* Remove all link colors in IOS (below are duplicates based on the color preference) */
        span[class=ios-color-hack2] a {color:#205478!important;text-decoration:none!important;}
        span[class=ios-color-hack3] a {color:#8B8B8B!important;text-decoration:none!important;}
        /* A nice and clean way to target phone numbers you want clickable and avoid a mobile phone from linking other numbers that look like, but are not phone numbers.  Use these two blocks of code to "unstyle" any numbers that may be linked.  The second block gives you a class to apply with a span tag to the numbers you would like linked and styled.
        Inspired by Campaign Monitor\'s article on using phone numbers in email: http://www.campaignmonitor.com/blog/post/3571/using-phone-numbers-in-html-email/.
            */
        .a[href^="tel"], a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:none!important;cursor:default!important;}
        .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:auto!important;cursor:default!important;}


        /* MOBILE STYLES */
        @media only screen and (max-width: 480px){
            /*////// CLIENT-SPECIFIC STYLES //////*/
            body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */

            /* FRAMEWORK STYLES */
            /*
            CSS selectors are written in attribute
            selector format to prevent Yahoo Mail
            from rendering media query styles on
            desktop.
                */
            /*td[class="textContent"], td[class="flexibleContainerCell"] { width: 100%; padding-left: 10px !important; padding-right: 10px !important; }*/
            table[id="emailHeader"],
            table[id="emailBody"],
            table[id="emailFooter"],
            table[class="flexibleContainer"],
            td[class="flexibleContainerCell"] {width:100% !important;}
            td[class="flexibleContainerBox"], td[class="flexibleContainerBox"] table {display: block;width: 100%;text-align: left;}
            /*
            The following style rule makes any
            image classed with \'flexibleImage\'
            fluid when the query activates.
            Make sure you add an inline max-width
            to those images to prevent them
            from blowing out.
                */
            td[class="imageContent"] img {height:auto !important; width:100% !important; max-width:100% !important; }
            img[class="flexibleImage"]{height:auto !important; width:100% !important;max-width:100% !important;}
            img[class="flexibleImageSmall"]{height:auto !important; width:auto !important;}


            /*
            Create top space for every second element in a block
                */
            table[class="flexibleContainerBoxNext"]{padding-top: 10px !important;}

            /*
            Make buttons in the email span the
            full width of their container, allowing
            for left- or right-handed ease of use.
                */
            table[class="emailButton"]{width:100% !important;}
            td[class="buttonContent"]{padding:0 !important;}
            td[class="buttonContent"] a{padding:15px !important;}

        }

        /*  CONDITIONS FOR ANDROID DEVICES ONLY
            *   http://developer.android.com/guide/webapps/targeting.html
            *   http://pugetworks.com/2011/04/css-media-queries-for-targeting-different-mobile-devices/ ;
        =====================================================*/

        @media only screen and (-webkit-device-pixel-ratio:.75){
            /* Put CSS for low density (ldpi) Android layouts in here */
        }

        @media only screen and (-webkit-device-pixel-ratio:1){
            /* Put CSS for medium density (mdpi) Android layouts in here */
        }

        @media only screen and (-webkit-device-pixel-ratio:1.5){
            /* Put CSS for high density (hdpi) Android layouts in here */
        }
        /* end Android targeting */

        /* CONDITIONS FOR IOS DEVICES ONLY
        =====================================================*/
        @media only screen and (min-device-width : 320px) and (max-device-width:568px) {

        }
        /* end IOS targeting */
        </style>
        <!--
        Outlook Conditional CSS

        These two style blocks target Outlook 2007 & 2010 specifically, forcing
        columns into a single vertical stack as on mobile clients. This is
        primarily done to avoid the \'page break bug\' and is optional.

        More information here:
        http://templates.mailchimp.com/development/css/outlook-conditional-css
        -->
        <!--[if mso 12]>
        <style type="text/css">
        .flexibleContainer{display:block !important; width:100% !important;}
        </style>
        <![endif]-->
        <!--[if mso 14]>
        <style type="text/css">
        .flexibleContainer{display:block !important; width:100% !important;}
        </style>
        <![endif]-->
        </head>
        <body bgcolor="#E1E1E1" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

        <!-- CENTER THE EMAIL // -->
        <!--
        1.  The center tag should normally put all the
        content in the middle of the email page.
        I added "table-layout: fixed;" style to force
        yahoomail which by default put the content left.

        2.  For hotmail and yahoomail, the contents of
        the email starts from this center, so we try to
        apply necessary styling e.g. background-color.
        -->
        <center style="background-color:#E1E1E1; background: url(\'http://localhost:8080/public/assets/images/anucbg_big1.JPG\');">
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;">
        <tr>
        <td align="center" valign="top" id="bodyCell">

        <!-- EMAIL HEADER // -->
        <!--
        The table "emailBody" is the email\'s container.
        Its width can be set to 100% for a color band
        that spans the width of the page.
        -->
        <table bgcolor="#E1E1E1" border="0" cellpadding="0" cellspacing="0" width="500" id="emailHeader">

        <!-- HEADER ROW // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="10" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td valign="top" width="500" class="flexibleContainerCell">

        <!-- CONTENT TABLE // -->
        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <!--
        The "invisibleIntroduction" is the text used for short preview
        of the email before the user opens it (50 characters max). Sometimes,
        you do not want to show this message depending on your design but this
        text is highly recommended.

        You do not have to worry if it is hidden, the next <td> will automatically
        center and apply to the width 100% and also shrink to 50% if the first <td>
        is visible.
        -->
        <td align="left" valign="middle" id="invisibleIntroduction" class="flexibleContainerBox" style="display:none !important; mso-hide:all;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
        <tr>
        <td align="left" class="textContent">
        <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
        ANUC online application system.
        </div>
        </td>
        </tr>
        </table>
        </td>
        <td align="right" valign="middle" class="flexibleContainerBox">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
        <tr>
        <td align="left" class="textContent">
        <!-- CONTENT // -->
        <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
        If you can\'t see this message, <a href="#" target="_blank" style="text-decoration:none;border-bottom:1px solid #828282;color:#828282;"><span style="color:#828282;">view&nbsp;it&nbsp;in&nbsp;your&nbsp;browser</span></a>.
        </div>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // END -->

        </table>
        <!-- // END -->

        <!-- EMAIL BODY // -->
        <!--
        The table "emailBody" is the email\'s container.
        Its width can be set to 100% for a color band
        that spans the width of the page.
        -->
        <table bgcolor="#FFFFFF"  border="0" cellpadding="0" cellspacing="0" width="500" id="emailBody">

        <!-- MODULE ROW // -->
        <!--
        To move or duplicate any of the design patterns
        in this email, simply move or copy the entire
        MODULE ROW section for each content block.
        -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <!--
        The centering table keeps the content
        tables centered in the emailBody table,
        in case its width is set to 100%.
        -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="color:#FFFFFF;" bgcolor="#3498db">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <!--
        The flexible container has a set width
        that gets overridden by the media query.
        Most content tables within can then be
        given 100% widths.
        -->
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500" class="flexibleContainerCell">

        <!-- CONTENT TABLE // -->
        <!--
        The content table is the first element
        that\'s entirely separate from the structural
        framework of the email.
        -->
        <table border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr style="background-image: url(\'http://localhost:8080/public/assets/images/emailheaderbg.jpg\');">
        <td align="center" valign="top" class="textContent">
        <h1 style="color: #ffcfb3;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size: 29px;font-weight:normal;margin-bottom:5px;text-align:center;">ANUC Online Application Portal</h1>
        <h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;"></h2>
        <div style="text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;">All Nations University College, Koforidua - Ghana</div>
        </td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // MODULE ROW -->


        <!-- MODULE ROW // -->
        <!--  The "mc:hideable" is a feature for MailChimp which allows
        you to disable certain row. It works perfectly for our row structure.
        http://kb.mailchimp.com/article/template-language-creating-editable-content-areas/
        -->
        <tr mc:hideable>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer" style="background: #ecfdff;">
        <tr>
        <td valign="top" width="500" class="flexibleContainerCell">

        <!-- CONTENT TABLE // -->
        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="left" valign="top" class="flexibleContainerBox">
        <table border="0" cellpadding="0" cellspacing="0" width="210" style="max-width: 100%;">
        <tr>
        <td align="left" class="textContent">
        <h5 style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size: 16px;font-weight: bold;margin-top:0;margin-bottom:3px;text-align:left;">
        Password Reset Request
        </h5>
        <div style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size: 14px;margin-bottom:0;padding-top: 10px;color:#5F5F5F;line-height:135%;">
        Below is a link to the password reset page. The link is only valid within 24hrs.
        </div>
        </td>
        </tr>
        </table>
        </td>
        <td align="right" valign="middle" class="flexibleContainerBox">
        <table class="flexibleContainerBoxNext" border="0" cellpadding="0" cellspacing="0" width="210" style="max-width: 100%;">
        <tr>
        <td align="left" class="textContent">
        <h5 style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size: 16px;font-weight: bold;margin-top:0;margin-bottom:3px;text-align:left;">Notice</h5>
        <div style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size: 14px;margin-bottom:0;padding-top: 10px;color:#5F5F5F;line-height:135%;">
        If you proceed to the page, your account will be locked until you finish the password request process. Your old password will not work again after clicking the link. You can always reset your password at all times.
        </div>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // MODULE ROW -->


        <!-- MODULE ROW // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" >
        <tr style="padding-top:0;">
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td style="padding-top:0;" align="center" valign="top" width="500" class="flexibleContainerCell">

        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="50%" class="emailButton"  style="background-color: #6c4fa5;border-radius: 5px; margin-top:20px">
        <tr>
        <td align="center" valign="middle" class="buttonContent" style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;">
        <a style="color:#FFFFFF;text-decoration:none;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:135%; border-radius: 100px" href="' . $link . '" target="_blank">Confirm Reset</a>
        </td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // MODULE ROW -->


        <!-- MODULE ROW // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500" class="flexibleContainerCell">
        <table border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">

        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td valign="top" class="textContent">
        <!--
        The "mc:edit" is a feature for MailChimp which allows
        you to edit certain row. It makes it easy for you to quickly edit row sections.
        http://kb.mailchimp.com/templates/code/create-editable-content-areas-with-mailchimps-template-language
        -->
        <h3 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><a href="http://anuc.edu.gh/home/latestnewsmore.html?newsId=40" target="_blank">Join!</a> the award wining school</h3>
        </td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // MODULE ROW -->


        <!-- MODULE ROW // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500" class="flexibleContainerCell">

        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td valign="top" class="imageContent">

        <img src="http://anucportal.anuc.edu.gh/public/assets/images/award.jpg" width="500" class="flexibleImage" style="max-width:500px;width:100%;display:block;" alt="Text" title="Text" />
        </td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // MODULE ROW -->

        <!-- MODULE ROW // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500" class="flexibleContainerCell">
        <table border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">

        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td valign="top" class="textContent">
        <h3 style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size: 16px;font-weight: bold;margin-top:0;margin-bottom:3px;text-align:left;"><a href="http://anuc.edu.gh/home/programhome.html" target="_blank" >Programmes Offered</h3></a>
        <div style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:13px;margin-bottom:0;margin-top:3px;color:#5F5F5F;line-height:135%;">All Nations University College has two campuses, the Main and City; and operates four Schools with thirteen Departments</div>
        </td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // MODULE ROW -->


        <!-- MODULE DIVIDER // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500" class="flexibleContainerCell">
        <table class="flexibleContainerCellDivider" border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top" style="padding-top:0px;padding-bottom:0px;">

        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top" style="border-top:1px solid #C8C8C8;"></td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // END -->


        <!-- MODULE ROW // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td valign="top" width="500" class="flexibleContainerCell">

        <!-- CONTENT TABLE // -->
        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="left" valign="top" class="flexibleContainerBox">
        <table border="0" cellpadding="0" cellspacing="0" width="210" style="max-width:100%;">
        <tr>
        <td align="left" class="textContent">
        <img src="http://anucportal.anuc.edu.gh/public/assets/images/engin.png" width="210" class="flexibleImage" style="max-width:100%;" alt="Text" title="Text" />
        <h3 style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size: 16px;font-weight: bold;margin-top:0;margin-bottom:3px;text-align:left;"><a href="http://anuc.edu.gh/home/programhome.html" target="_blanK">School of Engineering</a></h3>
        <div style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:13px;margin-bottom:0;color:#5F5F5F;line-height:135%;">The School of Engineering runs five Departments. Biomedical Engineering,Computer Engineering, Computer Science (BSc. Hons.),Electronics and Communications Engineering,Oil and Gas Engineering.</div>
        </td>
        </tr>
        </table>
        </td>
        <td align="right" valign="middle" class="flexibleContainerBox">
        <table class="flexibleContainerBoxNext" border="0" cellpadding="0" cellspacing="0" width="210" style="max-width:100%;">
        <tr>
        <td align="left" class="textContent">
        <img src="http://anucportal.anuc.edu.gh/public/assets/images/bus.png" width="210" class="flexibleImage" style="max-width:100%;" alt="Text" title="Text" />
        <h3 style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size: 16px;font-weight: bold;margin-top:0;margin-bottom:3px;text-align:left;"><a href="http://anuc.edu.gh/home/programhome.html" target="_blanK">School of Business</a></h3>
        <div style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:13px;margin-bottom:0;color:#5F5F5F;line-height:135%;">The School of Business opened its doors to the first intake of 20 students in November 2002, but today boasts of about 1,100 students, who are enrolled in regular evening and weekend programmes.</div>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // MODULE ROW -->


        <!-- MODULE DIVIDER // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500" class="flexibleContainerCell">
        <table class="flexibleContainerCellDivider" border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top" style="padding-top:0px;padding-bottom:0px;">

        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top" style="border-top:1px solid #C8C8C8;"></td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // END -->


        <!-- MODULE ROW // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td valign="top" width="500" class="flexibleContainerCell">

        <!-- CONTENT TABLE // -->
        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="left" valign="top" class="flexibleContainerBox">
        <table border="0" cellpadding="0" cellspacing="0" width="210" style="max-width:100%;">
        <tr>
        <td align="left" class="textContent">
        <h3 style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size: 16px;font-weight: bold;margin-top:0;margin-bottom:3px;text-align:left;"><a href="http://anuc.edu.gh/home/programhome.html" target="_blanK">School Of Humanities & Sciences</a></h3>
        <img src="http://anucportal.anuc.edu.gh/public/assets/images/hum.png" width="210" class="flexibleImage" style="max-width:100%;" alt="Text" title="Text" />
        <div style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:13px;margin-bottom:0;margin-top:10px;color:#5F5F5F;line-height:135%;">The School of Humanities and Sciences runs three departments; the Department of Biblical Studies, the Department of Humanities and Sciences and the Department of Nursing.</div>
        </td>
        </tr>
        </table>
        </td>
        <td align="right" valign="middle" class="flexibleContainerBox">
        <table class="flexibleContainerBoxNext" border="0" cellpadding="0" cellspacing="0" width="210" style="max-width:100%;">
        <tr>
        <td align="left" class="textContent">
        <h3 style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:10px;text-align:left;"></h3>
        <a href="http://anuc.edu.gh/home/landingjournal.html" target="_blanK"><img src="http://anucportal.anuc.edu.gh/public/assets/images/anu-journals.jpg" width="210" class="flexibleImage" style="max-width:100%;" alt="Text" title="Text" /></a>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // MODULE ROW -->


        <!-- MODULE DIVIDER // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500" class="flexibleContainerCell">
        <table class="flexibleContainerCellDivider" border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top" style="padding-top:0px;padding-bottom:0px;">

        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top" style="border-top:1px solid #C8C8C8;"></td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // END -->

        <!-- MODULE DIVIDER // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500" class="flexibleContainerCell">
        <table class="flexibleContainerCellDivider" border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top" style="padding-top:0px;padding-bottom:0px;">

        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top" style="border-top:1px solid #C8C8C8;"></td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // END -->


        <!-- MODULE ROW // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td valign="top" width="500" class="flexibleContainerCell">

        <!-- CONTENT TABLE // -->
        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="left" valign="top" class="flexibleContainerBox">
        <table class="flexibleContainerBoxNext" border="0" cellpadding="0" cellspacing="0" width="420" style="max-width:100%;">
        <tr>
        <td align="left" class="textContent">
        <a href="http://anucportal.anuc.edu.gh" target="_blank">
        <img src="http://anucportal.anuc.edu.gh/public/assets/images/applynow.png" width="500" class="flexibleImage" style="max-width:100%;" alt="Text" title="Text" />
        </a>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // MODULE ROW -->


        <!-- MODULE DIVIDER // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500" class="flexibleContainerCell">
        <table class="flexibleContainerCellDivider" border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top" style="padding-top:0px;padding-bottom:0px;">

        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top" style="border-top:1px solid #C8C8C8;"></td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // END -->


        <!-- MODULE ROW // -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500" class="flexibleContainerCell">
        <table border="0" cellpadding="30" cellspacing="0" style="
        background: #857c7d;
        " width="100%">
        <tr>
        <td align="center" valign="top">

        <!-- CONTENT TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td valign="top" class="textContent">
        <div style="text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;margin-top:3px;color:#5F5F5F;line-height:135%;">

        <a href="http://anuc.edu.gh" target="_blank"><img width="200" src="http://www.anuc.edu.gh/anuimg_container/pageimg/footermap.jpg" style="margin-left: 128px;" alt=""/ ></a>
        </div>
        </td>
        </tr>
        </table>
        <!-- // CONTENT TABLE -->

        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>
        <!-- // MODULE ROW -->

        </table>
        <!-- // END -->

        <!-- EMAIL FOOTER // -->
        <!--
        The table "emailBody" is the email\'s container.
        Its width can be set to 100% for a color band
        that spans the width of the page.
        -->
        <table bgcolor="#E1E1E1" border="0" cellpadding="0" cellspacing="0" width="500" id="emailFooter">

        <!-- FOOTER ROW // -->
        <!--
        To move or duplicate any of the design patterns
        in this email, simply move or copy the entire
        MODULE ROW section for each content block.
        -->
        <tr>
        <td align="center" valign="top">
        <!-- CENTERING TABLE // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td align="center" valign="top">
        <!-- FLEXIBLE CONTAINER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
        <tr>
        <td align="center" valign="top" width="500" class="flexibleContainerCell">
        <table border="0" cellpadding="30" cellspacing="0" width="100%">
        <tr>
        <td valign="top" bgcolor="#ecfdff">

        <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#0b8dcb;text-align:center;line-height:120%;">
        <div>Copyright &#169; 2018 <a href="http://www.anuc.edu.gh" target="_blank" style="text-decoration:none;color:#828282;"><span style="color:#828282;">ANUC</span></a>. All&nbsp;rights&nbsp;reserved.</div>
        <div>Developed by Alfred Ntiamoah (antiamoah890@gmail.com) <a href="http://www.cypherzone.xyz" target="_blank" style="text-decoration:none;color:#828282;"><span style="color:#828282;">Natlink Developers</span></a>.</div>
        <div>If you do not want to recieve email again you can<a href="http://www.cypherzone.xyz" target="_blank" style="text-decoration:none;color:#828282;"><span style="color:#828282;">  unsubscribe</span></a>.</div>
        </div>

        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <!-- // FLEXIBLE CONTAINER -->
        </td>
        </tr>
        </table>
        <!-- // CENTERING TABLE -->
        </td>
        </tr>

        </table>
        <!-- // END -->

        </td>
        </tr>
        </table>
        </center>
        </body>
        </html>';
    }

}
