<?php

require 'config.php';

$directories = array('Global', 'Forms', 'Layouts');

spl_autoload_register(function ($class_name) use ($directories) {
    foreach ($directories as $dir) {
        if (file_exists($dir . '/' . $class_name . '.php')) {
            include $dir . '/' . $class_name . '.php' ;
        }
    }
});

$ObjLayout = new layouts();
$ObjForms = new forms();
$ObjMailer = new mailer();
