<?php
$to = 'olayodeenoch@gmail.com';
$fullname = $_POST["fname"];
$email = $_POST["email"];
$text = $_POST["message"];
$phone = $_POST["phone"];

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message = '<table style="width:100%">
        <tr>
            <td>' . $fullname . '</td>
        </tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>phone: ' . $phone . '</td></tr>
        <tr><td>Message: ' . $text . '</td></tr>
        
    </table>';

if (@mail($to, $email, $message, $headers)) {
    echo 'Your message has been sent.';
} else {
    echo 'failed';
}
