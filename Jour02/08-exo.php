<?php
// http://192.168.56.11/jour02/08-exo.php

/*
 * créer le fichier 08-exo.php 

en utilisant une boucle for, afficher dans le navigateur les string suivants :
4 x 2 = 8
4 x 3 = 12
4 x 4 = 16
4 x 5 = 20
4 x 6 = 24
 * 
 */

for($i=2 ; $i<=6 ; $i++){
    echo "4 x $i = " . $i*4 . "<br>";
}