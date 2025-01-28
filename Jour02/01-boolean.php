<?php
// http://192.168.56.11/jour02/01-boolean.php
// vagrant up  ===> Démarrer la machine
// vagrant halt  ===> Arreter la machine
echo "Boolean <br>";

$a = True ;
$b = False ;

$c = 10 > 5;
echo $c . "<br>"; // echo d'un boolean True ===> Affiche 1

$d = 10 < 5;
echo $d . "<br>"; // echo d'un boolean False ===> Affiche rien
var_dump($d);  // Pour afficher le false : Fonction de débuggage


// --------------------------------------------------------


// AND - ET - &&
// Comme pour les chiffres on peut faire des opérations booleans
$e = 20 > 5 && 10 < 30;  // && ET AND
//   True  AND   True
//        True
var_dump($e);


$f = 20 < 5 && 10 < 30 ;
//   False  Et  True
//        False
var_dump($f);


$g = 20 > 5 && 10 > 30;
//   True  &&   False
//       False
var_dump($g);


// --------------------------------------------------------


// OR - OU - ||
$i = 30 > 5 || 20 > 10;
//    True  ||  True
//         True

$j = 30 < 5 || 20 > 10;
//    False || True
//         True

$k = 30 > 5 || 20 < 10;
//    True  ||  False
//         True


// --------------------------------------------------------


// NOT - !
$m = !(20 > 10);
//   !  (True)
//    False

$m = !(20 < 10);
//   ! (False)
//     True


// --------------------------------------------------------


// Pour info : BONUS
$o = 30 < 5 AND 20 > 10;
$p = 30 < 5 OR 20 > 10;
$q = 30 < 5 XOR 20 > 10;