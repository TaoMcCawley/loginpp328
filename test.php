<?php

include 'user.php';
include 'admin.php';

$user1 = new User();
$user1->login('username', 'password2');
//$user1->logout();

$user2 = new User();
$user2->login('marco', "polo234");
$user2->setUsername('marco');
$user2->setPassword('polo234');

//$user2->logout();

// create new admin object
$admin1 = new Admin("Tina", "bestteacherever", "admin");
$admin1->editUser($user2);
echo "<p>Access Level: ".$admin1->getAccessLevel()."</p>";
$admin1->setAccessLevel("test");
echo "<p>Access Level (after set): ".$admin1->getAccessLevel()."</p>";