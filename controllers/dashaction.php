<?php
include 'config.php';
require 'src/connect.php';

$db=connectMysql($dsn,$dbuser,$dbpass);
$user=$_SESSION['email'];
$description=$_POST['desc'];
$dat=$_POST['fecha'];

try{
    $sql="INSERT INTO tasks(description, user, date) VALUES(:desc, :email, :fecha)";
    $result=$db->prepare($sql);
    $result->execute(array(":desc"=>$description, ":email"=>$user, ":fecha"=>$dat));
    header('Location:?url=dashboard');
}catch(PDOException $e){
    echo "Error line ".$e->getLine();
}