<?php
$sendmail_from = $_POST['email'];
$message = $_POST['message'];
$to = 'hontanssylvain@gmail.com';
$headers = array(
    'From' => $sendmail_from,
    'Return-Path' => "C:\laragon\bin\sendmail\sendmail.exe -t");

$subjet = 'Message de DTF';

var_dump($sendmail_from);
var_dump($message);
var_dump($to);
var_dump($headers);

mail($to,$subjet,$message,$headers);
?>