<?php

include 'user.php';

$user1 = new User();
$user1->login('username', 'password');
$user1->logout();

$user2 = new User();
$user2->login('marco', "polo");
//$user2->logout();

$user3 = new User();
$user3->login('Tina', 'bestteacherever');
$user3->logout();