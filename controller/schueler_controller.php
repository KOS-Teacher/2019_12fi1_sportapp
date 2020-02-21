<?php
  require("../class/Schueler.php");
  require("db_controller.php");
  header('Content-type: application/json');

  if ($_GET["a"] = TRUE) {
    $request = $_GET["a"];
  };

// if ($request = "auswertungen") {
//   $schueler = new Schueler;
// $test = $schueler->getSchueler();
// echo ($test);
// }

$bestSchueler = new Schueler;
$bestSchueler = $bestSchueler->getBestSchueler();
echo $bestSchueler;




  
?>