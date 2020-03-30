<?php

class Personnage {

    private $nom;
    private $force;
    private $level;
    private $health;
    private $death;

    function caracteristiques() {
        $etat = ($this->death)? "mort" : "vivant";
        echo  $this->nom ." a une force de ". $this->force . ", son état de santé est de ". $this->health ." points/100.  Son niveau est: ". $this->level .". Il est: " . $etat. ".";
    }

    function getNom(): string {
        return $this->nom;
    }

    function setNom(string $nom) {
        $this->nom = $nom;
    }

    function getForce(): int {
        return $this->force;
    }

    function setForce(int $force) {
        $this->force = $force;
    }

    function getLevel(): int {
        return $this->force;
    }

    function setLevel(int $level) {
        $this->level = $level;
    }

    function getHealth(): int {
        return $this->health;
    }

    function setHealth(int $health) {
        $this->health = $health;
        if($this->health < 1) {
            $this->setDeath(true);
        } else {
            $this->setDeath(false);
        }
    }

    function isDeath(): bool {
        return $this->death;
    }

    function setDeath(int $death) {
        $this->death = $death;
    }
}

$perso1 = new Personnage();
$perso1->setNom("Rose");
$perso1->setForce(12);
$perso1->setLevel(1);
$perso1->setHealth(10);
$perso1->setDeath(false);

$perso2 = new Personnage();
$perso2->setNom("Golbu");
$perso2->setForce(15);
$perso2->setLevel(1);
$perso2->setHealth(10);
$perso2->setDeath(false);

$perso3 = new Personnage();
$perso3->setNom("Arthis");
$perso3->setForce(13);
$perso3->setLevel(1);
$perso3->setHealth(0);
$perso3->setDeath(true);

$perso1->caracteristiques();

