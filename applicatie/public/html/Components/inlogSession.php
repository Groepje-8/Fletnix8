<?php
include "connection.php";

$username = $_POST['username'];
$submittedPassword = $_POST['password'];
$submittedPassword .= "Groepje8";

$sql = "SELECT wachtwoord FROM gebruikers WHERE username = :username";
$query = $dbh->prepare($sql);
$query->execute([':username' => $username]);


if()
session_start();
