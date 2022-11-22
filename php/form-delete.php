<?php
$inc=include('conexion.php'); 
include('validar-delete.php'); 
error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion 
session_start();
$varsesion = $_SESSION['nombre'];
$varsesioncontra = $_SESSION['contraseña'];

$varESTADO;

if ($varsesion == null)
{
	header("location: form-login.php");
}


$consultaESTADO  = "SELECT estado FROM `usuarios` WHERE nusuario = '$varsesion'";
$resultadoEstado = mysqli_query($conex,$consultaESTADO);

while($row = $resultadoEstado->fetch_assoc()){
    $alfa = $row['estado'];
	$varESTADO = $alfa;
//echo $alfa;
}


if ($varESTADO != 'admin')
{
	header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/css_general.css">
    <title>Borrar Usuario</title>
</head>
<body>
<form method="post">
        <main class="contenido">
            <section>
                <form method="post" name="signup-form">
                                    <div class="form-element">
                                        <label>Inserte el tag del usuario a eliminar</label><br>
                                        <input type="text" name="tag" pattern="[0-9]+" required />
                                    </div>
                                        <br>
                                    <button type="submit" name="mandar" value="mandar">Perma banear</button>
                    </form>
            </section>    
        </main>
        <main class="contenido">

                <a href="index.php"><button type="submit" name="mandar" value="mandar">Volver</button></a>
        </main>
        
        
</form>
                                        <?php
                                        include("validar-delete.php");
                                        ?>
</body>
</html>