<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<!-- Adott felhasználó profilja. Kiírja a felhasználó nevét, e-mail címét, kedvenc faját és megjeleníti a profilképét. -->

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starcraft | Főoldal</title>
    <meta name="description" content=" - Profil">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../Images/SCLogo.png">
</head>

<body>
    <header>
        <?php
        $activePage = "UserProfile";
        include_once "../Parts/Header.php";
        include_once "../Classes/User.php";
        include_once "../Functions/SaveLoad.php";
        ?>
    </header>
    <?php

    $username = $_SESSION["user"]["nev"];
    $email = $_SESSION["user"]["email"];
    $race = $_SESSION["user"]["race"];
    $profilePicture = $_SESSION["user"]["profpic"];
    $priviledge = $_SESSION["user"]["priviledge"];
//   echo var_dump($_SESSION["user"]);
    ?>

    <img src= "<?php echo "$profilePicture"; ?>" alt="Profile picture">
    <?php echo "$username<br>"; ?>
    <?php echo "$race"; ?>


    <footer>
    </footer>
</body>

</html>