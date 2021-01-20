<?php
function checkOfIsIngelogd()
{
    if (isset($_SESSION['username'])) {
    } else {
        header("location: ../../index.php?error=JeBentNogNietIngelogd");
    }
}

function booleanIsIngelogd(){
   return (isset($_SESSION['username']));
}
?>