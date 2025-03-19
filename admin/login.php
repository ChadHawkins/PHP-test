<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin = $_POST['admin'];
    $password = $_POST['admin'];

    if ($admin === 'admin' && $password === 'admin') {
        $_SESSION['admin_user_login'] = true;
        header('location: adminpanel.php');
        exit();
    } else {
        echo "Invalid login. <a href='../index.php'>Try again</a>";
    }
}