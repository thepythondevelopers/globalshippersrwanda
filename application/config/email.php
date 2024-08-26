<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
// $mail = new PHPMailer(); 
//                         $mail->IsSMTP(); 
//                         $mail->SMTPAuth = true; 
//                         $mail->SMTPSecure = 'tls'; 
//                         $mail->Host = "smtp.gmail.com";
//                         $mail->Port = 587; 
//                         $mail->IsHTML(true);
//                         $mail->CharSet = 'UTF-8';
//                         //$mail->SMTPDebug = 2; 
//                         $mail->Username = "anishaiert@gmail.com";
//                         $mail->Password = "bpungkprwvyhvoww";
//                         $mail->SetFrom("anishaierta@gmail.com");

$config = [
'protocol' => 'smtp',
'smtp_host' => 'smtp.gmail.com',
'smtp_port' => 587,
'smtp_user' => 'anishaiert@gmail.com',
'smtp_pass' => 'bpungkprwvyhvoww',
'mailtype' => 'html',
'crlf' => "\r\n",
'newline' => "\r\n"
];
?>
