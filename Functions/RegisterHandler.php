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

    if(isset($_POST["register"])){
        $username = $_POST["nev"];
        $password = $_POST["pw"];
        $repeatPassword = $_POST["Repeatpw"];
        $email = $_POST["email"];
        $repeatEmail = $_POST["RepeatEmail"];
        $agreement = $_POST["agreement"];
        $errors = [];
        $userBase = loadAll();


        // Létezik-e már a felhasználó

        foreach($userbase as $user){
            if ($user->name == $username){
                $errors[] = "A felhasználónév már használatban van.";
            }
        }

        // Adott-e meg választ a kedvenc fajra regisztrációnál

        if(isset($_POST["race"])){
            $race = $_POST["race"];
        } else {
            $race = "none";
        }

        // Ugyanazt az Jelszót címet írta-e be kétszer

        if($repeatPassword != $password){
            $errors[] = "A megadott jelszavak nem egyeznek.";
        }

        // Ugyanazt az e-mail címet írta-e be kétszer

        if($repeatEmail != $email){
            $errors[] = "A megadott e-mail címek nem egyeznek.";
        }

        //  Elfogadta-e a felhasználási feltételeket

        if($agreement != "agree"){
            $errors[] = "El kell fogadnia a felhasználási feltételeket.";
        }

        // Ha nincs hiba akkor felhasználó bevitele a mentésbe és üdvözlés, egyébként hibák kilistázása.

        if(count($errors) == 0){
            $user = new User($_POST["nev"], $_POST["pw"], $_POST["email"], $_POST["race"], "default", "no");
            addUser($user);
            echo "<div class=RegisterLoginReact>Sikeres regisztráció!<br>Üdvözlünk a weboldalon $user->name!</div>";
        } else {
            foreach ($errors as $error){
                echo "<div class=RegisterLoginReact>$error<br></div>";
            }
        }
            
    }
    
?>
</body>