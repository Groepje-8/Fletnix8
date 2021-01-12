<?php
include "/srv/webserver/applicatie/public/html/components/connection.php";

function haalTekstOp($page_id, $content_id)
{

    $query = "SELECT text FROM content WHERE pagina_id = $page_id AND content_id = $content_id";
    $stmt = getConn()->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
    // $sql = "SELECT text FROM content WHERE pagina_id = :pagina_id AND content_id = :content_id";
    // $query = getConn()->prepare($sql);
    // $query->execute([':pagina_id' => $page_id,':content_id' =>$content_id]);
    // $data = $query->fetchall();
    // print_r($data);
}

