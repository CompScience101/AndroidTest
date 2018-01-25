<?php
// Pear Mail Library
require_once "Mail.php";

$from = '<nsdonaldwebmail@gmail.com>';
$to = '<nsdonaldwebmail@gmail.com>';
$subject = 'Hi!';
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
        'username' => 'nsdonaldwebmail@gmail.com',
        'password' => 'iversoncarter153'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}
?>
