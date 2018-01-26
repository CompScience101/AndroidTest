<?php
// Pear Mail Library
require_once "Mail.php";

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
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'UHC_Tech_Supprt@gmail.com',
        'password' => 'mnbiywqacztkgbyf'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}
?>
