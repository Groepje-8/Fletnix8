<?php
include "Components/sessionManager.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/html/Modules/haalTekstOp.php";
require_once "Components/header.php";
maakHeader("Abonnementen");
if(booleanIsIngelogd()){
    header("location: ../../index.php?error=JeBentAlIngelogd");
}
// pagina ID 2
?>

<body>
    <div class="grid-container">
        <?php require_once "Components/navbar.php";  ?>

        <main>
            <h1>Selecteer je gewenste Abonnement</h1>
            <a href="/html/Registreren.php?abo=0">
                <div class="Abonnement1">

                    <img src="/img/placeholder.png" width="80" height="80" alt="Abbo1">
                    <h2>Beginner</h2>
                    <p><?php haalTekstOp(2, 1);?></p>
                </div>
            </a>
            <a href="/html/Registreren.php?abo=1">
                <div class="Abonnement2">

                    <img src="/img/placeholder.png" width="80" height="80" alt="Abbo2">
                    <h2>Standaard</h2>
                    <p><?php haalTekstOp(2, 2);?></p>
                </div>
            </a>
            <a href="/html/Registreren.php?abo=2">
                <div class="Abonnement3">

                    <img src="/img/placeholder.png" width="80" height="80" alt="Abbo3">
                    <h2>Professional </h2>
                    <p><?php haalTekstOp(2, 3);?></p>
                </div>
            </a>

        </main>

        <?php include "Components/footer.php"; ?>
    </div>
</body>

</html>