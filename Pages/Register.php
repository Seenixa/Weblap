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
  <a class="Home" href="Index.php">Főoldal</a>
  <form action="../Functions/RegisterHandler.php" method="post">
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
    <select class="select" name="race" tabindex="6">
      <option selected disabled>Válassz</option>
      <option value="Terran">Terran</option>
      <option value="Zerg">Zerg</option>
      <option value="Protoss">Protoss</option>
    </select><br>

    <label class="registerCheck" for="checkbox1">Elfogadom a felhasználási feltételeket. </label>
    <input type="checkbox" id="checkbox1" name="agreement" value="agree" tabindex="7" required> <br>


    <input class="submit" type="reset" value="Újratöltés">
    <input class="submit" type="submit" name="register" value="Regisztráció">
  </form>





</body>

</html>