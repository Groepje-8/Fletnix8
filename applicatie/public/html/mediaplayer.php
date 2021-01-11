<?=
    include "html/Components/header.php";
    header_function("mediaplayer");
?>

<body>

    <main>

        <form action="/html/FilmDetails.php">
            <input type="submit" value="Terug naar overzicht" />
        </form>

        <form action="/html/MediaPlayer.php">
            <input type="submit" value="Volgende aflevering" />
        </form>

        <form action="/html/MediaPlayer.php">
            <input type="submit" value="Vorige aflevering" />
        </form>

        <video controls>
            <source src="/videos/trailer.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <h1>Titel - aflevering</h1>
    </main>

    <?=include "Components/footer.php";?>
</body>

</html>