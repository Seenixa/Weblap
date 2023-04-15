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
if (isset($_POST["deleteaccount"])) {
    $user = loadIn($_SESSION["user"]);
    $message = "";

    if (isset($_POST["pw"]) && isset($_POST["repeatpw"])) {

        if ($_POST["pw"] == $_POST["repeatpw"]) {

            if (password_verify($_POST["pw"], $user->getPassword())) {
                deleteUser($user);
                unset($_SESSION["user"]);
                $message = "A felhasználói fiók törölve.<br>" . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";

            } else {
                $message = "A megadott jelszó helytelen.<br>" 
                . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
                . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
            }

        } else {
            $message = "A megadott jelszavak nem egyeznek.<br>" 
            . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
            . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
        }

    } else {
        $message = "Minden mezőt ki kell tölteni a felhasználói fiók törléséhez.<br>" 
        . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
        . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
    }

    echo "<div class = RegisterLoginReactFirst>$message <br/></div>";

}
?>
</body>