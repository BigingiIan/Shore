<?php

require_once 'ClassAutoLoad.php';
/*
$db = Database::getInstance($config)->getConnection();
$user = new user($db);

$errors = [];
$success = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Server-side validation
    if (strlen($username) < 3) {
        $errors[] = "Username must be at least 3 characters long.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }

    if (empty($errors)){
        if ($user->register($username, $email, $password)){
            $success = "Registration successful! You can now <a href='login.php'>login</a>.";
        } else {
            $errors[] = "Registration failed. Email may already be in use.";
        }
    }
}

$config['form_errors'] = $errors;
$config['form_success'] = $success;*/

$ObjLayout->header($config);
$ObjLayout->nav($config);


$ObjLayout->form_frame($config, $ObjForms);
$ObjLayout->footer($config);
