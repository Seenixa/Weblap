<?php
session_start();
include "../Classes/User.php";
if (isset($_POST["emailchange"])) {

    //ellenőrzések

    $_SESSION["user"]->setEmail($_POST["email"]);
}
?>