<?php
// J'ai utilisé dans le fichier index.php :
// empty() :
        // Permet de savoir si une variable contient du vide 
        $a = "";
        $b = 0;
        $c = [];
        var_dump(empty($a , $b , $c));  // RETOUR : TRUE
        $d = " ";
        $e = -10;
        $f = [1];
        var_dump(empty($d , $e));  // RETOUR : FALSE


// isset() :
        // Est une fonction qui vérifie si une variable EXISTE
        var_dump(isset($g));  // FALSE
        $etudiant = [
            "nom" => "Alain"
        ];
        var_dump(isset($etudiant["age"]));  // FALSE


// require_once
        // Permet de découper un fichier php en plusieurs fichiers : Copier Coller : Récuperer les fichiers
        require_once "index.php";


// J'ai utilisé dans le fichier pays.php :
// $pays_visite = $page_appeler["pays"] == "fr" ? "France" : "Espagne"
        // IF Ternaire :
        $total = 10 + 2;  // Symbole + Opérateur binaire
        $test = !(2>3);  // ! Opérateur unaire
        // ?  :  // Opération ternaire
        // IF SIMPLE :
        $age = 18;
        if($age < 18){
            echo "vous etes mineur";
        }else{
            echo "vous etes majeur";
        }
        // IF TERNAIRE :
        echo ($age < 18) ? "vous etes mineur" : "vous etes majeur";