<?php

class FrontController{
    // Cette méthode est en charge de l'affichage dela page d'accueil du site
    // Attention il faut mettre home en minuscule (comme mentionné dans le $routes)

    public function home(){
        $data = [
            "titre" => "Accueil"
        ];
        $this->render("home", $data);
    }

    public function presentation(){
        $sql=
            "
            SELECT p.nom , p.duree, p.unite , GROUP_CONCAT(t.nom) AS technos
            FROM projets AS p
            JOIN projets_technos AS pt
            ON pt.id_projets = p.id
            JOIN technos AS t
            ON t.id = pt.id_technos
            GROUP BY p.nom
            ORDER BY p.id
            ";

        //$projets = BDD::getInstance()->query($sql);
        //var_dump($projets);

        $data = [
            "titre" => "Présentation",
            "projets" => BDD::getInstance()->query($sql)
        ];

        $this->render("presentation" , $data);
    }

    public function contact(){
        $data = [
            "titre" => "Contact"
        ];
        $this->render("contact" , $data);
    }

    public function inscription(){
        $data = [
            "titre" => "Inscription"
        ];
        $this->render("inscription" , $data);
    }

    public function connexion(){
        $data = [
            "titre" => "Connexion"
        ];
        $this->render("connexion" , $data);
    }

    // $template_name : Pour le nom de fichier de vue à sélectionner
    // $data = [] : un tableau qui contient l'ensemble des valeurs à envoyer à la vue
    private function render(string $template_name , array $data = []){
        extract($data);
        /*
        resultat extract ===> $titre = "Accueil  ======> Transformer le tableau vers des variables
        */
        require_once "Vue/header.php";
        require_once "Vue/$template_name.php";
        require_once "Vue/footer.php";
    }
}