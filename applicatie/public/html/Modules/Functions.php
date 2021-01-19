<?php

if (!function_exists('getConn')) {
    require_once 'Connection.php';
}

//--------------registreren---------------------------
function emptyInputSignup($voornaam, $achternaam, $land, $geboortejaar, $emailadres, $gebruikersnaam, $abonnement, $ww, $hww)
{
    if (empty($voornaam) || empty($achternaam) || empty($land) || empty($geboortejaar) || empty($emailadres) || empty($gebruikersnaam) || empty($abonnement) || empty($ww) || empty($hww)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{
    return !preg_match("/^[a-zA-Z0-9]*$/", $username);
}

function pwdMatch($ww, $hww)
{
    return $ww !== $hww;
}

function abonnement($String)
{
    if ($String == "beginner") {
        return 1;
    } elseif ($String == "standaard") {
        return 2;
    } elseif ($String == "professional") {
        return 3;
    } else {
        return 0;
    }
}

function createUser($voornaam, $achternaam, $land, $geboortejaar, $emailadres, $gebruikersnaam, $abonnement, $password)
{
    //alles benoemen anders kan de info niet in de database worden opgeslagen. De vraagtekens zijn placeholders. Bij query is wat je er invult. Als tijd over is geslacht toevoegen. 
    try {
        $query = getConn()->prepare('INSERT INTO gebruikers (emailadres, achternaam, voornaam, abonnement, username, wachtwoord, land, geboortedatum)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
        //hier eigen waardes invoeren. !!!!
        $query->execute([$emailadres, $achternaam, $voornaam, abonnement($abonnement), $gebruikersnaam, $passwordHashed, $land, 2000 - 07 - 25]);
    } catch (PDOException $e) {
        header("location: ../Registreren.php?abo=beginner&error=Emailbestaatal");
    }
    header("location: ../filmOverzicht.php");
    exit();
}

//---------------------- profiel pagina -------------------------

function updateGebruikersnaam($gebruikersnaam)
{
    $usernaam = $_SESSION['usernaam'];
    $query = getConn()->prepare("UPDATE gebruikers 
    SET username = '?' 
    WHERE username = '?'");
    $query->execute([$gebruikersnaam, $usernaam]);
    header("location: AccountInstellingen.php");
    exit();
}

function updateVoornaam($voornaam)
{
    $usernaam = $_SESSION['usernaam'];
    $query = getConn()->prepare("UPDATE gebruikers 
    SET voornaam = '?' 
    WHERE username = '?'");
    $query->execute([$voornaam, $usernaam]);
    exit();
    header("location: AccountInstellingen.php");
}
