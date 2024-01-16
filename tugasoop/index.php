<?php

require_once('ape.php');
require_once('frog.php');

$sheep = new Animal("shaun");
echo "Name : " .$sheep-> get_name();
echo "<br/> Legs : " .$sheep-> get_legs();
echo "<br/> Cold Blooded : " .$sheep-> get_cold_blooded();

echo "<br> <br>";


$kodok = new Frog("buduk" );
$kodok->getFrogName();
$kodok->getFrogLegs();
$kodok->getFrogBlood();
$kodok->getFrogJump();

echo "<br> <br>";

$ape = new Ape("Kera Sakti");
$ape->getApeName();
$ape->getApeLegs();
$ape->getApeBlood();
$ape->getApeYell();


?>







