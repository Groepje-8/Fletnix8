<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/specificity.css">
    <link rel="stylesheet" href="/css/MediaPlayer.css">
    <title>MediaPlayer</title>
</head>

<body>
    <?=include "Components/header.php";?>
    
    <main>

        <form action="/html/FilmDetails.html">
            <input type="submit" value="Terug naar overzicht" />
        </form>

        <form action="/html/MediaPlayer.html">
            <input type="submit" value="Volgende aflevering" />
        </form>

        <form action="/html/MediaPlayer.html">
            <input type="submit" value="Vorige aflevering" />
        </form>

        <video controls>
            <source src="/videos/trailer.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <h1>Titel - aflevering</h1>
    </main>

    <footer>
        <ul>
            <li><a href="/html/OverOns.html">Over ons</a> </li>
            <li><a href="/html/ProfielPagina.html">Account</a> </li>
            <li><a href="#">veelgestelde vragen</a> </li>
        </ul>
        <p>Vragen? Bel 0800-123-4567 </p>
        <p> Alle rechten voorbehouden door Fletnix&#169; inc. </p>
        <p> Het kopiëren/distribueren van ons assortiment is ten strikste verboden en daders zullen strafrechtelijk
            vervolgd worden.</p>
    </footer>
</body>

</html>