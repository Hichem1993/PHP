<?php
// http://192.168.56.11/jour02/14-fonction-suite.php

declare(strict_types =1);  // Rend le typehint OBLIGATOIRE !


function addition(){
    $a = 20;
    $b = 30;
    echo $b + $a . "<br>";
}

function addition2(){
    $a = 5;
    $b = 10;
    echo $b + $a . "<br>";
}


// Fonction qui a deux paramètres :
function add(int $a, int $b){  // int : Type hinting (Version 7.3 PHP)
    echo $a + $b . "<br>";
}

add(10 , 20);  // au moment de l'exécution de la fonction que l'on donne des valeur aux paramètres
@add(12.3 , 22);  // On a mentionner que des INT