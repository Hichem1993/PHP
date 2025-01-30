<?php
// http://192.168.56.11/Jour04/04-fonction-tableau.php
declare(strict_types = 1);

/*
Le CRUD :

- ajouter des valeurs dans un tableau : 
  - array_push() , 
  - array_unshift()
  - via $tab[]
  - via array_splice()
- modifier des valeurs dans un tableau 
	- via l'index
	- via array_splice()
- supprimer des éléments dans un tableau : array_splice() array_pop() array_shift() unset()
*/

$ville = ["Paris" , "Lyon"];

// CREATE :

// Ajouter a la fin de tableau :
$ville[] = "Marseille";
array_push($ville , "Madrid");
var_dump($ville);


// --------------------------------------------------------------


// Ajouter au début du tableau et décaler les autres :
array_unshift($ville , "Londre");
var_dump($ville);


// --------------------------------------------------------------


// Ajouter Berlin Entre Lyon et Marseille :
// ATTENTION : lafonction suivante permet d'ajouter / supprimer / modifier
array_splice($ville , 3 , 0 , "Berlin");   // 3 : Position  -  0 : Nombre d'élement à supprimer
var_dump($ville);


// --------------------------------------------------------------


// UPDATE :

$societe = ["Total" , "LVMH" , "Greta"];
// Méthode 1 :
$societe[0] = "Shell";
var_dump($societe);
// OR : Méthode 2 :
// Changer LVMH avec Chanel :
array_splice($societe, 1 , 1 , "Chanel");  // 1 : Position  -  1 : Nombre d'élement à supprimer
var_dump($societe);


// --------------------------------------------------------------


// DELETE :