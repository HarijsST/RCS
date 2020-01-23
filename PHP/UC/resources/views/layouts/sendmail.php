<?php
$name       = $_POST['name'];
$from       = $_POST['email'];
$subject    = $_POST['subject']; 
$message    = $_POST['message'];
$to         = 'info@friziersalons.lv';

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=utf-8";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();
$headers = implode("\r\n", $headers);

mail($to, $subject, $message, $headers);
die;