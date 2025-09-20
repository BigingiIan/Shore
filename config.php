<?php

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

// Email configuration
$config['mail_type'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_user'] = 'bigingiian@gmail.com';
$config['smtp_pass'] = 'sheu ysga edcf sgwv';
$config['smtp_port'] = 465;
$config['smtp_secure'] = 'ssl';
