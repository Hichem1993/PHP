<?php 

declare(strict_types = 1); 


// créer le fichier 04-exo.php
/* créer une fonction qui s'appelle min 

2/ cette fonction dispose de deux arguments $a et $b qui sont des entiers

3/ cette fonction dispose de plusieurs instructions :
- si $a est supérieur ou égal  à b retourner la valeur de $b 
- si $a est inferieur strictement à b retourner la valeur de $a

exécuter la fonction min avec les valeurs suivantes 
10 30
20 80
12 1
afficher la valeur minimal dans votre navigateur pour chaque exécution
*/
// 15h50 bonne pause !! 



function myMin( int $a , int $b ) : string{
    if($a >= $b){
        return $b . "<br>";
    }else {
        return $a . "<br>";
    }
}

echo myMin(10 ,30);
echo myMin(20 ,80);
echo myMin(12 , 1);