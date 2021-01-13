<?php
include "Components/sessionStart.php";
include "Actions/haalFilmDetails.php";
require_once "Components/header.php";
maak_header("FilmDetails");

$movie_id = 1; //$_GET['movie_id'];
$filmData = haalFilmDetails($movie_id);
$filmGenres = haalFilmGenres($movie_id);
$filmRegisseurs = haalFilmRegisseurs($movie_id);
$filmCast = haalFilmCast($movie_id);
?>
<body>
    <?php require_once "Components/navbar.php";  ?>

    <main>
        <div class="terugknop">

            <form action="/html/FilmOverzicht.php">
                <input type="submit" value="Terug naar assortiment" />
            </form>
        </div>
        <div class="titel">
            <h1><?=$filmData['title']?></h1>
            <h2><?=$filmData['publication_year']?> - <?=formatDetailString($filmRegisseurs);?></h2>
            <a href="/html/FilmOverzicht.php">
                <p>Meer van deze regisseur</p>
            </a>
            <h3><?=formatDetailString($filmGenres);?></h3>
        </div>
        <div class="beschrijving">

            <h2>Samenvatting</h2>
            <p><?=$filmData['description']?></p>
            <p>Speelduur: <?=minutenNaarUur($filmData['duration'])?></p>
        </div>
        <div class="poster">
            <img src="/img/Posters/<?=$movie_id?>.jpg" alt="Poster">
        </div>
        <div class="knoppen">
            <a href="/html/MediaPlayer.php">
                <p>Bekijk Trailer</p>
            </a>
            <br>
            <a href="/html/MediaPlayer.php">
                <p>Bekijk Film</p>
            </a>

        </div>
        <div class="acteurgrid">
            <?=printActeurGrid($filmCast)?>
        </div>
    </main>

    <?php include "Components/footer.php"; ?>
</body>

</html>