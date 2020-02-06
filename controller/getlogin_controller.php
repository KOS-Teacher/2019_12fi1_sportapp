<?php
  require("../class/Station.php");
  require("db_controller.php");
  header('Content-type: application/json');



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

  $request = $_GET["q"];
  

  if($request == "allestationen") {
  $alleStationen = $db->query("SELECT Station_Name FROM station");

  while($row= $alleStationen->fetch_assoc()) {
    $daten[] = $row;
  };


  
  $myJSON2 = json_encode($daten);
  echo $myJSON2;
};

  

  





?>