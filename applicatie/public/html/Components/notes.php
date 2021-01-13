<?php
//registreren.php dit gaf foutmelding. 
<tr>
                <td>
                    <label for="abonnement">Abonnement:</label>
                </td>
                <td> 
                    <select id="abb" name="abb">
                    <option value="beginner" <?php if($_GET['abo']=="beginner") {echo "selected";}?> >Beginner</option>
                    <option value="standaard" <?php if($_GET['abo']=="standaard") {echo "selected";}?> >Standaard</option>
                    <option value="professioneel" <?php if($_GET['abo']=="professioneel") {echo "selected";}?> >Professioneel</option>
                </td>
</tr>

//voorbeelden van overige functies. Klad
$resultmessage = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username'], $_POST['email']) && !isset($_SESSION['Gebruikersnaam'], $_SESSION['Email'])) {
        $result = Classes\Query\Query::getUser($_POST['email'], $_POST['username']);
        if ($result->count() > 0) {
            $resultmessage = "Er is al een gebruiker met dat emailadres of die gebruikersnaam geregistreerd.";
        } else {
            $_SESSION['Gebruikersnaam'] = $_POST['username'];
            $_SESSION['Email'] = $_POST['email'];

            Classes\Registration::sendVerificationEmail($_SESSION["Gebruikersnaam"], $_SESSION["Email"]);
        }
    }
    if (isset($_POST['verifieer'])) {
        $_SESSION['codeIsCorrect'] = $_POST['verifieer'];
    }
    if (isset($_POST['username'], $_POST['password'], $_POST['passwordRepeat'], $_POST['email'], $_POST['firstName'], $_POST['lastName'], $_POST['addressLine1'], $_POST['placeName'], $_POST['zipCode'], $_POST['country'], $_POST['birthDate'], $_POST['secretQuestionID'], $_POST['secretQuestionAnswer'])) {
        $resultmessage = Classes\Registration::register();
        if ($resultmessage == "success") {
            $_SESSION['statusMessage'] = "Account successvol aangemaakt, u kunt nu inloggen.";
            header("location: login.php");
            exit();
        }
    }
}

if (Query::get('Gebruiker')->where('gebruikersnaam', $username)->count() > 0) {
    //account met ingevulde username bestaat al
    return "Er bestaat al een account met deze gebruikersnaam.";
} else if (Query::get('Gebruiker')->where('mailbox', $email)->count() > 0) {
    //account met ingevulde email bestaat al
    return "Er bestaat al een account met dit e-mailadres.";
}

if (Query::insert('Gebruiker', $columns, $values)) {
    return "success";
} else {
    return "Er is iets fout gegaan, probeer het a.u.b. later opnieuw.";
}

// users en usersUid omgezet worden naar hoe de tabellen en kolommen worden genoemd !!
function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";     //? is placeholder
    //prepared statement moet nog naar microsoft SQL omgezet worden. !!!!
    $stmt = mysqli_stmt_init($conn);
    if (!sqlsrv_prepare($stmt, $sql)){
       header("location: ../Registreren.php?error=stmtfailed");
       exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email)
    sqlsrv_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    sqlsrv_close($stmt);
}

password_verify($password, $versleuteldpassword)

//voor het aanpassen van data bij profielpagina. 
query = $dbh->prepare('UPDATE INTO fletnix_user (emailadres, achternaam, voornaam, abonnement, username, wachtwoord, land, geboortedatum)
VALUES (?, ?, ?, ?, ?, ?, ?)');
//hier eigen waardes invoeren. !!!!
$query->execute(['student', $passwordHashed]);

  
    Weet niet zeker of het zo met $conn moet. 
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../Registreren.php?error=usernametaken");
        exit();
    }
?>