<?php
class User
{
    public $name;
    private $password;
    public $email;
    public $favouriteRace;
    public $profilePicture;
    public $isAdmin;

    function __construct($name, $password, $email, $favouriteRace, $profilePicture, $isAdmin)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->favouriteRace = $favouriteRace;
        $this->profilePicture = $profilePicture;
        $this->isAdmin = $isAdmin;
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
        $this->password = $password;
    }

    function getPassword()
    {
        return $this->password;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }

    function getEmail()
    {
        return $this->email;
    }
    function setFavouriteRace($favouriteRace)
    {
        $this->favouriteRace = $favouriteRace;
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
    function getIsAdmin()
    {
        return $this->isAdmin;
    }
    function setIsAdmin()
    {
        return $this->isAdmin;
    }

}

?>