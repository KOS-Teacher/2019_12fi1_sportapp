<?php
  require("../class/Station.php");
  require("../class/Schueler.php");
  require("../class/Klasse.php");
  require("db_controller.php");
  header('Content-type: application/json');


  $request = $_GET["q"];



  if ($request = "punktePlus") {
    $Klasse = new Klasse;
    $Schueler = new Schueler;
    $Scan1 = $_GET["schulernummer1"];
    $Scan2 = $_GET["schulernummer2"];
    $Scan3 = $_GET["schulernummer3"];
    $Scan4 = $_GET["schulernummer4"];
    $Scan5 = $_GET["schulernummer5"];

    function ScanResult($Scan){
      $Klasse = new Klasse;
      $Schueler = new Schueler;
      $Punkte = $_GET["station_punkte"];
      if ($Scan != NULL) {
        $SchuelerID = $Schueler->GetSchuelerID($Scan);
        if( $SchuelerID != NULL) {
          $KlasseID = $Schueler->GetSchuelerKlasseID($Scan);    
          $Klasse->SetKlassePunkte($Punkte, $KlasseID["Klasse_ID"]);
          $Schueler->SetSchuelerPunkte($Punkte, $Scan);
        }
      }
    }
    ScanResult($Scan1);
    ScanResult($Scan2);
    ScanResult($Scan3);
    ScanResult($Scan4);
    ScanResult($Scan5);

  }

  ?>