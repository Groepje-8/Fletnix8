<?php
include "Components/sessionStart.php";
include "Actions/haalFilmDetails.php";
require_once "Components/header.php";
maak_header("FilmDetails");

//$_GET['movie_id'];
$filmData = haalFilmDetails(1);
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
            <h2><?=$filmData['publication_year']?> - Regisseur</h2>
            <a href="/html/FilmOverzicht.php">
                <p>Meer van deze regisseur</p>
            </a>
            <h3>Genres</h3>
        </div>
        <div class="beschrijving">

            <h2>Samenvatting</h2>
            <p><?=$filmData['description']?></p>
            <p>Speelduur: <?=minutenNaarUur($filmData['duration'])?></p>
        </div>
        <div class="poster">
            <img src="/img/poster.jpg" alt="Poster">
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
            <div>
                <img src="/img/placeholder.png" alt="acteur">
                <h3>John David Washington</h3>
            </div>
            <div>
                <img src="/img/placeholder.png" alt="acteur">
                <h3>Robert Pattinson</h3>
            </div>
            <div>
                <img src="/img/placeholder.png" alt="acteur">
                <h3>Elizabeth Debicki</h3>
            </div>
            <div>
                <img src="/img/placeholder.png" alt="acteur">
                <h3>Michael Caine</h3>
            </div>
        </div>
    </main>

    <?php include "Components/footer.php"; ?>
</body>

</html>