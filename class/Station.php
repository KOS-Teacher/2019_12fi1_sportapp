<?php

  require("db_controller.php");

class Station {

    function getStation() {
        global $db;
        $stmt= $db->query("SELECT * FROM station");
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $daten[] = $row;
        };
        $myJSON = json_encode($daten);
        return $myJSON;
      }
     
};
