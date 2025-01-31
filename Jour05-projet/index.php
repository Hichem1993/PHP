<?php
// http://192.168.56.11/Jour05-projet/index.php
declare(strict_types = 1);

$annuaire = [
    "Alain" => [
        "phone" => "0606060606" , 
        "email" => "a@yahoo.fr" , 
        "adresse" => [ 
            "75 rue de Paris" , 
            "75000", 
            "Paris"  
        ]   
    ],
    "Zorro" => [
        "phone" => "0606060607" , 
        "email" => "z@yahoo.fr" , 
        "adresse" => [ 
            "80 rue de Paris" , 
            "75000", 
            "Paris"
        ]  
    ] 
];

$page_appelee = $_GET;
// http://192.168.56.11/Jour05-projet/index.php
// http://192.168.56.11/Jour05-projet/index.php?annuaire=Alain
// http://192.168.56.11/Jour05-projet/index.php?annuaire=Zorro

// var_dump($page_appelee);


if (empty($page_appelee)){
    // Si la variable $page_appeler est un tableau vide
    // Gérer la page d'Accueil du site
    // var_dump("Je dois afficher la page d'accueil");
    require_once "vue/header.php";
    require_once "vue/home.php";
    require_once "vue/footer.php";
}elseif (isset($page_appelee["annuaire"])){
    // Est ce que il ya une clé "pays"
    // Afficher la page du pays concerné
    // var_dump("Je dois afficher la page du pays");
    require_once "vue/header.php";
    require_once "vue/annuaire.php";
    require_once "vue/footer.php";
}