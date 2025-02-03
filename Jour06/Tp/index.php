<?php
// http://192.168.56.11/Jour06/Tp/index.php
declare(strict_types = 1);

session_start();

//! BASE DE DONNEES :
$profil =[
    "login" => "b@yahoo.fr",
    "password" => "qwerty"
];


//! QUELLE PAGE :
$page_demandee = $_GET;


//! CONDITIONS :
if(empty($page_demandee)){
    // Page accueil
    require_once "vue/header.php";
    require_once "vue/home.php";
    require_once "vue/footer.php";
}elseif (isset($page_demandee["page"])){
    // Logique : Vérification des identifiants
    // var_dump($_POST);
    // die(); // Arreté l'exécution
    if($_POST["login"] === $profil["login"] && $_POST["password"] === $profil["password"] ){
        unset($_SESSION["erreur"]);
        // Afficher la page profil
        require_once "vue/header.php";
        require_once "vue/profil.php";
        require_once "vue/footer.php";
    }else{
        $_SESSION["erreur"] = "identifiants invalides" ; 
        // Afficher la page d'erreur
        //require_once "vue/header.php";
        //require_once "vue/400.php";
        //require_once "vue/footer.php";
        header("Location:http://192.168.56.11/Jour06/Tp/index.php");
    }
}