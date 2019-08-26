<?php 
use PHPMailer\PHPMailer\PHPMailer;
require "PHPMailer/vendor/autoload.php";
function set_config(){
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "mycoworkingplace@gmail.com";
    $mail->Password = "myplace@123";
    $mail->setFrom('support@myplace.com', 'My Place Lead');
    return $mail;
}
function send_mail($to,$subject,$htmlContent){
    $mail = set_config();
    $mail->addAddress($to,"My Coworking Place");  
    $mail->Subject = $subject;  
    $mail->msgHTML($htmlContent);
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}
