<?php

class Station {

    private $id_station;
    private $name_station;
    private $punkte_station;
    private $ort_station;
    private $beginn_station;
    private $id_lehrer;
    private $aktiv_station;

    public function __construct($id_station = null) {
        if (!empty($id_station)) {
            $this->getIdStation($id_station);
        }
    }

    public function getStation() {
        $id_station = $this->getIdStation();
        if (!empty($id_station)) {
            $sql = "SELECT * FROM station WHERE id_station ='{$id_station}'";
            $q = $pdo->query($sql);
            if (xxx($q) > 0) {
                $row = xxx($q);
                $this->setIdStation($row['id_station']);
                $this->setNameStation($row['name_station']);
                $this->setPunkteStation($row['punkte_station']);
                $this->setOrtStation($row['ort_station']);
                $this->setBeginnStation($row['beginn_station']);
                $this->setAktivStation($row['aktiv_station']);
                $this->setIdLehrer($row['id_lehrer']);
            }
            }
        }

    public function addStation() {
        $sql = "INSERT INTO station (
            id_station,
            name_station,
            punkte_station,
            ort_station,
            beginn_station,
            aktiv_station,
            id_lehrer
        ) VALUES (
            'null',
            '".$this->getNameStation()."',
            '".$this->getPunkteStation()."',
            '".$this->getOrtStation()."',
            '".$this->getBeginnStation()."',
            '".$this->getAktivStation()."',
            '".$this->getIdLehrer()."'
        )";
        xxx($sql);
        $id_station = xxx();
        return $id_station;
    }

    public function removeStation($id_station) {
        if (!empty($id_station)) {
            $sql = "DELETE FROM station WHERE id_station = '".$id_station."' ";
            xxx($sql);
        }
    }

    public function updateStation() {
        $sql = "UPDATE station SET ";
        $sql .= "name_station = '".$this->getNameStation()."', ";
        $sql .= "punkte_station = '".$this->getPunkteStation()."', ";
        $sql .= "ort_station = '".$this->getOrtStation()."', ";
        $sql .= "beginn_station = '".$this->getBeginnStation()."', ";
        $sql .= "aktiv_station = '".$this->getAktivStation()."', ";
        $sql .= "id_lehrer = '".$this->getIdLehrer()."', ";
        $sql .= " WHERE id_station = '".$this->getIdStation()."' ";
        xxx($sql);
    }

    /**
     * Get the value of id_station
     *
     * @return mixed
     */
    public function getIdStation()
    {
        return $this->id_station;
    }

    /**
     * Set the value of id_station
     *
     * @param mixed id_station
     *
     * @return self
     */
    public function setIdStation($id_station)
    {
        $this->id_station = $id_station;

        return $this;
    }

    /**
     * Get the value of name_station
     *
     * @return mixed
     */
    public function getNameStation()
    {
        return $this->name_station;
    }

    /**
     * Set the value of name_station
     *
     * @param mixed name_station
     *
     * @return self
     */
    public function setNameStation($name_station)
    {
        $this->name_station = $name_station;

        return $this;
    }

    /**
     * Get the value of punkte_station
     *
     * @return mixed
     */
    public function getPunkteStation()
    {
        return $this->punkte_station;
    }

    /**
     * Set the value of punkte_station
     *
     * @param mixed punkte_station
     *
     * @return self
     */
    public function setPunkteStation($punkte_station)
    {
        $this->punkte_station = $punkte_station;

        return $this;
    }
    /**
     * Get the value of ort_station
     *
     * @return mixed
     */
    public function getOrtSation()
    {
        return $this->ort_station;
    }

    /**
     * Set the value of ort_station
     *
     * @param mixed ort_station
     *
     * @return self
     */
    public function setOrtStation($ort_station)
    {
        $this->ort_station = $ort_station;

        return $this;
    }

    /**
     * Get the value of beginn_station
     *
     * @return mixed
     */
    public function getBeginnStation()
    {
        return $this->beginn_station;
    }

    /**
     * Set the value of beginn_station
     *
     * @param mixed beginn_station
     *
     * @return self
     */
    public function setBeginnStation($beginn_station)
    {
        $this->beginn_station = $beginn_station;

        return $this;
    }
    /**
     * Get the value of aktiv_station
     *
     * @return mixed
     */
    public function getAktivStation()
    {
        return $this->aktiv_station;
    }

    /**
     * Set the value of aktiv_station
     *
     * @param mixed aktiv_station
     *
     * @return self
     */
    public function setAktivStation($aktiv_station)
    {
        $this->aktiv_station = $aktiv_station;

        return $this;
    }
    /**
     * Get the value of id_lehrer
     *
     * @return mixed
     */
    public function getIdLehrer()
    {
        return $this->id_lehrer;
    }

    /**
     * Set the value of id_lehrer
     *
     * @param mixed id_lehrer
     *
     * @return self
     */
    public function setIdLehrer($id_lehrer)
    {
        $this->id_lehrer = $id_lehrer;

        return $this;
    }

  }
