<?php

//! Singleton

class BDD{

    private static $instance = null;
    private $connexion;

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new BDD();
        }
        return self::$instance;
    }

    private function __construct(){
        $dsn = "mysql:host=localhost;dbname=fil_rouge;charset=utf8mb4";
        $login = "root";
        $password = "root";
        // le role c'est garantir que l'on ne peut créer QU'UNE SEULE FOIS une connexion à la base de données
        $this->connexion = new PDO($dsn , $login , $password);
    }

    // Pour la requette sql :
    public function query( string $sql  , array $params = []){
        $stmt = $this->connexion->prepare($sql);
        $stmt->execute($params);
        if(str_starts_with($sql , "INSERT INTO")){
            return $this->connexion->lastInsertId(); 
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

}