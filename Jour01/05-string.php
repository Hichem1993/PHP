<?php
// http://192.168.56.11/Jour01/05-string.php

$prenom = "Alain";
$nom = "Dupont";
$rue = "75 rue de paris";
$ville = "Lyon";

// Cocaténation : "Alain habite à Lyon"


// Solution 1 : Avec Guillemets
$phrase = "$prenom habite à $ville <br>";
echo $phrase;


// Solution 2 :
$phrase1 = $prenom . " habite à " . $ville . "<br>";
echo $phrase1;


// Solution 3 :
$phrase2 = "{$prenom} habite à {$ville} <br>";
echo $phrase2;




// Les Dupont sont basés au 75 rue de Paris
$phrase3 = 'Les ' . $nom . ' sont basés au ' . $rue . '<br>';
echo $phrase3;



//
$titre = "<h1 class=\"first\">bonjour</h1>

// heredoc
$phrase4 = <<<TOTO
<h1 class="toto" id="tata">bonjour</h1>
TOTO;