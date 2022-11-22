<?php
include('conexion.php');  
error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion 
session_start();
$varsesion = $_SESSION['nombre'];
$varsesioncontra = $_SESSION['contraseña'];




if ($varsesion == null)
{
	header("location: form-login.php");
}

$consultaESTADO  = "SELECT estado FROM `usuarios` WHERE nusuario = '$varsesion'";
$resultadoEstado = mysqli_query($conex,$consultaESTADO);




//--------------------------------------------------------------------------


$alverto = "SELECT id FROM `usuarios` WHERE nusuario = '$varsesion'";
$juan    = mysqli_query($conex,$alverto);



while($tintin = $juan->fetch_assoc())
{
$omega = $tintin['id'];
}


$consultaUs= "SELECT tag FROM usuarios INNER JOIN tags ON usuarios.nusuario = '$varsesion' AND tags.idu = '$omega' "; 
$resultadoUS = mysqli_query($conex,$consultaUs);



while($row = $resultadoUS->fetch_assoc()){
    $alfa = $row['tag'];
	
}
    ?> 
    <h3>Su tag es: <?php echo $alfa;?></h3>