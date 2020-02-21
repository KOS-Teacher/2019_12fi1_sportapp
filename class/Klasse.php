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

    function getBestKlasse() {
      global $db;
      $stmt= $db->query("SELECT * FROM klasse ORDER BY Klasse_Punkte DESC LIMIT 3");
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
        // try {
        //   $db->exec("DELETE FROM Klasse WHERE Klasse_ID = '{$id}'"); //funktioniert
        
        // } catch (PDOException $e) {
        //   echo $e->getMessage();
        // }
      }



  }
