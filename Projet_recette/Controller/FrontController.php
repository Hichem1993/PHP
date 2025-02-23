<?php

class FrontController extends AbstractController {
    // Cette méthode est en charge de l'affichage dela page d'accueil du site
    // Attention il faut mettre home en minuscule (comme mentionné dans le $routes)



    public function home(){

        $sql=
        "
        SELECT r.id, r.titre , r.description, r.url_img, r.durre, r.dt_creation, c.nom, u.email
        FROM recettes AS r
        JOIN categories AS c
        ON r.categorie_id = c.id
        JOIN users AS u
        ON r.user_id = u.id
        ";

        //$recettes = BDD::getInstance()->query($sql);
        //var_dump($recettes);

        $data = [
            "titre" => "Recette de cuisine",
            "recettes" => BDD::getInstance()->query($sql)
        ];
        $this->render("home", $data);
    }




    public function recette(string $id){

        $sql=
        "
        SELECT r.id, r.titre , r.description, r.url_img, r.durre, r.dt_creation, c.nom, u.email
        FROM recettes AS r
        JOIN categories AS c
        ON r.categorie_id = c.id
        JOIN users AS u
        ON r.user_id = u.id
        where r.id = :id
        ";

        $sql_comm=
        "
        SELECT c.id, c.email , c.message, c.dt_creation, c.is_active, r.titre
        FROM commentaires AS c
        JOIN recettes AS r
        ON c.recette_id = r.id
        where c.recette_id = :id
        ";

        //$recettes = BDD::getInstance()->query($sql , ["id" => $id]);
        //var_dump($recettes);

        if( !empty($_POST) ){
            BDD::getInstance()->query("INSERT INTO commentaires (email , message , recette_id) VALUES (:email , :message , :recette_id)", [
                "email" => isset($_POST["email"]) ? $_POST["email"] : $_SESSION["user"]["email"],
                "message" => $_POST["commentaire"],
                "recette_id" => $id
            ]);
        }


        $data = [
            "titre" => "Recettes",
            "recettes" => BDD::getInstance()->query($sql , ["id" => $id]),
            "commentaires" => BDD::getInstance()->query($sql_comm , ["id" => $id]),
            "show_email" => isset($_SESSION["user"])
        ];

        $this->render("recette", $data);

        
    }





    public function mention(){
        $data = [
            "titre" => "Mention légale"
        ];
        $this->render("mention", $data);
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
                $erreur[] = "L'email n'est pas conforme"; 
            }
            if(!preg_match("#(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}#", $password)){
                $erreur[] = "Le password doit contenir au minimum 8 lettres avec minuscule, majuscule et chiffre";
            }
            // Verifier que l'email est bien unique
            // utiliser une syntaxe spéciale dans ma requette SQL
            // :email
            // Sécurité : Evité l'injection SQL (requette préparée)
            $user = BDD::getInstance()->query("SELECT * FROM users WHERE email = :email", ["email" => $email]);
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
            BDD::getInstance()->query("INSERT INTO users (email , password) VALUES (:email , :password)", [
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
        $erreur = [];
        
        if(!empty($_POST)){
            // Récuperer les valeur saisie dans le formulaire
            $email = isset($_POST["email"]) ? $_POST["email"] : "" ;
            $password = isset($_POST["password"]) ? $_POST["password"] : "" ;
            // Vérifier que les informations sont conformes
                    // email valid - password valid
                    // est ce que les identifiants saisis existent dans la base de données
            if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
                $erreur[] = "L'email n'est pas conforme"; 
            }
            
            if(!preg_match("#(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}#", $password)){
                $erreur[] = "Le password doit contenir au minimum 8 lettres avec minuscule, majuscule et chiffre";
            }

            $user = BDD::getInstance()->query("SELECT * FROM users WHERE email = :email", ["email" => $email]);
            // si KO ==> message d'erreur
            if(empty($user)){
                $erreur[] = "Aucun utilisateur n'a l'email saisit";
            }else{
                $password_hash = $user[0]["password"];
                // Comparer le mot de passe saisie avec le mot de passe hashé qui est dans la base de données
                if(!password_verify($_POST["password"], $password_hash)){
                    $erreur[] = "Le mot de passe saisie n'est pas conforme";
                }
            }
            
            // Si OK ==> $_SESSION : Super globale qui va suivre l'utilisateur tout au long de son utilisation de backoffice
            // SESSION une sorte de chariot qui vous accompagne pendant l'utilisation du back office
            if(count($erreur) === 0 && !empty($_POST)){
                $_SESSION["user"] = [
                    "email" => $user[0]["email"],
                    "role" => $user[0]["role"]
                ];
                header("Location: ". URL);
                die();
            }
        }
    $data = [
        "titre" => "Connexion",
        "erreur" => $erreur
    ];
    $this->render("connexion" , $data);
    }




    public function deconnexion(){
        unset($_SESSION["user"]);
        session_destroy();
        header("Location:" . URL . "?page=connexion");
    }


}
