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
if (isset($_POST["racechange"])) {
    $user = loadIn($_SESSION["user"]);
    $message = "";
    $userBase = loadAll();

    if (isset($_POST["race"])) {
        if ($_POST["race"] != $user->getFavouriteRace()) {

            if ($user->setFavouriteRace($_POST["race"])) {
                $_SESSION["user"]["race"] = $user->getFavouriteRace();
                foreach ($userBase as $registeredUser){
                    if ($user->getName() == $registeredUser["nev"]){
                        $key = array_keys($userBase, $registeredUser);
                        $userBase[$key[0]]["race"] = $user->getFavouriteRace();
                    }
                    saveAll($userBase);
                }
                $message = "A faj megváltozott.<br>" 
                . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
                . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
            } else {
                $message = "A faj megváltoztatása sikertelen.<br>" 
                . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
                . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
            }

        } else {
            $message = "A már beállított faj lett újra kiválasztva.<br>" 
            . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
            . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
        }

    } else {
        $message = "Nem állított be új fajt.<br>" 
        . "<br><a class=LoginLink href=../Pages/AccountManagement.php>Újrapróbálkozás</a><br>"
        . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
    }

    echo "<div class = RegisterLoginReactFirst>$message <br/></div>";
}
?>
</body>