<?php

$dbuser = "root";
$dbpassword = "";
// $db = new PDO('mysql:host=localhost; dbname=sporttag; charset=utf8', $dbuser, $dbpassword);

try {
    $db = new PDO('mysql:host=localhost; dbname=sporttag; charset=utf8', $dbuser, $dbpassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Verbindung fehlgeschlagen: ' . $e->getMessage();
}


?>