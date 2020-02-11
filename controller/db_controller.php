<?php

// error_reporting(0);
// $db = new mysqli('10.161.8.9', 'demo', '12FI1', 'sporttag'); // für die anderen
// #$db = new mysqli('localhost', 'root', '', 'sporttag');
// if ($db->connect_errno) {
//     die("DB Connection Error");
// }


$dbname = "sporttag";
$dbuser = "root";
$dbpassword = "";
$pdo = new PDO('mysql:host=localhost; dbname=sporttag; charset=utf8', $dbuser, $dbpassword);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


?>