<?php

class Schueler {

    function getSchueler() {
        global $db;
        $stmt= $db->query("SELECT * FROM schueler");
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $daten[] = $row;
        };
        $myJSON = json_encode($daten);
        return $myJSON;
      }
      function SetSchueler($col1, $col2, $col3, $col4) {
        global $db;
        $stmt= $db->query("INSERT INTO schueler (Schueler_ID, Klasse_ID, Schueler_Punkte, Schueler_Krank)VALUES ('{$col1}', '{$col2}', '{$col3}', '{$col4}')");
      }
      function UpdateSchueler($id, $col2, $col3, $col4) {
        global $db;
        $stmt= $db->query("UPDATE schueler (`Klasse_ID`, `Schueler_Punkte`, `Schueler_Krank`)VALUES ({$col2}, {$col3}, {$col4}) WHERE 'Schueler_ID' = {$id}");
 
      }
      function DeleteSchueler($id) {
        global $db;
        $db->query("DELETE FROM schueler WHERE 'Schueler_ID'= {$id}");
        
      }

  }
