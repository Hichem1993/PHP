<?php
declare(strict_types = 1);
session_start();
// http://192.168.56.11/Projet_recette/index.php

define("URL", "http://192.168.56.11/Projet_recette/index.php");

$page = "";

//? Est ce que il ya page dans url  ET  page n'est pas vide :
if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"];
}else{
    // alors afficher la page accueil
    $page = "/";
}


// Début du routeur
$routes = [
    "/" => ["home" , "FrontController"],   // méthode qui est dans un controlleur
    "inscription" => ["inscription" , "FrontController"],
    "connexion" => ["connexion" , "FrontController"],
    "mention" => ["mention" , "FrontController"]
];


//? Connexion avec la BDD
require_once "Model/BDD.php";


//? Executer les méthodes :
require_once "Controller/AbstractController.php";
require_once "Controller/FrontController.php";


if(array_key_exists($page , $routes)){
    $class = $routes[$page][1];
    $method = $routes[$page][0];
    $p = new $class();
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    call_user_func([$p, $method] , $id);
    //$p->{$method}();
}else{ // Si il tape une adresse ip n'existe pas
    $p = new ErreurController();
    $p->erreur(404, "La page demandée n'existe pas");
}