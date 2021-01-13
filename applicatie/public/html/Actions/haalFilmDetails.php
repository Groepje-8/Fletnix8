<?php
require_once "/srv/webserver/applicatie/public/html/components/connection.php";

function haalFilmDetails($movie_id){
    
    $sql = "SELECT title, publication_year, description, duration
        FROM films
        WHERE movie_id = :movie_id";

    $query = getConn()->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    $data = $query->fetchall();
    return $data[0];
}

function haalFilmGenres($movie_id){
    
    $sql = "SELECT genrename
        FROM filmgenre FG
        WHERE F.movie_id = :movie_id";

    $query = getConn()->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    $data = $query->fetchall();
    return $data[0];
}

function haalFilmCast($movie_id){
    
    $sql = "SELECT voornaam, achternaam
        FROM Persoon P INNER JOIN Cast C ON P.persoon_id = C.persoon_id
        WHERE movie_id = :movie_id";

    $query = getConn()->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    $data = $query->fetchall();
    return $data[0];
}

function haalFilmRegisseur($movie_id){
    $sql = "SELECT voornaam, achternaam
        FROM Persoon P INNER JOIN Regisseur R ON P.persoon_id = R.persoon_id
        WHERE movie_id = :movie_id";

    $query = getConn()->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    $data = $query->fetchall();
    return $data[0];
}

function minutenNaarUur($minuten) {
    $minutenOver = $minuten % 60; 
    $uur = intval($minuten / 60);
    $string = "$uur uur en $minutenOver minuten";
    if ($minutenOver == 1){
        $string = "$uur uur en $minutenOver minuut";
    }
    return $string;
}

?>