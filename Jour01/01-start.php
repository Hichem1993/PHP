<?php

// Commentaire
# Commentaire
/*
Commentaire
Commentaire
*/


// Variable en PHP : Type simple (Une variable stocke une valeur)
$duree = 10;  // INT
$prix = 25.3;  // FLOAT
$prenom = "Hichem";  // String
$nom = 'Ben Ayed';  // String
$estDisponible = True;  // Boolean
$estFini = False;  // Boolean


// Variable en PHP : Type complexe (Une variable stocke plusieurs valeurs)

// Tableau (Array) :
// 2 Types de tableau : Indexé OU Associatif

// Indexé :
$prix = [1,2,3];
$jours = ['lundi' , 'mardi' , 'mercredi'];


// Associatif :
$etudiant = [
    "nom" => "Alain",
    "age" => 22,
    "IsAdmin" => false
];


// Objet : en php il faut créer d'abord une class pour créer un objet
class A{};
$a = new A();  // La variable a qui est l'objet



?>