<?php
include 'config.php';
require 'src/connect.php';

$email=$_POST['email'];
$password=$_POST['password'];

$db=connectMysql($dsn,$dbuser,$dbpass);
$login=auth($db, $email, $password);
$_SESSION['email']=$email;
header('Location:?url=home');
