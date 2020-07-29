<?php

require_once('Models/Task.php');

$title=$_POST['title'];
$deadline=$_POST['deadline'];
$contents=$_POST['contents'];
$currnetTime=date("Y/m/d H:i:s");

$task= new Task();
$task->create([$title,$deadline,$contents,$currnetTime]);

header('location:index.php');
exit;