<?php
require_once 'ClassAutoLoad.php';

$ObjLayout->header($config);
$ObjLayout->nav($config);

// Process login
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email =$_POST['email'];
    $password = $_POST['password'];

    $db = new Database($config);
    $user = new user($db);
    
    $loggedInUser = $user->login($email, $password);

    if ($loggedInUser){
        session_start();
        $_SESSION['user_id'] = $loggedInUser['id'];
        $_SESSION['username'] = $loggedInUser['username'];

        echo "<p style='color:green;'>Welcome, " . htmlspecialchars($loggedInUser['username']) . "! You are now logged in.</p>";
    } else {
        echo "<p style='color:red;'>Invalid email or password.</p>";
    }
}*/

$ObjLayout->form_frame($config, $ObjForms);
$ObjLayout->footer($config);
