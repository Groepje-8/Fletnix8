<?php
include "/srv/webserver/applicatie/public/html/components/connection.php";

function haalFilmsOp()
{
    $query = "SELECT * FROM Films";

    // if ($genre !=""){
    //     // query + genre filter
    // }
    // if ($regisseur !=""){
    //     // query +regisseur filter
    // }
    // if ($publicatiejaar !=""){
    //     // query +jaar filter
    // }


    $query = getConn()->prepare($query);
    $query->execute();
    $data = $query->fetchall();
    return $data;
}

function printFilms(){

    foreach (haalFilmsOp() as $film) {
        echo "<div>
        <a href='FilmDetails.php'><img src='/img/posters/".$film['movie_id'].".jpg' alt='Poster'></a>
    </div>";
    }
}