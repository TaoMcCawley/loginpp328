<?php

/**
 * Created by PhpStorm.
 * User: Tao
 * Date: 2/8/2018
 * Time: 10:16 AM
 */
class User
{
    private $username;
    private $password;
    private $loggedIn;

    function __construct()
    {
        $username = "";
        $password = "";
        $loggedIn = false;
    }

}