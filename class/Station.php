<?php

  require("db_controller.php");

class Station {

    function getStationName($id) {
        global $db;
        $stmt= $db->query("SELECT * FROM station WHERE Station_ID={$id}");
        foreach ($stmt AS $row) {
        echo $row["Station_Name"];
        }
      }
      
};
