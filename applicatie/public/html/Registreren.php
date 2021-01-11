<?php
require_once "Components/header.php";
header_function("Registreren");
?>

<body>
    <?php include "Components/header.php"; ?>

    <h1>Registratie formulier</h1>
    <form action="/html/Includes/Registratie.php" method="POST" id="profielform">
        <table id="registreren">
            <tr>
                <td>
                    <label for="voornaam">Voornaam:</label>
                </td>
                <td>
                    <input pattern="[a-zA-Z]+" type="text" id="voornaam" name="voornaam">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="achternaam">Achternaam:</label>
                </td>
                <td>
                    <input pattern="[a-zA-Z]+" type="text" id="achternaam" name="achternaam">
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
                    <label for="geboortejaar">Geboortejaar:</label>
                </td>
                <td>
                    <input pattern="[0-9]+" type="text" id="geboortejaar" name="geboortejaar">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="rekeningnummer">Rekeningnummer:</label>
                </td>
                <td>
                    <input pattern="[0-9]+" type="text" id="rekeningnummer" name="rekeningnummer">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gebruikersnaam">Gebruikersnaam:</label>
                </td>
                <td>
                    <input pattern="[a-zA-Z]+" type="text" id="gebruikersnaam" name="gebruikersnaam">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="abonnement">Abonnement:</label>
                </td>
                <td>
                    <input type="text" id="abonnoment" name="abonnoment">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ww">Wachtwoord:</label>
                </td>
                <td>
                    <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="password" id="ww" name="ww" title="Moet minimaal een nummer, hoofdletter, kleine letter en 8 of meer characters">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="hww">Herhaal wachtwoord:</label>
                </td>
                <td>
                    <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="password" id="hww" name="hww" title="Moet minimaal een nummer, hoofdletter, kleine letter en 8 of meer characters">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Verzend</button>
                </td>
            </tr>

        </table>
    </form>
    <p> Klik op "verzend" knop om U account aan te maken en door te gaan naar U profielpagina.<br>
        Hier kunt U de informatie nalezen en controleren op eventuelen fouten.</p>

    <?= include "Components/footer.php"; ?>
</body>

</html>