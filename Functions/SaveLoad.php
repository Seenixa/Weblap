<?php
include_once "../Classes/User.php";

// Beír egy sor felhasználó adatot a Userbase.txt fileba

/*function addUser($user)
{
    $saveFile = fopen("../Saves/Userbase.txt", "a");
    fwrite($saveFile, $user->getName() . " ");
    fwrite($saveFile, $user->getPassword() . " ");
    fwrite($saveFile, $user->getEmail() . " ");
    fwrite($saveFile, $user->getFavouriteRace() . " ");
    fwrite($saveFile, $user->getProfilePicture() . " ");
    fwrite($saveFile, $user->getIsAdmin());
    fwrite($saveFile, "\n");
    fclose($saveFile);
}*/

// Beolvassa az összes felhasználót egy arraybe, kikeresi a bemenetére kapott felhasználó felhasználónevét, kitörli az arrayből, majd teljes mentést csinál a törölt elem nélkül

function deleteUser($user)
{
    $userBase = loadAll();
    foreach ($userBase as $registeredUser) {
        if ($registeredUser->name == $user->name) {
            $key = array_keys($userBase, $user->name);
            unset($userBase[$key[0]]);
            saveAll($userBase);
        }
    }
}

// User array bemenetre az abba levő összes felhasználóból újraírja a Userbase.txt tartalmát. Soronként kiír minden felhasználó adatot.

function saveAll($users)
{
    $saveFile = fopen("../Saves/Userbase.txt", "w");
    if ($saveFile === FALSE)
        die("HIBA: A fájl megnyitása nem sikerült!");

    foreach ($users as $user) {
        $serialized_user = serialize($user);
        fwrite($saveFile, $serialized_user . "\n");

        /*fwrite($saveFile, $user->getName() . " ");
        fwrite($saveFile, $user->getPassword() . " ");
        fwrite($saveFile, $user->getEmail() . " ");
        fwrite($saveFile, $user->getFavouriteRace() . " ");
        fwrite($saveFile, $user->getProfilePicture() . " ");
        fwrite($saveFile, $user->getIsAdmin());
        fwrite($saveFile, "\n");*/

    }
    fclose($saveFile);
}

// Beolvas egy 'User'-ekből álló arrayt a Userbase.txt-ből. A beolvasott arrayt adja vissza.

function loadAll()
{
    $users = [];

    $saveFile = fopen("../Saves/Userbase.txt", "r");
    if ($saveFile === FALSE)
        die("HIBA: A fájl megnyitása nem sikerült!");

    while (($line = fgets($saveFile)) !== FALSE) {
        $user = unserialize($line);
        $users[] = $user;
    }
    fclose($saveFile);
    return $users;
    /*$saveFile = fopen("../Saves/Userbase.txt", "r");
    while ($user = fgets($saveFile) != false) {
        $split = explode(" ", $user);
        $users[] = new User($split[0], $split[1], $split[2], $split[3], $split[4], $split[5]);
    }
    return $users;*/
}

// Placeholder

function loadIn($user){

}

?>