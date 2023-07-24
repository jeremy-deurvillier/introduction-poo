<?php

require_once('utils/autoload.php');

echo '<p>TP Machine à café</p><hr>';

$machineCuisine = new MachineACafe('Nespresso');

echo $machineCuisine->allumage();
echo $machineCuisine->mettreUneDosette();
echo $machineCuisine->addSucre();
echo $machineCuisine->addSucre();
echo $machineCuisine->removeSucre();
echo $machineCuisine->faireDuCafe();
echo $machineCuisine->eteindre();

?>
