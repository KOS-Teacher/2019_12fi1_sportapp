<?php

error_reporting(0);
$db = new mysqli('10.161.8.9', 'demo', '12FI1', 'sporttag'); // für die anderen
#$db = new mysqli('localhost', 'root', '', 'sporttag');
if ($db->connect_errno) {
    die("DB Connection Error");
}

?>