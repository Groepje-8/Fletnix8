<?php
include "Modules/haalTekstOp.php";
require_once "Components/header.php";
maakHeader("Registreren");
// pagina ID 9
?>

<body>
    <?php include "Components/navbar.php"; ?>

    <h1>Registratie formulier</h1>
    <form action="/html/Components/RegistratiePOST.php" method="POST" id="profielform">
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
                    <label for="emailadres">E-mailadres:</label>
                </td>
                <td>
                    <input type="email" id="emailadres" name="emailadres">
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
                    <select id="Abonnement" name="Abonnement">
                        <option value=1> Beginner </option>
                        <option value=2> Standaard </option>
                        <option value=3> Professional </option>             
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
    <p> <?php (haalTekstOp(9, 1)); ?></p>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Vul alle velden in svp</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p>Kies een geldige gebruikersnaam </p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Wachtwoorden komen niet overeen</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Er is iets mis gegaan</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Gebruikersnaam bestaat al</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>U heeft succesvol geregistreerd</p>";
        } else if ($_GET["error"] == "Emailbestaatal") {
            echo "<p>Email bestaat al</p>";
        }
    }
    ?>

    <?php include "Components/footer.php"; ?>
</body>

</html>