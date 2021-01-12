<?php
include "/srv/webserver/applicatie/public/html/components/connection.php";

function haalFilmsOp()
{
    $query = "SELECT * FROM films";
    $stmt = getConn()->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        return ($row);
    }
}
