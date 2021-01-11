<?php
include "Components/sessionStart.php";
if(isset($_SESSION['gnaam'])){
    $data = [$_SESSION['vnaam'], $_SESSION['anaam'], $_SESSION['land'], $_SESSION['gjaar'], $_SESSION['rnr'], $_SESSION['gnaam'], $_SESSION['ww'], $_SESSION['abb']];
}
else {
    $data = ["-", "-", "-", "-", "-", "-", "-", "-"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProfielPagina</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/specificity.css">
    <link rel="stylesheet" href="/css/ProfielPagina.css">
</head>

<body>
    <?=include "Components/header.php";?>
    
    <main>
        <div class="Beschrijving">
            <h1> Profielpagina van gebruiker </h1>
        </div>
        <div class="card">
            <img src="/img/placeholdercard.png" alt="Test" style="width:100%">
            <h1>Test Persoon</h1>
            <p class="title">Abonnement plan</p>
            <p>Standaard</p>
            <p><button>Help</button></p>
        </div>

        <div class="Accountdetails">
            <form action="AccountInstellingen.php" method="GET">
                <ul>
                    <li><label for="vnaam">Voornaam:</label>
                    <input type="text" id="vnaam" name="vnaam" value=<?=$data[0];?> readonly></li>
                    <li><label for="anaam">Achternaam:</label>
                    <input type="text" id="anaam" name="anaam" value=<?=$data[1];?> readonly></li>
                    <li><label for="land">Land:</label>
                    <input type="text" id="land" name="land" value=<?=$data[2];?> readonly></li>
                    <li><label for="gjaar">Geboortejaar:</label>
                    <input type="text" id="gjaar" name="gjaar" value=<?=$data[3];?> readonly></li>
                    <li><label for="rnr">Rekeningnummer:</label>
                    <input type="password" id="rnr" name="rnr" value=<?=$data[4];?> readonly></li>
                    <li><label for="gnaam">Gebruikersnaam:</label>
                    <input type="text" id="gnaam" name="gnaam" value=<?=$data[5];?> readonly></li>
                    <li><label for="ww">Wachtwoord:</label>
                    <input type="password" id="ww" name="ww" value=<?=$data[6];?> readonly></li>
                    <li><label for="abb">Abonnement:</label>
                    <input type="text" id="abb" name="abb" value=<?=$data[7];?> readonly></li>
                </ul>
                <input type="submit" value="Aanpassen">
            </form>
            <form action="Components/loguitSession.php" method="GET">
                <input type="submit" value="Uitloggen">
            </form>
        </div>
    </main>
   
    <?=include "Components/footer.php";?>
</body>

</html>