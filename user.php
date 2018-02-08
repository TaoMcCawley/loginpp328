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

    // methods
    function login($username, $password) {
        include 'users.php';
        // check if $username and $password key value pair is inside defined array
        foreach($loginArray as $user => $pw) {
            if ($user == $username) {
                // check if passwords match
                if ($pw == $password) {
                    echo "<p>$username is logged in.</p>";
                    $this->loggedIn = true;
                } else {
                    echo "<p>Login error</p>";
                }
            }
        }
        // if user not found
        echo "<p>Login error</p>";
    }

    function logout() {

    }

    // getters and setters
    function getUsername()
    {
        return $this->username;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setPassword($password)
    {
        if(strlen($password) >= 6) {
            $this->password = $password;
        }

    }
}