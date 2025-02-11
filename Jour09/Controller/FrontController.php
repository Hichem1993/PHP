<?php

class FrontController extends AbstractController {
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
        //var_dump($_POST);
        $erreur = [];
        if(!empty($_POST)){
            // Récupérer les valeurs saisies dans le formulaire via la variable $_POST
            $email = isset($_POST["email"]) ? $_POST["email"] : "";
            $password = isset($_POST["password"]) ? $_POST["password"] : "";

            // Vérifier que les valeurs saisies sont conformes !!!
            // Si ce n'est pas bon ==> Afficher sur le formulaire les erreurs
            if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
                $erreur[] = "l'email n'est pas conforme"; 
            }
            if(!preg_match("#(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}#", $password)){
                $erreur[] = "Le password doit contenir au minimum 8 lettres avec minuscule, majuscule et chiffre";
            }
            // Verifier que l'email est bien unique
            // utiliser une syntaxe spéciale dans ma requette SQL
            // :email
            // Sécurité : Evité l'injection SQL (requette préparée)
            $user = BDD::getInstance()->query("SELECT * FROM user WHERE email = :email", ["email" => $email]);
            if(!empty($user)){
                $erreur[]= "L'email existe déjà, veuillez en choisir un autre";
            }

            // Sécurité : 
            sleep(random_int(0,3));

            // Anti brut force
            // Double authentification
        }

        //var_dump($erreur);
        // Si c'est conforme ==? INSERT INTO user (password doit etre hashé)
        $succes = [];
        if(count($erreur) === 0 && !empty($_POST)){
            BDD::getInstance()->query("INSERT INTO user (email , password) VALUES (:email , :password)", [
                "email" => $_POST["email"],
                "password" => password_hash($_POST["password"] , PASSWORD_BCRYPT)
                // Benayed1993! ===> Oj59N6c8s9D1JXiTk5QSm2jr1Ej2kZfW  : Mot de passe hashé
                // Trouver le mot de passe : UPDATE
            ]);
            $succes[] = "Votre profil a bien été créé en base de données, veuillez vous connecter pour accéder à l'espace de gestion";
        }
        // Message pour lui dire que l'INSERT s'est bien réalisé
        $data = [
            "titre" => "Inscription",
            "erreur" => $erreur,
            "succes" => $succes
        ];
        $this->render("inscription" , $data);
    }




    public function connexion(){
        $data = [
            "titre" => "Connexion"
        ];
        $this->render("connexion" , $data);
    }

}