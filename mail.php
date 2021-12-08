<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$from = "info@olayodeenoch.com";
$to = "olayodeenoch@gmail.com";
$fullname = $_POST["fname"];
$email = $_POST["email"];
$text = $_POST["message"];
$phone = $_POST["phone"];
$sub = $_POST["subject"];
$subject = "Personal Website Message: " . $sub;
$message = '<table style="width:100%">
        <tr><td>' . $fullname . '</td></tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>phone: ' . $phone . '</td></tr>
        <tr><td>Message: ' . $text . '</td></tr>
    </table>';
$headers = "From:" . $from;
if (mail($to, $subject, $message, $headers)) {
    echo "The email message was sent.";
} else {
    echo "The email message was not sent.";
}
