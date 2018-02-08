<?php


class Admin extends User
{
    private $accessLevel;

    function __construct($username, $password, $accessLevel)
    {
        setUsername($username);
        setPassword($password);
        $this->accessLevel = "user";
    }

}