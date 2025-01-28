<?php
declare(strict_types =1);
// http://192.168.56.11/jour02/16-fonction-suite.php

function calcul(int $a , string $b){
    echo "$a en $b <br>";
}


// Pour exécuter la fonction calcul (METHODE 1) :
calcul(10, "euros");


// Pour exécuter la fonction calcul (METHODE 2) Spécial PHP :
$nomFonction = "calcul";  // Créer une variable stocke du texte
$nomFonction(30,"centimes");  // Exécuter notre variable


// Pour exécuter la fonction calcul (METHODE 3) Spécial PHP :
// Fonctions qui permettent d'exécuter des fonctions

call_user_func("calcul", 5, "km");
call_user_func_array("calcul", [30, "secondes"]);

var_dump();