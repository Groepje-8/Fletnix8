<?php
require_once "Components/sessionStart.php";
require_once "Actions/haalFilmsOp.php";
require_once "Actions/haalFilmDetails.php";
require_once "Components/header.php";
maak_header("FilmOverzicht");
// Pagina ID 5
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
                    <input type="text" placeholder="Search..">
                </div>
                <div class="row">
                    <div class="column">
                        <h3>Genres</h3>
                        <form action="/html/FilmOverzicht.php" method="get">
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
        if (isset($_GET['Genres'])) {
            $genre = $_GET['Genres'];
        }
        if (isset($_GET['regisseur'])) {
            $regisseur = $_GET['regisseur'];
        }
        if (isset($_GET['periode'])) {
            $jaar = $_GET['periode'];
        }
        printAlleFilms($genre, $regisseur, $jaar);
        ?>
    </div>

    <?php include "Components/footer.php"; ?>
</body>

</html>