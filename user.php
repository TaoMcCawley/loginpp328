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

    /**
     * User constructor.
     */
    function __construct()
    {
        $this->username = "";
        $this->password = "";
        $this->loggedIn = false;
    }

    // methods

    /**
     * Login method for a user
     *
     * @param $username Username of the person trying to login
     * @param $password Password of the person trying to login
     */
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

    /**
     * Logs the user out by setting everything to it's construct phase.
     *
     */
    function logout() {
        construct();
    }

    // getters and setters

    /**
     * This function returns a username
     *
     * @return string The username of the class
     */
    function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets a the user variable
     *
     * @param $username The username we are working with
     */
    function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * THe password we are working with, cannot be less than 6 characters
     *
     * @param $password The password we are using
     */
    function setPassword($password)
    {
        if(strlen($password) >= 6) {
            $this->password = $password;
        }

    }
}