<?php
include 'src/templates/header.tpl.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align:center;
        }

        #php{
            display:flex;
            flex-direction:column;
            align-items:center;
        }

        table{
            border:1px solid black;
        }
        
        .id{
            width:20px;
            height:15px;
        }

        .cuerpo{
            width:500px;
            height:15px;
            border:1px solid black;
            background-color:white;
            
        }

        /*th{
            width:400px;
            height:15px;
            border:1px solid black;
        }*/



    </style>
</head>
<body>
    <div id="php">
    <?php 
        include 'config.php';
        require 'src/connect.php';
        echo "<table><th class='id'>ID</th><th class='cuerpo'>Usuario</th><th class='cuerpo'>Descripcion</th><th class='cuerpo'>Fecha</th></table>";
        if(isset($_SESSION['email'])){
            $db=connectMysql($dsn,$dbuser,$dbpass);
            $sql="SELECT id, description, user, date FROM tasks WHERE user=?";
            $result=$db->prepare($sql);
            $result->execute(array($_SESSION['email']));
            while($registro=$result->fetch(PDO::FETCH_ASSOC)){
                echo "<table><td class='id'>".$registro['id']."</td><td class='cuerpo'>".$registro['description']."</td><td class='cuerpo'>".$registro['user']."</td><td class='cuerpo'>".$registro['date'].
                "</td></table>";
            }
        }else{
            echo "Por favor, inicia sesion";
        }
    ?>
    </div>
    <br><form action="?url=dashaction" method="post">
        <input type="textarea" name="desc" placeholder="max 500 caraceteres">
        <input type="date" name="fecha">
        <input type="submit" value="Enviar">
    </form><br>
    <a href="?url=delete">Eliminar</a><br><br>
    <a href="?url=update">Modificar</a><br><br>
    <a href="?url=home">Home</a>
</body>
</html>
<?php
include 'src/templates/footer.tpl.php';