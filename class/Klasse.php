<?php
class Klasse {

    private $Klasse_ID;
    private $Klasse_Anzahlschueler;
    private $Klasse_Passwort


    public function __construct($Klasse_ID = null) {
        if (!empty($Klasse_ID)) {
            $this->getIdKlasse($Klasse_ID);
        }
    }

    public function getKlasse() {
        $Klasse_ID = $this->getIdKlasse();
        if (!empty($Klasse_ID)) {
            $sql = "SELECT * FROM Klasse WHERE Klasse_ID ='{$Klasse_ID}'";
            $q = $pdo->query($sql);
            if (xxx($q) > 0) {
                $row = xxx($q);
                $this->setIdKlasse($row['Klasse_ID']);
                $this->setAnzahlSchueler($row['Klasse_Anzahlschueler']);
            }
            }
        }


    public function addKlasse() {
        $sql = "INSERT INTO Klasse (
            Klasse_ID,
            Klasse_Anzahlschueler
        ) VALUES (
            '".$this->getIdKlasse()."',
            '".$this->getAnzahlSchueler()."'
        )";
        xxx($sql);
        $id_schueler = xxx();
        return $id_schueler;
    }


    public function editKlasse() {
        $sql = "UPDATE Klasse SET Klasse_Anzahlschueler = '$this->getAnzahlSchueler()' WHERE Klasse_ID = '$this->getKlasseID' ";
        xxx($sql);
    }


    public function deleteKlasse() {
        $sql = "DELETE FROM Klasse WHERE Klasse_ID = '$this->getKlasseID' ";
        xxx($sql);
    }

 
    public function getIdKlasse()
    {
        return $this->Klasse_ID;
    }


    public function getAnzahlSchueler()
    {
        return $this->Klasse_Anzahlschueler;
    }

    public function setAnzahlSchueler($Klasse_Anzahlschueler)
    {
        $this->Klasse_Anzahlschueler = $Klasse_Anzahlschueler;

        return $this;
    }

}
?>
