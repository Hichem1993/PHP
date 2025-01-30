<?php
// http://192.168.56.11/Jour04/03-exo.php
declare(strict_types = 1);

/*
1 créer un nouveau fichier php 02-exo.php

2 ce fichier contient un tableau ayant les valeurs suivantes :
$parametres = [
      "https://google.fr", 
      2, 
      20 > 12,
      ""
];

3/ afficher, dans le navigateur, le type (via gettype() ) de chaque élément du tableau

4/ parcourir chaque élément du tableau, 
- si un élément a pour type integer alors écrire dans le navigateur : je suis un nombre entité
- si un élément a pour type string alors écrire dans le navigateur : je suis une chaine de caractères
- sinon écrire dans le navigateur : je suis un type non traité
*/

// Tableau
$parametres = [
    "https://google.fr", 
    2, 
    20 > 12,
    ""
];

foreach($parametres as $valeur){
    // Affichage Type :
    echo gettype($valeur) . "<br>";
    
    // Parcourir et vérification
    if(gettype($valeur) == "integer"){
        echo "je suis un nombre entité <br>";
    }
    elseif(gettype($valeur) == "string"){
        echo "je suis une chaine de caractères <br>";
    }
    else{
        echo "je suis un type non traité <br>";
    }
};