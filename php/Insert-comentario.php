<?php
include('conexion.php');  
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
$_SESSION['estado'] = $varESTADO;

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="../css/css_tabla.css">
    <title>Comentario</title>
</head>
<body>
    <main class="form-com">
        <form method="post">
        <main class="contenido">
            <section>
                <form method="post" name="signup-form">
                                    <div class="form-element">
                                        <label>Comentario</label><br>
                                        <input class="comentario" type="text" name="Comentario" placeholder="Ingrese su comentario con respecto a lo que desee" required />
                                    </div>

                                    <br>
                                    <button type="submit" name="comento" value="register">Comentar</button>
                    </form>
                    
                    
                       <?php
                            include("validar-Comentario.php");
                        ?>  
                </section>
            </main>
        </form>

        <div class="ponerlaEnELMedio">
            <a href="index.php"><button>Volver</button></a>
			<br><br>
			</div>

    </main>
</body>
</html>