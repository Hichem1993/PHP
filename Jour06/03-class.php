<?php
// http://192.168.56.11/Jour06/03-class.php
declare(strict_types = 1);

class Cercle {
    // Stockée des variables : PROPRIETE de la class
    public float $rayon = 12.5;
    // Stockée des fonctions : METHODE de la class
    public function surface():int{
        return 20;
    }
    public function perimetre():float {
        return 2 * 3.4 * $this->rayon;  // $this mot clé du language PHP permet d'acceder aux propriétés de l'objet
    }
}

$c = new Cercle();
echo $c->rayon . "<br>";
echo $c->perimetre() . "<br>";  // Exécuter une méthode