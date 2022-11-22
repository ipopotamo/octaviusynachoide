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
                            
if(isset($_POST['comento']))
{
    if(strlen($_POST['Comentario']) >= 1)
    {
            $comentario     = $_POST['Comentario'];
      
               $consulta  = "INSERT INTO `comentarios`(`nusuario`, `Comentario`) VALUES ('$varsesion','$comentario')";      
               $resultado = mysqli_query($conex,$consulta);

               if($resultado)
                {
                 ?>
                    <h3>Se publico tu comentario señore <?php echo $varsesion ?>, agradecemos su opinion</h3>
                 <?php
                }          
    }   
}


	$consulta = "SELECT * FROM `comentarios` ";
	$resultado = mysqli_query($conex,$consulta);



     ?>
		<table class = "tabla2" >
			 <thead>

				 <th class = "col">Usuario</th>
				 <th class = "col">Comentario</th>

			 </thead>
				 <tbody>
				 
                 <?php while($row = $resultado->fetch_assoc()){    ?>
					 <tr>
                        
                        <?php
                            if ($varESTADO == "admin"){
                                ?>
                                <td class = "fil"><?php  echo $row['id'] ?></td>
                                <?php
                            }
                        ?>

						 <td class = "fil"><?php  echo $row['nusuario'] ?></td>
                         <td class = "fil"><?php  echo $row['Comentario'] ?></td>

					    <?php
                            if ($varESTADO == "admin"){
                                ?>
                                
                                        <form  method="post">
										<td class = "fil"><input type="text" name="idCOM" pattern="[0-9]+"></input></td>										
										
										<td class = "fil"><button type="submit" name="descomento" value="descomento">Comentario ILEGAL</button></td>

                                            <?php
                                            include('BorrarCom.php');
                                            ?>   
										</form>

                               
                                <?php
                            }
                        ?>
				 <?php }?>
				 </tbody>
		 </table>