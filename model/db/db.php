<?php
$dbname = "projekt_Sporttag";
$dbuser = "root";
$dbpassword = "";
$pdo = new PDO('mysql:host=localhost; dbname=sporttag; charset=utf8', $dbuser, $dbpassword);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>
