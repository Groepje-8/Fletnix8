<?php

require_once "Components/sessionManager.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/html/Modules/haalgebruikergegevensop.php";
require_once "Components/header.php";

checkOfIsIngelogd();
maakHeader("ProfielPagina");


if (isset($_SESSION['username'])) {
    $data = haalGebruikersGegevensOp($_SESSION['username']);
} else {
    $data = ["mail", "voornaam", "achternaam", "land", "geboortedatum", "gebruikersnaam", "-", "abonnement"];
}
      
$abonnementNaam = abonnementNaarNaam($data["abonnement"]);
?>

<body>
    <?php require_once "Components/navbar.php";  ?>

    <main>
        <div class="Beschrijving">
            <h1> Profielpagina van gebruiker </h1>
        </div>
        <div class="card">
            <img src="/img/placeholdercard.png" alt="Test" style="width:100%">
            <h1><?= $data["voornaam"], " ", $data["achternaam"] ?></h1>
            <p class="title"><?= $abonnementNaam ?></p>
            <p><button>Help</button></p>
        </div>

        <div class="Accountdetails">
            <form action="AccountInstellingen.php" method="POST">
                <ul>
                    <li><label for="mail">e-mailadres:</label>
                        <label><?= $data["emailadres"]; ?> </label>
                    </li>
                    <li><label for="vnaam">Voornaam:</label>
                        <label><?= $data["voornaam"]; ?> </label>
                    </li>
                    <li><label for="anaam">Achternaam:</label>
                        <label><?= $data["achternaam"]; ?></label>
                    </li>
                    <li><label for="land">Land:</label>
                        <label><?= $data["land"]; ?> </label>
                    </li>
                    <li><label for="gdatum">Geboortedatum:</label>
                        <label><?= $data["geboortedatum"]; ?> </label>
                    </li>
                    <li><label for="gnaam">Gebruikersnaam:</label>
                        <label><?= $data["username"]; ?><label>
                    </li>
                    <li><label for="abb">Abonnement:</label>
                        <label><?= $abonnementNaam; ?> </label>
                    </li>
                </ul>
                <input type="submit" value="Aanpassen">
            </form>
            <form action="Modules/uitloggen.php" method="GET">
                <input type="submit" value="Uitloggen">
            </form>
        </div>
    </main>

    <?php include "Components/footer.php"; ?>
</body>

</html>