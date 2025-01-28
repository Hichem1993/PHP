<?php
// http://192.168.56.11/jour02/05-exo.php

/**
créer le fichier 05-exo.php 

// ce fichier contient trois variables
// $a = 30
// $b = 40
// $c = 12 * 4 < 44/3

// 1/ vérifier : est ce que $a supérieur ou égal à $b
// si c'est vrai écrire dans le navigateur "verif 1 ok"

// 2/ vérifier : est ce que $c supérieur ou égal à $b
// si c'est vrai écrire dans le navigateur "verif 2 ok"

// 3/vérifier : est ce que $c supérieur ou égal à $b OU $a inférieur à $b
// si c'est vrai écrire dans le navigateur "verif 3 ok"

 */

$a = 30;
$b = 40;
$c = 12 * 4 < 44 / 3;


if ($a >= $b){
    echo("Verif 1 OK");
}elseif ($c >= $b){
    echo("Verif 2 OK");
}elseif ($c >= $b) {
    echo("Verif 3 OK");
}else{
    echo("Rien");
}