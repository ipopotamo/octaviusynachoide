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



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel = "stylesheet" href = "../css/css_tabla.css">

</head>
<body>

<?php
		

		if ($inc) {
			$consulta = "SELECT * FROM usuarios INNER JOIN tags ON usuarios.id = tags.idu ";
			$resultado = mysqli_query($conex,$consulta);
	
		}
		?>
		        <table class = "tabla" >
					  	<thead>

								<th class = "col">Campesino</th>
								<th class = "col">Apellido</th>
								<th class = "col">DNI</th>
								<th class = "col">Tag</th>
								<th class = "col">Perma</th>
						
						</thead>
						<tbody>
								<?php while($row = $resultado->fetch_assoc()){    ?>
		            	<tr>									
										<td class = "fil"><?php  echo $row['nombre'] ?></td>
										<td class = "fil"><?php  echo $row['apellido'] ?></td>
										<td class = "fil"><?php  echo $row['dni'] ?></td>
                                        <form  method="post">
										<td class = "fil"><input type="text" name="tag" pattern="[0-9]+"><?php  echo $row['tag'] ?></input></td>										
										
										<td class = "fil"><button type="submit" name="mandar" value="mandar">Perma banear</button></td>
										</form>
										

		   					 <?php }
						 	//	$juan   = "DELETE * FROM usuarios WHERE ";
					        //	$juanes = "DELETE * FROM tags     WHERE ";  
							 
							 
							 ?>
						</tbody>
		        </table>

				<main class="contenido">

<a href="index.php"><button type="submit" name="mandar" value="mandar">Volver</button></a>
</main>
    <?php
        include("validar-delete.php");
    ?>
</body>
</html>