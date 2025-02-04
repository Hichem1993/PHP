<?php
// http://192.168.56.11/Jour07/02-herritage.php
declare(strict_types = 1);

class Magicien{
    public int $pv = 100;  // mm prop
}

class Guerrier{
    public int $pv = 200;  // mm prop
}


//! =============> Hérritage : Magicien hérite de personnage : le code automatiqumement copier dans la classe enfant


// Class Mére / Pére / Supérieur
class Personnage{
    public int $pv = 100;
}

// Class Enfant / Fille / Fils
class Magicien extends Personnage{
}

class Guerrier extends Personnage{
    public int $pv = 200;  // Polymorphisme : modifier les proprietés
}