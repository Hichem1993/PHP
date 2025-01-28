<?php
// http://192.168.56.11/jour02/03-unaire.php

//-----------------------------------------------------------------
 

// CONCATENATION .=

// Concaténation avec 3 variables :
$prenom = "Victor";
$nom = "Hugo";
$nomComplet = $prenom . " " . $nom ;
echo $nomComplet . "<br>";


// Je vais faire la mm concaténation MAIS avec 1 seule variable :
$auteur = "Victor";
$auteur = $auteur . " ";
$auteur = $auteur . "Hugo";
echo $auteur . "<br>";


// Opérateur Unaire .=
$auteur = "Victor";
$auteur .= " ";
$auteur .= "Hugo";
echo $auteur . "<br>";


//-----------------------------------------------------------------


$a = 10;
$b = 30;
$c = $a + $b ;
echo $c . "<br>";


$d = 10;
$d = $d + 30;
echo $d . "<br>";


$e = 10;
$e += 30;
echo $e . "<br>";


//-----------------------------------------------------------------


$f = 10;
$f = $f + 1;
$f += 1;
$f++;
echo $f . "<br>";

$g = 20;
$g = $g - 10;
echo $g . "<br>";  // 10
$g -= 10;
echo $g . "<br>";  // 0