<?php
include('smtp/PHPMailerAutoload.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);
class Prohibited extends CI_Controller {

public function __construct() {
parent::__construct();
$this->load->database();
$this->load->helper(array('form', 'url','html'));
$this->load->library('form_validation','email');
$this->load->model('Shopnship_model');
$this->load->model('Payment_model');
$this->load->model('Prohibited_model');
$this->load->model('Admin_model');
$this->load->model('Gsr');
$this->load->library('session');
}
public function index(){
$data['email'] = $this->Gsr->users_details();
$data['meta_title'] = "";
$data['meta_desc'] = "";
$data['meta_key'] ="";
$data['canonical_tags'] ="https://globalshippersrwanda.com/contact-us";
$this->load->view('prohibited/header',$data);
$this->load->view('prohibited/prohibited_view');
$this->load->view('prohibited/footer');
}

public function sendmail($to, $subject, $text) {

$html = '<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <style type="text/css">
      @media screen and (max-width: 600px),
      screen and (max-device-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
  a{
  color: #000;
  text-decoration:none;
  }
    </style>
  </head>
  <body style="margin: 0; padding: 0; border: 0;">
    <table width="100%" align="center" cellpadding="0" cellspacing="0"
      border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
      <tbody>
        <tr>
          <td align="center" valign="top"
            style="margin: 0; padding: 0px 15px 0px;">
            <table width="600" align="center" border="0" cellspacing="0"
              cellpadding="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td align="center" valign="center"
                    style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px; margin: 0px;">
                            <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"
                    style="margin: 0; padding: 0;">
                    <table width="100%" align="center" border="0"
                      cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                      <tbody>
                       <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$text['msg'].'</span>
                            </span>
                          </td>

                        </tr>
                       
                      </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0"
                      style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                      <tr>
                        <td style="background: #ffffff;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; margin: 0px;
                                  font-size: 40px; color: #000000; font-weight:
                                  bold;">
                               
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                  <span style="font-family: "Lato" ,Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 16px;">
                                   
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                  <a href="https://globalshippersrwanda.com/"
                                    style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; color:
                                    #ffffff; background-color: #000000;
                                    border-color: #000000; text-decoration:
                                    none; border-radius: 4px;">Visit Website</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style="background:#ffffff;">
                    <table width="600">
                      <tr>
                        <td align="center"
                          style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif; line-height:
                                  22px;">
                              
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center"
                          style="padding: 0px 0px 20px 0; background:#ffffff;">
                          <table width="300" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/privacy"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Privacy Policy</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href ="https://globalshippersrwanda.com/about-us"
                                    style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">About Us</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/contact-us"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Contact US</span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "mail.privateemail.com";
$mail->Port = 587;
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';
//$mail->SMTPDebug = 2;
$mail->Username = EMAIL_SMTP_GOOGLE; 
$mail->Password = PASSWORD_SMTP_GOOGLE;
 $mail->SetFrom("services@globalshippersrwanda.com");
$mail->Subject = $subject;
$mail->Body =$html;
$mail->AddAddress($to);
$mail->SMTPOptions=array('ssl'=>array (
'verify_peer'=>false,
'verify_peer_name'=>false,
'allow_self_signed'=>false
));
if(!$mail->Send()){
echo $mail->ErrorInfo;
}else{
return 'Sent';
}
}



public function adminsendmail($adminto, $adminsubject, $admintext) {

  $html = '<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Email Template</title>
      <style type="text/css">
        @media screen and (max-width: 600px),
        screen and (max-device-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
        @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
    a{
    color: #000;
    text-decoration:none;
    }
      </style>
    </head>
    <body style="margin: 0; padding: 0; border: 0;">
      <table width="100%" align="center" cellpadding="0" cellspacing="0"
        border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
        <tbody>
          <tr>
            <td align="center" valign="top"
              style="margin: 0; padding: 0px 15px 0px;">
              <table width="600" align="center" border="0" cellspacing="0"
                cellpadding="0" style="width: 600px;">
                <tbody>
                  <tr>
                    <td align="center" valign="center"
                      style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0">
                        <tbody>
                          <tr>
                            <td valign="top" align="center"
                              style="padding: 0px; margin: 0px;">
                              <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                  style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr> 
                    <td align="center" valign="top"
                      style="margin: 0; padding: 0;">
                      <table width="100%" align="center" border="0"
                        cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                        <tbody>
                         <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                    255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;">'.$admintext['msg'].'</span>
                              </span>
                            </td>
  
                          </tr>
                         
                        </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0"
                        style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                        <tr>
                          <td style="background: #ffffff;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; margin: 0px;
                                    font-size: 40px; color: #000000; font-weight:
                                    bold;">
                                 
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                    <span style="font-family: "Lato" ,Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 16px;">
                                     
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                    <a href="https://globalshippersrwanda.com/"
                                      style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; color:
                                      #ffffff; background-color: #000000;
                                      border-color: #000000; text-decoration:
                                      none; border-radius: 4px;">Visit Website</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
  
                  <tr>
                    <td style="background:#ffffff;">
                      <table width="600">
                        <tr>
                          <td align="center"
                            style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif; line-height:
                                    22px;">
                                
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="center"
                            style="padding: 0px 0px 20px 0; background:#ffffff;">
                            <table width="300" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/privacy"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Privacy Policy</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href ="https://globalshippersrwanda.com/about-us"
                                      style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">About Us</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/contact-us"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Contact US</span>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </body>
  </html>';
  
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Host = "mail.privateemail.com";
  $mail->Port = 587;
  $mail->IsHTML(true);
  $mail->CharSet = 'UTF-8';
  //$mail->SMTPDebug = 2;
  $mail->Username = EMAIL_SMTP_GOOGLE; 
  $mail->Password = PASSWORD_SMTP_GOOGLE;
   $mail->SetFrom("services@globalshippersrwanda.com");
  $mail->Subject = $adminsubject;
  $mail->Body =$html;
  $mail->AddAddress($adminto);
  $mail->SMTPOptions=array('ssl'=>array (
  'verify_peer'=>false,
  'verify_peer_name'=>false,
  'allow_self_signed'=>false
  ));
  if(!$mail->Send()){
  echo $mail->ErrorInfo;
  }else{
  return 'Sent';
  }
  }

public function contact(){

$data = $formData = array();
$captcha_response = $this->input->post('g-recaptcha-response');
if($captcha_response != ''){
$keySecrete  = '6LefsQkqAAAAAI5rcqxQk6mdK6b2CcjO2Yr3pTj-';
$check  = array(
  'secret' => $keySecrete,
  'response' => $this->input->post('g-recaptcha-response')
);
$startProcess = curl_init();
curl_setopt($startProcess, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($startProcess, CURLOPT_POST,true);
curl_setopt($startProcess, CURLOPT_POSTFIELDS,http_build_query($check));
curl_setopt($startProcess,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($startProcess,CURLOPT_RETURNTRANSFER,true);
$receiveData = curl_exec($startProcess);
$finalResponse = json_decode($receiveData,true);
if($finalResponse){
  if($this->input->post('submit')){
    $formData = $this->input->post();
    $this->form_validation->set_rules('fname', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('mob', 'Contact Number', 'required');
    $this->form_validation->set_rules('message', 'Message', 'required');
    if($this->form_validation->run() == true){
    $text = array(
    'name' => $formData['fname'],
    'email' => $formData['email'],
    'phone' => $formData['mob'],
    'message' => $formData['message']
    );
    $adminemail = $this->input->post('adminemail');
                    $to = $text['email'];
                    $subject  = 'Your Message to Global Shippers Rwanda';
                    $text['msg'] = "<p>Dear ".$text['name']."</p>
                    <p>Thank you for reaching out to Global Shippers Rwanda through our website! We appreciate the time you took to share your message with us. We're thrilled to hear from you and grateful for the opportunity to assist you.</p>
                    <p>Our team will review your inquiry and respond to you shortly. We'll be in touch with you soon to discuss your needs and provide a solution that meets your requirements.</p>
                    <p>In the meantime, if you have any urgent questions or concerns, please don't hesitate to contact us. We're here to help.</p>
                    <p>Thank you again for choosing Global Shippers Rwanda, and we look forward to connecting with you soon.</p>
                      <p>Best regards,</p>
                     <span>Global Shippers Rwanda Team</span>";
                     
                    $adminto = $adminemail;
                    $adminsubject  = "New Inquiry from ".$text['name']." - GlobalShippersRwanda";
                    $admintext['msg'] = "Dear Admin</p>
                    <p>We have received a new inquiry from ".$text['name']." through our website's contact form. Below are the details provided by the customer:</p>
                    <p>Customer Details:</p>
                    <p>Full Name: ".$text['name']."</p>
                    <p>Email: ".$text['email']."</p>
                    <p>Mobile Number: ".$text['phone']."</p>
                    <p>Customer Message:</p>
                     <p>".$text['message']."</p>
                     <p>We would appreciate it if you could follow up with the customer promptly to address their inquiry. If you need any assistance or clarification, please do not hesitate to reach out to us.</p>
                      <p>Thank you for your time and effort in responding to this inquiry.</p>
                    <p>Best regards,</p>
                    <span>Global Shippers Rwanda Team</span>";  
                    $testData = $this->sendmail($to, $subject, $text);
                    $admintestData = $this->adminsendmail($adminto, $adminsubject, $admintext);
                      if($testData){
                        $this->session->set_flashdata('message', 'Your Request send Successfully !');
                      }
                    else{
                      $this->session->set_flashdata('message', 'Your Request is not send please try again !');
                    }
                }
            } 
            
            else {
    
            }
            // $data['postData'] = $formData;
            // $data['contact'] = $this->Admin_model->getcontact();
            $data['adminemail'] = $this->Gsr->getadminemail();
            $data['high'] = '4';
            $data['meta_title'] = "";
            $data['meta_desc'] = "";
            $data['meta_key'] ="";
            $data['canonical_tags'] ="https://globalshippersrwanda.com/contact-us";
            $this->load->view('homepage/header',$data);
            $this->load->view('prohibited/contact-us',$data);
            $this->load->view('homepage/footer');
}
else{
  $data['adminemail'] = $this->Gsr->getadminemail();
  $data['high'] = '4';
  $data['meta_title'] = "";
  $data['meta_desc'] = "";
  $data['meta_key'] ="";
  $data['canonical_tags'] ="https://globalshippersrwanda.com/contact-us";
  $this->load->view('homepage/header',$data);
  $this->load->view('prohibited/contact-us',$data);
  $this->load->view('homepage/footer');
}
}
else{
//$this->session->set_flashdata('message','Validate fail try again');
$data['adminemail'] = $this->Gsr->getadminemail();
            $data['high'] = '4';
            $data['meta_title'] = "";
            $data['meta_desc'] = "";
            $data['meta_key'] ="";
            $data['canonical_tags'] ="https://globalshippersrwanda.com/contact-us";
            $this->load->view('homepage/header',$data);
            $this->load->view('prohibited/contact-us',$data);
            $this->load->view('homepage/footer');
}

    }

 
  
    public function faq(){
        $data['email'] = $this->Gsr->users_details();
        $this->load->view('prohibited/header',$data);
        $this->load->view('prohibited/faq');
        $this->load->view('prohibited/footer'); 
    }
    public function how_it_works_sns(){
        $data['email'] = $this->Gsr->users_details();
        $this->load->view('prohibited/header',$data);
        $this->load->view('prohibited/how_it_works_sns');
        $this->load->view('prohibited/footer'); 
    }

    public function how_it_works_assisted(){
        $data['email'] = $this->Gsr->users_details();
        $this->load->view('prohibited/header',$data);
        $this->load->view('prohibited/how_it_works-assisted_sns');
        $this->load->view('prohibited/footer'); 
    }
   
}?>