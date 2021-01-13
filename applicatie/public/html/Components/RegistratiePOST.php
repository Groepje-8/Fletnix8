<?php
require_once 'Functions.php';

if (isset($_POST["submit"])) {
    //navragen wat bij ["precies moet staan"]
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $land = $_POST["land"];
    $geboortejaar = $_POST["geboortejaar"];
    $emailadres = $_POST["emailadres"];
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $abonnement = $_POST["abonnement"];
    $ww = $_POST["ww"];
    $hww = $_POST["hww"];

    if (emptyInputSignup($voornaam, $achternaam, $land, $geboortejaar, $emailadres, $gebruikersnaam, $abonnement, $ww, $hww) !== false) {
        var_dump($_POST);
        // header("location: ../Registreren.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../Registreren.php?error=invaliduid");
        exit();
    }
   
    if (pwdMatch($ww, $hww) !== false) {
        header("location: ../Registreren.php?error=passwordsdontmatch");
        exit();
    }
    //Weet niet zeker of het zo met $conn moet. 
    // if (uidExists($conn, $username, $email) !== false) {
    //     header("location: ../Registreren.php?error=usernametaken");
    //     exit();
    // }

    //Ook hier niet zeker of $conn werkt
    createUser($voornaam, $achternaam, $land, $geboortejaar, $rekeningnummer, $gebruikersnaam, $abonnement, $ww, $hww);

}
else {
    header("location: ../ProfielPagina.php");
    exit();
}
?>