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

  // echo $_GET["q"];
  
  // $myJSON = json_encode($station);

  // echo $myJSON;

  // print_r($station);

  $alleStationen = $db->query("SELECT Station_Name, Station_Passwort FROM station");

  while($row= $alleStationen->fetch_assoc()) {
    $daten[] = $row;
  };

// $myJSON1 = json_encode($station);
// echo $myJSON1;

//   var_dump($myJSON1);
  

  $myJSON2 = json_encode($daten);
  echo $myJSON2;

  // var_dump($myJSON2);




?>