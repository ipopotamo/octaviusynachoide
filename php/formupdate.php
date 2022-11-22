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

if ($varESTADO == "admin"){
    header("location: index.php");

}


?>
<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "../css/css_tabla.css">		
		<h1>Modificate master</h1>
		<meta charset="utf-8">
		<a href="index.php"><button>VOLVE PAPA</button></a>
<br><br>

</head>
<body>
	<?php
		if ($varsesion == null)
		{
			header("location: form-login.php");
		}	
	?>


        <?php
            include('ver-mi-tag.php');
        
        ?>

<form method="post">
        <main class="contenido">
            <section>
                <form method="post" name="signup-form">

									<div class="form-element">
                                        <label>Ingrese su tag</label><br>
                                        <input type="text" name="tag" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Nombre</label><br>
                                        <input type="text" name="nombre" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Apellido</label><br>
                                        <input type="text" name="apellido"  required />
                                    </div>

                                    <div class="form-element">
                                        <label>Edad</label><br>
                                        <input type="text" name="edad" pattern="[0-9]+" required />
									</div>

                                    <div class="form-element">
                                        <label>Email</label><br>
                                        <input type="email" name="email" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Nombre de nuevo Usuario</label><br>
                                        <input type="text" name="usuario" required />
                                    </div>

                                    
                                    <div class="form-element">
                                        <label>Contraseña</label><br>
                                        <input type="password" name="contraseña" required />
                                    </div>

                                    <br><br>
                                    <button type="submit" name="modificar" value="register">Modificar</button>
                    </form>
				</section>
              </main>            

    <?php
	include("unpdate.php");
    ?>

</form>
               
			   </body>
			   </html>
			   