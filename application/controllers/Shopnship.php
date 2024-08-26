<?php
include('smtp/PHPMailerAutoload.php');

use Dompdf\Dompdf;
class Shopnship extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper(array('form', 'url','html','string'));
        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->model('Shopnship_model');
        $this->load->model('Payment_model');
        $this->load->model('Admin_model');
        $this->load->model('Gsr');
        //$this->load->helper('string');
        $this->load->library('session');
      $this->load->library('pdf');
        $this->load->library('pagination');
     }

     public function sendmail($to, $subject, $data) {
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
                              <span style="font-weight: 700;">'.$data['msg'].'</span>
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
                        //$mail->addBcc("anishaiert1996@gmail.com");
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

        public function adminsendmail($adminto, $adminsubject, $admindata) {
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
                                      <span style="font-weight: 700;">'.$admindata['msg'].'</span>
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
                                //$mail->addBcc("anishaiert1996@gmail.com");
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

        

     public function assisted_shopnship_item_insert(){
                if($this->session->userdata('id'))
                {
                   
                    // $assisted_id =md5(rand(0,100)); 
                    $assisted_id = rand(0, 9999999);
                    $users = [
                      'email' => $this->input->post('useremail'),
                      'fname' => $this->input->post('userfname'),
                      'lname' => $this->input->post('userlname'),
                      'phone' => $this->input->post('userphone'),
                    ];
                    $adminemail = $this->input->post('adminemail');
                    // echo "<pre>";
                    // print_r($adminemail);
                    // exit;
                    $count = count($this->input->post('item_type'));   
                    for($i=0;$i<$count;$i++){
                      
                        $data =[
                            'user_id'           => $this->session->userdata('id'),
                            'product_type'      => $this->input->post('item_type'.'['.$i.']'),
                            'order_sub_type'    => $this->input->post('order_sub_type'),
                            'courier_type'      => $this->input->post('courier_type'),
                            'product_name'      => $this->input->post('package_name'.'['.$i.']'),
                            'store'             => $this->input->post('store'.'['.$i.']'),
                            'color'             => $this->input->post('color'.'['.$i.']'),
                            'size'              => $this->input->post('size'.'['.$i.']'),
                            'quantity'          => $this->input->post('quantity'.'['.$i.']'),
                            'total_amount'      => $this->input->post('totalprice'.'['.$i.']'),
                            'single_item_amount'      => $this->input->post('price'.'['.$i.']'),
                            'grand_total'       => $this->input->post('assested_price'),
                            'remark'            => $this->input->post('remark'),
                            'assisted_country_id'=> $this->input->post('country_id'),
                           // 'order_id'          => $this->input->post('order_id'.'['.$i.']'),
                            'assisted_id'       => $assisted_id,
                            'address_id'        => $this->input->post('address_id'),
                            'created_date'      => date('Y-m-d H:i:s'),
                           // 'tracking_number'   => '-',
                           // 'order_status'      => '1'
                            ];
                            if(!empty($this->input->post('address_id'))) {
                                $record= 1;
                        }
                        else{
                            $record = [
                                'user_id'        => $this->session->userdata('id'),
                                'fname'          => $this->input->post('first_name'),
                                'lname'          => $this->input->post('last_name'),
                                //'phone_number'  => $this->input->post('phone_number'),
                                'street_address' => $this->input->post('street_address'),
                                'gate_code'      => $this->input->post('gate_code'),
                                'city'          => $this->input->post('city'),
                                'state'         => $this->input->post('state'),
                                'country'       => $this->input->post('country'),
                                'pin_code'      => $this->input->post('pin'),
                            ]; 
                        }
                          
                           $result = $this->Shopnship_model->assisted_insert_data($record,$data);
                            echo json_encode($result);
                             
                     }  

                     $notification = [
                        'user_id'           => $this->session->userdata('id'),
                        'order_id'      => $assisted_id, 
                        'content'       => ' Created new order',
                        'order_type'    => '2',
                        'notification_type' => '0',
                        'created_time'      => date('Y-m-d H:i:s')
    
                    ];
                    $datetime = strtotime($data['created_date']);
                    $convertdate = date("d M,y",$datetime);
                    $to = $users['email'];
                    $subject  = 'Order Confirmation - Buy for me: '.$data['assisted_id'].' - '.$users['fname'].' '.$users['lname'].'';
                    $data['msg'] = "<p>Dear ".$users['fname'].' '.$users['lname']."</p>
                    <p>Thank you for creating a new order on Global Shippers Rwanda! We're excited to inform you that your order has been successfully received and is being processed.</p>
                    <p>Order Details:</p>
                    <p>Order Number: ".$data['assisted_id']."</p>
                    <p>Order Date: ".$convertdate."</p>
                    <p>Total Items: ".$data['quantity']."</p>
                    <p>Order details: <a href=".base_url()."users/assisted-order-details/".$data['assisted_id'].">click here</a></p>
                    <p>You have chosen to Buy for me with other orders to reduce shipping costs. This may take a few days to process, and we will keep you updated on the status of your shipment via email.</p>
                    <p>Please note that our customer service team will be in touch with you if there are any issues or concerns with your order. You can also track the status of your shipment on our website using the tracking number provided above.</p>
                    <p>Thank you for choosing Global Shippers Rwanda. If you have any questions or concerns, please don't hesitate to reach out to us.</p>
                    <p>Best regards,</p>
                    <span>Global Shippers Rwanda Team</span>
                    ";
                    $adminto = $adminemail;
                    $adminsubject  = 'New Order Notification - Buy for me - '.$data['assisted_id'].'';
                    $admindata['msg'] = "<p>Dear Admin,</p>
                    <p>We are pleased to inform you that a new order has been placed on our website, Globalshipppersrwanda.com. The order details are as follows:</p>
                    <p>Order Information:</p>
                    <p>Order Number: ".$data['assisted_id']."</p>
                    <p>Customer Name: ".$users['fname']." ".$users['lname']."</p>
                    <p>Order Date: ".$convertdate."</p>
                    <p>Order details: <a href=".base_url()."assisted-order-details/".$data['assisted_id'].">click here</a></p>
                    <p>Products Ordered:</p>
                    <p>Quantity:".$data['quantity']."</p>
                    <p>Price:".$data['grand_total']." ".'USD'."</p>
                    <p>Customer Contact Information:</p>
                    <p>Email: ".$users['email']."</p>
                    <p>Phone Number: ".$users['phone']."</p>
                    <p>As the admin of our website, we request you to review this order and take necessary actions accordingly. Please ensure that the order is processed and shipped out to the customer as soon as possible.</p>
                    <p>If you have any questions or concerns, please feel free to reach out to us. We appreciate your prompt attention to this matter.</p>
                    <p>Thank you for your hard work and dedication.</p>
                    <p>Best regards,</p>
                    <span>Global Shippers Rwanda Team</span>
                    ";
                    $testData = $this->sendmail($to, $subject, $data);
                    $admintestData = $this->adminsendmail($adminto, $adminsubject, $admindata);

                     $notification = $this->Shopnship_model->create_notification($notification);
                    
                     if($testData=='Sent'){

                        echo "Check your email";
                    }
                    else{
                        echo "email is not send";
                    }
                     
                    $this->session->set_flashdata('message', 'Order created successfully !');
                           
                            return redirect('assisted-sns'); 
            }
    else{
        return redirect('login');
    } 
               
}
        public function assisted_order_details($assisted_id){ 
            $user_id = $this->session->userdata('id');
            $data['order_id'] = $this->uri->segment(3);
            $data['item_records'] = $this->Shopnship_model->assisted_item_records($assisted_id);
          $notification_id = $this->uri->segment(4);
            if(isset($notification_id)){
                $this->db->set('is_read','1')
                       ->where('id',$notification_id)
                       ->where('notification_type','1')
                       ->update('notification');
            }
            $data['noti_count']=$this->Gsr->count_notification($user_id);
            $data['user_address'] = $this->Shopnship_model->fetch_address_details($data['item_records'][0]->address_id);
            $data['product_image'] = $this->Shopnship_model->assisted_display_image($assisted_id);
            $data['msg']          = $this->Shopnship_model->receiver_display_msg($assisted_id);
            $data['pay_details']  = $this->Shopnship_model->assisted_payment_display($assisted_id);
            $data['shipment_details'] = $this->Shopnship_model->display_shipment_assisted($assisted_id);
            $data['email'] = $this->Gsr->users_details();
            $data['high'] = '2';
            $this->load->view('sidebar_with_header.php',$data);
             $this->load->view('assisted-order_details',$data);
             $this->load->view('footer');
    
        }


        public function shopnshipsendmail($shopnshipto, $shopnshipsubject, $shopnshipdata) {
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
                                      <span style="font-weight: 700;">'.$shopnshipdata['msg'].'</span>
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
                                $mail->Subject = $shopnshipsubject;
                                $mail->Body =$html;
                                $mail->AddAddress($shopnshipto);
                                //$mail->addBcc("anishaiert1996@gmail.com");
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
        
                public function shopnshipadminsendmail($shopnshipadminto, $shopnshipadminsubject, $shopnshipadmindata) {
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
                                              <span style="font-weight: 700;">'.$shopnshipadmindata['msg'].'</span>
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
                                        $mail->Subject = $shopnshipadminsubject;
                                        $mail->Body =$html;
                                        $mail->AddAddress($shopnshipadminto);
                                        //$mail->addBcc("anishaiert1996@gmail.com");
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

        public function shopnship_insert(){   
             if(!empty($this->input->post('address_id'))) {
                        $record= 1;
                }
                else{
                    $record = [
                        'user_id'       => $this->session->userdata('id'),
                        'fname'         => $this->input->post('first_name'),
                        'lname'          => $this->input->post('last_name'),
                        'phone_number'   => $this->input->post('phone_number'),
                        'street_address' => $this->input->post('street_address'),
                        'gate_code'      => $this->input->post('gate_code'),
                        'city'          => $this->input->post('city'),
                        'state'         => $this->input->post('state'),
                        'country'       => $this->input->post('country'),
                        'pin_code'      => $this->input->post('pin'),
                        'created_date'      => date('Y-m-d H:i:s'),
                    ];
                } 
              //  $shopnship_id =md5(rand());
              $users = [
                'email' => $this->input->post('useremail'),
                'fname' => $this->input->post('userfname'),
                'lname' => $this->input->post('userlname'),
                'phone' => $this->input->post('userphone'),
              ];
            
              $adminemail = $this->input->post('adminemail');
             $shopnship_id= rand(0, 999999);
                $count = count($this->input->post('item_type'));
                for($i=0;$i<$count;$i++) {
                    $data =[
                    'product_type'      => $this->input->post('item_type'.'['.$i.']'),
                    'product_name'      => $this->input->post('name'.'['.$i.']'),
                    'store'             => $this->input->post('store'.'['.$i.']'),
                    'color'             => $this->input->post('color'.'['.$i.']'),
                    'size'              => $this->input->post('size'.'['.$i.']'),
                    'quantity'          => $this->input->post('quantity'.'['.$i.']'),
                    'item_price'        => $this->input->post('price'.'['.$i.']'),
                    'total_amount'      => $this->input->post('tprice'.'['.$i.']'),
                    'grand_total'       => $this->input->post('assested_price'),
                    'remark'            => $this->input->post('remark'),
                    'order_id'          => $this->input->post('order_id'.'['.$i.']'),
                    'order_sub_type'    => $this->input->post('order_sub_type'),
                    'courier_type'      => $this->input->post('courier_type'),
                    'user_id'           => $this->session->userdata('id'),
                    'shopnship_id'      => $shopnship_id, 
                    'from_country_id'   => $this->input->post('country_id'),
                    'address_id'        => $this->input->post('address_id'),
                    'created_date'      => date('Y-m-d H:i:s')
                ];
                $datetime = strtotime($data['created_date']);
                $convertdate = date("d M,y",$datetime);
                $result = $this->Shopnship_model->shopnship_insert_data($record,$data);
                // echo json_encode($result);
           
         } 
         $notification = [
            'user_id'           => $this->session->userdata('id'),
            'order_id'      => $shopnship_id, 
            'content'       => ' Created new order',
            'order_type'    => '1',
            'notification_type' => '0',
            'created_time'      => date('Y-m-d H:i:s')

        ];
       
        $shopnshipto = $users['email'];
        $shopnshipsubject  = 'Order Confirmation: Consolidation Shipment - '.$data['shopnship_id'].' - '.$users['fname'].' '.$users['lname'].'';
        $shopnshipdata['msg'] = "<p>Dear ".$users['fname'].' '.$users['lname']."</p>
        <p>Thank you for creating a new order on Global Shippers Rwanda! We're excited to inform you that your order has been successfully received and is being processed.</p>
        <p>Order Details:</p>
        <p>Order Number: ".$data['shopnship_id']."</p>
        <p>Order Date: ".$convertdate."</p>
        <p>Total Items: ".$data['quantity']."</p>
       <p>Order details: <a href=".base_url()."users/shopnship-order-details/".$data['shopnship_id'].">click here</a></p>
        <p>You have chosen to consolidate your shipment(s) with other orders to reduce shipping costs. This may take a few days to process, and we will keep you updated on the status of your shipment via email.</p>
        <p>Please note that our customer service team will be in touch with you if there are any issues or concerns with your order. You can also track the status of your shipment on our website using the tracking number provided above.</p>
        <p>Thank you for choosing Global Shippers Rwanda. If you have any questions or concerns, please don't hesitate to reach out to us.</p>
        <p>Best regards,</p>
        <span>Global Shippers Rwanda Team</span>
        ";
        $shopnshipadminto =$adminemail;
        $shopnshipadminsubject  = 'New Order Notification - Consolidation Shipment '.$data['shopnship_id'].'';
        $shopnshipadmindata['msg'] = "<p>Dear Admin,</p>
        <p>We are pleased to inform you that a new order has been placed on our website, Globalshipppersrwanda.com. The order details are as follows:</p>
        <p>Order Information:</p>
        <p>Order Number: ".$data['shopnship_id']."</p>
        <p>Customer Name: ".$users['fname'].' '.$users['lname']."</p>
        <p>Order Date: ".$convertdate."</p>
      <p>Order details: <a href=".base_url()."shopnship-order-details/".$data['shopnship_id'].">click here</a></p>
        <p>Products Ordered:</p>
        <p>Quantity:".$data['quantity']."</p>
        <p>Price: ".$data['grand_total']." ".'USD'."</p>
        <p>Customer Contact Information:</p>
        <p>Email: ".$users['email']."</p>
        <p>Phone Number: ".$users['phone']."</p>
        <p>As the admin of our website, we request you to review this order and take necessary actions accordingly. Please ensure that the order is processed and shipped out to the customer as soon as possible.</p>
        <p>If you have any questions or concerns, please feel free to reach out to us. We appreciate your prompt attention to this matter.</p>
        <p>Thank you for your hard work and dedication.</p>
        <p>Best regards,</p>
        <span>Global Shippers Rwanda Team</span>
        ";
        $testData = $this->shopnshipsendmail($shopnshipto, $shopnshipsubject, $shopnshipdata);
        $admintestData = $this->adminsendmail($shopnshipadminto, $shopnshipadminsubject, $shopnshipadmindata);

        $notification = $this->Shopnship_model->create_notification($notification);
        if($testData=='Sent'){
            // $this->session->set_flashdata('msg', 'Check your email !');
            echo "Check your email";
        }
        else{
            echo "email is not send";
        }
                $this->session->set_flashdata('message', 'Order created successfully !');
                return redirect('shopnship');     
             
    }
        public function shopnship_order_details($shopnship_id) { 
            $user_id = $this->session->userdata('id');
            $data['order_id'] = $this->uri->segment(3);
            $notification_id = $this->uri->segment(4);
            if(isset($notification_id)){
                $this->db->set('is_read','1')
                       ->where('id',$notification_id)
                       ->where('notification_type','1')
                       ->update('notification'); 
            }
        $data['item_records'] = $this->Shopnship_model->shopnship_item_records($shopnship_id);
            foreach ($data['item_records'] as $key => $value) {
                $response = $this->Shopnship_model->check_admin_consolidate_shipment($value->order_id);
                $data['item_records'][$key]->shipment_type  = 0; 
              if(!empty($response)) { 
                $data['item_records'][$key]->shipment_type  = 1; 
                $data['item_records'][$key]->product_type = !empty($response->item_type)?$response->item_type:$value->product_type;
                $data['item_records'][$key]->store = !empty($response->package_size)?$response->package_size:$value->store;
                $data['item_records'][$key]->product_name = !empty($response->item_name)?$response->item_name:$value->product_name;
                $data['item_records'][$key]->order_id = !empty($response->tracking_id)?$response->tracking_id:$value->order_id;
                $data['item_records'][$key]->size = !empty($response->weight)?$response->weight:$value->size;
                $data['item_records'][$key]->quantity = !empty($response->quantity)?$response->quantity:$value->quantity;
                $data['item_records'][$key]->item_type_name = !empty($response->item_type_name)?$response->item_type_name:$value->item_type_name;
                $data['item_records'][$key]->item_price = !empty($response->price)?$response->price:$value->item_price;
                $data['item_records'][$key]->total_amount = !empty($response->total_price)?$response->total_price:$value->total_amount; 
                $data['item_records'][$key]->grand_total = !empty($response->total_price)?$response->total_price:$value->grand_total;
                    } 
                }
            $data['product_image'] = $this->Shopnship_model->shopnship_display_image($shopnship_id);
            $data['user_address'] = $this->Shopnship_model->fetch_address_details($data['item_records'][0]->address_id);
            $data['email'] = $this->Gsr->users_details();
            $data['noti_count']=$this->Gsr->count_notification($user_id);
            $data['msg']          = $this->Shopnship_model->receiver_display_msg($shopnship_id);
            $data['pay_details']  = $this->Shopnship_model->shopnship_payment_display($shopnship_id);
            $data['shipment_details'] = $this->Shopnship_model->display_shipment_shopnship($shopnship_id);
            $data['high'] = '1';
            $this->load->view('sidebar_with_header.php',$data);
           $this->load->view('shopnship-order_details',$data);
           
           $this->load->view('footer');
        }

    //Existing Problem comment by Prakhar : Multiple insertion in the internation_indian_pickup_address & international_destination_address. Notification not working

    public function internationalsendmail($internationalto, $internationalsubject, $internationaldata) {
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
                                  <span style="font-weight: 700;">'.$internationaldata['msg'].'</span>
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
                            $mail->Subject = $internationalsubject;
                            $mail->Body =$html;
                            $mail->AddAddress($internationalto);
                            //$mail->addBcc("anishaiert1996@gmail.com");
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
    
            public function internationaladminsendmail($internationaladminto, $internationaladminsubject, $internationaladmindata) {
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
                                          <span style="font-weight: 700;">'.$internationaladmindata['msg'].'</span>
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
                                    $mail->Subject = $internationaladminsubject;
                                    $mail->Body =$html;
                                    $mail->AddAddress($internationaladminto);
                                    //$mail->addBcc("anishaiert1996@gmail.com");
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
        public function international_insert_package_information(){
            if($this->session->userdata('id')) {
                // prakhar code starts
                $international_id= rand(0, 99999999);
                $international_order_details = [
                'international_id'  => $international_id,
                'user_id'           => $this->session->userdata('id'),               
                'order_type'        => $this->input->post('order_sub_type'),
                'courier_type'      => $this->input->post('courier_type'),
                'client_order_id'   => $this->input->post('ref_order_id'),
                'fname'             => $this->input->post('contact_first_name'),
                'lname'             => $this->input->post('contact_last_name'),
                'mobile_number'     => $this->input->post('mobile_number'),
                'email'             => $this->input->post('contact_email'),
                //'order_status'      => '0',
                'created_date'      => date('Y-m-d H:i:s')
            ];
            
            $international_order_id = $this->Shopnship_model->international_order_details_insertion($international_order_details);
                // prakhar code ends
            // $international_id =md5(rand());
            $pickup_address = [
                'international_id'  =>$international_id,
                'user_id'           => $this->session->userdata('id'),
                'fname'             => $this->input->post('pick_firstname'),
                'lname'             => $this->input->post('pick_lastname'),
                'order_id'          => $international_order_id,
                'email'             => $this->input->post('pick_email'),
                'country'           => $this->input->post('pick_country'),
                'state'             => $this->input->post('pick_state'),
                'city'              => $this->input->post('pick_city'),
                'street_address'    => $this->input->post('pick_street'),
                'pin_code'          => $this->input->post('pick_pincode'),
                'mobile_number'     => $this->input->post('pic_mobile_number'),
                'created_date'      => date('Y-m-d H:i:s'),
                'image_path1'       => $this->input->post('img1'),
                'image_path2'       => $this->input->post('img2')
            ];
            // echo "<pre>";
            // print_r($pickup_address);
            // exit;
            $image =$_FILES['img1']['name'];
            $extension = pathinfo($image,PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $pickup_address['image_path1'] = $rename.'.'.$extension;

              if ($_FILES["img1"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
               
              }
              
              if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  
                    }
                    
                    if(move_uploaded_file($_FILES["img1"]["tmp_name"], $pickup_address['image_path1'])){
                    echo "The file ". $pickup_address['image_path1']. " has been uploaded.";
                }
        
             else {
                        echo "Sorry, there was an error uploading your file.";
                       }

                       $image =$_FILES['img2']['name'];
                       $extension = pathinfo($image,PATHINFO_EXTENSION);
                       $rand = rand(0,100000);
                       $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
                       $pickup_address['image_path2'] = $rename.'.'.$extension;
           
                         if ($_FILES["img2"]["size"] > 500000) {
                           echo "Sorry, your file is too large.";
                          
                         }
                         
                         if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif" ) {
                               echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                             
                               }
                               
                               if(move_uploaded_file($_FILES["img2"]["tmp_name"], $pickup_address['image_path2'])){
                               echo "The file ". $pickup_address['image_path2']. " has been uploaded.";
                           }
                   
                        else {
                                   echo "Sorry, there was an error uploading your file.";
                                  }

            $international_pickup_address= $this->Shopnship_model->international_indian_pickup_address_insertion($pickup_address);
            $desination = [
                'international_id'  =>$international_id,
                'fname'             => $this->input->post('dest_first_name'),
                'lname'             => $this->input->post('dest_last_name'),
                'order_id'          => $international_order_id,
                'mobile_number'     => $this->input->post('dest_mobile_number'),
                'country'           => $this->input->post('dest_country'),
                'state'             => $this->input->post('dest_state'),
                'city'             => $this->input->post('dest_city'),
                'street_address'   => $this->input->post('dest_street'),
                'pin_code'         => $this->input->post('dest_pincode'),
                'user_id'          => $this->session->userdata('id'),
                'created_date'     => date('Y-m-d H:i:s'),
                'is_deleted'       => '0'
                // 'dest_comment' => $this->input->post('dest_comment')
            ];
           
            $desination_address = $this->Shopnship_model->international_destination_address_insertion($desination);

            $count = count($this->input->post('item_type'));
            for($i=0;$i<$count;$i++){
            $data = [
                'international_id'       => $international_id,
                'order_id'               => $international_order_id,
                'product_type'           => $this->input->post('item_type'.'['.$i.']'),
                'product_name'           => $this->input->post('package_name'.'['.$i.']'),
                'quantity'               => $this->input->post('quantity'.'['.$i.']'),
                'total_amount'           => $this->input->post('package_price'.'['.$i.']'),
                'invoice_amount'         => $this->input->post('totalval'),
                'height'                 => $this->input->post('height'),
                'width'                  => $this->input->post('width'),
                'depth'                  => $this->input->post('depth'),
                'remark'                 => $this->input->post('dest_comment'),
                'no_of_box'              => $this->input->post('package_boxes'),
                'weight_box'             => $this->input->post('package_weight'),
                'user_id'                => $this->session->userdata('id'),
                // 'internation_id'         => $internation_id,
                'date_created'           => date('Y-m-d H:i:s'),
                ];
                $datetime = strtotime($data['date_created']);
                $convertdate = date("d M,y",$datetime);        
               $result = $this->Shopnship_model->international_insert_package_information($data,$international_order_details);
                 
            }
              $notification = [
                    'user_id'       => $this->session->userdata('id'),
                    'order_id'      => $international_id, // change made by Prakhar
                    'content'       => ' Created new order',
                    'order_type'    => '3',
                    'notification_type' => '0',
                    'created_time'      => date('Y-m-d H:i:s')

                ];
                $users = [
                  'email' => $this->input->post('useremail'),
                  'fname' => $this->input->post('userfname'),
                  'lname' => $this->input->post('userlname'),
                  'phone' => $this->input->post('userphone'),
                ];
                $adminemail = $this->input->post('adminemail');
                $internationalto = $users['email'];;
                $internationalsubject  = 'Order Confirmation: Pickup Shipment '.$data['international_id'].' - '.$users['fname'].' '.$users['lname'].'';
                $internationaldata['msg'] = "<p>Dear ".$users['fname'].' '.$users['lname']."</p>
                <p>Thank you for creating a new order on Global Shippers Rwanda! We're excited to inform you that your order has been successfully received and is being processed.</p>
                <p>Order Details:</p>
                <p>Order Number: ".$data['international_id']."</p>
                <p>Order Date: ".$convertdate."</p>
                <p>Total Items: ".$data['quantity']."</p>
                <p>Total Weight: ".$data['weight_box']."</p>
               <p>Order details: <a href=".base_url()."users/international-order-details/".$data['international_id'].">click here</a></p>
                <p>Please note that our customer service team will be in touch with you if there are any issues or concerns with your order. You can also track the status of your shipment on our website using the tracking number provided above.</p>
                <p>Thank you for choosing Global Shippers Rwanda. If you have any questions or concerns, please don't hesitate to reach out to us.</p>
                <p>Best regards,</p>
                <span>Global Shippers Rwanda Team</span>
                ";
                $internationaladminto = $adminemail;
                $internationaladminsubject  = 'New Order Notification - Pickup Shipment '.$data['international_id'].'';
                $internationaladmindata['msg'] = "<p>Dear Admin,</p>
                <p>We are pleased to inform you that a new order has been placed on our website, Globalshipppersrwanda.com. The order details are as follows:</p>
                <p>Order Information:</p>
                <p>Order Number: ".$data['international_id']."</p>
                <p>Customer Name: ".$users['fname']." ".$users['lname']."</p>
                <p>Order Date: ".$convertdate."</p>
                <p>Order details: <a href=".base_url()."international-order-details/".$data['international_id'].">click here</a></p>
                <p>Products Ordered:</p>
                <p>Quantity:".$data['quantity']."</p>
                <p>Price: ".$data['invoice_amount']." ".'USD'."</p>
                <p>Customer Contact Information:</p>
                <p>Email: ".$users['email']."</p>
                <p>Phone Number: ".$users['phone']."</p>
                <p>As the admin of our website, we request you to review this order and take necessary actions accordingly. Please ensure that the order is processed and shipped out to the customer as soon as possible.</p>
                <p>If you have any questions or concerns, please feel free to reach out to us. We appreciate your prompt attention to this matter.</p>
                <p>Thank you for your hard work and dedication.</p>
                <p>Best regards,</p>
                <span>Global Shippers Rwanda Team</span>
                ";
                $testData = $this->internationalsendmail($internationalto, $internationalsubject, $internationaldata);
                $admintestData = $this->internationaladminsendmail($internationaladminto, $internationaladminsubject, $internationaladmindata);
                
               // $testData = $this->internationalmailsend($to, $subject, $data);
            $notification = $this->Shopnship_model->create_notification($notification);
            if($testData=='Sent'){
                // $this->session->set_flashdata('msg', 'Check your email !');
                echo "Check your email";
            }
            else{
                echo "email is not send";
            }
            $this->session->set_flashdata('message', 'Order created successfully !');
            return redirect('international-shipment');
        }
        else{
            return redirect('login');
        } 
              
        }

            public function international_order_details($international_id){
               $user_id = $this->session->userdata('id');
            $data['order_id'] = $this->uri->segment(3);
            $notification_id = $this->uri->segment(4);
            
            if(isset($notification_id)){
                $this->db->set('is_read','1')
                       ->where('id',$notification_id)
                       ->update('notification');
            }
            $data['item_records'] = $this->Shopnship_model->international_order_details($international_id); 
            $data['pickup_address'] = $this->Shopnship_model->fetch_pickup_address_details($data['item_records'][0]->international_id);
            $data['delivery_address'] = $this->Shopnship_model->fetch_delivery_address_details($data['item_records'][0]->international_id);
            $data['items'] = $this->Shopnship_model->international_fetch_records($data['item_records'][0]->international_id);
              $data['email'] = $this->Gsr->users_details();
              $data['noti_count']=$this->Gsr->count_notification($user_id);
              $data['msg']          = $this->Shopnship_model->receiver_display_msg($international_id);
              $data['pay_details']  = $this->Shopnship_model->international_payment_display($international_id);
              $data['shipment_details'] = $this->Shopnship_model->display_shipment_international($international_id);
             
              $data['high'] = '3';
              $this->load->view('sidebar_with_header.php',$data);
              $this->load->view('international_order_details',$data);
              $this->load->view('footer');
            }
        
        

      

            public  function dashboard_address_book(){
                $user_id =$this->session->userdata('id');
                $data['email'] = $this->Gsr->users_details();
                $data['add'] = $this->Shopnship_model->display_address($user_id);
                $data['noti_count']=$this->Gsr->count_notification($user_id);
                $data['high'] = '6';
                $this->load->view('sidebar_with_header',$data);
                $this->load->view('dashboard_address_book',$data);
                $this->load->view('footer');
            }
            public function edit_profile_view(){
                $user_id = $this->session->userdata('id');
                $data['email'] = $this->Gsr->users_details();
                $data['noti_count']=$this->Gsr->count_notification($user_id);
                $data['address'] = $this->Gsr->users_address_details($user_id);
                $data['add'] = $this->Shopnship_model->display_address($user_id);
                $data['order_count'] = $this->Gsr->order_count($user_id); 
                $data['assis_order_count'] = $this->Gsr->assisted_order_count($user_id);
                $data['inter_order_count'] = $this->Gsr->international_order_count($user_id);
                $data['high'] = '';
                $this->load->view('sidebar_with_header',$data);
                $this->load->view('edit_profile',$data);
                $this->load->view('footer');
            }

            public function update_record()
            {
              $id= $this->input->post('id');
              $data = array(
                  'fname' => $this->input->post('first_name'),
                  'lname' => $this->input->post('last_name'),
                  'address_line' => $this->input->post('address_line'),
                  'landmark'     => $this->input->post('landmark'),
                  'zipcode'      => $this->input->post('zipcode'),
                  'state'        => $this->input->post('state'),
                  'state'         => $this->input->post('city'),
                  'phone'        => $this->input->post('phone_number')
               );
               $query = $this->Gsr->update_data($id,$data);
               if($query == True)
               {
                   redirect('shopnship/profile', 'refresh');
               }
               else{
                   redirect('shopnship/profile', 'refresh');
               }
                  
                }
            public function shopnship_insert_message(){
               
                $shopnship_id = $this->input->post('order_id');
                $from_id = $this->input->post('from_id');
                //date_default_timezone_set("UTC");
                $ip = $_SERVER['REMOTE_ADDR'];
                $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
                $ipInfo = json_decode($ipInfo);
                $timezone = $ipInfo->timezone;
                date_default_timezone_set($timezone);
                $message_data = array(
                
                 'to_id'            => '1',
                 'from_id'          => $from_id,
                'order_id'          => $shopnship_id,
                'message'           => $this->input->post('textarea'),
                //'msg_image'         => $this->input->post('img'),
                'message_type'      => $this->input->post('message_type'),
                'send_by_admin'     => '0',
                'shipment_type'     => '1',
                'created_date'      => date('Y-m-d H:i:s ')

                ); 
              
               
                    // $image =$_FILES['img']['name'];
                    // // echo "<pre>";
                    // // print_r($image);
                    // // exit;
                    // $extension = pathinfo($image,PATHINFO_EXTENSION);
                    // $rand = rand(0,100000);
                    // $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
                   
                    // $message_data['msg_image'] = $rename.'.'.$extension;

                    //   if ($_FILES["img"]["size"] > 500000) {
                    //     echo "Sorry, your file is too large.";
                       
                    //   }
                      
                    //   if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif" && $extension != "pdf") {
                    //         echo "Sorry, only JPG, JPEG, PDF,PNG & GIF files are allowed.";
                          
                    //         }
                            
                    //         if(move_uploaded_file($_FILES["img"]["tmp_name"], $message_data['msg_image'])){
                    //         echo "The file ". $message_data['msg_image']. " has been uploaded.";
                    //     }
                
                    //  else {
                    //             echo "Sorry, there was an error uploading your file.";
                    //            }
                             
                        //    echo "<pre>";
                        //    print_r($_POST);
                        //    exit;
                $result = $this->Shopnship_model->sender_add_message($message_data);
                echo json_encode($result);
                           
            }
            public function assisted_insert_message(){
                $assisted_id = $this->input->post('order_id');
                $from_id = $this->input->post('from_id');
                $ip = $_SERVER['REMOTE_ADDR'];
                $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
                $ipInfo = json_decode($ipInfo);
                $timezone = $ipInfo->timezone;
                date_default_timezone_set($timezone);
                $message_data = array(

                'to_id'            => '1',
                'from_id'          => $from_id,
                'order_id'          => $assisted_id,
                'message'           => $this->input->post('textarea'),
                'message_type'      => $this->input->post('message_type'),
                'send_by_admin'     => '0',
                'shipment_type'     => '2',
                'created_date'      => date('Y-m-d H:i:s'),

                ); 
                $result = $this->Shopnship_model->sender_add_message($message_data);
                echo json_encode($result);            
            }
            public function international_insert_message(){
                $international_id = $this->input->post('order_id');
                $from_id = $this->input->post('from_id');
                $ip = $_SERVER['REMOTE_ADDR'];
                $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
                $ipInfo = json_decode($ipInfo);
                $timezone = $ipInfo->timezone;
                date_default_timezone_set($timezone);
                $message_data = array(
                'to_id'            => '1',
                'from_id'          => $from_id,
                'order_id'          => $international_id,
                'message'           => $this->input->post('textarea'),
                'message_type'      => $this->input->post('message_type'),
                'send_by_admin'     => '0',
                'shipment_type'     => '3',
                'created_date'      => date('Y-m-d H:i:s'),
                ); 
                $result = $this->Shopnship_model->sender_add_message($message_data);
                echo json_encode($result);            
            }
          
            public function address_update(){
                $address_id = $this->input->post('address_id');

                $add_data= [
                    // 'address_id' =>$this->input->post('address_id'),
                    'fname' => $this->input->post('first_name'),
                    'lname' => $this->input->post('last_name'),
                    'phone_number' => $this->input->post('phone_number'),
                    'street_address' => $this->input->post('street_address'),
                    'gate_code'      => $this->input->post('gate_code'),
                    'city'           => $this->input->post('city'),
                    'state'          => $this->input->post('state'),
                    'country'        => $this->input->post('country'),
                    'pin_code'       => $this->input->post('pin')
            ];
            $result = $this->Shopnship_model->update_address($address_id,$add_data);
            if($result==TRUE){
                redirect('users/address', 'refresh');
            }
            else{
                redirect('users/address', 'refresh');
            }
            }
            public function delete_useraddress(){
                $user_id = $this->session->userdata('id');
                $address_id = $this->uri->segment(3);
                $result = $this->Shopnship_model->delete_useraddress($user_id,$address_id);
                if($result==TRUE){
                    redirect('users/address', 'refresh');
                }
                else{
                    redirect('users/address', 'refresh');
                }
            }
            public function shopnship_invoice(){
                $shopnship_id = $this->uri->segment(3);
                $payment_id = $this->uri->segment(4);

                $invoice['invoiceAmt'] = $this->Shopnship_model->shopnship_invoice_payment($payment_id);
                $invoice['record'] = $this->Shopnship_model->shopnship_invoice($shopnship_id);
                $invoice['address'] = $this->Shopnship_model->shopnship_invoice_address($invoice['record'][0]->address_id);
                $invoice['users']  = $this->Shopnship_model->shopnship_invoice_users($invoice['record'][0]->user_id);
                $this->load->view('invoice',$invoice);
              }
              public function assisted_invoice(){
                $assisted_id = $this->uri->segment(3);
                $payment_id = $this->uri->segment(4);

                $invoice['invoiceAmt'] = $this->Shopnship_model->shopnship_invoice_payment($payment_id);
                $invoice['record'] = $this->Shopnship_model->assisted_invoice($assisted_id);
                // echo "<pre>";
                // print_r($invoice['record']);exit;
                $invoice['address'] = $this->Shopnship_model->assisted_invoice_address($invoice['record'][0]->address_id);
                $invoice['users']  = $this->Shopnship_model->assisted_invoice_users($invoice['record'][0]->user_id);
                $this->load->view('assisted_invoice',$invoice);
              } 

              public function international_invoice(){
                $international_id = $this->uri->segment(3);
                $payment_id = $this->uri->segment(4);

                $invoice['invoiceAmt'] = $this->Shopnship_model->shopnship_invoice_payment($payment_id);
                $invoice['record'] = $this->Shopnship_model->international_invoice($international_id);
                $invoice['address'] = $this->Shopnship_model->international_shipment_delivery_address($invoice['record'][0]->international_id);
                $invoice['users']  = $this->Shopnship_model->assisted_invoice_users($invoice['record'][0]->user_id);
                $this->load->view('international_order_invoice',$invoice);
              }

             public function internationalshipmentpdf(){
                $this->load->library('pdf');
                $international_id = $this->uri->segment(3);
                $payment_id = $this->uri->segment(4);
                $invoice['invoiceAmt'] = $this->Shopnship_model->shopnship_invoice_payment($payment_id);
                $invoice['record'] = $this->Shopnship_model->international_invoice($international_id);
                $invoice['address'] = $this->Shopnship_model->international_shipment_delivery_address($invoice['record'][0]->international_id);
                $invoice['users']  = $this->Shopnship_model->assisted_invoice_users($invoice['record'][0]->user_id);
                $html=   $this->load->view('internationalshipmentpdf',$invoice,true);
                    $this->pdf->loadHtml($html);
                    $this->pdf->set_option('isRemoteEnabled', true);
                    $this->pdf->set_option('fontHeightRatio', true);

                    $this->pdf->setPaper('A4', 'portrait');
                    $this->pdf->render();
                    $this->pdf->stream("internationalshipment.pdf", array("Attachment"=> 1));
            }
              
              public function assistedpdf(){
                $this->load->library('pdf');
                $assisted_id = $this->uri->segment(3);
                $payment_id = $this->uri->segment(4);
                $invoice['invoiceAmt'] = $this->Shopnship_model->shopnship_invoice_payment($payment_id);
                $invoice['record'] = $this->Shopnship_model->assisted_invoice($assisted_id);
                $invoice['address'] = $this->Shopnship_model->assisted_invoice_address($invoice['record'][0]->address_id);
                $invoice['users']  = $this->Shopnship_model->assisted_invoice_users($invoice['record'][0]->user_id);
                $html=   $this->load->view('assistedpdf',$invoice,true);
                    $this->pdf->loadHtml($html);
                    $this->pdf->set_option('isRemoteEnabled', true);
                    $this->pdf->set_option('fontHeightRatio', true);

                    $this->pdf->setPaper('A4', 'portrait');
                    $this->pdf->render();
                    $this->pdf->stream("assisted.pdf", array("Attachment"=> 1));
            }
            
            public function shopnshippdf(){
              $this->load->library('pdf');
               
                    $shopnship_id = $this->uri->segment(3);
                    $payment_id = $this->uri->segment(4);
                    $invoice['record'] = $this->Shopnship_model->shopnship_invoice($shopnship_id);
                    $invoice['address'] = $this->Shopnship_model->shopnship_invoice_address($invoice['record'][0]->address_id);
                    $invoice['invoiceAmt'] = $this->Shopnship_model->shopnship_invoice_payment($payment_id);
                    $invoice['users']  = $this->Shopnship_model->shopnship_invoice_users($invoice['record'][0]->user_id);
                 $html=   $this->load->view('shopnshippdf',$invoice,true);
                    $this->pdf->loadHtml($html);
                    $this->pdf->set_option('isRemoteEnabled', true);
                    $this->pdf->set_option('fontHeightRatio', true);

                    $this->pdf->setPaper('A4', 'portrait');
                    $this->pdf->render();
                    $this->pdf->stream("shopnship.pdf", array("Attachment"=> 1));	

                    
            }


        public function international_update_product(){
            $id = $this->input->post('id');
            // $order_id= $this->input->post('order_id');
            $count = count($this->input->post('item_type'));
           echo "<pre>";
            for($i=0;$i<$count;$i++){
                $data =[
                    'product_type'             => $this->input->post('item_type'.'['.$i.']'),
                    'product_name'             => $this->input->post('item_name'.'['.$i.']'),
                    'quantity'             => $this->input->post('quantity'.'['.$i.']'),
                    'total_amount'             => $this->input->post('single_price'.'['.$i.']'),
                ];
            }
            
            // echo "<pre>";
            // print_r($id);
            // print_r($data);
            // exit;
            $result = $this->Shopnship_model->international_update_product($id,$data);

            if($result==TRUE){
                redirect(base_url().'users/international-order-details/'.$id);
            }
            else{
                redirect(base_url().'users/international-order-details/'.$id);
            }
        }

        public function calculator(){
           // $this->load->view('sidebar_with_header');
            $this->load->view('shipping-cal');
           // $this->load->view('footer');
        }
}
?>