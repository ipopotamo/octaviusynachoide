<?php
include("conex.php");
session_start();
$varsesionUSUARIO = $_SESSION['usuario'];
$varsesionCONTRAS = $_SESSION['contraseña'];


if(isset($_POST['mandar'])){
    if(strlen($_POST['dni']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1){
      


        $dni     = $_POST['dni'];
        $email   = $_POST['email'];
        $usu     = $_POST['usuario'];
        $contra  = $_POST['contraseña'];
     
      $sus = "SELECT 'dni' FROM usuarios WHERE 'nusuario' = '$varsesionUSUARIO' ";
      $resc = mysqli_query($con,$consulta);

      while($row = $resc->fetch_assoc()){

      $alfa = $row['dni'];
      $consulta  = "UPDATE `usuarios` SET `contrasena` = '$contra',`nusuario` = '$usu',`email` = '$email' WHERE `dni`='$alfa' AND  ";   
      $resultado = mysqli_query($con,$consulta);
      } 
      
           
       

        if($resultado){
            header("location: ../pagina/index.php");
            exit;
        }
    }
 

        





       
   
}





?>