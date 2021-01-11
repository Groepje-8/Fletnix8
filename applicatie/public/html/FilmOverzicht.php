<?php
include "Components/sessionStart.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoverzicht</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/specificity.css">
    <link rel="stylesheet" href="/css/FilmOverzicht.css">
    
</head>
<?php
    require_once "Components/header.php"; 
    header_function("FilmOverzicht");
?>

<body>

<?php require_once "Components/navbar.php";  ?>
    <h1>Nieuwe Films</h1>
    <div class="flexbox">
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
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
                        <input type="checkbox" name="Genres" value="Actie" id="Actie">
                        <label for="Actie">Actie</label>
                        <input type="checkbox" name="Genres" value="Animatie" id="Animatie">
                        <label for="Animatie">Animatie</label>
                        <input type="checkbox" name="Genres" value="Drama" id="Drama">
                        <label for="Drama">Drama</label>
                        <input type="checkbox" name="Genres" value="Familiefilm" id="Familiefilm">
                        <label for="Familiefilm">Familiefilm</label>
                        <input type="checkbox" name="Genres" value="Fantasy" id="Fantasy">
                        <label for="Fantasy">Fantasy</label>
                        <input type="checkbox" name="Genres" value="Horror" id="Horror">
                        <label for="Horror">Horror</label>
                        <input type="checkbox" name="Genres" value="Komedie" id="Komedie">
                        <label for="Komedie">Komedie</label>
                        <input type="checkbox" name="Genres" value="Mystery" id="Mystery">
                        <label for="Mystery">Mystery</label>
                        <input type="checkbox" name="Genres" value="Oorlog" id="Oorlog">
                        <label for="Oorlog">Oorlog</label>
                        <input type="checkbox" name="Genres" value="Romantisch" id="Romantisch">
                        <label for="Romantisch">Romantisch</label>
                        <input type="checkbox" name="Genres" value="Sciencefiction" id="Sciencefiction">
                        <label for="Sciencefiction">Sciencefiction</label>
                        <input type="checkbox" name="Genres" value="Thriller" id="Thriller">
                        <label for="Thriller">Thriller</label>
                        <input type="checkbox" name="Genres" value="Western" id="Western">
                        <label for="Western">Western</label>
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
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
        <div>
            <a href="FilmDetails.php"><img src="/img/placeholder.png" alt="Poster"></a>
        </div>
    </div>

    <?php include "Components/footer.php"; ?>
</body>

</html>