<?php
// http://192.168.56.11/jour02/02-exo.php


// Cas pratique 
// créer le fichier 02-exo.php dans le dossier jour02

// pour chaque opération boolean suivante est ce que le résultat est 
// TRUE ou FALSE 

// 2 >= 2
// "a" == "ab"
// 2 =! 3 && 10 < 33
// "hello" > "bonjour" 
// 2 ==  "2"
// 2 === "2"
// (2 != 5 && 3 > 4 ) || 2 <= 14 
// 2 != 5 && ( 3 > 4  || 2 <= 14 ) 
// 2 != 5 && 3 > 4  || 2 <= 14  


$a = 2 >= 2 ; // True

$b = "a" == "ab";  // False

$c = 2 != 3 && 10 < 33 ;
//   True  &&  True
//       True

$d = "hello" > "bonjour" ;  // True

$e = 2 == "2";  // True

$f = 2 === "2";  // False

$g = (2 != 5 && 3 > 4 ) || 2 <= 14 ;
//    (True  &&  False) || True
//        False    ||    True
//                True

$h = 2 != 5 && ( 3 > 4  || 2 <= 14 ) ;
//   True  &&  (False   ||   True)
//   True  &&  True
//       True

$g = 2 != 5 && 3 > 4  || 2 <= 14 ;
//   True  &&  False  ||  True
//         False    ||    True
//              True

// ET - && est prioritaire sur le OU - ||