<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<!--Az összes User-t kilistázva jelenítni meg. Ha admin nézi az oldalt, akkor egy fiók törlése gomb jelenik meg, amivel az admin törli a felhasználó fiókot-->

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Összes felhasználó</title>
    <meta name="description" content="Összes felhasználó">
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
    $username = $_SESSION["user"]["nev"];

    foreach ($users as $userForView) {
        if (isset($_POST[$userForView["nev"]])) {
            $_SESSION["profil"] = $userForView;
            header("Location: ViewProfile.php");
//                echo var_dump($_SESSION["profil"]);
        }
    }
    foreach ($users as $userToDelete) {
        if (isset($_POST["adminDelete".$userToDelete["nev"]])) {
            $userToDelete = loadIn($userToDelete);
            deleteUser($userToDelete);
            header("Location: AllUsers.php");

        }
    }
    ?>
</header>

<div class="empty"></div>
<table class="profile">
    <thead>
    <tr>
        <th>Profilkép</th>
        <th>Felhasználónév</th>
        <th>Faj</th>
        <th>Privilige</th>
    </tr>
    </thead>
    <?php
    foreach ($users as $user) { ?>
        <tr <?php if ($user["nev"] === $_SESSION["user"]["nev"]) {
            echo "class = " . "allUserActive";
        } ?>>
            <td>
                <img class="unit" src="<?php echo $user["profpic"]; ?>" alt="Profil kép">
            </td>
            <td class="tablaEgysegnev"><?php
                if ($user["nev"] === $_SESSION["user"]["nev"]) {
                    ?>
                    <!--                    <a href="UserProfile.php"  > --><?php //echo$user["nev"]
                    ?><!-- </a>-->
                    <form action="../Pages/AllUsers.php" method="post">
                        <input type="submit" name="<?php echo $user["nev"] ?>" value="<?php echo $user["nev"] ?>">
                    </form>
                    <?php
                } else { ?>
                    <!--                    <a href="UserProfile.php" onclick= profil($user) > --><?php //echo$user["nev"]?><!-- </a>-->
                    <form action="../Pages/AllUsers.php" method="post">
                        <input type="submit" name="<?php echo $user["nev"] ?>" value="<?php echo $user["nev"] ?>">
                    </form>
                    <?php
                } ?></td>
            <td class="tablaEgysegnev">
                <?php echo $user["race"]; ?>
            </td>
            <td class="tablaEgysegnev"><?php
                switch ($user["priviledge"]) {
                    case "1":
                        echo "Admin";
                        break;
                    case "0":
                        echo "Felhasználó";
                        break;
                    default;
                        break;
                }
                ?></td>
            <?php if (($_SESSION["user"]["priviledge"] > 0) && ($_SESSION["user"]["nev"] != $user["nev"])) { ?>
                <td class="tablaEgysegnev">
                    <form action="../Pages/AllUsers.php" method="POST">
                        <input type="submit" name="adminDelete<?php echo $user["nev"] ?>"
                               value="Felhasználói fiók törlése">
                    </form>
                </td>
            <?php } else { ?>
            <td>
            </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
<footer>
    <?php
    include "../Parts/footer.php";
    ?>
</footer>
</body>
</html>