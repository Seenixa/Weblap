<!--Felhasználó profilja. Itt tudja törölni a fiókját, illetve tud módosítani néhány adatán (jelszó, kedvenc faj, profilkép) -->
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
        include_once "../Classes/User.php";
        include_once "../Functions/SaveLoad.php";
        include_once "Login.php";
        $loggedInUser = new User("Admin", "admin", "", "");
        if($loggedInUser->$getName()){

        }
    ?>
    <footer>

    </footer>
</body>

</html>