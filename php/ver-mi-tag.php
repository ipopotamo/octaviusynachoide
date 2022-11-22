<?php
include('conexion.php');  
error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion 
session_start();
$varsesion = $_SESSION['nombre'];
$varsesioncontra = $_SESSION['contraseña'];

$varESTADO;
$varTAG;
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
//--------------------------------------------------------------------------


$caca = "SELECT id FROM usarios WHERE nusuario = '$varsesion' ";
$juan = mysqli_query($conex,$caca);



$consultaUs= "SELECT tag FROM usuarios INNER JOIN tags ON usuarios.nusuario = '$varsesion' AND tags.idu = '$juan' "; 
$resultadoUS = mysqli_query($conex,$consultaUs);

if ($resultadoUS){
    echo "La consulta sale bien";
}

while($row = $resultadoUS->fetch_assoc()){
    $alfa = $row['tag'];
	$pepe = $alfa;
    //echo $alfa;

}
    echo $pepe;

?>