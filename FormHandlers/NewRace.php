<?php
session_start();
include "../Classes/User.php";
if (isset($_POST["racechangea"])) {
    $_SESSION["user"]->setFavouriteRace($_POST["race"]);
}
?>