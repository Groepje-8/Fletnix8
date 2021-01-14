<?php

if (!function_exists('getConn')){
    require_once "/srv/webserver/applicatie/public/html/modules/connection.php";
}

function haalTekstOp($page_id, $content_id)
{
    $query = "SELECT text 
              FROM content 
              WHERE pagina_id = $page_id 
              AND content_id = $content_id";
    $stmt = getConn()->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        return print_r($row['text']);
    }
}
