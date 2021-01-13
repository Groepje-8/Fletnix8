<?php

//--------------registreren---------------------------
function emptyInputSignup($voornaam, $achternaam, $land, $geboortejaar, $emailadres, $gebruikersnaam, $abonnement, $ww, $hww){
    $result;
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

function createUser(){
    //alles benoemen anders kan de info niet in de database worden opgeslagen. De vraagtekens zijn placeholders. Bij query is wat je er invult. Als tijd over is geslacht toevoegen. 
    $query = $dbh->prepare('INSERT INTO fletnix_user (emailadres, achternaam, voornaam, abonnement, username, wachtwoord, land, geboortedatum)
    VALUES (?, ?, ?, ?, ?, ?, ?)');
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
    //hier eigen waardes invoeren. !!!!
    $query->execute([$emailadres, $achternaam, $voornaam, $abonnement, $gebruikersnaam, $passwordHashed, $land, $geboortejaar]);
    exit();
}

//-------------------- login ---------------------------
function emptyInputLogin($gebruikersnaam, $ww){
    $result;
    if ( empty($gebruikersnaam) || empty($ww) ){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
<<<<<<< Updated upstream
// users en usersUid omgezet worden naar hoe de tabellen en kolommen worden genoemd !!
function uidExists($conn, $username, $email) {
     $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";     //? is placeholder
     //prepared statement moet nog naar microsoft SQL omgezet worden. !!!!
     $stmt = mysqli_stmt_init($conn);
     if (!sqlsrv_prepare($stmt, $sql)){
        header("location: ../Registreren.php?error=stmtfailed");
        exit();
     }

     mysqli_stmt_bind_param($stmt, "ss", $username, $email);
     sqlsrv_execute($stmt);

     $resultData = mysqli_stmt_get_result($stmt);

     if ($row = mysqli_fetch_assoc($resultData)){
         return $row;
     }
     else {
         $result = false;
         return $result;
     }

     sqlsrv_close($stmt);
}
// namen van database en wachtwoord aanpassen !!!
function createUser($conn, $voornaam, $achternaam, $land, $geboortejaar, $rekeningnummer, $gebruikersnaam, $abonnement, $ww, $hww) {
    //volgorde moet de volgorde van database tabel volgen !!! aanpassen !!!!!
    $sql = "INSERT INTO users (emailadres, achternaam, voornaam, abbonement, username, wachtwoord, land, geslacht, geboortedatum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";     
    $stmt = mysqli_stmt_init($conn);
    if (!sqlsrv_prepare($stmt, $sql)){
       header("location: ../Registreren.php?error=stmtfailed");
       exit();
    }

    $hashedWachtwoord = password_hash($ww, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssssss", $emailadres, $achternaam, $voornaam, $abbonement, $username, $wachtwoord, $land, $geslacht, $geboortedatum);
    sqlsrv_execute($stmt);
    sqlsrv_close($stmt);
    header("location: ../Registreren.php?error=none");
    exit();
}
=======

//headers checken
function loginUser( $gebruikersnaam, $ww){
    // $uidExists = uidExists($conn, $username);
>>>>>>> Stashed changes

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