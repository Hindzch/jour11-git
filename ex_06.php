<?php

function correct(array $my_classes, array $namespaces) {
    foreach ($my_classes as $class) {
        $reflection = new ReflectionClass($class);
        // Test 0 : Vérifier si la classe appartient à un des namespaces
        $namespace = $reflection->getNamespaceName();
        if (in_array($namespace, $namespaces)) {
            echo "Test 0 : Good !\n";
        } else {
            echo "Test 0 : KO.\n";
        }

        // Test 1 : Vérifier que la classe est finale, non clonable, et n'hérite ni d'autres classes ni interfaces
        if ($reflection->isFinal() && !$reflection->isCloneable() && $reflection->getInterfaces() === [] && !$reflection->getParentClass()) {
            echo "Test 1 : Good !\n";
        } else {
            echo "Test 1 : KO.\n";
        }

        // Test 2 : Vérifier si toutes les classes ont les mêmes attributs et méthodes
        // Comparer les attributs
        $class_attributes = $reflection->getProperties();
        foreach ($my_classes as $compare_class) {
            $compare_reflection = new ReflectionClass($compare_class);
            $compare_attributes = $compare_reflection->getProperties();
            // Vérifier si les attributs sont les mêmes
            if ($class_attributes !== $compare_attributes) {
                echo "Test 2 : KO.\n";
                break;
            }
        }

        // Comparer les méthodes
        $class_methods = $reflection->getMethods();
        foreach ($my_classes as $compare_class) {
            $compare_reflection = new ReflectionClass($compare_class);
            $compare_methods = $compare_reflection->getMethods();
            if ($class_methods !== $compare_methods) {
                echo "Test 2 : KO.\n";
                break;
            }
        }
    }
}
?>
