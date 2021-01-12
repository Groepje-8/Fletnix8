<?php

include "Components/sessionStart.php";
if(isset($_SESSION['usernaam'])){
    $data = [$_SESSION['mail'], $_SESSION['vnaam'], $_SESSION['anaam'], $_SESSION['land'], $_SESSION['gdatum'], $_SESSION['username'], $_SESSION['abonnemnt']];
}
else {
    $data = ["mail", "voornaam", "achternaam", "land", "geboortedatum", "gebruikersnaam", "-", "abonnement"];
}
require_once "Components/header.php";
header_function("ProfielPagina");
?>

<body>
<?php require_once "Components/navbar.php";  ?>
    
    <main>
        <div class="Beschrijving">
            <h1> Profielpagina van gebruiker </h1>
        </div>
        <div class="card">
            <img src="/img/placeholdercard.png" alt="Test" style="width:100%">
            <h1><?="$data[1] $data[2]"?></h1>
            <p class="title"><?=$data[7]?></p>
            <p>Standaard</p>
            <p><button>Help</button></p>
        </div>

        <div class="Accountdetails">
            <form action="AccountInstellingen.php" method="GET">
                <ul>
                    <li><label for="mail">e-mailadres:</label>
                    <input type="text" id="mail" name="mail" value=<?=$data[0];?> readonly></li>
                    <li><label for="vnaam">Voornaam:</label>
                    <input type="text" id="vnaam" name="vnaam" value=<?=$data[1];?> readonly></li>
                    <li><label for="anaam">Achternaam:</label>
                    <input type="text" id="anaam" name="anaam" value=<?=$data[2];?> readonly></li>
                    <li><label for="land">Land:</label>
                    <input type="text" id="land" name="land" value=<?=$data[3];?> readonly></li>
                    <li><label for="gdatum">Geboortedatum:</label>
                    <input type="text" id="gdatum" name="gdatum" value=<?=$data[4];?> readonly></li>
                    <li><label for="gnaam">Gebruikersnaam:</label>
                    <input type="text" id="gnaam" name="gnaam" value=<?=$data[5];?> readonly></li>
                    <li><label for="ww">Wachtwoord:</label>
                    <input type="password" id="ww" name="ww" value=<?=$data[6];?> readonly></li>
                    <li><label for="abb">Abonnement:</label>
                    <input type="text" id="abb" name="abb" value=<?=$data[7];?> readonly></li>
                </ul>
                <input type="submit" value="Aanpassen">
            </form>
            <form action="Actions/loguit.php" method="GET">
                <input type="submit" value="Uitloggen">
            </form>
        </div>
    </main>
   
    <?php include "Components/footer.php";?>
</body>

</html>