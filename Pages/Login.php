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
  <?php
  
  if (!(isset($_POST["nev"]))) {
    $loggedIn = false;
  } else {
    $loggedIn = true;
  }
  if (!$loggedIn) { ?>

    <form action="Login.php" method="post" enctype="multipart/form-data">
      <label>Felhasználó Név: <br><input type="text" name="nev" value="" placeholder="Név" maxlength="20" minlength="5"
          autofocus tabindex="1" required></label><br>
      <label>Jelszó: <br><input type="password" name="pw" value="" placeholder="Jelszó" maxlength="20" minlength="5"
          tabindex="2" required></label><br>
      <input class="submit" type="submit" value="Bejelentkezés"><br>
      <p><a class="LoginLink" href="Register.php">Regisztráció</a></p>
    </form>
    <?php
  }
  if (isset($_POST["nev"])) {
    $loggedIn = true;
  }
  ?>

  <?php
  include_once "../Classes/User.php";
  include_once "../Functions/SaveLoad.php";
  if ($loggedIn) {
    load($_POST["nev"] . ".txt");
    echo "<p class = LoggedIn >Sikeresen beléptél <br> Üdvözlünk a honlapon <strong>$_POST[nev]<strong>.</p>";
  }

  ?>

</body>

</html>