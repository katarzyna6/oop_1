<?php

class Personnage {

    //Ajouter à notre classe Personnage les caractéristiques suivantes :->santé ->le fait qu'il soit vivant ou mort
    public $nom;
    public $force;
    public $level;
    public $health;
    public $death;

    //Faîtes en sorte que chaque personnage nous informe sur ses nouvelles propriétés grâce à sa méthode caracteristiques()
    function caracteristiques() {
        $etat = ($this->death)? "mort" : "vivant";
        echo  $this->nom ." a une force de ". $this->force . ", une santé de ". $this->health . ". Son niveau est: ". $this->level . ". Son état est: ". $etat .".";
    }
}

$perso1 = new Personnage();
$perso1->nom = "Rose";
$perso1->force = 12;
$perso1->level = 1;
$perso1->health = 100;
$perso1->death = false;

$perso2 = new Personnage();
$perso2->nom = "Golbu";
$perso2->force = 15;
$perso2->level = 1;
$perso2->health= 10;
$perso2->death = false;

$perso3 = new Personnage();
$perso3->nom = "Arthis";
$perso3->force = 13;
$perso3->level = 1;
$perso3->health = 0;
$perso3->death = true;

$perso1->caracteristiques();

