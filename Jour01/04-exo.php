<?php
// http://192.168.56.11/Jour01/04-exo.php
// cas n°1 :

// créer le fichier 05-exo.php
// Ce fichier contient 3 variables :
//    $a ayant la valeur 12
//    $b ayant la valeur 0
//    $c ayant la valeur -2,5
// effectuer les calculs suivants et afficher leurs résultats dans le navigateur
//    $a / $c
//    $a * $c + $a
//    $a * ( $c + $a )
//    $a / $b
//    $c / $b

// cas n°2 :

// créer un nouveau fichier php
// Donner l'aire d'un cercle ayant un rayon de 5 cm

// rappel, la formulaire du l'aire d'un cercle est Pi (3.14) x rayon²


echo "<h1>Cas 1</h1>";
$a = 12;
$b = 0;
$c = -2.5;

echo $a / $c . "<br>";
echo $a * $c + $a . "<br>";
echo $a * ($c + $a) . "<br>";

// echo $a / $b . "<br>";
try {
    echo $a / $b . "<br>";
}catch(DivisionByZeroError $e){
    echo $e -> getMessage() . "<br>";
}

// echo $c / $b . "<br>";
try {
    echo $c / $b . "<br>";
}catch(DivisionByZeroError $e){
    echo $e -> getMessage() . "<br>";
}



echo "<h1>Cas 2</h1>";
$rayon = 5;
echo ($rayon ** 2) * 3.14 . "<br>";