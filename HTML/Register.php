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
  <a class="Home" href="index.html">Főoldal</a>
  <form action="Register.php" method="post" enctype="multipart/form-data">
    <label>Felhasználó Név: <br><input type="text" name="nev" value="" placeholder="Név" maxlength="20" minlength="5"
        autofocus tabindex="1" required>
    </label><br>
    <fieldset>
      <legend>E-mail</legend>
      <label>E-mail cím: <br><input type="email" name="email" value="" placeholder="E-mail" tabindex="2"
          required></label><br>
      <label>E-mail cím megerősítése: <br><input type="email" name="RepeatEmail" value="" placeholder="E-mail"
          tabindex="3" required></label><br>
    </fieldset>
    <fieldset>
      <legend>Jelszó</legend>
      <label>Jelszó: <br><input type="password" name="pw" value="" placeholder="Jelszó" maxlength="20" minlength="5"
          tabindex="4" required></label><br>
      <label>Jelszó megerősítése: <br><input type="password" name="Repeatpw" value="" placeholder="Jelszó"
          maxlength="20" minlength="5" tabindex="5" required></label><br>
    </fieldset>

    <p> Melyik faj tetszik eddig a legjobban? </p>
    <select class="select" name="race">
      <option selected disabled>Válassz</option>
      <option value="Terran">Terran</option>
      <option value="Zerg">Zerg</option>
      <option value="Protoss">Protoss</option>
    </select><br>

    <label class="registerCheck" for="checkbox1">Elfogadom a felhasználási feltételeket. </label>
    <input type="checkbox" id="checkbox1" name="agreement" value="agree"> <br>


    <input class="submit" type="reset" value="Újratöltés">
    <input class="submit" type="submit" value="Regisztráció">
  </form>

  <?php
  $username = "username";
  $password = "password";
  $email = "email";
  $description = "description";
  $profile = array(
    "name" => $username,
    "password" => $password,
    "email" => $email,
    "description" => $description
  );

  function save($userProfile)
  {
    $saveFile = fopen("../saves/profiles.txt", "w");
    foreach ($userProfile as $userData) {
      fwrite($saveFile, $userData);
      fwrite($saveFile, "\n");
    }
    fwrite($saveFile, "next\n");
    fclose($saveFile);
  }

  function load($userName)
  {
    $loadFile = fopen("../saves/profiles.txt", "r");

  }


  ?>

</body>

</html>