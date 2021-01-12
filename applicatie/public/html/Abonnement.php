<?php
include "Components/sessionStart.php";
require_once "Components/header.php";
header_function("Abonnementen");
?>

<body>
    <div class="grid-container">
        <?php require_once "Components/navbar.php";  ?>

        <main>
            <h1>Selecteer je gewenste abbonement</h1>
            <a href="/html/Registreren.php?abo=beginner">
                <div class="Abbonement1">

                    <img src="/img/placeholder.png" width="80" height="80" alt="Abbo1">
                    <h2>Beginner</h2>
                    <p>Met het beginner abbonement kun je gemakkelijk en goedkoop de nieuwste films en series van vorig jaar zien!</p>
                </div>
            </a>
            <a href="/html/Registreren.php?abo=standaard">
                <div class="Abbonement2">

                    <img src="/img/placeholder.png" width="80" height="80" alt="Abbo2">
                    <h2>Standaard</h2>
                    <p>Met het standaard abbonement kun je alle films zien die niet meer in de bioscoop draaien en series een week voordat ze op tv komen!</p>
                </div>
            </a>
            <a href="/html/Registreren.php?abo=professioneel">
                <div class="Abbonement3">

                    <img src="/img/placeholder.png" width="80" height="80" alt="Abbo3">
                    <h2>Professional </h2>
                    <p>Met het professional abbonement kun je alle films zien VOORDAT ze in de bioscoop draaien, voor series geld het zelfde als het standaard abbonement!</p>
                </div>
            </a>

        </main>

        <?php include "Components/footer.php"; ?>
    </div>
</body>

</html>