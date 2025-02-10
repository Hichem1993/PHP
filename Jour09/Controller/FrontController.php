<?php

class FrontController{
    // Cette méthode est en charge de l'affichage dela page d'accueil du site
    // Attention il faut mettre home en minuscule (comme mentionné dans le $routes)
    public function home(){
        require_once "Vue/header.php";
        require_once "Vue/home.php";
        require_once "Vue/footer.php";
    }
}