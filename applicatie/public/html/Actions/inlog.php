<?php
include "connection.php";

$username = $_POST['username'];
$submittedPassword = $_POST['password'];
$submittedPassword .= "Groepje8";
$hashedSubmittedPassword = password_hash($submittedpassword, PASSWORD_DEFAULT);

$sql = "SELECT wachtwoord FROM gebruikers WHERE username = :username";
$query = $dbh->prepare($sql);
$query->execute([':username' => $username]);
$data = query->fetchall();


//Moet nog gekoppeld worden aan de database
if(password_verify($hashedSubmittedPassword, $data['password'])){
    session_start();
    
    $sql = "SELECT emailadres, voornaam, achternaam, land, geboortedatum, username, abonnement FROM gebruikers WHERE username = :username";
    $query = $dbh->prepare($sql);
    $query->execute([':username' => $username]);
    $data = query->fetchall();
    
    $_SESSION['mail'] = $data['emailadres'];
    $_SESSION['vnaam'] = $data['voornaam'];
    $_SESSION['anaam'] = $data['achternaam'];
    $_SESSION['land'] = $data['land'];
    $_SESSION['gdatum'] = $data['geboortedatum'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['abonnement'] = $data['abonnement'];
    header("location: ../FilmOverzicht");
}
else{
    header("location: ../../index.php");
}

