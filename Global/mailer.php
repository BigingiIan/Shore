<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class mailer {
    public function sendMail($config, $mailConfig) {

    require 'plugins/PHPMailer/vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $config['smtp_host'];                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $config['smtp_user'];                   //SMTP username
        $mail->Password   = $config['smtp_pass'];                   //SMTP password
        $mail->SMTPSecure = $config['smtp_secure'];                //Enable TLS encryption
        $mail->Port       = $config['smtp_port'];                   //TCP port to connect to

        //Recipients
        $mail->setFrom($mailConfig['from'], $mailConfig['from_name']);
        $mail->addAddress($mailConfig['to'], $mailConfig['to_name']);

        //Content
        $mail->isHTML(true);
        $mail->Subject = $mailConfig['subject'];
        $mail->Body    = $mailConfig['body'];

        $mail->send();
        echo 'Message has been sent';
        return true;

        $mail->SMPTDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;
        $mail->Debugoutput = 'html';
        
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        return false;
    }
    }
}