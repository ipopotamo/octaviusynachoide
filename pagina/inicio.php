<?php

		session_start();
        $varsesionUSUARIO = $_SESSION['usuario'];
        $varsesionCONTRAS = $_SESSION['contraseña'];

		if ($varsesionUSUARIO == null)header ("location: index.php")

?>


<!DOCTYPE html>
		<html>
		<head>

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

		<br><br>

		</head>
		<body>


			<header>
				<div class="MostrarUsuario">
					<a href="#" class ="logo"><img src="../Juan.png" class = "logo-img"></a><br>
					<?php echo $varsesionUSUARIO;?>
				</div>
				
				<nav>
					<a href="#" class = "NAV-BOTON"><button >ALGO</button></a>
					<a href="#" class = "NAV-BOTON"><button >ALGO</button></a>
					<a href="FormUpd.php" class = "NAV-BOTON"><button >Modificar usuario</button></a>
					<a href="cerrar.php"><button>Cerrar Sesion</button></a>
				</nav>
				</header>
	
	
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

	
<p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat cum molestias natus necessitatibus laboriosam voluptatem dolor dolorum, maxime excepturi. Laudantium corporis quos optio dolor voluptates delectus neque accusantium, eligendi consequuntur?
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quae asperiores cupiditate iusto unde quibusdam totam accusamus. Incidunt tempore, assumenda molestias molestiae amet nobis quaerat hic ea dolore accusantium consequuntur.
				</p>

    



</body>
</html>