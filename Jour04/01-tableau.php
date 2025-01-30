<?php
// http://192.168.56.11/Jour04/01-tableau.php
declare(strict_types = 1);


//-----------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------
// TABLEAU INDEXE :
// ----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------


// Mixer tableaux et boucle :
// tableau indexé :
$fleurs = ["rose" , "tulipe" , "jasmin"];

echo $fleurs[0] . "<br>";
echo $fleurs[1] . "<br>";
echo $fleurs[2] . "<br>";

// Code qui se répète ==> Eviter
// Par contre la seule chose qui change c'est le chiffre (position)
// ========> On va faire une boucle FOR

for ($i = 0 ; $i <= 2 ; $i++){
    echo $fleurs[$i] . "<br>";
};


//-----------------------------------------------------------------------


// Exemple 2 :

$liste = ["a" , "b" , "c" , "d" , "e" , "f" , "g" , "h"];
// En PHP pour compter le nombre de valeurs dans un tableau
// count() = Longueur des tableau
// strlen() = Longueur du string

for ($i = 0 ; $i < count($liste) ; $i++){
    echo $liste[$i] . "<br>";
};


//-----------------------------------------------------------------------


// Autre manière : foreach
$adresse = ["80 rue de paris" , "70 rue de lille" , "21 rue de marseille"];

foreach($adresse as $rue){
    echo $rue . "<br>";
}


//-----------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------
// TABLEAU ASSOCIATIF :
// ----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------


$formation = [
    "duree" => 2,
    "nom" => "DWWM",
    "unite" => "mois"
];

// Les chiffres/positions ne fonctionnent pas
// echo $formation[0]; "Ne fonctionnent pas"