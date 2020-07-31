<?php

require_once('Models/User.php');

$email=$_POST['email'];
$password=$_POST['password'];
$user=new User();
$loginUser=$user->findByEmail([$email]);


if(!$loginUser){
    header('Location: signinForm.php');
    exit;
}

if(!password_verify($password,$loginUser['password'])){
    header('Location: signinForm.php');
    exit;
}

if(password_verify($password,$loginUser['password'])){
    session_start();
    $_ssesion['user']=$loginUser;
    header('Location:index.php');
    echo "ログインしました";
    exit;
   
    
}

?>
