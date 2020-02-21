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
        $stmt= $db->query("INSERT INTO Klasse (`Klasse_ID`, `Klasse_Anzahlschueler`)VALUES ('{$col2}', '{$col}', '0')");
        
      }
      function UpdateKlasse($id, $col2) {
        global $db;
        $stmt= $db->query("UPDATE Klasse (`Klasse_ID`, `Klasse_Anzahlschueler`)VALUES '({$col2}', WHERE Klasse_ID = '{$id}')");
        
      }
      function DeleteKlasse($id) {
        global $db;
        $stmt = $db->prepare("DELETE FROM Klasse WHERE Klasse_ID =:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if( !$stmt->rowCount() ) { 
          echo "Deletion failed";
        } else {
          echo "Deletion complete";
        }
      }
        function setKlassePunkte($Punkte, $KlasseID) {
          global $db;
          $stmt= $db->query("UPDATE Klasse SET Klasse_Punkte = Klasse_Punkte + {$Punkte} WHERE Klasse_ID = '{$KlasseID}'");
          

      }



  }
