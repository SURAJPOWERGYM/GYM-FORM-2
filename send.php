<?php
include"connection.php";

$q=select " from power_gym_form where"

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'suryabhanushali0099@gmail.com';
    $mail->Password = 'zvbe ilto bhnx cfgz'; // Replace with your actual Gmail password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('suryabhanushali0099@gmail.com', 'POWER GYM');
    $mail->addAddress('hasanibhaskarbhai@gmail.com', 'SURAJ');

    $mail->isHTML(true);
    $mail->Subject = 'ABOUT YOUR GYM MEMBERSHIP';
    $mail->Body = 'YOUR MEMBERSHIP IS ENDED TODAY. KINDLY PAY YOUR FEES IF YOU WANT TO CONTINUE HERE.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
