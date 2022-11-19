<!DOCTYPE html>
<html lang="en">
<head>
	<link rel = "stylesheet" href = "../css/css_tabla.css">

</head>
<body>

<?php
		$inc = include("conexion.php");

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
						
						</thead>
						<tbody>
								<?php while($row = $resultado->fetch_assoc()){    ?>
		            	<tr>									
										<td class = "fil"><?php  echo $row['nombre'] ?></td>
										<td class = "fil"><?php  echo $row['apellido'] ?></td>
										<td class = "fil"><?php  echo $row['dni'] ?></td>
                                        <td class = "fil"><?php  echo $row['tag'] ?></td>


		   					<?php }?>
						</tbody>
		        </table>


    <?php
        include("validar-delete.php");
    ?>
</body>
</html>