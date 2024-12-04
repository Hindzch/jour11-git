<?php
require_once "ex_03.php";

$imperiumSoldier = new \Imperium\Soldier("Gessart");
$chaosSoldier = new \Chaos\Soldier("Ruphen");

echo $imperiumSoldier . "\n";
echo $chaosSoldier . "\n";

$imperiumSoldier->doDamage($chaosSoldier);

echo $imperiumSoldier . "\n";
echo $chaosSoldier . "\n";
?>
