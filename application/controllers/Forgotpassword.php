<?php

include('smtp/PHPMailerAutoload.php');
defined('BASEPATH') OR exit('No direct script access allowed');
class Forgotpassword extends CI_Controller {
    
    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->helper('date');
        $this->load->library('form_validation','email');
        $this->load->model('Gsr');
        $this->load->library('session');
    }

   

public function forgot(){
  // $data['id']= $this->session->userdata('id');
  // $data['name'] = $this->Gsr->getname($data['id']);

        $this->load->view('header');
        $this->load->view('forgot');
       // $this->load->view('footer');
    }  
     public function recover(){
      
     
        $this->load->view('header');
        $this->load->view('forgot');
       // $this->load->view('footer');
    }

    public function sendmail($to, $subject, $message) {

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
                              <span style="font-weight: 700;"></span>
                            </span>
                          </td>

                        </tr>
                        <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$message['msg'].'</span>
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
                        return  'Sent';
                    }
        }

    public function recover_password(){
       // $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');

            if($this->Gsr->email_exists()){
              $email = $this->input->post('email');
           
              // $data = [
              //   'fname' =>$this->input->post('fname'),
              //   'lname' => $this->input->post('lname'),
              // ];
              // echo "<pre>";
              // print_r($data);
              // exit;
          
                $temp_pass = md5(uniqid());
                $to = $email;
                $subject  = 'Reset Your Password for Global Shippers Rwanda';
                $message['msg'] = "<p>Dear User</p>
                <p>We're here to help! It seems you've forgotten your login password for your account on Global Shippers Rwanda. Don't worry, it happens to the best of us!</p>
                <p>To regain access to your account, we've sent a verification link to the email address associated with your account: </p>
                                        <p class='forgotemail'><a href='".base_url()."Forgotpassword/reset_password/".$temp_pass."' style='color:blue;'> Click here </a>Please click on the link to reset your password.</p>
                                        <p>Once you've clicked the link, you'll be redirected to a page where you can enter and confirm a new password. Make sure to choose a strong and unique password that's easy for you to remember.</p>
                                        <p>Please note: The verification link is only valid for 24 hours and will expire after that time. If you don't receive the email or have any issues with the reset process, please feel free to contact our support team.</p>
                                        <p>We're committed to ensuring the security of your account and data. If you have any questions or concerns, please don't hesitate to reach out.</p>
                                        <p>Best regards,</p>
                                        <span>The Global Shippers Rwanda Team</span>
                                        ";
               // $this->email->message($message);
               $testData = $this->sendmail($to, $subject, $message);
                if($testData=='Sent'){
                    if($this->Gsr->temp_reset_password($temp_pass)){
                      $this->session->set_flashdata('message','check your email for instructions, thank you !');
                      redirect('users/forgot');
                    }
                }
                else{
                  $this->session->set_flashdata('message','email was not sent, please contact your administrator!');
                  redirect('users/forgot');
                }
    
            }else{
              $this->session->set_flashdata('message','your email is not in our database !');
              redirect('users/forgot');
            }
    }
  
    public function reset_password($temp_pass){
        if($this->Gsr->is_temp_pass_valid($temp_pass)){
            $data['temp_pass'] = $temp_pass;
            $this->load->view('header');
            $this->load->view('change_password',$data);
           // $this->load->view('footer');
    
        }else{
            echo "the key is not valid";    
        }
    
    }
    public function update_password(){
        $this->load->library('form_validation');
            $this->form_validation->set_rules('pass', 'Password', 'required|trim|min_length[8]');
            $this->form_validation->set_rules('cpass', 'Confirm Password', 'required|trim|min_length[8]|matches[pass]');
                if($this->form_validation->run()){
                  $temp_password=  $this->input->post('temp_password');
                  $password=  $this->input->post('pass');
                 $result = $this->Gsr->update_password($temp_password,$password);
                 if($result){
                  $this->session->set_flashdata('message','Your password updated successfully please login !');
                  redirect('login');
                   // redirect('login','refresh');
                    
                 }
                 $this->session->set_flashdata('message','Your confirm password do not  match please try again !');
                  redirect('Forgotpassword/update_password');
                
                }else{
                  $this->session->set_flashdata('message','Your key is not valid !');
                  redirect('Forgotpassword/update_password');  
                }
    }
}
    ?>