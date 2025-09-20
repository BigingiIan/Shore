<?php

require 'ClassAutoLoad.php';

$mailConfig = [
    'from_name' => 'Shore App',
    'from' => 'no-reply@gmail.com',
    'to_name' => 'User',
    'to' => 'bigingiian@gmail.com',
    'subject' => 'Test Email',
    'body' => '<h1>This is a test email</h1><p>If you received this email, the mailer is working correctly.</p>'
];

$result = $ObjMailer->sendMail($config,$mailConfig);

if ($result === true) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email. Error: " . $result;
}