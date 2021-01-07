<?php
session_start();

if ( $_POST['ww'] == $_POST['hww']) {
    $_SESSION['vnaam'] = $_POST['vnaam'];
    $_SESSION['anaam'] = $_POST['anaam'];
    $_SESSION['land'] = $_POST['land'];
    $_SESSION['gjaar'] = $_POST['gjaar'];
    $_SESSION['rnr'] = $_POST['rnr'];
    $_SESSION['gnaam'] = $_POST['gnaam'];
    $_SESSION['abb'] = $_POST['abb'];
    $_SESSION['ww'] = $_POST['ww'];
    $_SESSION['errormessage'] = "";
    
    header("location: ../ProfielPagina.php");
}
else {
    session_destroy();
    session_start();
    $_SESSION['errormessage'] = "Wachtwoorden komen niet overeen";
    header("location: ../Registreren.php?abb=beginner");
}
?>