<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

// Get data from form
$fname = $_POST["fname"];
$email = $_POST["email"];
$text = $_POST["message"];
$phone = $_POST["phone"];
$sub = $_POST["subject"];

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//From email address and name
$mail->From = "info@olayodeenoch.com";
$mail->FromName = $fname;

//To address and name
// $mail->addAddress("recepient1@example.com", "Recepient Name");
$mail->addAddress("olayodeenoch@gmail.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo($email, "Reply");

//CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

// $mail->Subject = "Subject Text";
$mail->Subject = $sub;
$mail->Body =
    "<table style='width:100%'>
        <tr><td>' . $fname . '</td></tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>phone: ' . $phone . '</td></tr>
        <tr><td>Message: ' . $text . '</td></tr>
    </table>";
// $mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
