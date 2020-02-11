<?php
  require("../class/Station.php");
  require("db_controller.php");
  header('Content-type: application/json');
  // $request = $_GET["q"];
  
  
//   if($request == "allestationen") {
//     // $alleStationen = $db->query("SELECT Station_Name FROM station");
//   $myJSON2 = json_encode($station);
//   echo $myJSON2;
// };



echo "test";

function getStation() {

  $station = new Station();
  $station->getStation();
  print_r($station);
};

   

  getStation();

  





?>