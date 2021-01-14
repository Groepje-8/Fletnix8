<footer>
<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/html/Actions/haalTekstOp.php";
 ?>
    <ul>
        <li><a href="/html/OverOns.php">Over ons</a> </li>
        <li><a href="/html/ProfielPagina.php">Account</a> </li>
        <li><a href="#">veelgestelde vragen</a> </li>
    </ul>
    <p> <?php (haalTekstOp(8, 1)); ?></p>
    <p> <?php (haalTekstOp(8, 2)); ?></p>
    <p> <?php (haalTekstOp(8, 3)); ?></p>
</footer>