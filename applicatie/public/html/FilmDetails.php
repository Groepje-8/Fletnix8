<?php
include "Components/sessionManager.php";
include "Modules/haalFilmDetails.php";
require_once "Components/header.php";
maakHeader("FilmDetails");
// Pagina ID 4

if (!isset($_GET['movie_id'])){
    header("location: /html/FilmOverzicht.php");
}
$movie_id = $_GET['movie_id'];

$film = [
    'Details' => haalFilmDetails($movie_id),
    'Genres' => haalFilmGenres($movie_id),
    'Regisseurs' => haalFilmRegisseurs($movie_id),
    'Cast' => haalFilmCast($movie_id),
];
?>
<body>
    <?php require_once "Components/navbar.php"; ?>

    <main>
        <div class="terugknop">
            <form action="/html/FilmOverzicht.php">
                <input type="submit" value="Terug naar assortiment" />
            </form>
        </div>

        <div class="titel">
            <h1><?=$film['Details']['title']?></h1>
            <h2><?=$film['Details']['publication_year']?> - <?=formatDetailString($film['Regisseurs']);?></h2>
            <a href="/html/FilmOverzicht.php">
                <p>Meer van deze regisseur</p>
            </a>
            <h3><?=formatDetailString($film['Genres']);?></h3>
        </div>

        <div class="beschrijving">
            <h2>Samenvatting</h2>
            <p><?=$film['Details']['description']?></p>
            <p>Speelduur: <?=minutenNaarUur($film['Details']['duration'])?></p>
        </div>

        <div class="poster">
            <img src="/img/Posters/<?=$movie_id?>.jpg" alt="Poster">
        </div>

        <div class="knoppen">
            <a href="/html/MediaPlayer.php?titel=<?=$film['Details']['title']?>">
                <p>Bekijk Trailer</p>
            </a>
            <br>
            <?php if(isset($_SESSION['username'])){
               echo "<a href='/html/MediaPlayer.php?titel=".$film['Details']['title'].".'>
                        <p>Bekijk Film</p>
                    </a>";
            }?>
        </div>

        <div class="acteurgrid">
            <?=printActeurGrid($film['Cast'])?>
        </div>
    </main>

    <?php include "Components/footer.php"; ?>
</body>

</html>