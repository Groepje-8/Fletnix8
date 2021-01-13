<?php

function checkOfIsIngelogd(){
    if(isset($_SESSION['gebruiker'])){
        exit;
    } else{
        header("location: ../../index.php");
    }
}
