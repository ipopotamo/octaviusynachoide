<?php
error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion 
session_start();
$varsesion = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="../css/css_tabla.css">
		<title>Crear una Obra</title>
		<h1>Registrar Obras</h1>
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

    <form method="post">
    	<input type="text"   name="nombre"      placeholder="Nombre">
    	<input type="text"   name="comentario" placeholder="Descripcion">
    	
		<br>
    	<input type="submit" name="boton">
    </form>
	

    <?php
	include("insetCom.php");
    include("MostrarObras.php");
    ?>

</body>