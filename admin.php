<?php

include 'users.php';

class Admin extends User
{
    private $accessLevel;

    function __construct($username, $password, $accessLevel)
    {
        parent::__construct();

        $this->setUsername($username);
        $this->setPassword($password);

        $this->accessLevel = $accessLevel;


    }
    //methods

    function editUser($user){
        $username = $user->getUsername();
        echo "editing ".$username;
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