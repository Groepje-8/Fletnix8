<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/html/Modules/Functions.php";

if (isset($_POST["submit"])) {
    
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $land = $_POST["land"];
    $geboortejaar = $_POST["geboortejaar"];
    $emailadres = $_POST["emailadres"];
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $abonnement = 1;
    $ww = $_POST["ww"];
    $hww = $_POST["hww"];

    if (emptyInputSignup($voornaam, $achternaam, $land, $geboortejaar, $emailadres, $gebruikersnaam, $abonnement, $ww, $hww) !== false) {
        header("location: ../Registreren.php?error=emptyinput");
        exit();
    }

    if (invalidUid($gebruikersnaam) !== false) {
        header("location: ../Registreren.php?error=invaliduid");
        exit();
    }
   
    if (pwdMatch($ww, $hww) !== false) {
        header("location: ../Registreren.php?error=passwordsdontmatch");
        exit();
    }

    createUser($voornaam, $achternaam, $land, $geboortejaar, $emailadres, $gebruikersnaam, $abonnement, $ww);
    header("location: ../filmOverzicht.php");
}
else {
    header("location: ../ProfielPagina.php");
    exit();
}
?>