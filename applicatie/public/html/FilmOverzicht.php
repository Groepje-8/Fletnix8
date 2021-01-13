<?php
include "Components/sessionStart.php";
include "Actions/haalFilmsOp.php";
include "Actions/haalFilmDetails.php";

require_once "Components/header.php";
maak_header("FilmOverzicht");
?>

<body>

    <?php require_once "Components/navbar.php";  ?>
    <h1>Nieuwste Films</h1>
    <div class="flexbox">
    <?php printNieuwsteFilms();?>
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
                       <?php printAlleGenres();?>
                    </div>
                    <div class="column">
                        <h3>Regisseurs</h3>
                        <?php printAlleRegisseurs();?>
                    </div>
                    <div class="column">
                        <h3>Publicatiejaar</h3>
                        <input type="checkbox" name="periode" value="'20s'" id="20">
                        <label for="20">'20s'</label>
                        <input type="checkbox" name="periode" value="'20s'" id="10">
                        <label for="10">'10s'</label>
                        <input type="checkbox" name="periode" value="'20s'" id="00">
                        <label for="00">'00s'</label>
                        <input type="checkbox" name="periode" value="'20s'" id="90">
                        <label for="90">'90s'</label>
                        <input type="checkbox" name="periode" value="'20s'" id="80">
                        <label for="80">'80s'</label>
                        <input type="checkbox" name="periode" value="'20s'" id="70">
                        <label for="70">'70s'</label>
                        <input type="checkbox" name="periode" value="'20s'" id="60">
                        <label for="60">'60s'</label>
                        <input type="checkbox" name="periode" value="'20s'" id="50">
                        <label for="50">'50s'</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flexbox-assortiment">
        <?php printAlleFilms(); ?>
    </div>

    <?php include "Components/footer.php"; ?>
</body>

</html>