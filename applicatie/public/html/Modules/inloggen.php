<?php
// Connectie oproepen
require_once $_SERVER["DOCUMENT_ROOT"] . "/html/modules/connection.php";


//Aanmaken benodigde variabelen
$username = $_POST['username'];
$wachtwoord = $_POST['wachtwoord'];
$passwordHashed = password_hash($wachtwoord, PASSWORD_DEFAULT);


// Login functie Checkt op lege login haalt daarna wachtwoord op met username ne checkt of klopt, 
function login($username, $wachtwoord)
{

    if (emptyInputLogin($username, $wachtwoord)) {
        header("location: ../../index.php?error=emptyinput");
        exit();
    }
    $query = 'SELECT * FROM gebruikers WHERE (username = :username)';
    $values = [':username' => $username];
    try {
        $res = getConn()->prepare($query);
        $res->execute($values);
    } catch (PDOException $e) {
        echo 'Query Error.';
        header("location: ../../../index.php?error=verkeerdegegevens");
        die();
    }
    $row = $res->fetch(PDO::FETCH_ASSOC);
    if (is_array($row)) {
        if (password_verify($wachtwoord, $row['wachtwoord'])) {
            session_start();
            $_SESSION["username"] = $username;
            header("location: ../FilmOverzicht.php");
        } else{
            header("location: ../../../index.php?error=verkeerdegegevens");
        }
    } else {
        header("location: ../../../index.php?error=verkeerdegegevens");
    }
}
// check of de input leeg is
function emptyInputLogin($gebruikersnaam, $ww)
{
    if (empty($gebruikersnaam) || empty($ww)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// voer login functie uit.
login($username, $wachtwoord);
