<?php
class Karta {
    private $id;
    private $od;
    private $do;
    private $vremePolaska;
    private $datumPolaska;
    private $brojKarata;
    private $email;

    public function __construct($od,$do,$vremePolaska,$datumPolaska,$brojKarata,$email)
    {
    $this->id = rand();
    $this->od = $od;
    $this->do = $do;
    $this->vremePolaska = $vremePolaska;
    $this->datumPolaska = $datumPolaska;
    $this->brojKarata =$brojKarata;
    $this->email = $email;
    }

    public function poruka() {
         echo "Karta sa destinacijom $this->od - $this->do je uspesno kupljena. Datum i vreme polaska: 
                $this->datumPolaska $this->vremePolaska";
    }

    public function getId() {
        return $this->id;
    }
    public function getOd() {
        return $this->od;
    }
     public function getDo() {
        return $this->do;
    }
     public function getVremePolaska() {
        return $this->vremePolaska;
    }
     public function getDatumPolaska() {
        return $this->datumPolaska;
    }
     public function getBrojKarata() {
        return $this->brojKarata;
    }
     public function getEmail() {
        return $this->email;
    }


    public function settOd($od) {
        $this->od = $od;
    }
    public function setDo($do) {
        $this->do = $do;
    }
     public function setVremePolaska($vremePolaska) {
        $this->vremePolaska = $vremePolaska;
    }
     public function setDatumPolaska($datumPolaska) {
        $this->datumPolaska = $datumPolaska;
    }
     public function setBrojKarata($brojKarata) {
        $this->brojKarata =$brojKarata;
    }
     public function setEmail($email) {
        $this->email = $email;
    }
}
?>