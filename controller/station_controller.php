<?php
  require("../class/Station.php");
  require("db_controller.php");
  header('Content-type: application/json');

$request = $_GET["q"];

if ($request = "allestationen") {
  $station = new Station;
$test = $station->getStation();
echo ($test);
}


  
?>