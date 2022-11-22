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
<html lang="en">

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
		</head>

				<body>  
				<section class = "contenido-login">
				
				<main class = "Nav-bar">
						<div class="logo">
							<img class="logo-img" src="../imagenes/Usuario.png">
							<h4>Bienvenido: <?php echo $varsesion?></h4>
						</div>
						
						
					
						<div class = "ponerlaEnELMedio">
							<a href="index.php" class = "NAV-BOTON"><button ><--  VOLVER</button></a>
							<a href="cerrar.php"><button>Cerrar Sesion</button></a>
						</div>
					</main>

				
				<br><br><br>

				<h1>Lugares de interes</h1>

				<h2>Teatro colon</h2>

				<p>El Teatro Colón inició sus actividades en 1857 en un edificio ubicado en la Plaza de Mayo, donde funcionó hasta 1888. El teatro se mudó entonces al edificio actual ubicado frente a la Plaza Vaticano, que tardó 20 años en ser construido hasta su inauguración en 1908.
					<br>
				En su historia se destaca la creación de los cuerpos artísticos como la Orquesta, el Coro y el Ballet en la década de 1920, ante la imposibilidad de contar siempre con elencos extranjeros completos. En 1931 se realiza la municipalización que, hasta entrada la Segunda Guerra Mundial, logró una de las etapas más estables y fructíferas del teatro. En 1946 el peronismo impulsó una política de apertura a la música popular y de mayor democratización del público habitual, que fue revertida luego de su derrocamiento en 1955 y nuevamente retomada cuando se recuperó la democracia en 1983.

				<br>
				En 1968 se proyectó la ampliación del Colón, que se construiría bajo tierra y a un costado del antiguo edificio, evitando así modificar su arquitectura. La obra significó la refacción y re-equipamiento de la sala, del escenario, de los camarines y de los talleres, y la construcción del anexo subterráneo bajo la plazoleta República del Vaticano (que fue transformada en un estacionamiento), donde funcionan más talleres, depósitos y salas de ensayo. En noviembre de 1989 fue declarado Monumento Histórico Nacional.

				<br>
				En 2001 se inició un trabajo de restauración plena que se extendería hasta 2010, cuando fue reinaugurado el 24 de mayo en conmemoración del Bicentenario de Argentina.
				<br>

				A lo largo de su historia han actuado en el teatro Colón las principales figuras de la ópera, la música clásica y el ballet mundial, como Arturo Toscanini, Nijinski, Enrico Caruso, Regina Pacini, Anna Pavlova, Alicia Alonso, Maia Plissetskaya, Margot Fonteyn, Mijail Barishnikov, Antonio Gades, Richard Strauss, Igor Stravinsky, Camille Saint-Saëns, Manuel de Falla, Aaron Copland, Herbert von Karajan, Leonard Bernstein, Mstislav Rostropovich, Zubin Mehta, María Callas, Yehudi Menuhin, Pau Casals, Rudolf Nuréyev, Maurice Béjart, Plácido Domingo, José Carreras, Luciano Pavarotti, Lily Pons, Victoria de los Ángeles, Birgit Nilsson, Renata Scotto, Elisabeth Schwarzkopf, Montserrat Caballé, Kiri Te Kanawa, entre muchos otros, y artistas argentinos como Héctor Panizza, Alberto Ginastera, Jorge Donn, Norma Fontenla, José Neglia, Olga Ferri, Julio Bocca, Maximiliano Guerra, Paloma Herrera, Daniel Barenboim, Marta Argerich, etc.</p>

				<br><br><br>

				<main class ="ponerlaEnELMedio">
				
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img id = "imgcarrusel" class="d-block w-100" src="img/caption.jpg" alt="First slide">
					</div>
					
					<div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="img/Colon_2.jpg" alt="Second slide">
					</div>

					<div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="img/teatro_colon.jpg" alt="Second slide">
					</div>
                    <div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="img/colon-0.jpg" alt="Second slide">
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

		<br><br><br><br>
					<h2>Puerto Madero</h2>

		<p>Puerto Madero es uno de los cuarenta y ocho barrios en los que se divide la Ciudad Autónoma de Buenos Aires (CABA), capital de la República Argentina. Su ubicación cercana a la zona este de la ciudad, lo extenso de su área y su vista al río hacen que este distrito sea uno de los más valorados de Buenos Aires.
			<br>
			El barrio debe su nombre a Eduardo Madero, comerciante de Buenos Aires que presentó tres proyectos para la construcción del puerto de la ciudad, el último de los cuales fue aprobado por el entonces Presidente de la Nación Julio Argentino Roca en 1882.
			<br>
			<br>
			En 1882 el gobierno nacional del Presidente Julio Roca contrató al comerciante Eduardo Madero (sobrino del vicepresidente Francisco Madero) para que se encargara de la construcción de un nuevo puerto que solucionara estos inconvenientes. El proyecto de Madero (realizado por los ingenieros ingleses Hawkshaw, Son & Hayter)3​ resultó elegido de entre muchos otros y proponía un sistema de diques intercomunicados con dos canales de acceso, hacia el norte y hacia el sur. Para la ejecución se contaría con el apoyo financiero británico a través de la Baring Brothers.
		<br>
		Entre las propuestas desechadas estuvo la del ingeniero Huergo, que proponía la readecuación del puerto más tradicional y antiguo de la ciudad (el de la Boca del Riachuelo), creando un sistema de dársenas abiertas al río, permitiendo el ingreso de barcos de gran tamaño en el futuro. El proyecto de Huergo venía siendo apoyado por las autoridades de la provincia de Buenos Aires. Cuando se estableció por ley la ciudad de Buenos Aires como capital del país, se optó por el proyecto de Madero, que fue definitivamente aprobado por el Congreso nacional en 1884. A partir de ese momento mermaron las obras de dragado del canal de la Boca del Riachuelo —que se venían efectuando desde años atrás— y se decidió destinar los recursos necesarios para la construcción del nuevo puerto. Bastaron pocas décadas para que se revelaran las consecuencias de tan mala elección.

		<br><br><br>
