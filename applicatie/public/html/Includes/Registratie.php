<?php

if (isset($_POST["submit"])) {
    
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $land = $_POST["land"];
    $geboortejaar = $_POST["geboortejaar"];
    $rekeningnummer = $_POST["rekeningnummer"];
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $abonnement = $_POST["abonnement"];
    $ww = $_POST["ww"];
    $hww = $_POST["hww"];

// includes to add once (database connection + functions)

    if (emptyInputSignup($voornaam, $achternaam, $land, $geboortejaar, $rekeningnummer, $gebruikersnaam, $abonnement, $ww, $hww) !== false) {
        header("location: ../Registreren.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../Registreren.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../Registreren.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($ww, $hww) !== false) {
        header("location: ../Registreren.php?error=passwordsdontmatch");
        exit();
    }
    //Weet niet zeker of het zo met $conn moet. 
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../Registreren.php?error=usernametaken");
        exit();
    }

    //Ook hier niet zeker of $conn werkt
    createUser($conn, $voornaam, $achternaam, $land, $geboortejaar, $rekeningnummer, $gebruikersnaam, $abonnement, $ww, $hww);

}
else {
    header("location: ../Registreren.php");
    exit();
}
?>