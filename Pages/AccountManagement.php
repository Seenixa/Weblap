<!--Felhasználó profilja. Itt tudja törölni a fiókját, illetve tud módosítani néhány adatán (jelszó, kedvenc faj, profilkép) -->
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>
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
    $activePage = "AccountManagement";
    include_once "../Classes/User.php";
    include_once "../Functions/SaveLoad.php";
    if (isset($_SESSION["user"])) {
        $currentUser = loadIn($_SESSION["user"]);
        $username = $currentUser->getName();
        $password = $currentUser->getPassword();
        $email = $currentUser->getEmail();
        $race = $currentUser->getFavouriteRace();
        $profilePicture = $currentUser->getProfilePicture();
        $priviledge = $currentUser->getpriviledge();

    }
    ?>
    <?php
    echo "<a target=_blank href=$profilePicture>
    <img class=unit src=$profilePicture alt=Profile Picture> </a>";
    ?>
    <form action="../FormHandlers/NewRace.php" method="POST">
        <h2>Kedvenc faj:</h2>
        <fieldset>

            <select class=select name="race">
                <option selected disabled>Válassz</option>
                <option value="Terran">Terran</option>
                <option value="Zerg">Zerg</option>
                <option value="Protoss">Protoss</option>
            </select><br>
            <br><input type="submit" name="racechange" value="Mentés"><br>
        </fieldset>
    </form>
    <form action="../FormHandlers/NewPassword.php" method="POST">
        <h2>Jelszó változtatás:</h2>
        <fieldset>
            Jelenlegi jelszó: <br><input type="password" name="currentpw" placeholder="Jelenlegi jelszó"><br>
            Új jelszó: <br><input type="password" name="pw" placeholder="Új jelszó"><br>
            Új jelszó mégegyszer: <br><input type="password" name="repeatpw" placeholder="Új jelszó újra"><br><br>
            <input type="submit" name="pwchange" value="Jelszó megváltoztatása"><br>
        </fieldset>
    </form>
    <form action="../FormHandlers/NewEmail.php" method="POST">
        <h2>E-mail cím változtatás:</h2>
        <fieldset>
            Új e-mail: <br><input type="email" name="email" placeholder="Új e-mail cím"><br>
            Új e-mail mégegyszer: <br><input type="email" name="repeatemail" placeholder="Új e-mail cím újra"><br><br>
            <input type="submit" name="emailchange" value="E-mail cím megváltoztatása"><br>
        </fieldset>
    </form>
    <form action="../FormHandlers/DeleteAccount.php" method="POST">
        <h2>Felhasználói fiók törlése:</h2>
        <fieldset>
            A törlés megerősítéséhez írja be a jelszavát: <br><input type="password" name="pw" placeholder="Jelszó"><br>
            A törlés megerősítéséhez írja be a jelszavát mégegyszer: <br><input type="password" name="repeatpw"
                placeholder="Jelszó"><br><br>
            <input type="submit" name="deleteaccount" value="Felhasználói fiók törlése">
        </fieldset>
    </form>
    <footer>
    </footer>
</body>

</html>