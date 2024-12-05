<?php
interface iPerso {
    // Interface sans méthodes spécifiques.
}

abstract class aUnit {
    // La classe abstraite aUnit ne doit pas être instanciée.
}

class Arcaniste extends aUnit implements iPerso {
    // Classe Arcaniste qui étend aUnit et implémente iPerso.
}

function correct($arcanist) {
    $reflection = new ReflectionClass($arcanist);

    // Test 0 : La classe Arcaniste existe et est instanciable
    if ($reflection->isInstantiable()) {
        echo "Test 0 : Good !\n";
    } else {
        echo "Test 0 : KO.\n";
    }

    // Test 1 : La classe Arcaniste implémente l'interface iPerso
    if ($reflection->implementsInterface('iPerso')) {
        echo "Test 1 : Good !\n";
    } else {
        echo "Test 1 : KO.\n";
    }

    // Test 2 : La classe Arcaniste étend aUnit
    if ($reflection->isSubclassOf('aUnit')) {
        echo "Test 2 : Good !\n";
    } else {
        echo "Test 2 : KO.\n";
    }

    // Test 3 : La classe aUnit ne doit pas être instanciable
    $abstractClassReflection = new ReflectionClass('aUnit');
    if ($abstractClassReflection->isAbstract()) {
        echo "Test 3 : Good !\n";
    } else {
        echo "Test 3 : KO.\n";
    }
}

// Exemple d'appel
$arcaniste = new Arcaniste();
correct($arcaniste);
?>
