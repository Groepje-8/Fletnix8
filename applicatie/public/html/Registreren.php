<?php
    session_start();
    var_dump($_SESSION);
    require_once "Components/header.php";
    header_function("Registeren");
?>

<body>
  

    <h1>Registratie formulier</h1>
    <form action=Components/registreerSession.php method="POST" id="profielform">
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
                    <select id="abb" name="abb">
                        <option value="beginner" <?php if($_GET['abb']=="beginner") {echo "selected";}?> >Beginner</option>
                        <option value="standaard" <?php if($_GET['abb']=="standaard") {echo "selected";}?> >Standaard</option>
                        <option value="professioneel" <?php if($_GET['abb']=="professioneel") {echo "selected";}?> >Professioneel</option>
                    </select>
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
    <p><?php echo $_SESSION['errormessage'];?></p>
    <p> Klik op "verzend" knop om U account aan te maken en door te gaan naar U profielpagina.<br>
        Hier kunt U de informatie nalezen en controleren op eventuelen fouten.</p>

    <?=include "Components/footer.php";?>
</body>
</html>