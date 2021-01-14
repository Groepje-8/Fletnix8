<?php
require_once 'Functions.php';

if (isset($_POST["submit"])) {
    
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $land = $_POST["land"];
    $geboortejaar = $_POST["geboortejaar"];
    $emailadres = $_POST["emailadres"];
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $abonnement = $_POST["abonnement"];
    $ww = $_POST["ww"]; 
    
    updateUser($voornaam, $achternaam, $land, $geboortejaar, $emailadres, $gebruikersnaam, $abonnement, $ww);
    
}