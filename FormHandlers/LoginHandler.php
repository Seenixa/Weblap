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

<body class="RegisterLoginBody">

    <?php
    session_start();
    include_once "../Classes/User.php";
    include_once "../Functions/SaveLoad.php";

    $userBase = loadAll();
    $message = "";

    if (isset($_POST["login"])) {
        if (!isset($_POST["nev"]) || trim($_POST["nev"]) === "" || !isset($_POST["pw"]) || trim($_POST["pw"]) === "") {
            $message = "<strong>Hiba:</strong> Adj meg minden adatot!";
        } else {
            $userName = $_POST["nev"];
            $userPassword = $_POST["pw"];

            $message = "Sikertelen belépés!<br>A belépési adatok nem megfelelők!<br>"
                . "<br><a class=LoginLink href=../Pages/Login.php>Újrapróbálkozás</a><br>"
                . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";

            foreach ($userBase as $registeredUser) {
                if ($registeredUser["nev"] == $userName && password_verify($userPassword, $registeredUser["pw"])) {
                    $message = "Sikeres belépés!<br>" . "<br><a class=LoginLink href=../Pages/index.php>Vissza a főoldalra</a>";
                    $_SESSION["user"] = $registeredUser;
                }
            }
        }
        echo "<div class = RegisterLoginReactFirst>$message <br/></div>";
    }

    ?>
</body>