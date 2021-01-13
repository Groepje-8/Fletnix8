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
                       <?php printGenres();?>
                    </div>
                    <div class="column">
                        <h3>Regisseurs</h3>
                        <input type="checkbox" name="Regisseurs" value="Martin Scorsese" id="Martin_Scorsese">
                        <label for="Martin_Scorsese">Martin Scorsese</label>
                        <input type="checkbox" name="Regisseurs" value="Quentin Tarantino" id="Quentin_Tarantino">
                        <label for="Quentin_Tarantino">Quentin Tarantino</label>
                        <input type="checkbox" name="Regisseurs" value="Steven Spielberg" id="Steven_Spielberg">
                        <label for="Steven_Spielberg">Steven Spielberg</label>
                        <input type="checkbox" name="Regisseurs" value="Stanley Kubrick" id="Stanley_Kubrick">
                        <label for="Stanley_Kubrick">Stanley Kubrick</label>
                        <input type="checkbox" name="Regisseurs" value="Alfred Hitchcock" id="Alfred_Hitchcock">
                        <label for="Alfred_Hitchcock">Alfred Hitchcock</label>
                        <input type="checkbox" name="Regisseurs" value="Christopher Nolan" id="Christopher_Nolan">
                        <label for="Christopher_Nolan">Christopher Nolan</label>
                        <input type="checkbox" name="Regisseurs" value="Wes Anderson" id="Wes_Anderson">
                        <label for="Wes_Anderson">Wes Anderson</label>
                        <input type="checkbox" name="Regisseurs" value="James Cameron" id="James_Cameron">
                        <label for="James_Cameron">James Cameron</label>
                        <input type="checkbox" name="Regisseurs" value="Tim Burton" id="Tim_Burton">
                        <label for="Tim_Burton">Tim Burton</label>
                        <input type="checkbox" name="Regisseurs" value="Woody Allen" id="Woody_Allen">
                        <label for="Woody_Allen">Woody Allen</label>
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
        <?php printFilms(); ?>
    </div>

    <?php include "Components/footer.php"; ?>
</body>

</html>