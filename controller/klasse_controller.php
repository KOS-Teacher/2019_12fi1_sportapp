<?php
  require("../class/Klasse.php");
  require("../class/Schueler.php");
  require("db_controller.php");
  header('Content-type: application/json');

  if (empty($_GET["delete"])) {
    $request = $_GET["delete"];
    $klasse = new Klasse;
    $klasse->DeleteKlasse($request);
  }
  $request = $_GET["n"];
  $Name_Klasse = $_GET["k"];
  $Anzahl_Schueler = $_GET["s"];
  $schueler = new Schueler;
  $klasse = new Klasse;

  echo "Test1: " . $request;
  echo "Test2: " . $Name_Klasse;
  echo "Test3: " . $Anzahl_Schueler;

 if ($request = "neueKlasseErstellen") {
      $col = $Anzahl_Schueler;
      $col2 = $Name_Klasse;
      $klasse->SetKlasse($col2, $col);
  for ($x = 1; $x <= $Anzahl_Schueler; $x++) {
      $col1 = $Name_Klasse . $x;
      $col2 = $Name_Klasse;
      $col3 = 0;
      $col4 = 0;
      $schueler->SetSchueler($col1, $col2, $col3, $col4);
  }
 }



  
?>