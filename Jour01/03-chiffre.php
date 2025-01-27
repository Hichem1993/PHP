<?php
// http://192.168.56.11/Jour01/03-chiffre.php

$a = 10;
$b = 30;

// On peut effectuerles opérations de base :
// Addition +
$c = $a + $b ;
echo $c . "<br>";
// OU
echo $a + $b . "<br>" ;


// Soustraction
echo $a - $b . "<br>" ;


// Division
echo $a / $b . "<br>" ;


// Multiplication
echo $a * $b . "<br>" ;


// Modulo
echo $a % $b . "<br>" ;


// Puissance
echo $a ** $b . "<br>" ;


// Maximum INT : 9223372036854775807
echo PHP_INT_MAX . "<br>" ;


// Division sur 0 : Fatal error: Uncaught DivisionByZeroError: Division by zero
// echo 10 / 0 ;


// Addtion nombre avec texte : CA MARCHE
$prix = 10;
$promotion = "30";
echo $prix + $promotion . "<br>"; // ça fonctionne


// ça fonctionne (avec warning) car le chiffre est mis au début des strings
$distance = "20km";
$duree = "30min";
echo $distance + $duree . "<br>"; // ça fonctionne