<?php

session_start();

include ('assets/includes/header.php'); // inclusion du header html
include ('../../../connect-bdo.php'); // On se connecte à notre BdD';
include ('assets/includes/message.php');

$reqClients = $bdd->prepare("SELECT Employees.EmployeeID, FirstName, LastName, Customers.CustomerID, ContactName, CompanyName
                              FROM Employees inner join Orders
                              on Employees.EmployeeID = Orders.EmployeeID
                              inner join Customers
                              on Orders.CustomerID = Customers.CustomerID
                              WHERE empl_login = :val_login AND empl_passwd = :val_passwd");
$reqClients->execute(array('val_login' => $_POST['login'], 'val_passwd' => $_POST['mdpasse1']));


 ?>
