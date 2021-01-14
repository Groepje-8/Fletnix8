<?php
require_once "/srv/webserver/applicatie/public/html/modules/connection.php";

// Databasefunctie die je een query meegeeft en de data teruggeeft.
function krijgData($sql){
$query = getConn()->prepare($sql);
    $query->execute();
    $data = $query->fetchall();
    return $data;
}
?>