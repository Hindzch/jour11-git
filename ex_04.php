require_once "ex_03.php"; // Charger les classes Soldier

$imperiumSoldier = new \Imperium\Soldier("Gessart");
$chaosSoldier = new \Chaos\Soldier("Ruphen");

Scanner::scan($imperiumSoldier); // Doit afficher "Praise be, Emperor, Lord."
Scanner::scan($chaosSoldier);    // Doit afficher "Xenos spotted."
