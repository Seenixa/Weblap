<?php
include_once "../Classes/User.php";

// Beolvassa az összes felhasználót egy arraybe, kikeresi a bemenetére kapott felhasználó felhasználónevét, kitörli az arrayből, majd teljes mentést csinál a törölt elem nélkül

function deleteUser($user)
{
    $userBase = loadAll();
    foreach ($userBase as $registeredUser) {
        if ($registeredUser["nev"] == $user->getName()) {
            $key = array_keys($userBase, $registeredUser);
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
}

// Arrayt ír át 'User' classá.

function loadIn($user)
{
    $username = $user["nev"];
    $password = $user["pw"];
    $email = $user["email"];
    $race = $user["race"];
    $profilePicture = $user["profpic"];
    $priviledge = $user["priviledge"];
    return new User($username, $password, $email, $race, $profilePicture, $priviledge);
}

?>