<?php
// http://192.168.56.11/Jour04/06-get.php
declare(strict_types = 1);


// Automatiquement et en plus de votre code php
// PHP va créer des variables ==> Super globale

/*
On a 9 :
$GLOBALS
$_SERVER
$_GET
$_POST
$_REQUEST
$_FILES
$_ENV
$_SESSION
$_COOKIE
*/


/*
$_GET  // Demande au serveur
$_POST  // Pour le formulaire
$_ENV  // Pour les environnements du travail
$_SESSION  // Panier d'achat et la connexion (authentification)

===> Créer par php 
===> Utilisable partout (dans des fichiers , fonctions, ...)
===> Ce sont toutes des tableaux associatifs
*/


// $_GET = ["cle" => "valeur"];
// http://192.168.56.11/Jour04/06-get.php?prenom=alain
// PHP ==> $_GET = ["prenom" => "alain"];
// var_dump($_GET);

$pages = [
    "home" => "je suis la page d'accueil",
    "contact" => "je suis la page contact",
    "mention-legale" => "je suis la page mention légale",
    "cv" => [
        "titre" => "mes photos",
        "photos" => [
            "https://picsum.photos/200/300",
            "https://picsum.photos/200/300",
            "https://picsum.photos/200/300",
            "https://picsum.photos/200/300",
            "https://picsum.photos/200/300",
            "https://picsum.photos/200/300"
        ]
    ]
];

// http://192.168.56.11/Jour04/06-get.php?page=home
// http://192.168.56.11/Jour04/06-get.php?page=contact
// http://192.168.56.11/Jour04/06-get.php?page=mention-legale
// http://192.168.56.11/Jour04/06-get.php?page=cv

$page_appelee = $_GET["page"];
if($page_appelee == "cv"){
    echo "<h1>{$pages[$page_appelee]["titre"]}</h1>";
    foreach($pages[$page_appelee]["photos"] as $photo){
        echo "<img src='{$photo}' alt=''>"; 
    }
}else {

    echo $pages[$page_appelee] ; 
}