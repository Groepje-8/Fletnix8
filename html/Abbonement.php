<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/FletnixIcon.ico">
    <title>Abbonement</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/specificity.css">
    <link rel="stylesheet" href="/css/specificityAbbonementen.css">
</head>

<body>
    <div class="grid-container">
        <?=include "Components/header.php";?>

        <main>
            <h1>Selecteer je gewenste abbonement</h1>
        <a href="/html/Registreren.php">
            <div class="Abbonement1">
                
                <img src="/img/placeholder.png" width="80" height="80" alt="Abbo1">
                <h2>Beginner</h2>
                <p>Met het beginner abbonement kun je gemakkelijk en goedkoop de nieuwste films en series van vorig jaar
                    zien!</p>
            </div>
        </a>
        <a href="/html/Registreren.php">
            <div class="Abbonement2">
                
                <img src="/img/placeholder.png" width="80" height="80" alt="Abbo2">
                <h2>Standaard</h2>
                <p>Met het standaard abbonement kun je alle films zien die niet meer in de bioscoop draaien en series een week voordat ze op tv komen!</p>
            </div>
        </a>
        <a href="/html/Registreren.php">
            <div class="Abbonement3">
                
                <img src="/img/placeholder.png" width="80" height="80" alt="Abbo3">
                <h2>Professional </h2>
                <p>Met het professional abbonement kun je alle films zien VOORDAT ze in de bioscoop draaien, voor series geld het zelfde als het standaard abbonement</p>
            </div>
        </a>

    </main>

    <?=include "Components/footer.php";?>
    </div>
</body>

</html>