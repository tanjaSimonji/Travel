<?php

class Vozilo {
public $boja;

public function __construct($boja) {
$this->boja = $boja;
}
}

class Automobil extends Vozilo {
    public $model;
    static $broj = 0;

    public function _construct($boja,$model) {
        parent::__construct($boja);
        self::broj++;
        this->$model = $model;
    }

    public function brojac() {
        echo "trenutni broj" . self::$broj;
    }
}
?>