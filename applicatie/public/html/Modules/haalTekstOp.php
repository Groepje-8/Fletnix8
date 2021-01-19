<?php
// Bekijk of de connectie al gemaakt is en maak hem anders aan
if (!function_exists('getConn')){
    require_once "/srv/webserver/applicatie/public/html/modules/connection.php";
}

// Haal de tekst op van de bijbehoorende pagina en contentid
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
