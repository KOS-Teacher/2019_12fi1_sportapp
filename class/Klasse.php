<?php
class Klasse {

    private $Klasse_ID;
    private $Klasse_Anzahlschueler;

    public function __construct($Klasse_ID = null) {
        if (!empty($Klasse_ID)) {
          //  $this->getIdStation($Klasse_ID);
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
                $this->setAnzahlSchuler($row['Klasse_Anzahlschueler']);
            }
            }
        }

        public function updateKlasse() {
            $sql = "UPDATE Klasse SET ";
            $sql .= "Klasse_ID= '".$this->getKlasse()."', ";
            $sql .= "punkte_schueler = '".$this->getPunkteSchueler()."', ";
            $sql .= "krank_schueler = '".$this->getKrankSchueler()."', ";
            $sql .= " WHERE id_schueler = '".$this->getIdSchueler()."' ";
            xxx($sql);
        }

        /**
     * Get the value of id_schueler
     *
     * @return mixed
     */
    public function getIdKlasse()
    {
        return $this->Klasse_ID;
    }

}
?>
