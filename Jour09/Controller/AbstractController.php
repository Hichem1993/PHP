<?php

abstract class AbstractController{
    // class abstraite est une class qui ne peut pas etre instancée
    // elle ne peut etre que hérité
    // si vous faites $a = new AbstractController(); ====> PHP dit que c'est une erreur FATALE



    // $template_name : Pour le nom de fichier de vue à sélectionner
    // $data = [] : un tableau qui contient l'ensemble des valeurs à envoyer à la vue
    protected function render(string $template_name , array $data = []){  // 
        extract($data);
        /*
        resultat extract ===> $titre = "Accueil  ======> Transformer le tableau vers des variables
        */
        require_once "Vue/header.php";
        require_once "Vue/$template_name.php";
        require_once "Vue/footer.php";
    }

}

