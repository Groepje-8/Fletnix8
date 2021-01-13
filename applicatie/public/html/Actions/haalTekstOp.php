<?php
include "/srv/webserver/applicatie/public/html/components/connection.php";

function haalTekstOp($page_id, $content_id)
{
    $query = "SELECT text FROM content WHERE pagina_id = $page_id AND content_id = $content_id";
    $stmt = getConn()->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        return print_r($row['text']);
    }
}
