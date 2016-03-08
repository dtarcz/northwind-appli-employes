<?php

if (isset($_GET["msg"]))
{
  $message = "Une erreur est survenue. ";

  switch ($_GET["msg"])
  {
    case "errauth":
      $message .= "Id ou mdp incorrect";
      break;
    case "noacces":
      $message .= "Vous n'avez pas l'autorisation d'accéder a cet espace&nbsp;: Veuillez vous identifier.";
      break;
  }
  echo "<p class='err'>".$message."</p>";
}

?>
