<?php
session_start();
include "../Classes/User.php";
if (isset($_POST["pwchange"])) {

    //ellenőrzések

    $_SESSION["user"]->setPassword($_POST["pw"]);
}
?>