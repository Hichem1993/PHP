<?php
declare(strict_types =1);
// http://192.168.56.11/jour02/15-exo.php

/*
cas pratique
Créer le fichier 15-exo.php

1/ déclarer une fonction aireCercle 

2/ cette fonction dispose d'un argument $rayon

3/ cette fonction contient deux instructions :
- déclarer la variable $resultat = 3,14 * rayon * rayon
- afficher dans le navigateur la phrase suivante :
l'aire d'un cercle de rayon $rayon a une aire de $resultat

4/ exécuter la fonction aireCercle pour le $rayon
44,5
70,43
*/

function aireCercle(float $rayon){
    $resultat = M_PI * ($rayon ** 2) ;  // M_PI = PI = 3.14..
    echo "L'aire d'un cercle de rayon $rayon a une aire de $resultat <br>";
}

aireCercle(44.5);
aireCercle(70.43);