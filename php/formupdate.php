<?php
error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion 
session_start();
$varsesion = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "../css/css_tabla.css">
		<title>Actualizar una Obra</title>
		<h1>Modificate a la Obra</h1>
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
		<input type="text"   name="id"          placeholder="ID">	
    	<input type="text"   name="nombre"      placeholder="Nombre">
    	<input type="text"   name="descripcion" placeholder="Descripcion">
    	<input type="text"   name="sucur"       placeholder="Sucursal">
    	<input type="text"   name="zona"        placeholder="zona">
   		<input type="text"   name="piso"        placeholder="piso"> 
		<br>
    	<input type="submit" name="boton">
    </form>
	

    <?php
	include("update.php");
	include("MostrarObras.php");
    ?>

</body>
