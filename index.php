<?php

class Personnage {

    protected $nom;
    protected $force;
    protected $level;
    protected $health;
    protected $death;

    function __construct(string $nom, int $force, int $health = 100, int $level = 1) {
        $this->setNom($nom);
        $this->setForce($force);
        $this->setHealth($health);
        $this->setLevel($level);
        $this->setDeath();
        
    }

    function caracteristiques() {
        $etat = ($this->death)? "mort" : "vivant";
        echo  $this->nom ." a une force de ". $this->force . ", son état de santé est de ". $this->health ." points/100.  Son niveau est: ". $this->level .". Il est: " . $etat. "."."<br><br>";
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
        $perso->setDeath();
    }

    function tirer() {
        
    }

    function getLevel(): int {
        return $this->level;
    }

    function setLevel($level) {
        $this->level = $level;
    }

    function levelUp() {
        $this->setLevel($this->getLevel()+1);
        
    }

}


class Archer extends Personnage {
    
    function attaquer(Personnage $perso) {
        $this->tirer();
        $this->degats($perso);
        parent::attaquer($perso);
    }

    function tirer() {
        echo $this->nom." de type ".Archer::class." tire une flèche.<br><br>";
    }

    function degats(Personnage $perso) {
        if($perso instanceof Magicien) {
            $perso->setHealth($perso->getHealth() - 15);
        } else {
            $perso->setHealth($perso->getHealth() - 10);
        }
    }
}

class Guerrier extends Personnage {

    function attaquer(Personnage $perso) {
        $this->frapper(); 
        $this->degats($perso);
        parent::attaquer($perso);   
    }

    function frapper() {
        echo $this->nom." de type ".Guerrier::class." frappe avec une hâche.<br><br>";
    }

    function degats(Personnage $perso) {
        if($perso instanceof Magicien) {
            $perso->setHealth($perso->getHealth() - 10);
        } else {
            $perso->setHealth($perso->getHealth() - 10);

        }
    }

}

class Magicien extends Personnage {

    function attaquer(Personnage $perso) {
        $this->lancerSort();
        $this->degats($perso);
        parent::attaquer($perso);
    }

    function lancerSort() {
        echo $this->nom." de type ".Magicien::class." lance un sort.<br><br>";
    }

    function degats(Personnage $perso) {
        if($perso instanceof Archer) {
            $perso->setHealth($perso->getHealth() - 10);
        } else {
            $perso->setHealth($perso->getHealth() - 20);

        }
    }

}


$perso1 = new Archer("Rose", 12);
$perso2 = new Guerrier("Golbu", 15, 10, 2);
$perso3 = new Magicien("Arthis", 100, 100);

echo "Avant attaque : ";
$perso3->caracteristiques();
$perso2->attaquer($perso3);
echo "Après l'attaque : ";
$perso3->caracteristiques();
echo "<hr>";
$perso1->levelUp($perso1);
$perso1->caracteristiques();


