<?php
// http://192.168.56.11/Jour09/index.php
declare(strict_types = 1);

$page = "";

// http://192.....//index.php?page=...
//? Est ce que il ya page dans url  ET  page n'est pas vide :
if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"];
}else{
    // alors afficher la page accueil
    $page = "/";
}


//? Tableau associatif qui fait le lien entre la page demandée ET le Controller :
// Début du routeur
$routes = [
    "/" => "home",   // méthode qui est dans un controlleur
    "presentation" => "presentation",  // Si dans le GET il y a dans $_GET["page"] ==> "presentation" ==> Exécuter la métode presentation dans la class FrontController
    "contact" => "contact",
    "connexion" => "connexion",
    "inscription" => "inscription"
];

//? Connexion avec la BDD
require_once "Model/BDD.php";
// var_dump(BDD::getInstance());     =====>    Vérifier la connexion

//? Executer les méthodes :
require_once "Controller/AbstractController.php";
require_once "Controller/FrontController.php";
require_once "Controller/ErreurController.php";


if(array_key_exists($page , $routes)){
    $p = new FrontController();
    $p->{$routes[$page]}();
}else{ // Si il tape une adresse ip n'existe pas
    $p = new ErreurController();
    $p->erreur(404, "La page demandée n'existe pas");
}