<?php
session_start();
include "../Classes/User.php";
include "../Functions/SaveLoad.php";
if (isset($_POST["pwchange"])) {
    $user = loadIn($_SESSION["user"]);
    $message = "";
    //ellenőrzések

    if (isset($_POST["pw"]) && isset($_POST["repeatpw"]) && isset($_POST["currentpw"])) {

        if (password_verify($_POST["currentpw"], $user->getPassword())) {

            if ($_POST["pw"] == $_POST["repeatpw"]) {

                if ($user->setPassword($_POST["pw"])) {
                    $_SESSION["user"]["pw"] = password_hash($user->getPassword(), PASSWORD_DEFAULT);
                    $message = "A Jelszó megváltozott";
                } else {
                    $message = "A jelszó változtatása sikertelen.";
                }

            } else {
                $message = "A megadott jelszavak nem egyeznek.";
            }

        } else {
            $message = "A jelenlegi jelszó rosszul lett megadva.";
        }

    } else {
        $message = "Töltsön ki minden mezőt a jelszó változtatásához.";
    }

    echo $message;

}
?>