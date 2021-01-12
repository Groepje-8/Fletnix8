<?php
include "/srv/webserver/applicatie/public/html/components/connection.php";

function haalFilmsOp()
{
    $query = "SELECT * FROM Films";
    $stmt = getConn()->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        return ($row);
    }

    foreach ($row['movie_id'] as $film) {
        echo "<div>
        <a href='FilmDetails.php'><img src='/img/posters/$film.png' alt='Poster'></a>
    </div>";
    }
}
