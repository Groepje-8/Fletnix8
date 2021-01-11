<?php
include "Components/sessionStart.php";

?>
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
<?=
    require_once "Components/header.php";
    header_function("mediaplayer");
?>

<body>
<?php require_once "Components/navbar.php";  ?>

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

    <?php include "Components/footer.php";?>
</body>

</html>