<?php
require_once('Models/User.php');

$email=$_POST['email'];
$password=$_POST['password'];

$hashPass=password_hash($password,PASSWORD_BCRYPT);

$user=new User();

$user->create([$email,$hashPass]);

$newUser=$user->findByEmail([$email]);


session_start();

$_SESSION['user']=$newUser;

header('Location:index.php');
exit;

?>