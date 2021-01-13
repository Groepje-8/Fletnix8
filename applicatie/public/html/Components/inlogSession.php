<?php

require_once 'Functions.php';
//test

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $wachtwoord = $_POST["wachtwoord"];

    // if (emptyInputLogin($username, $wachtwoord)){
    //     header("location: ../../index.php?error=emptyinput");
    //     exit();
    // }
    login($username, $wachtwoord);
    echo "gelukt";
}