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

        #abajo{
            display:flex;
            justify-content:space-around;
            margin-top:30px;
        }
    </style>
</head>
<body>
    <br><form action="?url=updateaction" method="post">
        <input type="number" name="id">
        <input type="textarea" name="desc" placeholder="max 500 caraceteres">
        <input type="date" name="fecha">
        <input type="submit" value="Enviar">
    </form><br>
    <div id="abajo">
        <a href="?url=delete">Eliminar</a>
        <a href="?url=update">Modificar</a>
        <a href="?url=home">Home</a>
    </div>
</body>
</html>
<?php
include 'src/templates/footer.tpl.php';