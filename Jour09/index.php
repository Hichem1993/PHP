<?php
// http://192.168.56.11/Jour09/index.php
declare(strict_types = 1);

$page = "";

// http://192.....//index.php?page=...
//? Est ce que il ya page dans url  ET  page n'est pas vide
if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"];
}else{
    // alors afficher la page accueil
    $page = "/";
}


//? Tableau associatif qui fait le lien entre la page demandée ET le Controller
// Début du routeur
$routes = [
    "/" => "home"   // méthode qui est dans un controlleur
];


require_once "Controller/FrontController.php";
if(array_key_exists($page , $routes)){
    $p = new FrontController();
    $p->{$routes[$page]}();
}