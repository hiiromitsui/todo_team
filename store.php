<?php

require_once('Models/Task.php');

$title=$_POST['title'];
$contents=$_POST['contents'];
$currnetTime=date("Y/m/d H:i:s");

$task= new Task();
$task->create([$title,$contents,$currnetTime]);

header('location:index.php');
exit;