<?php
include "Components/sessionStart.php";
include "actions/haalTekstOp.php";
require_once "Components/header.php";
header_function("OverOns");
// pagina ID 10
?>

<body>

    <div class="grid-container">
        <?php require_once "Components/navbar.php";  ?>

        <main>

            <div class="top">
                <img src="/img/placeholder.png" alt="top">
                <h1> Wie wij zijn </h1>
                <p> <?php print_r(haalTekstOp(10,1));?></p>
            </div>

            <div class="middle">
                <img src="/img/placeholder.png" alt="middle">
                <h1> Wat wij doen </h1>
                <p><?php print_r(haalTekstOp(10,2));?></p>
            </div>


            <div class="bottom">
                <img src="/img/placeholder.png" alt="bottom">
                <h1> Wat ons doel is </h1>
                <p> <?php print_r(haalTekstOp(10,3));?> </p>
            </div>

        </main>
        <?php include "Components/footer.php"; ?>
    </div>
</body>

</html>