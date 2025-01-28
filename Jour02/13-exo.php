<?php
// http://192.168.56.11/jour02/13-exo.php

/*
créer le fichier 13-exo.php 

// ce fichier contient deux fonctions 

// 1/fonction addition 
// contient trois instructions 
// créer la variable $a : 20
// créer la variable $b : 30
// afficher dans le navigateur $b + $a

// 2/ fonction soustraction
// contient trois instructions 
// créer la variable $a : 15,4
// créer la variable $b : 223
// afficher dans le navigateur $a - $b

// 3/ exécuter ces deux fonctions 
 * 
 */

function addition(){
    $a = 20;
    $b = 30;
    echo $b + $a . "<br>";
}

function soustraction(){
    $a = 15.4;
    $b = 223;
    echo $a - $b . "<br>";
}

addition();
soustraction();