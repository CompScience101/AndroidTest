<?php
// Pear Mail Library
require_once "Mail.php";
include_once("php_class_object.php");
$server_info = new info();
$from = '<UHC_Tech_Supprt@gmail.com>';
$to = '<nsdonaldwebmail@gmail.com>'; // '<$_POST['data']>'; //add name attribute to input tag in HTML
$subject = ''.$_POST['data'].'';
$body = "Hi,How are you?";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => ''.$server_info->host.'',
        'port' => ''.$server_info->port.'',
        'auth' => ''.$server_info->auth.'',
        'username' => ''.$server_info->server_support.'',
        'password' => 'mnbiywqacztkgbyf'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}
?>
