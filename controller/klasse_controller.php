<?php
  require("../class/Klasse.php");
  require("db_controller.php");
  header('Content-type: application/json');

$request = $_GET["delete"];

  $klasse = new Klasse;
 $klasse->DeleteKlasse($request);


  
?>