<?php
// Pagina ID 5

require_once  $_SERVER["DOCUMENT_ROOT"]."/html/Components/sessionManager.php";
require_once  $_SERVER["DOCUMENT_ROOT"]."/html/Modules/haalFilmsOp.php";
require_once  $_SERVER["DOCUMENT_ROOT"]."/html/Modules/haalFilmDetails.php";
require_once  $_SERVER["DOCUMENT_ROOT"]."/html/Components/header.php";
maakHeader("FilmOverzicht");

?>

<body>

    <?php require_once "Components/navbar.php";  ?>
    <h1>Nieuwste Films</h1>
    <div class="flexbox">
        <?php printNieuwsteFilms(); ?>
    </div>
    <h2>Assortiment</h2>
    <div class="flexbox-titel">
        <div class="dropdown">
            <button class="dropbtn">Filters</button>
            <div class="dropdown-content">
                <div class="filter-header">
                    <h2>Filter voor je favoriete films</h2>
                    <form action="/html/FilmOverzicht.php" method="get">
                        <input type="text" placeholder="Zoek op titel" name="titel">
                </div>
                <div class="row">
                    <div class="column">
                        <h3>Genres</h3>

                        <?php printAlleGenres(); ?>

                    </div>
                    <div class="column">
                        <h3>Regisseurs</h3>

                        <?php printAlleRegisseurs(); ?>

                    </div>
                    <div class="column">
                        <h3>Publicatiejaar</h3>
                        <input type="checkbox" name="periode" value="202%" id="202%">
                        <label for="20">'20s'</label>
                        <input type="checkbox" name="periode" value="201%" id="201%">
                        <label for="10">'10s'</label>
                        <input type="checkbox" name="periode" value="200%" id="200%">
                        <label for="00">'00s'</label>
                        <input type="checkbox" name="periode" value="109%" id="109%">
                        <label for="90">'90s'</label>
                        <input type="checkbox" name="periode" value="198%" id="198%">
                        <label for="80">'80s'</label>
                        <input type="checkbox" name="periode" value="197%" id="197%">
                        <label for="70">'70s'</label>
                        <input type="checkbox" name="periode" value="196%" id="196%">
                        <label for="60">'60s'</label>
                        <input type="checkbox" name="periode" value="195%" id="195%">
                        <label for="50">'50s'</label>
                        <input type="submit" value="Filter instellen">
                        <form action="/html/FilmOverzicht.php">
                            <input type="submit" value="Filter resetten">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flexbox-assortiment">
        <?php
        $genre = "%";
        $regisseur = "%";
        $jaar = "%";
        $titel = "%";
        if (isset($_GET['titel'])) {
            $titel = "%" . $_GET['titel'] . "%";
        }
        if (isset($_GET['Genres'])) {
            $genre = $_GET['Genres'];
        }
        if (isset($_GET['regisseur'])) {
            $regisseur = $_GET['regisseur'];
        }
        if (isset($_GET['periode'])) {
            $jaar = $_GET['periode'];
        }
        printAlleFilms($genre, $regisseur, $jaar, $titel);
        ?>
    </div>

    <?php include "Components/footer.php"; ?>
</body>

</html>