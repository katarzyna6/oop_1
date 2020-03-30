<?php

class Personnage {

    private $nom;
    private $force;
    private $level;

    function __construct($nom, $force, $level = 1) {
       $this->nom = $nom;
       $this->force = $force;
       $this->level = $level; 
    }

    function caracteristiques() {
        echo  $this->nom ." a une force de ". $this->force . ", une santé de ". $this->health . ". Son niveau est: ". $this->level;
    }
}

$perso1 = new Personnage("Rose", 12);
$perso2 = new Personnage("Golbu", 15, 2);
$perso3 = new Personnage("Arthis", 13, 2);

$perso1->caracteristiques();

