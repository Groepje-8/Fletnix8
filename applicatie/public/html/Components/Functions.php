<?php

if (!function_exists('getConn')) {
    require_once 'Connection.php';
}
//test
// session_start();

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
    $query = getConn()->prepare('INSERT INTO gebruikers (emailadres, achternaam, voornaam, abonnement, username, wachtwoord, land, geboortedatum)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
    //hier eigen waardes invoeren. !!!!
    $query->execute([$emailadres, $achternaam, $voornaam, abonnement($abonnement), $gebruikersnaam, $passwordHashed, $land, 2000 - 07 - 25]);
    exit();
}

//-------------------- login ---------------------------
// function login($username, $wachtwoord)
// {
//     $passwordHashed = password_hash($wachtwoord, PASSWORD_DEFAULT);
//     $stmt = getConn()->prepare("SELECT * FROM gebruikers WHERE username = ? AND wachtwoord = ?");
//     $stmt->execute([$username, $passwordHashed]);
//     $count = $stmt->fetchColumn();

//     if ($count == 1) {
//         echo "gelukt";
//         // $_SESSION["username"] = $username;
//         header("location: ../FilmOverzicht.php");
//     } else {
//         echo "niet gelukt";
//         header("location: ../../index.php?error=verkeerdegegevens");
//         exit();
//     }
// }

// function emptyInputLogin($gebruikersnaam, $ww)
// {
//     if (empty($gebruikersnaam) || empty($ww)) {
//         $result = true;
//     } else {
//         $result = false;
//     }
//     return $result;
// }

//----------------------- profielpagina -----------------------
// function getUserData($username)
//     {
//         $query = "SELECT username, wachtwoord FROM gebruikers WHERE gebruikersnaam = '$username'";
//         return self::getResults($query);
//     }

//---------------------- profiel pagina -------------------------

function updateUsername($gebruikersnaam)
{
    // header("location: ../../index.php");
    // console_log($gebruikersnaam);
    $usernaam = $_SESSION['usernaam'];
    $query = getConn()->prepare("UPDATE gebruikers 
    SET username = '$gebruikersnaam' 
    WHERE username = '$usernaam'");
    $query->execute([$gebruikersnaam]);
    exit();
    header("location: AccountInstellingen.php");
}

// function console_log($data)
// {
//     echo '<script>';
//     echo 'console.log(' . json_encode($data) . ')';
//     echo '</script>';
// }
