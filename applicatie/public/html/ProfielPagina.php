<?php

include "Components/sessionStart.php";
checkOfIsIngelogd();

require_once "Components/sessionStart.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/html/Actions/haalgebruikergegevensop.php";
require_once "Components/header.php";
maak_header("ProfielPagina");

$_SESSION['usernaam'] = 'testpersoon';
// Dit hieronder moet in een functie
if (isset($_SESSION['usernaam'])) {
    $data = haalGegevensOp($_SESSION['usernaam']);
} else {
    $data = ["mail", "voornaam", "achternaam", "land", "geboortedatum", "gebruikersnaam", "-", "abonnement"];
}

?>

<body>
    <?php require_once "Components/navbar.php";  ?>

    <main>
        <div class="Beschrijving">
            <h1> Profielpagina van gebruiker </h1>
        </div>
        <div class="card">
            <img src="/img/placeholdercard.png" alt="Test" style="width:100%">
            <h1><?= $data["voornaam"]," ",$data["achternaam"] ?></h1>
            <p class="title"><?= $data["abonnement"] ?></p>
            <p>Standaard</p>
            <p><button>Help</button></p>
        </div>

        <div class="Accountdetails">
            <form action="AccountInstellingen.php" method="POST">
                <ul>
                    <li><label for="mail">e-mailadres:</label>
                        <input type="text" id="mail" name="mail" value=<?= $data["emailadres"]; ?> readonly>
                    </li>
                    <li><label for="vnaam">Voornaam:</label>
                        <input type="text" id="vnaam" name="vnaam" value=<?= $data["voornaam"]; ?> readonly>
                    </li>
                    <li><label for="anaam">Achternaam:</label>
                        <input type="text" id="anaam" name="anaam" value=<?= $data["achternaam"]; ?> readonly>
                    </li>
                    <li><label for="land">Land:</label>
                        <input type="text" id="land" name="land" value=<?= $data["land"]; ?> readonly>
                    </li>
                    <li><label for="gdatum">Geboortedatum:</label>
                        <input type="text" id="gdatum" name="gdatum" value=<?= $data["geboortedatum"]; ?> readonly>
                    </li>
                    <li><label for="gnaam">Gebruikersnaam:</label>
                        <input type="text" id="gnaam" name="gnaam" value=<?= $data["username"]; ?> readonly>
                    </li>
                    <li><label for="ww">Wachtwoord:</label>
                        <input type="password" id="ww" name="ww" value=<?= "leeg"; ?> readonly>
                    </li>
                    <li><label for="abb">Abonnement:</label>
                        <input type="text" id="abb" name="abb" value=<?= $data["abonnement"]; ?> readonly>
                    </li>
                </ul>
                <input type="submit" value="Aanpassen">
            </form>
            <form action="Actions/loguit.php" method="GET">
                <input type="submit" value="Uitloggen">
            </form>
        </div>
    </main>

    <?php include "Components/footer.php"; ?>
</body>

</html>