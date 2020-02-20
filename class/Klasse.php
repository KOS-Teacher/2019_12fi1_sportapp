<?php

class Klasse {

    function getKlasse() {
        global $db;
        $stmt= $db->query("SELECT * FROM Klasse");
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $daten[] = $row;
        };
        $myJSON = json_encode($daten);
        return $myJSON;
      }
      function SetKlasse($col2, $col) {
        global $db;
        $stmt= $db->query("INSERT INTO Klasse (`Klasse_ID`, `Klasse_Anzahlschueler`)VALUES ('{$col2}', '{$col}')");
        
      }
      function UpdateKlasse($id, $col2) {
        global $db;
        $stmt= $db->query("UPDATE Klasse (`Klasse_ID`, `Klasse_Anzahlschueler`)VALUES ({$col2}, WHERE 'Klasse_ID' = {$id})");
        
      }
      function DeleteKlasse($id) {
        global $db;
        $db->query("DELETE FROM Klasse WHERE Klasse_ID= '{$id}'"); 
      }



  }
