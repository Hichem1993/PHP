<?php
declare(strict_types = 1);
session_start();
// http://192.168.56.11/Jour09/index.php

define("URL", "http://192.168.56.11/Jour09/index.php");

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
    "/" => ["home" , "FrontController"],   // méthode qui est dans un controlleur
    "presentation" => ["presentation" , "FrontController"],  // Si dans le GET il y a dans $_GET["page"] ==> "presentation" ==> Exécuter la métode presentation dans la class FrontController
    "contact" => ["contact" , "FrontController"],
    "connexion" => ["connexion" , "FrontController"],
    "inscription" => ["inscription" , "FrontController"],
    "admin/dashboard" => ["dashboard" , "BackController"],
    "deconnexion" => ["deconnexion" , "FrontController"],
    "erreur401" => ["erreur401" , "ErreurController"],
    "admin/projet" => ["projet_index" , "BackController"],
    "admin/user" => ["user_index" , "BackController"],
    "admin/projet/new" => ["projet_new" , "BackController"],
    "admin/projet/delete" => ["projet_delete" , "BackController"],
    "admin/projet/update"  => ["projet_update" , "BackController"],
    "admin/user/new"  => ["user_new" , "BackController"],
    "admin/user/delete"  => ["user_delete" , "BackController"],
    "admin/user/update"  => ["user_update" , "BackController"]
];

//? Connexion avec la BDD
require_once "Model/BDD.php";
// var_dump(BDD::getInstance());     =====>    Vérifier la connexion

//? Executer les méthodes :
require_once "Controller/AbstractController.php";
require_once "Controller/FrontController.php";
require_once "Controller/ErreurController.php";
require_once "Controller/BackController.php";


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