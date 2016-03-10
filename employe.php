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

//on recupere des infos dans la base de donnees pour alimenter le constructeur
$reqselect = $bdd->prepare("SELECT LastName, FirstName, EmployeeID, Title, ReportsTo FROM Employees WHERE EmployeeID=1");
$reqselect->execute();

$e = $reqselect->fetch();

//var_dump($entree);

//instanciation de l'objet employe :
$employe = new Employe($e['EmployeeID'], $e[0], $e['FirstName'], $e['Title'], $e['ReportsTo']);
//var_dump($employe);
$employe->afficherID();
$_SESSION['employe']=$employe;
