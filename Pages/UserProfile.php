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

    </header>
    <?php
    session_start();
    include_once "../Classes/User.php";
    include_once "../Functions/SaveLoad.php";
    $username = $_SESSION["userProfile"]->getName();
    $password = $_SESSION["userProfile"]->getPassword();
    $email = $_SESSION["userProfile"]->getEmail();
    $race = $_SESSION["userProfile"]->getRace();
    $profilePicture = $_SESSION["userProfile"]->getProfilePicture();
    $priviledge = $_SESSION["userProfile"]->getpriviledge();
    ?>

    echo "<img src=$profilePicture alt=Profile picture>";
    echo "$username<br>";
    echo "$race";


    <footer>
    </footer>
</body>

</html>