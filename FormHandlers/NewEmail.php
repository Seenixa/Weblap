<?php
session_start();
include "../Classes/User.php";
include "../Functions/SaveLoad.php";
if (isset($_POST["emailchange"])) {
    $user = loadIn($_SESSION["user"]);
    $message = "";

    //ellenőrzések

    if (isset($_POST["email"]) && isset($_POST["repeatemail"])) {

        if ($_POST["email"] == $_POST["repeatemail"]) {

            if ($_POST["email"] != $user->getEmail()) {

                if ($user->setEmail($_POST["email"])) {
                    $_SESSION["user"]["email"] = $user->getEmail();
                    $message = "Az E-mail cím változtatása sikeres";
                } else {
                    $message = "A megadott E-mail cím formailag helytelen";
                }

            } else {
                $message = "Az új E-mail cím nem egyezhet meg a régivel";
            }

        } else {
            $message = "A megadott E-mail címek nem egyeznek";
        }

    } else {
        $message = "Töltsön ki minden mezőt az E-mail cím megváltoztatásához.";
    }

    echo $message;

}
?>