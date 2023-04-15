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
if (isset($_POST["emailchange"])) {
    $user = loadIn($_SESSION["user"]);
    $message = "";
    $userBase = loadAll();

    //ellenőrzések

    if (isset($_POST["email"]) && isset($_POST["repeatemail"])) {

        if ($_POST["email"] == $_POST["repeatemail"]) {

            if ($_POST["email"] != $user->getEmail()) {

                if ($user->setEmail($_POST["email"])) {
                    $_SESSION["user"]["email"] = $user->getEmail();
                    foreach ($userBase as $registeredUser){
                        if ($user->getName() == $registeredUser["nev"]){
                            $key = array_keys($userBase, $registeredUser);
                            $userBase[$key[0]]["email"] = $user->getEmail();
                        }
                        saveAll($userBase);
                    }
                    $message = "Az E-mail cím változtatása sikeres<br>" 
                    . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
                    . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
                } else {
                    $message = "A megadott E-mail cím formailag helytelen<br>" 
                    . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
                    . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
                }

            } else {
                $message = "Az új E-mail cím nem egyezhet meg a régivel<br>" 
                . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
                . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
            }

        } else {
            $message = "A megadott E-mail címek nem egyeznek<br>" 
            . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
            . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
        }

    } else {
        $message = "Töltsön ki minden mezőt az E-mail cím megváltoztatásához.<br>" 
        . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
        . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
    }

    echo "<div class = RegisterLoginReactFirst>$message <br/></div>";
}
?>
</body>