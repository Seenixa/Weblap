<?php
include_once "../Classes/User.php";
function save($user)
{
    $saveFile = fopen("../Saves/$user->name.txt", "w");
    fwrite($saveFile, $user->getName() . "\n");
    fwrite($saveFile, $user->getPassword() . "\n");
    fwrite($saveFile, $user->getEmail() . "\n");
    fwrite($saveFile, $user->getFavouriteRace() . "\n");
    fwrite($saveFile, $user->getProfilePicture() . "\n");
    fclose($saveFile);
}

function load($userName)
{
    
}
?>