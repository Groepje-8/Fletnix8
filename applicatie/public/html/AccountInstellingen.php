<!DOCTYPE html>
<html lang="en">
<!-- notes toevoegen -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AccountInstellingen</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/specificity.css">
    <link rel="stylesheet" href="/css/AccountInstellingen.css">
</head>

<body>
    <?=include "Components/header.php";?>

    <main>
        <div class="Beschrijving">
            <h1>Account instellingen <br>
                opties</h1>
        </div>

        <div class="Verzenden">
            <h1> Klik op de "Update" knop en de nieuwe data wordt opgeslagen.</h1>
        </div>

        <div class="Accountdetails">
            <h2> Account details </h2>
            <form action="AccountInstellingen.php" method="GET">
                <ul>
                    <li> <label for="gnaamVerander">Gebruikersnaam veranderen:</label>
                        <input pattern="[a-zA-Z]+" type="text" id="gnaamVerander" name="gnaamVerander"></li>
                    <li><label for="nww">Nieuw wachtwoord:</label>
                        <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="text" id="nww" name="nww"
                            title="Moet minimaal een nummer, hoofdletter, kleine letter en 8 of meer characters"></li>
                    <li><label for="betaalinfo">Betaalinformatie:</label>
                        <input pattern="[a-zA-Z0-9]+" type="text" id="betaalinfo" name="betaalinfo"></li>øó
                </ul>
                <div class="Verzenden">
                    <input type="submit" value="Update">
                </div>
            </form>
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
                        </select></li>
                    <li><label for="ov">Ondertiteling voorkeur:</label>
                        <select name="ov" id="ov">
                            <option value="nederlands">Nederlands</option>
                            <option value="frans">Frans</option>
                            <option value="duits">Duits</option>
                            <option value="engels">Engels</option>
                        </select></li>
                    <li><label for="og">Ondertiteling grootte:</label>
                        <select name="og" id="og">
                            <option value="normaal">Normaal</option>
                            <option value="klein">Klein</option>
                            <option value="groot">Groot</option>
                        </select></li>
                    <li><label for="beeldk">Beeldkwaliteit:</label>
                        <select name="beeldk" id="beeldk">
                            <option value="normaal">Normaal</option>
                            <option value="hd">HD</option>
                            <option value="1080p">1080p</option>
                        </select></li>
                </ul>
                <div class="Verzenden">
                    <input type="submit" value="Update">
                </div>
            </form>
        </div>
    </main>

    <?=include "Components/footer.php";?>
</body>

</html>