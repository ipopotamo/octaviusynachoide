<?php
include("conexion.php");
                            
if(isset($_POST['crear'])){
    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['dni']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1 && strlen($_POST['Ccontraseña']) >= 1){
      
       
        $nom     = $_POST['nombre'];
        $ap      = $_POST['apellido'];
        $edad    = $_POST['edad'];
        $dni     = $_POST['dni'];
        $email   = $_POST['email'];
        $usu     = $_POST['usuario'];
        $contra  = $_POST['contraseña'];
        $Ccontra = $_POST['Ccontraseña'];

        if($contra == $Ccontra){
         $has = password_hash($contra,PASSWORD_DEFAULT);  
           if(password_verify($contra,$has))
           {            
               $consulta  = "INSERT INTO usuarios (`nombre`, `apellido`, `dni`, `edad`, `contrasena`, `nusuario`, `email`, `estado`) VALUES ('$nom','$ap','$dni ','$edad','$has','$usu ','$email', 'Campecino') ";      
               $resultado = mysqli_query($con,$consulta);
 
               $TAG = rand (10000,99999999999);
 
               $consulta  = "INSERT INTO usuarios (`nombre`, `apellido`, `dni`, `edad`, `contrasena`, `nusuario`, `email`, `estado`) VALUES ('$nom','$ap','$dni ','$edad','$has','$usu ','$email', 'Campecino') ";      
               $resultado = mysqli_query($con,$consulta);

                if($resultado)
                {
                 $idu = "SELECT `id` FROM `usuarios` WHERE `email` = '$email' ";
                 $resultID = mysqli_query($con,$idu);
                    while($row = $resultID->fetch_assoc())
                    {
                      $alfa = $row['id'];
                      $consultaTAG = "INSERT INTO `tags`(`idu`, `tag`, `estado`) VALUES ('$alfa','$TAG','Usable')"; //Usable, baneado, Permabaneado
                      $resultadoTAG = mysqli_query($con,$consultaTAG);
                    }
                 }
                 header("location: ../html/pag.html");            
               }
           }   
        }
    }
   






?>