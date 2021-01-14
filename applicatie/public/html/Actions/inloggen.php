<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/html/Components/Connection.php";

$username = $_POST['username'];
$wachtwoord = $_POST['wachtwoord'];
$passwordHashed = password_hash($wachtwoord, PASSWORD_DEFAULT);



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
        header("location: ../../index.php?error=verkeerdegegevens");
        die();
    }
    $row = $res->fetch(PDO::FETCH_ASSOC);
    if (is_array($row)) {
        if (password_verify($wachtwoord, $row['wachtwoord'])) {
            session_start();
            $_SESSION["username"] = $username;
            header("location: ../FilmOverzicht.php");
        }
    } else {
        header("location: ../../index.php?error=verkeerdegegevens");
    }
}

function emptyInputLogin($gebruikersnaam, $ww)
{
    if (empty($gebruikersnaam) || empty($ww)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

login($username, $wachtwoord);
