<?php
session_start();
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
                        <input type="text" id="vnaam" name="vnaam" value= <?php echo $_SESSION['vnaam'];?> readonly></li>
                        <li><label for="anaam">Achternaam:</label>
                        <input type="text" id="anaam" name="anaam" value= <?php echo $_SESSION['anaam'];?> readonly></li>
                        <li><label for="land">Land:</label>
                        <input type="text" id="land" name="land" value= <?php echo $_SESSION['land'];?> readonly></li>
                        <li><label for="gjaar">Geboortejaar:</label>
                        <input type="text" id="gjaar" name="gjaar" value= <?php echo $_SESSION['gjaar'];?> readonly></li>
                        <li><label for="rnr">Rekeningnummer:</label>
                        <input type="password" id="rnr" name="rnr" value= <?php echo $_SESSION['rnr'];?> readonly></li>
                        <li><label for="gnaam">Gebruikersnaam:</label>
                        <input type="text" id="gnaam" name="gnaam" value= <?php echo $_SESSION['gnaam'];?> readonly></li>
                        <li><label for="ww">Wachtwoord:</label>
                        <input type="password" id="ww" name="ww" value= <?php echo $_SESSION['ww'];?> readonly></li>
                        <li><label for="abb">Abonnement:</label>
                        <input type="text" id="abb" name="abb" value= <?php echo $_SESSION['abb'];?> readonly></li>
                    </ul>
                    <input type="submit" value="Aanpassen">
                </form>
        </div>
    </main>
   
    <?=include "Components/footer.php";?>
</body>

</html>