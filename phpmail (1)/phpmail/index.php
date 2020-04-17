<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

$anurag_email = 'anuragsingh9999999@gmail.com';
$anurag_password = 'anurag+*#';

$from_email = $anurag_email;
$from_name = 'anurag';

$to_email = 'pratapravi037@gmail.com';
$to_name = 'roshan';

$subject = 'anything';
$body = 'Roshan is a ASS';

try {
    $mail = new PHPMailer(TRUE);

    $mail->setFrom($anurag_email, $from_name);
    $mail->addAddress($to_email, $to_name);
    $mail->Subject = $subject;
    $mail->Body = $body;

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'tls';
    $mail->Username = $anurag_email; // tooo add your email here anurag
    $mail->Password = $anurag_password; // todo add your password here anurag
    $mail->Port = 587;

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer'       => FALSE,
            'verify_peer_name'  => FALSE,
            'allow_self_signed' => TRUE
        )
    );

    $send = $mail->send();

    if ($send) {
        echo 'sent ';
    } else {
        echo 'not send';
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}

?>