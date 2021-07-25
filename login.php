
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Session</title>

 

</head>
<body>

<?php
    if(isset($_GET['session'])){
        if($_GET['session'] == 'error'){
            echo "<script type='text/javascript'>
            alert('Introduce un nombre');
        </script>";
        }
        if($_GET['session'] == 'logout'){
            echo "<script type='text/javascript'>
            alert('Se ha cerrado su session');
        </script>";
        }
    }
    
?>


<form action="conection.php" method="post">
        <label>Nombre</label>
        <input type="text" name="nombre"></input>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>