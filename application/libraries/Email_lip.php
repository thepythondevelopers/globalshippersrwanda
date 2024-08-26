<?php 
include('smtp/PHPMailerAutoload.php');
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Email_lip{
    public function emailconfig(){
        $mail = new PHPMailer(); 
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; 
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        //$mail->SMTPDebug = 2; 
        $mail->Username = "anishaiert@gmail.com";
        $mail->Password = "bpungkprwvyhvoww";
        $mail->SetFrom("anishaierta@gmail.com");
        $mail->isHTML(true);
        return $email;
    }
}

                    

?>