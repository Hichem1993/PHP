<?php
// http://192.168.56.11/Jour04/05-exo.php
declare(strict_types = 1);

/*
1 créer un nouveau fichier 04-exo.php

2 ce fichier contient une variable de type tableau :
- le nom de la variable est $favoris
- cette variable contient les valeurs suivantes :
  - https://www.google.fr
  - https://fr.wikipedia.org
  - http://fr.yahoo.com

3 ajouter à la fin du tableau la valeur suivante : https://www.grafikart.fr/
4 ajouter au début du tableau la valeur suivante : https://www.w3schools.com/ - documentation php.net - array_unshift()
5 modifier la valeur du deuxième élément du tableau par le valeur suivante : https://developer.mozilla.org
6 supprimer le troisième élément du tableau
7 supprimer le dernier élément du tableau
8 afficher le contenu du tableau dans le navigateur
*/

// Création du tableau :
$favoris = ["https://www.google.fr" , "https://fr.wikipedia.org" , "http://fr.yahoo.com"];

// Ajouter à la fin du tableau la valeur suivante : https://www.grafikart.fr/ :
array_push($favoris , "https://www.grafikart.fr/");

// Ajouter au début du tableau la valeur suivante : https://www.w3schools.com/ :
array_unshift($favoris , "https://www.w3schools.com/");

// Modifier la valeur du deuxième élément du tableau par le valeur suivante : https://developer.mozilla.org :
array_splice($favoris , 1 , 1 , "https://developer.mozilla.org");

// Supprimer le troisième élément du tableau :
array_splice($favoris , 2 , 1);

// Supprimer le dernier élément du tableau :
array_pop($favoris);

// Afficher le contenu du tableau dans le navigateur :
var_dump($favoris);