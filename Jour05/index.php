<?php
// http://192.168.56.11/Jour05/index.php
declare(strict_types = 1);

// Tableau qui est pour l'instant notre BDD :
// Variable globale :
$pays = [
    "France" => ["Paris" , "Marseille"],
    "Espagne" => ["Madrid"]
];

$page_appeler = $_GET;

// http://192.168.56.11/Jour05/index.php  ($_GET = [])
// http://192.168.56.11/Jour05/index.php?pays=fr  ($_GET = ["pays" => "fr"])
// http://192.168.56.11/Jour05/index.php?pays=es  ($_GET = ["pays" => "es"])
// var_dump($page_appeler);



if (empty($page_appeler)){
    // Si la variable $page_appeler est un tableau vide
    // Gérer la page d'Accueil du site
    // var_dump("Je dois afficher la page d'accueil");
    require_once "header.php";
    require_once "home.php";
    require_once "footer.php";
}elseif (isset($page_appeler["pays"])){
    // Est ce que il ya une clé "pays"
    // Afficher la page du pays concerné
    // var_dump("Je dois afficher la page du pays");
    require_once "header.php";
    require_once "pays.php";
    require_once "footer.php";
}