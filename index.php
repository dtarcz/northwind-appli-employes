    <?php
    include 'assets/includes/header.php'; // inclusion du header html
    include '../../../connect-bdo.php'; // On se connecte à notre BdD';
    ?>

    <h1>Liste des employés</h1>
    <p>
      La liste des employés est&nbsp;:
      <div>
        <?php

        // on récup tt le contenu de la table employees
        $reponse = $bdd->prepare('SELECT LastName, FirstName, EmployeeID FROM northwind.Employees');
        $reponse->execute();

        // on affiche chaque entrée une à une avec une boucle while
        while ($donnees = $reponse->fetch()) //lit une ligne et passe a la suivante
        {
          $nom = $donnees['LastName'];
          $prenom = $donnees['FirstName'];
          $login = $prenom[0].$nom;
          $empl_id = $donnees['EmployeeID'];

        ?>
            <p>
              <strong>Nom</strong> : <?php echo $nom; ?><br />
              Prénom : <?php echo $prenom; ?><br>
              La première lettre du prénom est : <?php echo $prenom[0]; ?><br>
              Le login sera : <?php echo $login; ?>
            </p>
        <?php
        // On va insérer un login et un mdp dans les champs empl_login et empl_passwd :
        $update = $bdd->prepare("UPDATE Employees SET empl_login = :valempl_login, empl_passwd = :valempl_passwd  WHERE EmployeeID = :valempl_id");
        $update->execute(array('valempl_login' => $login, 'valempl_passwd' => $login, 'valempl_id' => $empl_id )); // pour generer mot de passe aleatoire, voir en sql avec SUBSTRING(MD5(RAND())FROM 1 FOR 12)

        }
        ?>
      </div>
    </p>
    <p>
      On a créé un login et un mot de passe pour chaque employé&nbsp;!
    </p>
    <p>
      <a href="formulaire-connection.php">Suivez ce lien pour vous connecter.</a>
    </p>

<?php include 'assets/includes/footer.php'; ?>
