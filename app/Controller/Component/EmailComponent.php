<?php

App::uses('Component', 'Controller');
App::import('Vendor', 'phpmailer', array('file' => 'PHPMailer' . DS . 'PHPMailerAutoload.php'));

class EmailComponent extends Component {

    public function send($from, $fromname, $to, $subject, $message) {
        $header = "X-Mailer: PHP/" . phpversion() . "Return-Path: $from";

        $mail = new PHPMailer();

        $mail->SMTPDebug = 4;

        $mail->IsSMTP();
        $mail->Host = "smtp.office365.com";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Username = "ierp@indesore.com";
        $mail->Password = "!ndeERP19";

        $mail->setFrom($from, $fromname);
        $mail->AddAddress($to);

        $mail->IsHTML(true);
        $mail->CreateHeader($header);

        $mail->Subject = $subject;
        $mail->Body = nl2br($message);
        $mail->AltBody = nl2br($message);

        // return an array with two keys: error & message
        if (!$mail->Send()) {
            return array('error' => true, 'message' => 'Mailer Error: ' . $mail->ErrorInfo);
        } else {
            return array('error' => false);
        }
    }

}
