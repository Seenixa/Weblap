<!--Az összes User-t kilistázva jelenítni meg. Ha admin nézi az oldalt, akkor egy fiók törlése gomb jelenik meg, amivel az admin törli a felhasználó fiókot-->
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
    <header>
        <?php
        $activePage = "AllUsers";
        include_once "../Parts/Header.php";
        include_once "../Classes/User.php";
        include_once "../Functions/SaveLoad.php";
        $users = loadAll();
        ?>
    </header>

    <div class="empty"></div>
    <table>
        <thead>
        <tr>
            <th>Profilkép</th>
            <th>Felhasználónév</th>
            <th>Faj</th>
            <th>Privilige</th>
        </tr>
        </thead>
        <?php foreach ($users as $user){ ?>
        <tr>
            <td>
                <a target="_blank" href="<?php echo $user["profpic"]; ?>">
                    <img class="unit" src= "<?php echo $user["profpic"]; ?>" alt="Profil kép">
                </a>
            </td>
            <td class="tablaEgysegnev"><?php
                if($user["nev"]===$_SESSION["user"]["nev"]){
                    echo "<strong>". $user["nev"] ."</strong>";
                } else {
                    echo $user["nev"];
                } ?></td>
            <td class="tablaEgysegnev">
                <?php echo $user["race"]; ?>
            </td>
            <td class="tablaEgysegnev"><?php
                switch ($user["priviledge"]) {
                    case "0":
                        echo "Admin";
                        break;
                    case "1":
                        echo "Felhasználó";
                        break;
                    case "2":
                        echo "Vendég";
                        break;
                    default;
                        break;
                }
                ?></td>
            <?php if ($_SESSION["user"]["priviledge"]==0){ ?>
            <td class="tablaEgysegnev">

                    <form action="../FormHandlers/DeleteAccount.php" method="POST">
                        <input type="submit" name="deleteaccount" value="Felhasználói fiók törlése">
                    </form>
                </td>
            <?php } ?>
            <td>
        </tr>

    <?php } ?>
    </table>




    <footer>

    </footer>
</body>

</html>