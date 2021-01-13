<?php
include "/srv/webserver/applicatie/public/html/components/connection.php";
function krijgData($sql){
$query = getConn()->prepare($sql);
    $query->execute();
    $data = $query->fetchall();
    return $data;
}
?>