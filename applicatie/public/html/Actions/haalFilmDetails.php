<?php
require_once "/srv/webserver/applicatie/public/html/components/connection.php";

function haalFilmDetails($movie_id){
    
    $sql = "SELECT title, publication_year, description, duration
        FROM films
        WHERE movie_id = :movie_id";

    $query = getConn()->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    $data = $query->fetchall();
    return $data;
}

function haalFilmGenres($movie_id){
    
    $sql = "SELECT genrename
        FROM filmgenre FG
        WHERE F.movie_id = :movie_id";

    $query = getConn()->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    $data = $query->fetchall();
    return $data;
}

function haalFilmCast($movie_id){
    
    $sql = "SELECT voornaam, achternaam
        FROM Persoon P INNER JOIN Cast C ON P.persoon_id = C.persoon_id
        WHERE movie_id = :movie_id";

    $query = getConn()->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    $data = $query->fetchall();
    return $data;
}

function haalFilmRegisseur($movie_id){
    $sql = "SELECT voornaam, achternaam
        FROM Persoon P INNER JOIN Regisseur R ON P.persoon_id = R.persoon_id
        WHERE movie_id = :movie_id";

    $query = getConn()->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    $data = $query->fetchall();
    return $data;
}