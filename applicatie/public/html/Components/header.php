<?php
if (isset($_SESSION['gnaam'])){
    $naam = $_SESSION['gnaam'];
}
else {
    $naam = "profiel"; 
}
?>

<header>
    <div class="dropdown">
        <a class="active" href="/index.php">&#9776;</a>
        <div class="dropdown-content">
            <a href="/html/Abbonement.php">Abonnementen</a>
            <a href="/html/FilmOverzicht.php">Filmoverzicht</a>                   
        </div>
    </div>
    <a id="Profiel" href="/html/ProfielPagina.php"><?php echo $naam?></a>
</header>

<?php
function header_function($Naam)
{
    $header = "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='icon' type='image/png' href='/img/FletnixIcon.ico'>
    <title>$Naam</title>
    <link rel='stylesheet' href='/css/normalize.css'>
    <link rel='stylesheet' href='/css/specificity.css'>
    <link rel='stylesheet' href='/css/$Naam.css'>
</head>

    ";
    echo $header;
}
?>
