<?php

session_start();

include ('assets/includes/header.php'); // inclusion du header html
include ('../../../connect-bdo.php'); // On se connecte à notre BdD';
include ('assets/includes/message.php');

if (isset($_POST['login']) AND isset($_POST['mdpasse1']))
{
  $reqselect = $bdd->prepare("SELECT LastName, FirstName, EmployeeID FROM Employees WHERE empl_login = :val_login AND empl_passwd = :val_passwd");
  $reqselect->execute(array('val_login' => $_POST['login'], 'val_passwd' => $_POST['mdpasse1']));

  $reponse = $reqselect->fetch();
  var_dump($reqselect);
  // $_SESSION
  if ($reponse) { //if ($reqselect->rowCount() == 1)
    print_r($reponse);
    $_SESSION["IdEmpl"] = $reponse["EmployeeID"];
    $_SESSION["NomEmpl"] = $reponse["LastName"];
    $_SESSION["PrenomEmpl"] = $reponse["FirstName"];
    header("location:accueil.php");
  } else {
    header("location:formulaire-connection.php?msg=errauth");
  }

}
else {
  header("location:formulaire-connection.php?msg=noacces");
}


include 'assets/includes/footer.php';
 ?>
