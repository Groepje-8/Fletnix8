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
            <a href="/html/Abbonement.php">Abbonementen</a>
            <a href="/html/FilmOverzicht.php">Filmoverzicht</a>                   
        </div>
    </div>
    <a id="Profiel" href="/html/ProfielPagina.php"><?php echo $naam?></a>
</header>