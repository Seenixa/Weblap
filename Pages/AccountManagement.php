<!--Felhasználó profilja. Itt tudja törölni a fiókját, illetve tud módosítani néhány adatán (jelszó, kedvenc faj, profilkép) -->

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starcraft | Főoldal</title>
    <meta name="description" content="Bemutató oldal a Starcraft világáról">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../Images/SCLogo.png">
</head>

<body>
    <?php
    session_start();
    include_once "../Classes/User.php";
    $username = $_SESSION["user"]->getName();
    $password = $_SESSION["user"]->getPassword();
    $email = $_SESSION["user"]->getEmail();
    $race = $_SESSION["user"]->getRace();
    $profilePicture = $_SESSION["user"]->getProfilePicture();
    $priviledge = $_SESSION["user"]->getpriviledge();
    ?>
    <?php
    echo "<img src=$profilePicture alt=Profile picture>";
    ?>
    <form action="../FormHandlers/NewRace.php" method="POST">
        Kedvenc faj:
        <select class=select name="race">
            <option selected disabled>Válassz</option>
            <option value="Terran">Terran</option>
            <option value="Zerg">Zerg</option>
            <option value="Protoss">Protoss</option>
            <input type="submit" name="racechange" value="Mentés">
        </select><br>">
    </form>
    <form action="../FormHandlers/NewPassword.php" method="POST">
        Jelszó változtatás: <br>
        Jelenlegi jelszó: <input type="text" name="currentpw" placeholder="Jelenlegi jelszó">
        Új jelszó: <input type="text" name="pw" placeholder="Új jelszó">
        Új jelszó mégegyszer: <input type="text" name="repeatpw" placeholder="Új jelszó újra">
        <input type="submit" name="pwchange" value="Jelszó megváltoztatása">
    </form>
    <form action="../FormHandlers/NewEmail.php" method="POST">
        E-mail cím változtatás: <br>
        Új e-mail: <input type="text" name="email" placeholder="Új e-mail cím">
        Új e-mail mégegyszer: <input type="text" name="repeatemail" placeholder="Új e-mail cím újra">
        <input type="submit" name="emailchange" value="E-mail cím megváltoztatása">
    </form>
    <form action="../FormHandlers/DeleteAccount.php" method="POST">
        Felhasználói fiók törlése: <br>
        A törlés megerősítéséhez írja be a jelszavát: <input type="text" name="pw" placeholder="Jelszó">
        A törlés megerősítéséhez írja be a jelszavát mégegyszer: <input type="text" name="repeatpw"
            placeholder="Jelszó">
        <input type="submit" name="deleteaccount" value="Felhasználói fiók törlése">
    </form>


    <footer>

    </footer>
</body>

</html>