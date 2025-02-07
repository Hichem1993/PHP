<?php 
// http://192.168.56.11/Jour08/Projet/PHP/index.php
declare(strict_types = 1);

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

