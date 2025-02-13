<?php

class FrontController extends AbstractController {
    // Cette méthode est en charge de l'affichage dela page d'accueil du site
    // Attention il faut mettre home en minuscule (comme mentionné dans le $routes)

    public function home(){
        $data = [
            "titre" => "Recette de cuisine"
        ];
        $this->render("home", $data);
    }

    public function mention(){
        $data = [
            "titre" => "Mention légale"
        ];
        $this->render("mention", $data);
    }

}