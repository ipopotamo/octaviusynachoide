<?php
include("conex.php");


if(isset($_POST['mandar'])){
    if(strlen($_POST['dni']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1){
      

        $dni     = $_POST['dni'];
        $email   = $_POST['email'];
        $usu     = $_POST['usuario'];
        $contra  = $_POST['contraseña'];
     
        

        $consulta  = "UPDATE `usuarios` SET `contrasena`='$contra',`nusuario`='$usu',`email`='$email' WHERE `dni`='$dni' ";      
        $resultado = mysqli_query($con,$consulta);

        if($resultado){
            header("location: ../pagina/index.php");
            exit;
        }
    }
   
}





?>