<?php
// http://192.168.56.11/jour02/04-if.php

// CONDITION IF : if(){}
// IF mot clé du language PHP
if( 30 > 10 ){
    echo("La condition est vraie <br>");
}


if ( 30 < 10 ){
    echo("La condition2 est vraie <br>");
}


$age = 18;
if($age < 20){
    echo "vous etes mineur <br>";
} elseif ($age < 80){
    echo "vous etes majeur <br>";
}elseif ($age < 120){
    echo "vous etes retraité <br>";
}else{
    echo "age invalid <br>";
}