<main class ="ponerlaEnELMedio">
				
				<div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
					
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img id = "imgcarrusel" class="d-block w-100" src="img/descarga (1).jpg" alt="First slide">
					</div>
					
					<div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="img/madero.jpg" alt="Second slide">
					</div>

					<div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="img/images.jpg" alt="Second slide">
					</div>
                    <div class="carousel-item">
						<img id = "imgcarrusel" class="d-block w-100" src="img/puerto-mdero.jpg" alt="Second slide">
					</div>
                    </div>
					<a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<br><br><br><br>
			</main>

            <br><br><br><br>
            <h2>El parque Tres de Febrero</h2>

					<p>

					El parque Tres de Febrero, conocido popularmente como los Bosques de Palermo, es un conjunto de parques ubicado en el barrio de Palermo, en Buenos Aires, Argentina. Destaca por sus arboledas, lagos y rosedal, que conforman la zona verde más popular de la ciudad y en cuya ampliación y diseño colaboró el paisajista Carlos Thays.
					<br>
					<br>

					La historia de los extensos terrenos del parque se remonta a la fundación de Buenos Aires en 1580, cuando Juan de Garay repartió las tierras en las afueras del pueblo original para instalar chacras. El primer poblador de los terrenos que hoy forman parte del parque fue el capitán Doménico, que había castellanizado su nombre italiano como Domingo y luego como Domínguez, agregándole el gentilicio de su ciudad de origen, Palermo, con lo cual pasó a llamarse Juan Domínguez Palermo, y a la zona de sus tierras se las conocía por "Palermo".1​

					El 22 de diciembre de 1808, se creó el Partido de Palermo, que fue perdiendo tierras y quedó reducido al área entre la actual avenida Scalabrini Ortiz y el barrio de Recoleta.2

					TE PODES ENCONTRAR UN TRABA..

					</p>




					<br><br><br>
					<main class ="ponerlaEnELMedio">
									
									<div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
										
										<div class="carousel-inner">
											<div class="carousel-item active">
											<img id = "imgcarrusel" class="d-block w-100" src="img/bp.jpg" alt="First slide">
										</div>
										
										<div class="carousel-item">
											<img id = "imgcarrusel" class="d-block w-100" src="img/bosques.jpg" alt="Second slide">
										</div>

										<div class="carousel-item">
											<img id = "imgcarrusel" class="d-block w-100" src="img/descarga.jpg" alt="Second slide">
										</div>
										<div class="carousel-item">
											<img id = "imgcarrusel" class="d-block w-100" src="img/b.jpg" alt="Second slide">
										</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
									<br><br><br><br>
								</main>
								<br><br>
</body>
</html>