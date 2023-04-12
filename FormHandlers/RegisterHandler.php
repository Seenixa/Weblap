<!DOCTYPE html>
<html class="RegisterLogin" lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starcraft | Regisztráció</title>
  <meta name="description" content="Regisztráció">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="icon" href="../Images/SCLogo.png">
</head>

<body class="RegisterLoginBody">
  <?php
  include_once "../Classes/User.php";
  include_once "SaveLoad.php";

  if (isset($_POST["register"])) {
    $username = $_POST["nev"];
    $password = $_POST["pw"];
    $repeatPassword = $_POST["Repeatpw"];
    $email = $_POST["email"];
    $repeatEmail = $_POST["RepeatEmail"];
    $race = "";
    $agreement = $_POST["agreement"];
    $profilePicture = "../images=SClogo.png";
    $priviledge = 0;
    $errors = [];
    $userBase = loadAll();


    // Létezik-e már a felhasználó
  
    foreach ($userBase as $user) {
      if ($user["nev"] == $username) {
        $errors[] = "A felhasználónév már használatban van.";
      }
    }

    // Adott-e meg választ a kedvenc fajra regisztrációnál
  
    if (isset($_POST["race"])) {
      $race = $_POST["race"];
    } else {
      $race = "none";
    }

    // Ugyanazt az Jelszót címet írta-e be kétszer
  
    if ($repeatPassword != $password) {
      $errors[] = "A megadott jelszavak nem egyeznek.";
    }

    // Ugyanazt az e-mail címet írta-e be kétszer
  
    if ($repeatEmail != $email) {
      $errors[] = "A megadott e-mail címek nem egyeznek.";
    }

    //  Elfogadta-e a felhasználási feltételeket
  
    if ($agreement != "agree") {
      $errors[] = "El kell fogadnia a felhasználási feltételeket.";
    }

    // Ha nincs hiba akkor felhasználó bevitele a mentésbe és üdvözlés, egyébként hibák kilistázása.
  
    if (count($errors) == 0) {
      //jelszó titkosítás
      $password = password_hash($password, PASSWORD_DEFAULT);
      //A felhasználó adatai egy "kulcs=>érték" típusú tömben tárolódik
      $userBase[] = ["nev" => $username, "pw" => $password, "email" => $email, "race" => $race, "profpic" => $profilePicture, "priviledge" => $priviledge];
      //és a fáljbaírás is így (kulcs=>érték) történik
      saveAll($userBase);
      //header("Location: login.php");
      echo "<div class=RegisterLoginReactFirst>Sikeres regisztráció!<br>Üdvözlünk a weboldalon $username!</div>";
    } else {
      echo "<div class=RegisterLoginReactFirst>Sikertelen regisztráció<br></div>";
      foreach ($errors as $error) {
        echo "<div class=RegisterLoginReact>$error<br></div>";
      }
      echo "<div class=RegisterLoginReact><br><a class=LoginLink href=../pages/Register.php>Újrapróbálkozás</a><br></div>";
    }
    echo "<div class=RegisterLoginReact><br><a class=LoginLink href=../pages/index.php>Vissza a főoldalra</a><br></div>";
  }
  ?>
</body>