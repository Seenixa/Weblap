<?php
  include_once "../Classes/User.php";
  include_once "../Functions/SaveLoad.php";

  if(isset($_POST["login"])){
    $userName = $_POST["nev"];
    $userPassword = $_Post["pw"];
    
    $userBase = loadAll();

    foreach($userbase as $registeredUser){
      if($registeredUser->name == $userName && $registeredUser->password == $userPassword){
        $user = $registeredUser;
      }
    }
    if($user->name == $userName){
      loadIn($user);
    } else {
      echo "<div class=RegisterLoginReact>Felhasználó név, vagy jelszó helytelen.<br></div>";

    }

  }

  ?>