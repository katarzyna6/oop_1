<?php

class Personnage {

    public $nom;
    public $force;
    public $level;
    public $sante;
    public $etat;

    function caracteristiques() {
        echo $this->nom ." a une force de ". $this->force . ", une santé de ". $this->sante . ". Son niveau est: ". $this->level . ". Son état est: ". $this->etat() .".";
    }
    function etat() {
        if($this->sante >= 1) {
            $etat =  "alive";
            } else {
                $etat = "dead";
        }
        return $etat;
    }
}

$perso1 = new Personnage();
$perso2 = new Personnage();
$perso3 = new Personnage();

$perso1->nom = "Rose";
$perso1->force = 12;
$perso1->level = 1;
$perso1->sante = 3;
$perso1->etat = 1;

$perso2->nom = "Golbu";
$perso2->force = 15;
$perso2->level = 1;
$perso2->sante= 5;
$perso2->etat = 0;

$perso3->nom = "Arthis";
$perso3->force = 13;
$perso3->level = 1;
$perso3->sante = 0;
$perso3->etat = 0;

$perso3->caracteristiques();

