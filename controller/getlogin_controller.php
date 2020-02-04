<?php
  require("../class/station.php");

$station->Station_Name = "tolle Station";
$station->Station_Password = "tolles passwort";

// Mockup-Daten: 
$station = array(
  array(
    "Station_Name" => "S1",
    "Station_Password" => "P1"
  ),
  array(
    "Station_Name" => "S2",
    "Station_Password" => "P2"
  ),
  array(
    "Station_Name" => "S3",
    "Station_Password" => "P3"
  )
);

  // echo $_GET["q"];
  
  $myJSON = json_encode($station);

  echo $myJSON;

  



?>