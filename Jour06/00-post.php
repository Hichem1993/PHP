<?php

// $_POST : Super global sur les formulaire : Récuperer des informations saisies dans un formulaire

<form action="POST">
    <input type="text" name="Login" id="">
    <input type="text" name="Password" id="">
    <input type="submit" value="Valider">
</form>


/*
=======>
$_POST = [
    "Login" => "Foo",
    "Password" => "Bar"
];
*/