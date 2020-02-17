<?php
  require("../class/Schueler.php");
  require("db_controller.php");
  header('Content-type: application/json');

$request = $_GET["q"];

if ($request = "") {
  $station = new Schueler;
$test = $station->getSchueler();
echo ($test);
}


  
?>