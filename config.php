<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Timezone configuration
$config['site_timezone'] = 'Africa/Nairobi';

// Site configuration
$config['site_name'] = 'Shore Industries';
$config['base_url'] = 'http://localhost/Shore/';
$config['info_email'] = 'info@shoreindustries.com';

//Site language
$config['site_lang'] = 'en';

// Database configuration
$config['db_type'] = 'mysqli';
$config['db_host'] = 'localhost';
$config['db_user'] = 'root';
$config['db_pass'] = '';
$config['db_name'] = 'shore_industries';
$config['db_port'] = 3306;

// Email configuration
$config['mail_type'] = $_ENV['MAIL_TYPE'];
$config['smtp_host'] = $_ENV['SMTP_HOST'];
$config['smtp_user'] = $_ENV['SMTP_USER'];
$config['smtp_pass'] = $_ENV['SMTP_PASSWORD'];
$config['smtp_port'] = $_ENV['SMTP_PORT'];
$config['smtp_secure'] = $_ENV['SMTP_SECURE'];