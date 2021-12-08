<?php

$fname = $_POST["fname"];
$email = $_POST["email"];
$text = $_POST["message"];
$phone = $_POST["phone"];
$sub = $_POST["subject"];

$to = "olayodeenoch@gmail.com";
$subject = "My Website: " . $sub;
$txt =
    "<table style='width:100%'>
        <tr><td>' . $fname . '</td></tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>phone: ' . $phone . '</td></tr>
        <tr><td>Message: ' . $text . '</td></tr>
    </table>";
$headers = "From: " . $email;

mail($to, $subject, $txt, $headers);
