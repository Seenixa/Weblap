<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="hu" xmlns="http://www.w3.org/1999/html">

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
$username = $_SESSION["profil"]["nev"];
$email = $_SESSION["profil"]["email"];
$race = $_SESSION["profil"]["race"];
$profilePicture = $_SESSION["profil"]["profpic"];
$priviledge = $_SESSION["profil"]["priviledge"];
//   echo var_dump($_SESSION["user"]);
?>
<table>
    <tr>
        <th colspan="2">
            <a target="_blank" href="<?php echo $profilePicture; ?>">
                <img class="profilPic" src= "<?php echo "$profilePicture";?>" alt="Profile picture"><br>
            </a>
        </th>
    </tr>
    <tr>
        <th>Felhasználónév:</th>
        <td class="tablaProfil"> <?php echo "$username<br>"; ?></td>
    </tr>
    <tr>
        <th>E-mail:</th>
        <td class="tablaProfil"><a href="mailto:<?php echo "$email"; ?>"><?php echo "$email"; ?></a>
        </td>
    </tr>
    <tr>
        <th>Kedvenc faj:</th>
        <td class="tablaProfil"><?php echo "$race"; ?></td>
    </tr>
    <tr>
        <th>Privilégium:</th>
        <td class="tablaProfil">
            <?php
            switch ($priviledge) {
                case "1":
                    echo "Admin";
                    break;
                case "0":
                    echo "Felhasználó";
                    break;
                default;
                    break;
            }
            ?>
        </td>
    </tr>

</table>

<!--    --><?php //echo var_dump($_SESSION["profil"]); ?>

</body>

</html>