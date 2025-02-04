<?php
// http://192.168.56.11/Jour07/01-methode-construct.php
declare(strict_types = 1);

class Etudiant {
    private int $v;
    public function __construct($v){  // Méthode construct() : Magique ==> sens spécial pour PHP
        $this->v=$v;  // Méthode magique Permet d'initialiser les propriétés de l'objet
    }
}

$e = new Etudiant(10);  // Automatiquement la méthode magique va s'exécuter