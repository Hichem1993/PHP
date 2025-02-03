<?php
// http://192.168.56.11/Jour06/04-exo.php
declare(strict_types = 1);

// créer le fichier 04-exo.php
// dans ce fichier vous allez créer une class qui s'appelle Exo
// cette class contient 2 propriétés
// note qui vaut 10
// etudiant qui vaut "Alain"
// cette contient une méthode presentation
// cette méthode fait la concaténation de note et Alain
// elle retourne le texte suivante "Alain a eu une note de 10 / 20 ;

// créer un objet $e à partir de la class Exo
// exécuter la méthode presentation est affichée le résultat sur la navigateur 


class Exo {
    public int $note = 10;
    public string $etudiant = "Alain";
    public function presentation():string{
        return "{$this->etudiant} a eu une note de {$this->note} / 20";
    }
}

$e = new Exo();
echo $e->presentation();