<?php
// http://192.168.56.11/jour02/11-case.php

$langue = "fr";

if($langue == "fr"){
    echo "bonjour <br>";
}else if($langue == "en"){
    echo "hello <br>";
}else if($langue == "es"){
    echo "Buen día <br>";
}

switch($langue){
    case "fr" :
        echo "bonjour <br>";
        break;
    case "en" :
        echo "hello <br>";
        break ;
    case "es" :
        echo "Buen día <br>";
        break ; 
}