<?php
session_start();
include "../Classes/User.php";
include "../Functions/SaveLoad.php";
if (isset($_POST["deleteaccount"])) {
    $user = loadIn($_SESSION["user"]);
    $message = "";

    if (isset($_POST["pw"]) && isset($_POST["repeatpw"])) {

        if ($_POST["pw"] == $_POST["repeatpw"]) {

            if (password_verify($_POST["pw"], $user->getPassword())) {

                $message = "A felhasználói fiók törölve." . "<br><a href=../pages/index.php>Vissza a főoldalra</a>";

            } else {
                $message = "A megadott jelszó helytelen.";
            }

        } else {
            $message = "A megadott jelszavak nem egyeznek.";
        }

    } else {
        $message = "Minden mezőt ki kell tölteni a felhasználói fiók törléséhez.";
    }

    echo $message;

}
?>