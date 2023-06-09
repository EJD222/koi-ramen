<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];



//$messagecontent ="<b>From:</b> ". $name . "<br><b>Email:</b> " . $email . "<br><b>Message:</b><br>" . $message;
$messagecontent = $message;

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();                                           
    $mail->Host       = 'sandbox.smtp.mailtrap.io';                 
    $mail->SMTPAuth   = true;     
    $mail->Port       = 2525;                                     
    $mail->Username   = 'c9994fafea8563';                  
    $mail->Password   = '46b4c227a88332';                            

    $mail->setFrom($email, $name);
    $mail->addAddress('KoiRamen@ramen.net', 'Koi Ramen');

    //$mail->isHTML(true);  

    $mail->Subject = $subject;
    $mail->Body    = $messagecontent;
    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}