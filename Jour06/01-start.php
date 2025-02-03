<?php
// http://192.168.56.11/Jour06/01-start.php
declare(strict_types = 1);

// EN PHP :
//? 1 Variable contient 1 valeur :
$a = 1 ;  // int
$b = 2.5;  // float
$c = "salut";  // string
$d = true;  // boolean


//? 1 Variable contient plusieurs valeur :
$e = [1,2,3];  // tableau indexé
$f = [  // tableau associatif
    "nom" => "Zorro",
    "age" => 25
];


//? Dernier type de variable en PHP ==> Objet :
// class ==> usine qui permet de créer des objets
class Etudiant{
    // ne pas mettre le $ avant le nom de la class
    // il est conseillé de mettre le nom de la class en Majuscule => PascalCase
}
// c'est la variable $etudiant qui est l'objet !!
$etudiant = new Etudiant();


// Je vais créer une class Rectangle :
// qui contient 2 propriétés largeur = 30 et hauteur = 20
class Rectangle{
    public int $largeur = 30;
    public int $hauteur = 20;
}
$r = new Rectangle();

echo $r->largeur . "<br>" ;
echo $r->hauteur . "<br>" ;