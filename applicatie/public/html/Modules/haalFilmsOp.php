<?php
require_once "haalGegevensOp.php";


//Print alle films die in de database staan zoals ze in het filmoverzicht moeten
function printAlleFilms($genre, $regisseur, $jaar,$titel)
{
    foreach (HaalFilmsMetGenreFilter($genre, $regisseur, $jaar,$titel) as $film) {
        echo "<div>
        <a href='FilmDetails.php/?movie_id=" . $film['movie_id'] . "'><img src='/img/posters/" . $film['movie_id'] . ".jpg' alt='Poster'></a>
    </div>";
    }
}

// Dataretrieval functie die werkt met alle filteropties in 1 x (werkt wel met maar max 1 filter optie)
function HaalFilmsMetGenreFilter($genre, $regisseur, $jaar,$titel)
{


    $sql = "SELECT TOP 100 Films.movie_id 
    FROM Films 
    INNER JOIN filmgenre 
    ON Films.movie_id = filmgenre.movie_id
    INNER JOIN regisseur
    ON regisseur.movie_id = Films.movie_id
    INNER JOIN persoon
    ON persoon.persoon_id = regisseur.persoon_id
    WHERE filmgenre.genrename LIKE '$genre'
    AND persoon.naam LIKE '$regisseur' 
    AND Films.publication_year LIKE '$jaar'
    AND Films.title LIKE '$titel'
    GROUP BY Films.movie_id";
    return (krijgData($sql));
}



// Selecteer de 4 nieuwste films in de database en print die
function printNieuwsteFilms()
{
   
    foreach (krijgNieuwsteFilms() as $film) {
        echo "<div class ='new'>
        <a href='FilmDetails.php/?movie_id=" . $film['movie_id'] . "'><img src='/img/posters/" . $film['movie_id'] . ".jpg' alt='Poster'></a>
    </div>";
    }
}

function krijgNieuwsteFilms()
{
    $sql = "SELECT TOP 4 * FROM Films ORDER BY publication_year DESC";
    return(krijgData($sql));
}

