<?php

$dbn = 'mysql:host=localhost;dbname=propertystudioscustomermessages';
$dbusername = 'admin';
$dbpassword = '123';

try {
    $pdo = new PDO($dbn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo "Connection failed" . $e->getMessage();
}


