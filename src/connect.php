<?php

function connectMysql(string $dsn, string $userdb, string $passdb){
    try{
        $db=new PDO($dsn, $userdb, $passdb);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        die($e->getMessage());
    }
    return $db;
}

function auth($db, $dbmail, $dbpass):bool{
    try{
        $stmt=$db->prepare('SELECT * FROM users where email=:dbmail LIMIT 1');
        $stmt->execute(array(":email"=>$dbmail));
        $count=$stmt->rowCount();
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);

        if($count==1){
            $user=$row[0];
            $res=password_verify($dbpass, $user['password']);
            if($res){
                $_SESSION['username']=$user['username'];
                $_SESSION['email']=$user['email'];
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
        
    }catch(PDOException $e){
        return false;
    }
}