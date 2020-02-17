<?php
  require("../class/Station.php");
  require("db_controller.php");
  header('Content-type: application/json');


$station = new Station;
$test = $station->getStationName();
echo ($test);

  
?>