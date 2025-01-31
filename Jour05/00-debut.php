<?php
// http://192.168.56.11/Jour05/00-debut.php
declare(strict_types = 1);

$pays = [
    "France" => ["Marseille" , "Paris"],
    "Espagne" => ["Madrid"]
];

/*
EXEMPLE SITE : 3 pages :
    - Page Accueil (http:// 192..../index.php)
    - Page France (http:// 192..../index.php?pays=Fr)
    - Page Espagne (http:// 192..../index.php?pays=Es)

$_GET ===> [] : Page index
      ===> ["pays" => "Fr"] : Page France
      ===> ["pays" => "Es"] : Page Espagne
*/

