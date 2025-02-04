<?php
// http://192.168.56.11/Jour07/00-const-de-classe.php
declare(strict_types = 1);



//! Constante de la classe :
class Connexion{
    const URL = "http://monsite.fr";  // On peut plus de modifier
    public function getInfo(){
        return self::URL;  // Utiliser une constatnte dans la class
    }
}

echo Connexion::URL;  // Utiliser une constante hors de la class



//! Static :
class Fleur{
    public static string $unite = "euros";  // Proprieté static
    public function afficherPrix():string{
        return 12 . self::$unite;  // Utiliser une prop static dans la class
    }
}

echo Fleur::$unite;  // Utiliser une prop static hors de la class