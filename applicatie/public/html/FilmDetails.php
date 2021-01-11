<?=
    include "html/Components/header.php";
    header_function("FilmDetails");
?>

<body>
  

    <main>
        <div class="terugknop">

            <form action="/html/FilmOverzicht.php">
                <input type="submit" value="Terug naar assortiment" />
            </form>
        </div>
        <div class="titel">
            <h1>Tenet</h1>
            <h2>2020 - Christopher Nolan</h2>
            <a href="/html/FilmOverzicht.php">
                <p>Meer van deze regisseur</p>
            </a>
            <h3>Actie - Sciencefiction</h3>
        </div>
        <div class="beschrijving">

            <h2>Samenvatting</h2>
            <p>Bewapend met maar een woord, Tenet, en vechtend voor het overleven van de hele wereld reist onze
                hoofdpersoon
                door een schemerige wereld van internationale spionage op een missie die zich ontvouwt buiten de echte
                tijdlijn. <br><br>

                Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist
                journeys
                through a twilight world of international espionage on a mission that will unfold in something beyond
                real time.</p>
            <p>Speelduur: 2 uur en 30 minuten</p>
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

    <?=include "Components/footer.php";?>
</body>

</html>