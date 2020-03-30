<?php

class Personnage {

    public $nom;
    public $force;
    public $level;

    function caracteristiques() {
        echo $this->nom ." a une force de ". $this->force;
    }
}

$perso1 = new Personnage();
$perso2 = new Personnage();
$perso3 = new Personnage();

$perso1 -> nom = "Rose";
$perso1 -> force = 12;

$perso2 -> nom = "Golbu";
$perso2 -> force = 15;

$perso3 -> nom = "Arthis";
$perso3 -> force = 13;

$perso1->caracteristiques();

?>