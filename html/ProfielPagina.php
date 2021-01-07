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
                <form action="AccountInstellingen.html" method="GET">
                    <ul>
                    <li><label for="vnaam">Voornaam:</label>
                    <input type="text" id="vnaam" name="vnaam" value="Test" readonly></li>
                    <li><label for="anaam">Achternaam:</label>
                    <input type="text" id="anaam" name="anaam" value="Persoon" readonly></li>
                    <li><label for="land">Land:</label>
                    <input type="text" id="land" name="land" value="Nederland" readonly></li>
                    <li><label for="gjaar">Geboortejaar:</label>
                    <input type="text" id="gjaar" name="gjaar" value="1900" readonly></li>
                    <li><label for="rnr">Rekeningnummer:</label>
                    <input type="password" id="rnr" name="rnr" value="0123456789" readonly></li>
                    <li><label for="gnaam">Gebruikersnaam:</label>
                    <input type="text" id="gnaam" name="gnaam" value="De beste user 9000" readonly></li>
                    <li><label for="ww">Wachtwoord:</label>
                    <input type="password" id="ww" name="ww" value="pass123F" readonly></li>
                    <li><label for="abb">Abonnement:</label>
                    <input type="text" id="abb" name="abb" value="Premium" readonly></li>
                    
                </ul>
                <input type="submit" value="Aanpassen">
                </form>
        </div>
    </main>
   
    <?=include "Components/footer.php";?>
</body>

</html>