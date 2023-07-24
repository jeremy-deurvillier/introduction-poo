<?php

require_once('utils/autoload.php');

$myFormule1 = new Formule1();

echo $myFormule1->drive();
$myFormule1->shiftGear(180);
echo $myFormule1->drive();


$salazie = new Chien();

$salazie->setPoids(12);

echo $salazie->info();
echo $salazie->infoPlus();
echo $salazie->crie();

?>
