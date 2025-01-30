<?php
// http://192.168.56.11/Jour04/02-exo.php
declare(strict_types = 1);

/*
1 créer le fichier 01-exo.php

2 ce fichier contient un tableau ayant les valeurs suivantes :
$listeMarque = ["Toyota", "BMW", "Skoda", "Nissan"] ;

3 afficher dans le navigateur les chaines de caractères suivantes :

voiture n° 1 a la marque Toyota
voiture n° 2 a la marque BMW
voiture n° 3 a la marque Skoda
voiture n° 4 a la marque Nissan
*/

$listeMarque = ["Toyota", "BMW", "Skoda", "Nissan"] ;
// FOR :
for($i = 0 ; $i < count($listeMarque) ; $i++){
    echo "Voiture n° " . $i+1 . " a la marque " . $listeMarque[$i] . "<br>";
};

// FOREACH :
foreach($listeMarque as $position => $valeur){
    echo "Voiture n° " . $position+1 . " a la marque " . $valeur . "<br>";
};