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

//----------------------------------------------------------------------------------------------
                            
if(isset($_POST['descomento']))
{
    if(strlen($_POST['idCOM']) >= 1)
    {
            $comentario     = $_POST['idCOM'];
             //"DELETE FROM `comentarios` WHERE id = '$comentario'"
               $consulta  = "UPDATE `comentarios` SET `Comentario`='Esta opinión ahora es Ilegal, en este momento un camión policial será enviado a su domicilio' WHERE id = '$comentario'";      
               $resultado = mysqli_query($conex,$consulta);

               if($resultado)
                {
                
                 header("location: Insert-comentario.php");
                }          
    }   
}

?>