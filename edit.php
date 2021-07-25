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
    <title>Editar</title>
</head>

<body>
    <h1>Cambiar Informacion de <?php echo $_SESSION['nombre']; ?></h1>
    <form action="conection.php" method="post">
       <label>Nombre: </label>
        <input type="text" name="nombre"/>  
        <input type="submit" value="Guardar"/>
    </form>    
</body>
</html>