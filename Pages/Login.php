<?php
include_once "../Classes/User.php";
include_once "../Functions/SaveLoad.php";

$userBase = loadAll();
$message = "";

if(isset($_POST["login"])){
  if (!isset($_POST["nev"]) || trim($_POST["nev"]) === "" || !isset($_POST["pw"]) || trim($_POST["pw"]) === "") {
    $message = "<strong>Hiba:</strong> Adj meg minden adatot!";
  } else {
    $userName = $_POST["nev"];
    $userPassword = $_POST["pw"];

    $message = "Sikertelen belépés! A belépési adatok nem megfelelők!";

    foreach ($userBase as $registeredUser) {
      if ($registeredUser["nev"] == $userName && password_verify($userPassword,$registeredUser["pw"])) {
        $message = "Sikeres belépés!";
        $user = $registeredUser;
      }
    }
  }
}

?>
<!DOCTYPE html>
<html class="RegisterLogin" lang="hu">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starcraft | Bejelentkezés</title>
  <meta name="description" content="Bemutató oldal a Starcraft világáról">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="icon" href="../Images/SCLogo.png">
</head>

<body class="RegisterLoginBody">
  <a class="Home" href="index.php">Főoldal</a>
    <form action="Login.php" method="post">
      <label>Felhasználó Név: <br><input type="text" name="nev" value="" placeholder="Név" maxlength="20" minlength="5"
          autofocus tabindex="1" required></label><br>
      <label>Jelszó: <br><input type="password" name="pw" value="" placeholder="Jelszó" maxlength="20" minlength="5"
          tabindex="2" required></label><br>
      <input class="submit" name="login" type="submit" value="Bejelentkezés"><br>
      <?php echo $message . "<br/>"; ?>
      <p><a class="LoginLink" href="Register.php">"Regisztráció"</a></p>
    </form>
</body>

</html>