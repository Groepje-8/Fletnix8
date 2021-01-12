<?php
require_once "/srv/webserver/applicatie/public/html/components/connection.php";

function haalFilmDetails($movie_id){
    
    $sql = "SELECT title, publication_year, genrename, description, duration
        FROM films F INNER JOIN Regisseur R ON  F.movie_id = R.movie_id
        INNER JOIN filmgenre FG ON F.movie_id = FG.movie_id
        WHERE F.movie_id = :movie_id";

    $query = getConn()->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    $data = $query->fetchall();
    return $data;
}

function haalCast($movie_id){
    
    $sql = "SELECT voornaam, achternaam
        FROM Persoon P INNER JOIN Cast C ON P.persoon_id = C.persoon_id
        WHERE movie_id = :movie_id";

    $query = getConn()->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    $data = $query->fetchall();
    return $data;
}