<?php

require_once 'config.php';
$directories = array('Classes', 'Forms', 'Layouts');

spl_autoload_register(function ($class_name) use ($directories) {
    foreach ($directories as $directory) {
        if (file_exists($directory . '/' . $class_name . '.php')) {
            include $directory . '/' . $class_name . '.php' ;
            return;
        }
    }
});

$ObjLayout = new Layouts();
$ObjForms = new Forms();
