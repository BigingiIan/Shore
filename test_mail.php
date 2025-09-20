<?php

require 'ClassAutoLoad.php';

$mailConfig = [
    'from_name' => 'Shore App',
    'from' => 'no-reply@gmail.com',
    'to_name' => 'User',
    'to' => 'somonilouis@gmail.com',
    'subject' => 'Test Email',
    'body' => '<h1>This is a test email</h1><p>If you received this email, the mailer is working correctly.</p>'
];

$ObjMailer->sendMail($config, $mailConfig);