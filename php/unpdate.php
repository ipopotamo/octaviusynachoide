<?php
    include("conexion.php");
    session_start();
    $varsesion = $_SESSION['nombre'];

 if (isset($_POST['modificar'])) {
    if (strlen($_POST['tag']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1) {       
          $tag     = $_POST['tag'];
   
    
          $consultaID= "SELECT idu FROM tags WHERE tag = '$tag'"; 
          $resultadoID = mysqli_query($conex,$consultaID);
      
          while($flecha = $resultadoID->fetch_assoc()){
           $gama = $flecha['idu'];
             //echo $gama;
           }

          
           $consultaUs= "SELECT * FROM usuarios INNER JOIN tags ON usuarios.id = '$gama' AND tags.idu = '$gama' "; 
           $resultadoUS = mysqli_query($conex,$consultaUs);
     

           // PARA SABER CUAL ES TU TAG
           while($recta = $resultadoUS->fetch_assoc()){
           $beta = $recta['tag'];      
            echo $beta;          
           }
           
        
            $nom     = $_POST['nombre'];
            $ap      = $_POST['apellido'];
            $edad    = $_POST['edad'];
            $email   = $_POST['email'];
            $usu     = $_POST['usuario'];
            $contra  = $_POST['contraseña'];   
            $has = password_hash($contra,PASSWORD_DEFAULT);

            $consultaU  = "UPDATE `usuarios` SET `nombre`='$nom',`apellido`='$ap',`edad`='$edad',`contrasena`='$has',`nusuario`='$usu',`email`='$email' WHERE id = '$gama'  ";
            $resultadoU = mysqli_query($conex,$consultaU);   
           
            if($resultadoU){
            //echo "feliciti";
            header("location: cerrar.php");
            }                

            
    

    


  }
}

?>