<?php
  require("../class/Klasse.php");
  require("../class/Schueler.php");
  require("db_controller.php");
  header('Content-type: application/json');

  // $request = $_GET["delete"];
  // $klasse = new Klasse;
  // $klasse->DeleteKlasse($request);

  $request = $_GET["q"];

  $Name_Klasse = "12FI1";
  $Anzahl_Schueler = 0;
  $schueler = new Schueler;
  $klasse = new Klasse;

 if ($request = "neuKlasseErstellen") {
      $col = $Anzahl_Schueler;
      $col2 = $Name_Klasse;
      $klasse->SetKlasse($col2, $col);
  for ($x = 1; $x <= $Anzahl_Schueler; $x++) {
      $col1 = $Name_Klasse . $x;
      $col2 = $Name_Klasse;
      $col3 = 0;
      $col4 = 0;
      $schueler->SetSchueler($col1, $col2, $col3, $col4);
      echo "Schüler_ID: " . $col1 . " Klasse: " . $col2 . " Punkte: " . $col3 . " Krank: " . $col4;
      echo "      ";
  }
 }



  
?>