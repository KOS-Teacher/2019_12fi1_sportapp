<?php
  require("../class/Station.php");
  require("db_controller.php");
  header('Content-type: application/json');

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