<?php
  require("../class/Station.php");
  require("db_controller.php");
  header('Content-type: application/json');


  $request = $_GET["q"];

  echo $request;

  ?>