<?php
// http://192.168.56.11/Jour04/00-crud.php
declare(strict_types = 1);

// CRUD : Create - Read - Update - Delete

//------------------------------------------------------
// ----------------------------------------------------------------------------------------------
// TABLEAU INDEXE :
// ----------------------------------------------------------------------------------------------
//------------------------------------------------------


$a = ["Alain", "Zoro"];
// CREATE :
// Ajouter le texte "Hello" à la fin du tableau :
// Méthode 1 :
$a[] = "Hello";
// Méthode 2 :
array_push($a, "Autre");
// Ajouter le texte "Bonjour" entre Alain et zorro :
// array_splice();


//------------------------------------------------------


// READ :
// Récuperer la valeur "Zorro" :
echo $a[1]; // Zorro
echo $a[3]; // Autre


//------------------------------------------------------


// UPDATE :
// Modifier la valeur Alain par "Pierre" :
$a[0] = "Pierre";


//------------------------------------------------------


// DELETE :
// Supprimer la valeur "Pierre" :
unset($a[0]);


//------------------------------------------------------
// ----------------------------------------------------------------------------------------------
// TABLEAU ASSOCIATIF :
// ----------------------------------------------------------------------------------------------
//------------------------------------------------------


$b=[
    "marque" => "Peugeot",
    "modele" => 208
];
// CREATE :
// Ajouter le prix de 10000 dans le tableau associatif :
$b["prix"] = 10000;


//------------------------------------------------------


// READ :
// Recupérer la marque :
echo $b["marque"];


//------------------------------------------------------


// UPDATE :
// Modifier 208 par 207
$b["modele"] = 207;


//------------------------------------------------------


// DELETE :
// Supprimer la clé marque et la valeur associer :
unset($b["marque"]);


//------------------------------------------------------
// ----------------------------------------------------------------------------------------------
// TABLEAU MULTIDIMENSION
// ----------------------------------------------------------------------------------------------
//------------------------------------------------------


$recette[
    "titre" => "Crêpe de base",
    "Description" => "Prendre une poile, ....",
    "ingredients" => ["Huile" , "Sucre" , "Lait"],
    "prix" => 5,
    "categorie" => ["Gouter", "Dessert"],
    "commentaires" => [
        ["email" => "pierre@gmail.fr" , "sujet" => "Parfait"],
        ["email" => "zorro@gmail.fr" , "sujet" => "Super recette"]
    ],
    "difficulte" => 1,
    "published" => False
];
// CREATE :
// Ajouter une nouvelle catégorie :
// Méthode 1 :
$recette["categorie"][] = "Petit dejeuner";
// Méthode 2 :
array_push($recette["categorie"], "Diner");


//------------------------------------------------------


// READ :
// Afficher le dernier ingredient : "Lait"
echo $recette["ingredients"][2];


//------------------------------------------------------


// UPDATE :
// Modifier "Super recette" par "Merci" :
$recette["commentaires"][1]["sujet"] = "Merci";


//------------------------------------------------------


// DELETE :
// Supprimer la clé difficulté :
unset($recette["difficulte"]);


//------------------------------------------------------