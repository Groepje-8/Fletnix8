<?php
require_once "/srv/webserver/applicatie/public/html/modules/haalLoginOp.php";
if (!isset($_SESSION['username'])) {
    session_start();
}


