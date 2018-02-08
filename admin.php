<?php

include 'users.php';

class Admin extends User
{
    private $accessLevel;

    function __construct($username, $password, $accessLevel)
    {
        setUsername($username);
        setPassword($password);
        $this->accessLevel = "admin";
    }
    //methods

    function editUser($user){


        echo "editing username";
    }


    //setters and getters

    /**
     * @param string $accessLevel
     */
    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;
    }

    /**
     * @return string
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

}