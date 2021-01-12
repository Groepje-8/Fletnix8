<?php

if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
session_unset();
session_destroy();

header("location: ../index.php");
?>