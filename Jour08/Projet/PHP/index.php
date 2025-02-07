<?php 
// http://192.168.56.11/Jour08/Projet/PHP/index.php
declare(strict_types = 1);


$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbc = 'test';

//On établit la connexion
// $conn = new mysqli($servername, $username, $password);

$conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);




//On vérifie la connexion
//if($conn->connect_error){
//    die('Erreur : ' .$conn->connect_error);
//}
//echo 'Connexion réussie';


if(!empty($_POST)){
    var_dump ($_POST);

    // Recuperer chacune des valeurs du formulaire
    $name = $_POST["name"];
    $mail = $_POST["email"];
    $telephone = $_POST["tel"];
    $message = $_POST["message"];

    // Requette preparer
    //On insère les données reçues
    $sth = $conn->prepare("
    INSERT INTO contact(nom, mail, telephone, message)
    VALUES(:nom, :mail, :telephone, :message)");
    $sth->bindParam(':nom',$name);
    $sth->bindParam(':mail',$mail);
    $sth->bindParam(':telephone',$telephone);
    $sth->bindParam(':message',$message);
    $sth->execute();
}


if(empty($_GET)){
    // http://192.168.56.11/Jour08/Projet/PHP/index.php
    require_once "vue/header.php";
    require_once "vue/home.php";
    require_once "vue/footer.php" ;
}elseif(isset($_GET["donnee"])){
    // http://192.168.56.11/Jour08/Projet/PHP/index.php?donnee=donnee
    require_once "vue/header.php";
    require_once "vue/donnee.php";
    require_once "vue/footer.php" ;
}

