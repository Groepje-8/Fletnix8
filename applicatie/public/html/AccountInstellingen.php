<?php
include "Components/sessionStart.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/html/Actions/haalTekstOp.php";
require_once "Components/header.php";
require_once "Components/Functions.php";
maak_header("AccountInstellingen");
// pagina ID 3
?>

<body>
    <?php require_once "Components/navbar.php";  ?>

    <main>
        <div class="Beschrijving">
            <h1>Account instellingen <br>
                opties</h1>
        </div>

        <div class="Verzenden">
            <h1><?php haalTekstOp(3, 1); ?></h1>
        </div>

        <?php
        if (isset($_POST['gnaamVerander'])) {
            updateGebruikersnaam($_POST['gnaamVerander']);
            unset($_POST['gnaamVerander']);
        }
        if (isset($_POST['vnaamVerander'])) {
            updateVoornaam($_POST['vnaamVerander']);
            unset($_POST['vnaamVerander']);
        }
        // if (isset($_POST['anaamVerander'])) {
        //     updateAchternaam($_POST['anaamVerander']);
        //     unset($_POST['anaamVerander']);
        // }
        // if (isset($_POST['land'])) {
        //     updateLand($_POST['land']);
        //     unset($_POST['land']);
        // }
        ?>

        <div class="Accountdetails">
            <h2> Account details </h2>
            <ul>
                <form method='POST'>
                    <li>
                        <label for="gnaamVerander">Gebruikersnaam veranderen:</label>
                        <input pattern="[a-zA-Z]+" type="text" id="gnaamVerander" name="gnaamVerander">
                        <input type="submit" value="Update">
                    </li>
                </form>
                <form method='POST'>
                    <li><label for="vnaamVerander">Voornaam veranderen:</label>
                        <input pattern="[a-zA-Z]+" type="text" id="vnaamVerander" name="vnaamVerander">
                        <input type="submit" value="Update">
                    </li>
                </form>
                <form method='POST'>
                    <li><label for="anaamVerander">Achternaam veranderen:</label>
                        <input pattern="[a-zA-Z]+" type="text" id="anaamVerander" name="anaamVerander">
                        <input type="submit" value="Update">
                    </li>
                </form>
                <form method='POST'>
                    <li><label for="land">Land veranderen:</label>
                        <input pattern="[a-zA-Z]+" type="text" id="land" name="land">
                        <input type="submit" value="Update">
                    </li>
                </form>
            </ul>
        </div>

        <div class="Instellingen">
            <h2> Instellingen</h2>
            <form action="AccountInstellingen.php" method="GET">
                <ul>
                    <li><label for="lang">Kies een taal:</label>
                        <select name="lang" id="lang">
                            <option value="nederlands">Nederlands</option>
                            <option value="frans">Frans</option>
                            <option value="duits">Duits</option>
                            <option value="engels">Engels</option>
                        </select>
                    </li>
                    <li><label for="ov">Ondertiteling voorkeur:</label>
                        <select name="ov" id="ov">
                            <option value="nederlands">Nederlands</option>
                            <option value="frans">Frans</option>
                            <option value="duits">Duits</option>
                            <option value="engels">Engels</option>
                        </select>
                    </li>
                    <li><label for="og">Ondertiteling grootte:</label>
                        <select name="og" id="og">
                            <option value="normaal">Normaal</option>
                            <option value="klein">Klein</option>
                            <option value="groot">Groot</option>
                        </select>
                    </li>
                    <li><label for="beeldk">Beeldkwaliteit:</label>
                        <select name="beeldk" id="beeldk">
                            <option value="normaal">Normaal</option>
                            <option value="hd">HD</option>
                            <option value="1080p">1080p</option>
                        </select>
                    </li>
                </ul>
                <div class="Verzenden">
                    <input type="submit" value="Update">
                </div>
            </form>
        </div>
    </main>




    <?php include "Components/footer.php"; ?>
</body>

</html>