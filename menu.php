<?php
 session_start();
 if(!isset($_SESSION["nombre"])){
     header('Location: login.php?session=error');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <h1>Menu Principal</h1>
    <p><a href="logout.php">[Cerrar Session]</a>    <a href="edit.php">[Cambiar Informaciones]</a></p>
    <p><?php
    echo $_SESSION["nombre"];
    ?>
    </p>
</head>
<body>
    
</body>
</html>