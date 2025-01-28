<?php

// http://192.168.56.11/jour02/10-exo.php

/*
Créer le fichier 10-exo.php

en utilisant une boucle while, afficher dans le navigateur les string suivants :
5 x 10 = 50
5 x 9 = 45
5 x 8 = 40
5 x 7 = 35
...
5 x 1 = 5

 */

$i = 10;
while($i >= 1){
    echo "5 x $i = " . $i*5 . "<br>";
    $i = $i - 1;
}