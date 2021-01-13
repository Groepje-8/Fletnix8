<?php
include "getData.php";
// include "haalFilmDetails.php";

function haalFilmsOp()
{
    $sql = "SELECT * FROM Films";
    // if ($genre !=""){
    //     // query + genre filter
    // }
    // if ($regisseur !=""){
    //     // query +regisseur filter
    // }
    // if ($publicatiejaar !=""){
    //     // query +jaar filter
    // }
   return(krijgData($sql));
}

function printFilms(){
    foreach (haalFilmsOp() as $film) {
        echo "<div>
        <a href='FilmDetails.php'><img src='/img/posters/".$film['movie_id'].".jpg' alt='Poster'></a>
    </div>";
    }
}

function printNieuwsteFilms(){
    $sql = "SELECT TOP 4 * FROM Films ORDER BY publication_year DESC";
    foreach(krijgData($sql) as $film){
        echo "<div class ='new'>
        <a href='FilmDetails.php'><img src='/img/posters/".$film['movie_id'].".jpg' alt='Poster'></a>
    </div>";
    }

}

function filterFilms(){
    
}

function haalFilterOptiesOp(){


}