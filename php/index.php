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

?>

<!DOCTYPE html>
		<html>
		<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			
		<link rel="stylesheet" href="../css/css_general.css">
			
		<!--<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">-->
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
				
				<meta charset="utf-8">

		</head>
		<body>
		
		<header>
				
				<nav>
					
						<?php
						if($varESTADO == 'admin'){?>
						
						<h1>Administrar paguina: <?php echo $varsesion?></h1>

						<section class = "Header">
							<div class="container1">
								<a href ="form-delete.php"><button class="Boton-index" name="crear" >Borrar usuario</button></a><br> 		
							</div>

							<div class="container1">
								<a href="tablaplebe.php" class = "NAV-BOTON"><button class = "Boton-index">LA PLEBE</button></a>
							</div>

							<div class="container1">
							<a href="cerrar.php"><button class = "Boton-index">CERRAR SESION</button></a>
							</div>
						</section>
						<?php } ?>
					
					


					<?php
					if($varESTADO != 'admin'){?>
					<main class = "Nav-bar">
						<div class="logo">
							<img class="logo-img" src="../imagenes/Usuario.png">
							<h4>Bienvenido: <?php echo $varsesion?></h4>
						</div>
						
						
					
						<div class = "ponerlaEnELMedio">
							<a href="Ldinteres.php" class = "NAV-BOTON"><button >Lugares de interes</button></a>	
							<a href="FormUpd.php" class = "NAV-BOTON"><button >Modificar usuario</button></a>
							<a href="cerrar.php"><button>Cerrar Sesion</button></a>
						</div>
					</main>
					
						
					</div>
					
				</nav>

				</header>
		
		<br><br><br>
				<main class ="ponerlaEnELMedio">
				
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/puertoM.jpg" alt="First slide">
					</div>
					
					<div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/jardinJapo.jpg" alt="Second slide">
					</div>

					<div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/bibliotecaN.jpg" alt="Second slide">
					</div>

					<div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/cabildio.jpg" alt="Second slide">
					</div>

					<div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/teatroCo.jpg" alt="Second slide">
					</div>

					<div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/obelisco.jpg" alt="Second slide">
					</div>

					<div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/planetario.jpg" alt="Second slide">
					</div>
				
				
				

					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<br><br><br><br>
			</main>
		
			<br><br><br>
			<p>
				Buenos Aires, en el texto de la Constitución: Ciudad de Buenos Aires o Ciudad Autónoma de Buenos Aires (CABA),10​ también llamada Capital Federal, por ser la sede del gobierno nacional,11​ es la capital y ciudad más poblada de la República Argentina. Esta metrópolis es una ciudad autónoma que constituye uno de los 24 distritos, o «jurisdicciones de primer orden»12​ que conforman el país. Tiene sus propios poderes ejecutivo, legislativo y judicial. Está situada en la región centro-este del país, sobre la orilla sur del Río de la Plata, en la región pampeana.
			</p>

	

<br>

<div class="container1">
		<br>
		<a href="cerrar.php"><button>CERRAR SESION</button></a>
		</div>
		<br><br><br>
					<?php } ?>

					
		




		</body>
</html>