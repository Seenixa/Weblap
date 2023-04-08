<?php
class User{
    public $name;
    private $password;
    public $email;
    public $favouriteRace;
    public $profilePicture;

    function __construct($name, $password, $email, $favouriteRace){
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->favouriteRace = $favouriteRace;
    }

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
    function setPassword($password){
        $this->password = $password;
    }

    function getPassword(){
        return $this->password;
    }
    function setEmail($email){
        $this->email = $email;
    }

    function getEmail(){
        return $this->email;
    }
    function setFavouriteRace($favouriteRace){
        $this->favouriteRace = $favouriteRace;
    }

    function getFavouriteRace(){
        return $this->favouriteRace;
    }
    function setProfilePicture($profilePicture){
        $this->profilePicture = $profilePicture;
    }

    function getProfilePicture(){
        return $this->profilePicture;
    }
}

?>