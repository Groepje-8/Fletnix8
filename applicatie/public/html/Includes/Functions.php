<?php

function emptyInputSignup($voornaam, $achternaam, $land, $geboortejaar, $rekeningnummer, $gebruikersnaam, $abonnement, $ww, $hww){
    $result;
    if (empty($voornaam) || empty($achternaam) || empty($land) || empty($geboortejaar) || empty($rekeningnummer) || empty($gebruikersnaam) || empty($abonnement) || empty($ww) || empty($hww)  ){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($ww, $hww) {
    $result;
    if ($ww !== $hww){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
// users en usersUid omgezet worden naar hoe de tabellen en kolommen worden genoemd !!
function uidExists($conn, $username, $email) {
     $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";     //? is placeholder
     //prepared statement moet nog naar microsoft SQL omgezet worden. !!!!
     $stmt = mysqli_stmt_init($conn);
     if (!sqlsrv_prepare($stmt, $sql)){
        header("location: ../Registreren.php?error=stmtfailed");
        exit();
     }

     mysqli_stmt_bind_param($stmt, "ss", $username, $email)
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

    mysqli_stmt_bind_param($stmt, "sssssssss", $emailadres, $achternaam, $voornaam, $abbonement, $username, $wachtwoord, $land, $geslacht, $geboortedatum)
    sqlsrv_execute($stmt);
    sqlsrv_close($stmt);
    header("location: ../Registreren.php?error=none");
    exit();
}

?>