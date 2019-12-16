<?php

class Schueler {

    private $id_schueler;
    private $id_klasse;
    private $punkte_schueler;
    private $krank_schueler;

    public function __construct($id_schueler = null) {
        if (!empty($id_schueler)) {
            $this->getIdStation($id_schueler);
        }
    }

    public function getSchueler() {
        $id_schueler = $this->getIdSchueler();
        if (!empty($id_schueler)) {
            $sql = "SELECT * FROM schueler WHERE id_schueler ='{$id_schueler}'";
            $q = $pdo->query($sql);
            if (xxx($q) > 0) {
                $row = xxx($q);
                $this->setIdSchueler($row['id_schueler']);
                $this->setIdKlasse($row['id_klasse']);
                $this->setPunkteSchuler($row['punkte_schueler']);
                $this->setKrankSchuler($row['krank_schueler']);
            }
            }
        }

    public function addStation() {
        $sql = "INSERT INTO station (
            id_schueler,
            id_klasse,
            punkte_schueler,
            krank_schueler
        ) VALUES (
            'null',
            '".$this->getIdKlasse()."',
            '".$this->getPunkteSchueler()."',
            '".$this->getKrankSchueler()."'
        )";
        xxx($sql);
        $id_schueler = xxx();
        return $id_schueler;
    }

    public function removeSchueler($id_schueler) {
        if (!empty($id_schueler)) {
            $sql = "DELETE FROM schueler WHERE id_schueler = '".$id_schueler."' ";
            xxx($sql);
        }
    }

    public function updateSchueler() {
        $sql = "UPDATE schueler SET ";
        $sql .= "id_klasse = '".$this->getIdKlasse()."', ";
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
    public function getIdSchueler()
    {
        return $this->id_schueler;
    }

    /**
     * Set the value of id_schueler
     *
     * @param mixed id_schueler
     *
     * @return self
     */
    public function setIdSchueler($id_schueler)
    {
        $this->id_schueler = $id_schueler;

        return $this;
    }

    /**
     * Get the value of id_klasse
     *
     * @return mixed
     */
    public function getIdKlasse()
    {
        return $this->id_klasse;
    }

    /**
     * Set the value of id_klasse
     *
     * @param mixed id_klasse
     *
     * @return self
     */
    public function setIdKlasse($id_klasse)
    {
        $this->id_klasse = $id_klasse;

        return $this;
    }

    /**
     * Get the value of punkte_schueler
     *
     * @return mixed
     */
    public function getPunkteStation()
    {
        return $this->punkte_schueler;
    }

    /**
     * Set the value of punkte_schueler
     *
     * @param mixed punkte_schueler
     *
     * @return self
     */
    public function setPunkteStation($punkte_schueler)
    {
        $this->punkte_schueler = $punkte_schueler;

        return $this;
    }
    /**
     * Get the value of krank_schueler
     *
     * @return mixed
     */
    public function getOrtSation()
    {
        return $this->krank_schueler;
    }

    /**
     * Set the value of krank_schueler
     *
     * @param mixed krank_schueler
     *
     * @return self
     */
    public function setOrtStation($krank_schueler)
    {
        $this->krank_schueler = $krank_schueler;

        return $this;
    }


  }
