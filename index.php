<?php

class Personnage {

    private $nom;
    private $force;
    private $level;
    private $health;
    private $death;

    function __construct(string $nom, int $force, int $health = 100, int $level = 1) {
        $this->setNom($nom);
        $this->setForce($force);
        $this->setHealth($health);
        $this->setLevel($level);
        $this->setDeath();
        
    }

    function caracteristiques() {
        $etat = ($this->death)? "mort" : "vivant";
        echo  $this->nom ." a une force de ". $this->force . ", son état de santé est de ". $this->health ." points/100.  Son niveau est: ". $this->level .". Il est: " . $etat. "."."<br>";
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
    }

    function isDeath(): bool {
        return $this->death;
    }

    function setDeath() {
        if($this->health < 1) {
            $this->death = true;
        } else {
            $this->death = false;
        }
    }

    function attaquer(Personnage $perso) {
        $perso->setHealth($perso->getHealth() - $this->force);
        $perso->setDeath();
    }

}

$perso1 = new Personnage("Rose", 12);

$perso2 = new Personnage("Golbu", 15, 10, 2);

$perso3 = new Personnage("Arthis", 13, 0);

echo "Avant attaque : ";
$perso2->caracteristiques();
$perso1->attaquer($perso2);
echo "Après l'attaque : ";
$perso2->caracteristiques();

