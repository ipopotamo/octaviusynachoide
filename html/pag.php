<?php
//error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion 
session_start();
$_SESSION['usuario'];
$_SESSION['contraseña'];

echo ($varUsuario);

if ($varUsuario != null)
{
    header("location: ../html/pag.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paguina Principal</title>
</head>
<body>
    <button>Generrar Llave</button>

    <br><br>
    <a href="../php/cerrar_sesion.php">Buenas </a>
</body>
</html>