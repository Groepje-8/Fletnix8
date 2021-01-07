<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/specificity.css">
    <link rel="stylesheet" href="/css/Registreren.css">
</head>

<body>
    <?=include "Components/header.php";?>

    <h1>Registratie formulier</h1>
    <form action="/html/ProfielPagina.html" method="GET" id="profielform">
        <table id="registreren">

            <tr>
                <td>
                    <label for="vnaam">Voornaam:</label>
                </td>
                <td>
                    <input pattern="[a-zA-Z]+" type="text" id="vnaam" name="vnaam">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="anaam">Achternaam:</label>
                </td>
                <td>
                    <input pattern="[a-zA-Z]+" type="text" id="anaam" name="anaam">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="land">Land:</label>
                </td>
                <td>
                    <input pattern="[a-zA-Z]+" type="text" id="land" name="land">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gjaar">Geboortejaar:</label>
                </td>
                <td>
                    <input pattern="[0-9]+" type="text" id="gjaar" name="gjaar">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="rnr">Rekeningnummer:</label>
                </td>
                <td>
                    <input pattern="[0-9]+" type="text" id="rnr" name="rnr">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gnaam">Gebruikersnaam:</label>
                </td>
                <td>
                    <input pattern="[a-zA-Z]+" type="text" id="gnaam" name="gnaam">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="abb">Abonnement:</label>
                </td>
                <td>
                    <input type="text" id="abb" name="abb">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ww">Wachtwoord:</label>
                </td>
                <td>
                    <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="password" id="ww" name="ww"
                        title="Moet minimaal een nummer, hoofdletter, kleine letter en 8 of meer characters">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="hww">Herhaal wachtwoord:</label>
                </td>
                <td>
                    <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="password" id="hww" name="hww"
                        title="Moet minimaal een nummer, hoofdletter, kleine letter en 8 of meer characters">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Verzend">


                </td>
            </tr>

        </table>
    </form>
    <p> Klik op "verzend" knop om U account aan te maken en door te gaan naar U profielpagina.<br>
        Hier kunt U de informatie nalezen en controleren op eventuelen fouten.</p>

    <?=include "Components/footer.php";?>
</body>




</html>