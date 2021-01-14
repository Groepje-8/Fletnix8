<?php

include "Components/sessionStart.php";
// checkOfIsIngelogd();

require_once "Components/sessionStart.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/html/Actions/haalgebruikergegevensop.php";
require_once "Components/header.php";
maak_header("ProfielPagina");

// Dit hieronder moet in een functie
if (!isset($_SESSION['usernaam'])){
    $_SESSION['usernaam'] = 'peer';
}  

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
                    <label><?= $data["abonnement"]; ?> </label>
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