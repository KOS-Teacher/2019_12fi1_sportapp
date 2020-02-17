<?php

  require("db_controller.php");

class Station {

    function getStationName() {
        global $db;
        $stmt= $db->query("SELECT Station_Name FROM station");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $daten[] = $row;
        };

        $myJSON = json_encode($daten);

        return $myJSON;
      }
      
};
