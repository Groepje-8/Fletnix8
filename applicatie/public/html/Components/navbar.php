<?php
if (isset($_SESSION['username'])) {
    $naam = $_SESSION['username'];
} else {
    $naam = "profiel";
}
?>
<header>
    <div class="dropdown">
        <a class="active" href="/index.php">&#9776;</a>
        <div class="dropdown-content">
            <a href="/html/<?php
                if (isset($_SESSION['username'])) {
                    echo "/Modules/uitloggen";
                } else {
                    echo "abonnement";
                } ?>.php">
                <?php
                if (isset($_SESSION['username'])) {
                    echo "Uitloggen";
                } else {
                    echo "Abonnementen";
                } ?>
            </a>
            <a href="/html/FilmOverzicht.php">Filmoverzicht</a>
        </div>
    </div>
    <a id="Profiel" href="/html/ProfielPagina.php"><?php echo $naam ?></a>
</header>