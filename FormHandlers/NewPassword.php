<?php
session_start();
?>
<!DOCTYPE html>
<html class="RegisterLogin" lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starcraft | Bejelentkezés</title>
    <meta name="description" content="Bejelentkezés">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../Images/SCLogo.png">
</head>

<body class = FormBody>
<?php
include "../Classes/User.php";
include "../Functions/SaveLoad.php";
if (isset($_POST["pwchange"])) {
    $user = loadIn($_SESSION["user"]);
    $message = "";
    $userBase = loadAll();
    //ellenőrzések

    if (isset($_POST["pw"]) && isset($_POST["repeatpw"]) && isset($_POST["currentpw"])) {

        if (password_verify($_POST["currentpw"], $user->getPassword())) {

            if ($_POST["pw"] == $_POST["repeatpw"]) {

                if ($user->setPassword($_POST["pw"])) {
                    $_SESSION["user"]["pw"] = password_hash($user->getPassword(), PASSWORD_DEFAULT);
                    foreach ($userBase as $registeredUser){
                        if ($user->getName() == $registeredUser["nev"]){
                            $key = array_keys($userBase, $registeredUser);
                            $userBase[$key[0]]["pw"] = password_hash($user->getPassword(), PASSWORD_DEFAULT);
                        }
                        saveAll($userBase);
                    }
                    $message = "A Jelszó megváltozott<br>" 
                    . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Vissza a fiókkezeléshez</a><br>"
                    . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
                } else {
                    $message = "A jelszó változtatása sikertelen.<br>" 
                    . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
                    . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
                }

            } else {
                $message = "A megadott jelszavak nem egyeznek.<br>" 
                . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
                . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
            }

        } else {
            $message = "A jelenlegi jelszó rosszul lett megadva.<br>" 
            . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
            . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
        }

    } else {
        $message = "Töltsön ki minden mezőt a jelszó változtatásához.<br>" 
        . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
        . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
    }

    echo "<div class = RegisterLoginReactFirst>$message <br/></div>";

}
?>
</body>