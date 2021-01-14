<?php

$username = "testpersoon"; 
// select queries om alle velden in te vullen. 
require_once "Components/Connection.php";

function haalGegevensOp($gebruikersnaam)
{
    $query = "SELECT username, achternaam, voornaam, abonnement, emailadres, land, geboortedatum
              FROM gebruikers 
              WHERE username = '$gebruikersnaam'";
    $stmt = getConn()->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $test = array(
        "username" => $row['username'],
        "achternaam" => $row['achternaam'],
        "voornaam" => $row['voornaam'],
        "abonnement" => $row['abonnement'],
        "emailadres" => $row['emailadres'],
        "land" => $row['land'],
        "geboortedatum" => $row['geboortedatum'],
        );
    }
    return $test;
}

//updaten van ww en gebruikersnaam. (ander bestand)