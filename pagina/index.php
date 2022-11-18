<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inicio de sesión</title>

</head>

<body>  
<section class = "contenido-login">
    <form class = "caja1"  method="post">
        <input class = "ingrese-dato-login" type="text"       name="usuario"      placeholder="usuario"><br>
        <input class = "ingrese-dato-login" type="password"   name="contraseña"   placeholder="contraseña"><br>
        <input  type="submit" name="mandar">
    </form>

     <a href ="nuevacontra.php">¿Olvidaste tu contraseña?</a><br>
     <a href ="FormReg.php"><button class ="boton-del-login">Crear Usuario</button></a><br>
</section>
    
    <?php
        include_once("../php/validar-Login.php");

    ?>

</body>
</html>