<?php

require_once 'Connection.php';

//--------------registreren---------------------------
function emptyInputSignup($voornaam, $achternaam, $land, $geboortejaar, $emailadres, $gebruikersnaam, $abonnement, $ww, $hww){
    if (empty($voornaam) || empty($achternaam) || empty($land) || empty($geboortejaar) || empty($emailadres) || empty($gebruikersnaam) || empty($abonnement) || empty($ww) || empty($hww)  ){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    return !preg_match("/^[a-zA-Z0-9]*$/", $username);
}


function pwdMatch($ww, $hww) {
    return $ww !== $hww;
}

function createUser($voornaam, $achternaam, $land, $geboortejaar, $emailadres, $gebruikersnaam, $abonnement, $password){
//alles benoemen anders kan de info niet in de database worden opgeslagen. De vraagtekens zijn placeholders. Bij query is wat je er invult. Als tijd over is geslacht toevoegen. 
    $query = getConn()->prepare('INSERT INTO gebruikers (emailadres, achternaam, voornaam, abonnement, username, wachtwoord, land, geboortedatum)
    VALUES (?, ?, ?, ?, ?, ?, ?)');
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
    //hier eigen waardes invoeren. !!!!
    $query->execute([$emailadres, $achternaam, $voornaam, $abonnement, $gebruikersnaam, $passwordHashed, $land, $geboortejaar]);
    exit();
}

//-------------------- login ---------------------------
function emptyInputLogin($gebruikersnaam, $ww){
    if ( empty($gebruikersnaam) || empty($ww) ){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

//headers checken
function loginUser( $gebruikersnaam, $ww){
    // $uidExists = uidExists($conn, $username);

    // if (uidExists === false) {
    //     header("location: ../login.php?error=wronglogin");
    //     exit();
    // }
    // [kolom name in db]
    if (password_verify($password, $passwordHashed)) {
        session_start();
        $_SESSION["username"] = $uidExist["username"];
        header("location: ../../index.php");
        exit();
      }
      else {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
}

//     $checkww = password_verify($ww, $wwHashed);

//     if ($checkww === false) {
//         header("location: ../login.php?error=wronglogin");
//         exit();
//     }
//     else if ($checkww === true) {
//         session_start();
//         $_SESSION["gebruikersnaam"] = $uidExist["gebruikersnaam"];
//         header("location: ../../index.php");
//         exit();
//     }
// }