<?php

session_start();

include ('assets/includes/header.php'); // inclusion du header html
include ('../../../connect-bdo.php'); // On se connecte à notre BdD';
include ('assets/includes/message.php');

//var_dump($_SEESSION);

if (isset($_SESSION["IdEmpl"])) {
  echo "<h1>Bienvenue ".$_SESSION["PrenomEmpl"]." ".$_SESSION["NomEmpl"]."</h1>";
} else {
  header("location:formulaire-connection.php?msg=noacces");
}

?>

<p>
  <a href="clients.php">Voir la liste de mes clients</a>
</p>
