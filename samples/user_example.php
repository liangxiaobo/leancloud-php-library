<?php
include_once 'AV.php';
$avUser = new AVUser;
$avUser->email = 'killme2008@gmail.com';
$user = $avUser->signup('dennis', 'password');
print_r($user);

$loginUser = new AVUser;
$loginUser->username = 'dennis';
$loginUser->password = 'password';
$returnLogin = $loginUser->login();
print_r($returnLogin);

$avUser->requestPasswordReset('killme2008@gmail.com');
?>