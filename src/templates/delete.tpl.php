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
        #form{
            text-align:center;
        }
    </style>
</head>
<body>
    <div id="form">
        <br><form action="?url=deleteaction" method="post">
            <input type="number" name="id"><br>
            <input type="submit" value="Enviar"><br>
        </form><br>
        <a href="?url=dashboard">Tareas</a><br><br>
        <a href="?url=update">Modificar</a><br><br>
        <a href="?url=home">Home</a>
    </div>
</body>
</html>
<?php
include 'src/templates/footer.tpl.php';