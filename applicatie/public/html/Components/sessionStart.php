<?php
if (!isset($_SESSION['username'])) {
    session_start();
}

function checkOfIsIngelogd()
{
    if (isset($_SESSION['username'])) {
    } else {
        header("location: ../../index.php?error=JeBentNogNietIngelogd");
    }
}
