<?php
include "html/Components/sessionStart.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/html/Actions/haalTekstOp.php";
require_once "html/Components/header.php";
maak_header("Index");
session_start();

// pagina ID 1
?>

<body>
    <div class="grid-container">
        <?php include "html/Components/navbar.php"; ?>

        <div class="title">
            <h1>Fletnix</h1>
            <h2><?php haalTekstOp(1, 1);?></h2>
        </div>

        <div class="registreerform">
            <p><?php haalTekstOp(1, 2);?></p>

            <form action="/html/Abonnement.php">
                <input type="submit" value="Registeer" />
            </form>
        </div>

        <div class="loginform">
            <p><?php haalTekstOp(1, 3);?></p>

            <form action="/html/Components/inlogSession.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" pattern="[a-zA-Z]+">
                <label for="wachtwoord">wachtwoord:</label>
                <input type="wachtwoord" id="wachtwoord" name="wachtwoord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                <input type="submit" value="Login" />
            </form>
        </div>
        <main>
            <video controls>
                <source src="/videos/trailer.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </main>

        <?php 
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "verkeerdegegevens") {
            echo "<p>Probeer opnieuw</p>";
          }
          if ($_GET["error"] == "emptyinput") {
            echo "<p>Vul alle velden in.</p>";
          }
        }
        ?>
          
        <?php require_once "html/Components/footer.php"; ?>
    </div>
</body>

</html>