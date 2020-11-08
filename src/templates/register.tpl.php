<?php
include 'src/templates/header.tpl.php';
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
    <form action="?url=regaction" method="post" name="registerForm">
        <h1>Sign UP!</h1>
        <input type="text" name="name" placeholder="Name:" />
        <input type="email" name="email" placeholder=" e-mail:" />
        <input type="password" name="pwd" placeholder=" Password:" />
        <input  type="submit" value="Submit"/>
    </form>
</body>
</html>
<?php
include 'src/templates/footer.tpl.php';