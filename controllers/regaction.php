<?php
include 'config.php';
require 'src/connect.php';

$db=connectMysql($dsn,$dbuser,$dbpass);


$username=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pwd'];
$options=['cost'=>12,];
$pass_h=password_hash($pass, PASSWORD_BCRYPT, $options);

try{
    $sql="INSERT INTO users(email, username, password) VALUES(:email, :name, :pwd)";
    $result=$db->prepare($sql);
    $result->execute(array(":email"=>$email, ":name"=>$username, ":pwd"=>$pass_h));
    $_SESSION['email']=$email;
    header('Location:?url=home');
}catch(PDOException $e){
    echo "Error line ".$e->getLine();
}