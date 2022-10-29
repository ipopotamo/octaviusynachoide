<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio de sesión</title>

</head>

<body>

    <form method="post">
        <input type="text"   name="usuario"      placeholder="usuario">
        <input type="text"   name="contraseña"   placeholder="contraseña">
        <input type="submit" name="mandar">
    </form>


    <a href="crearuser.html"><button>Crear usuario</button></a>

    <a href="nuevacontra.html"><button>¿Olvidaste tu contraseña?</button></a>

    <?php
    include("login.php");
    ?>

</body>
</html>