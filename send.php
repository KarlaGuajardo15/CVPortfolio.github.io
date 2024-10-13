<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "This message was sent by: " . $name . ",\r\n";
$message .= "Its main is: " . $email . " \r\n";
$message .= "Contact phone number: " . $number . " \r\n";
$message .= "Message: " . $_POST['message'] . " \r\n";
$message .= "Sent on: " . date('d/m/Y', time());

$for = 'karlaGuajardo96@outlook.com';
$matter = 'Matters ';

email($for, $matter, utf8_decode($message), $header);

header("Location:index.html");
?>


