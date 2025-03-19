<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
        require_once('dbh.inc.php');

        $query = 'INSERT INTO customermessage (name, email, message) VALUES (?, ? ,?)';
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name, $email, $message]);

        $pdo = null;
        $stmt = null;

        header('Location: ../index.php?status=success');


    } catch (Exception $e) {
        echo '' . $e->getMessage();
        exit();
    }

} else {
    header('Location: ../index.php?status=failure');

}

