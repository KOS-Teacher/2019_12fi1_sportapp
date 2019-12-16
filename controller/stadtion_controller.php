<?php
  require("../class/station.php");

  function delete() {
      $station = new Station();
      $station->removeStation($_POST['id_station']);
  }
  function change() {
      $station = new Station();
      $station->setIdStation($_POST['id_station']);
      $station->setNameStation($_POST['name_station']);
      $station->setPunkteStation($_POST['punkte_station']);
      $station->setOrtStation($_POST['ort_station']);
      $station->setBeginnStation($_POST['beginn_station']);
      $station->setIdLehrer($_POST['id_lehrer']);
      $station->setAktivStation($_POST['aktiv_station']);
      $station->updateStation();
}
  function add() {
      $station = new Station();
      $station->setIdStation($_POST['id_station']);
      $station->setNameStation($_POST['name_station']);
      $station->setPunkteStation($_POST['punkte_station']);
      $station->setOrtStation($_POST['ort_station']);
      $station->setBeginnStation($_POST['beginn_station']);
      $station->setIdLehrer($_POST['id_lehrer']);
      $station->setAktivStation($_POST['aktiv_station']);
      $station->addMailBanner();
}


?>
