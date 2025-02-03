<?php
// http://192.168.56.11/Jour06/02-exo.php
declare(strict_types = 1);

//! cas pratique : 
// créer le fichier 02-exo.php
// dans ce fichier vous allez créer une class qui s'appelle Formation
// cette class contient 4 propriétés publiques 
// nom => DWWM
// duree => 6
// unite => mois
// competences => tableau indexé 3 valeurs => PHP HTML CSS

// une fois que la class est créée créer un $f 
// afficher dans le navigateur le contenu de la propriété unite 


class Formation{
    public string $nom = "DWWM";
    public int $duree = 6;
    public string $unite = "mois";
    public array $competence = ["PHP" , "HTML" , "CSS"];
}

$f = new Formation();
echo $f->unite . "<br>" ;
echo $f->competence[2];