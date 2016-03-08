<?php

session_start();

include ('assets/includes/header.php'); // inclusion du header html
include ('../../../connect-bdo.php'); // On se connecte à notre BdD';
include ('assets/includes/message.php');
?>

<h1>Connection :</h1>

<div class="formConnect">

  <fieldset>

    <legend>Pour accéder à votre compte employé-e, connectez-vous ci-dessous&nbsp;:</legend>

      <form class="formConnect" action="connection-ok.php" method="post">

        <label for="login">Login :</label>
        <input type="text" id="login" name="login" placeholder="Saisissez votre login..." autofocus="autofocus" required="required" /><br>

        <label for="mdpasse1">Mot de passe :</label>
        <input type="password" id="mdpasse1" name="mdpasse1" placeholder="Saisissez le passwd." required="required" /><br>

        <input type="submit" name="name" value="Je me connecte&nbsp;!" onclick="verifSaisie()" /><br>

      </form>

  </fieldset>

</div>
