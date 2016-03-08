<?php

include 'assets/includes/header.php'; // inclusion du header html
include '../../../connect-bdo.php'; // On se connecte à notre BdD';

include_once'class/Employe.class.php';
/* ou
function chargerClasse($classe)
{
  require 'class/' . $classe . '.class.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse');
*/

$employe = new Employe('Davolio');
//var_dump($employe);
echo "<p>" . $employe->Nom . "</p>";
echo "<p>" . $employe->Prenom . "</p>";
echo "<p>" . $employe->ID . "</p>";
echo "<p>" . $employe->Chef . "</p>";
echo "<p>" . $employe->Titre . "</p>";
