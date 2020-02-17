<?php

$dbuser = "root";
$dbpassword = "";
$db = new PDO('mysql:host=localhost; dbname=sporttag; charset=utf8', $dbuser, $dbpassword);


function getStationName($id) {
    global $db;
    $stmt= $db->query("SELECT * FROM station WHERE Station_ID={$id}");
    foreach ($stmt AS $row) {
    echo $row["Station_Name"];
    }
}

$id = 1;
getStationName($id);

?>