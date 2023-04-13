<?php
class User
{
    public $name;
    private $password;
    public $email;
    public $favouriteRace;
    public $profilePicture;
    public $priviledge;

    function __construct($name, $password, $email, $favouriteRace, $profilePicture, $priviledge)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->favouriteRace = $favouriteRace;
        $this->profilePicture = $profilePicture;
        $this->priviledge = $priviledge;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
    function setPassword($password)
    {
        if (strlen($password) > 5 && strlen($password) < 20) {
            $this->password = $password;
            return true;
        } else {
            return false;
        }
    }

    function getPassword()
    {
        return $this->password;
    }
    function setEmail($email)
    {
        if (str_contains($email, "@") && str_contains($email, ".")) {
            $this->email = $email;
            return true;
        } else {
            return false;
        }
    }

    function getEmail()
    {
        return $this->email;
    }
    function setFavouriteRace($favouriteRace)
    {
        if ($favouriteRace == "Protoss" || $favouriteRace == "Zerg" || $favouriteRace == "Terran") {
            $this->favouriteRace = $favouriteRace;
            return true;
        } else {
            return false;
        }
    }

    function getFavouriteRace()
    {
        return $this->favouriteRace;
    }
    function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;
    }

    function getProfilePicture()
    {
        return $this->profilePicture;
    }
    function getpriviledge()
    {
        return $this->priviledge;
    }
    function setpriviledge($priviledge)
    {
        $this->priviledge = $priviledge;
    }

}

?>