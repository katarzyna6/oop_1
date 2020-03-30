<?php

class Personnage {

    private $nom;
    private $force;
    private $level;

    function __construct(string $nom, int $force, int $level = 1) {
       $this->nom = $nom;
       $this->force = $force;
       $this->level = $level; 
    }

    function caracteristiques() {
        echo  $this->nom ." a une force de ". $this->force .". Son niveau est: ". $this->level;
    }

    function getNom(): string {
        return $this->nom;
    }

    function setNom(string $nom) {
        $this->nom = $nom;
    }

    function getLevel(): int {
        return $this->level;
    }

    function setLevel(int $lvl) {
        $this->level = $lvl;
    }

}

$perso1 = new Personnage("Rose", 12);
$perso2 = new Personnage("Golbu", 15, 2);
$perso3 = new Personnage("Arthis", 13, 2);

$perso2->setNom("Mary");
$perso2->setLevel(2);

$perso2->caracteristiques();

