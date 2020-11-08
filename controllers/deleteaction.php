<?php
include 'config.php';
require 'src/connect.php';

$db=connectMysql($dsn,$dbuser,$dbpass);

$id=$_POST['id'];

try{
    $sql="DELETE FROM tasks where id=?";
    $result=$db->prepare($sql);
    $result->execute(array($id));
    header('Location:?url=dashboard');
}catch(PDOException $e){
    echo $e->getMessage();
}