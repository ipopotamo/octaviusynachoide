<?php
include('conex.php');    
        error_reporting(E_ERROR | E_PARSE);
        $nombre =$_POST['usuario'];    
        $contraseña=$_POST['contraseña']; 
        $DNI=$_POST['dni'];   
        session_start();
        $_SESSION['nombre']=$nombre;
        $_SESSION['contraseña']=$contraseña;
        $_SESSION['dni']=$DNI;

        $consulta="SELECT*FROM usuarios where nusuarios ='$nombre' and contraseña ='$contraseña'";
        $resultado=mysqli_query($con,$consulta);

        $filas=mysqli_num_rows($resultado);


        if (isset($_POST['sesion']))
        {
            if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1)
            {
            if($filas >= 1){
                
                if ($resultado) {
                    header("location: index.php");           
                }else{
                    ?>
                    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
                    <?php
                }
                mysqli_free_result($resultado);
                mysqli_close($conex);
                }
            }
        }

        /*
        $consulta="SELECT*FROM usuarios where Nombre_de_Usuario ='$nombre' and Contraseña='$contraseña'";
        $resultado=mysqli_query($conex,$consulta);

        $filas=mysqli_num_rows($resultado);


        if (isset($_POST['sesion']))
        {
            if (strlen($_POST['nombre']) >= 1 && strlen($_POST['contraseña']) >= 1)
            {
            if($filas >= 1){
                
                if ($resultado) {
                    header("location: index.php");           
                }else{
                    ?>
                    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
                    <?php
                }
                mysqli_free_result($resultado);
                mysqli_close($conex);
                }
            }
        }
*/
        ?>









