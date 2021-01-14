<?php
include "html/Components/sessionManager.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/html/Modules/haalTekstOp.php";
require_once "html/Components/header.php";
maakHeader("Index");


// pagina ID 1
?>

<body>
    <div class="grid-container">
        <?php include "html/Components/navbar.php"; ?>

        <div class="title">
            <h1>Fletnix</h1>
            <h2>
                <?php
                if (!isset($_GET['error'])) {
                    haalTekstOp(1, 1);
                } else {
                    if ($_GET['error'] == "JeBentNogNietIngelogd") {
                        echo "Je bent nog niet ingelogd!";
                    }
                    if ($_GET['error'] == "verkeerdegegevens") {
                        echo "Je inloggegevenskloppen niet!";
                    }
                    if ($_GET['error'] == "emptyinput")
                        echo "Je hebt niet alle gegevens ingevuld!";
                }

                ?>

            </h2>
        </div>

        <div class="registreerform">
            <p><?php haalTekstOp(1, 2); ?></p>

            <form action="/html/Abonnement.php">
                <input type="submit" value="Registeer" />
            </form>
        </div>

        <div class="loginform">
            <p><?php haalTekstOp(1, 3); ?></p>

            <form action="/html/Modules/Inloggen.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" pattern="[a-zA-Z]+">
                <label for="wachtwoord">wachtwoord:</label>
                <input type="password" id="wachtwoord" name="wachtwoord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                <input type="submit" value="Login" />
            </form>
        </div>
        <main>
            <video controls>
                <source src="/videos/trailer.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </main>
        <?php require_once "html/Components/footer.php"; ?>
    </div>
</body>

</html>