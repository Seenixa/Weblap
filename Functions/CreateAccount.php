<?php
    include_once "../Classes/User.php";
    include_once "SaveLoad.php";

    $user = new User($_POST["nev"], $_POST["pw"], $_POST["email"], $_POST["race"]);
    save($user);

?>