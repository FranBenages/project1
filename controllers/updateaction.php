<?php
include 'config.php';
require 'src/connect.php';

$db=connectMysql($dsn,$dbuser,$dbpass);

$id=$_POST['id'];
$user=$_SESSION['email'];
$description=$_POST['desc'];
$dat=$_POST['fecha'];

try{
    $sql="UPDATE tasks SET user=:user, description=:desc, date=:fecha WHERE id=:id";
    $result=$db->prepare($sql);
    $result->execute(array(":user"=>$user, ":desc"=>$description, ":fecha"=>$dat, ":id"=>$id));
    header('Location:?url=dashboard');
}catch(PDOException $e){
    echo $e->getMessage();
}