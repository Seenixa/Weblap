<?php
session_start();
include "../Classes/User.php";
include "../Functions/SaveLoad.php";
if (isset($_POST["racechange"])) {
    $user = loadIn($_SESSION["user"]);
    $message = "";

    if (isset($_POST["race"])) {
        if ($_POST["race"] != $user->getFavouriteRace()) {

            if ($user->setFavouriteRace($_POST["race"])) {
                $_SESSION["user"]["race"] = $user->getFavouriteRace();
                $message = "A faj megváltozott.";
            } else {
                $message = "A faj megváltoztatása sikertelen.";
            }

        } else {
            $message = "A már beállított faj lett újra kiválasztva.";
        }

    } else {
        $message = "Nem állított be új fajt.";
    }

    echo $message;
}
?>