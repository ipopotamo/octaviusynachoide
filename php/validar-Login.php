<?php
include('conex.php');    
        error_reporting(E_ERROR | E_PARSE);
        $usuario = $_POST['usuario'];    
        $contraseña= $_POST['contraseña']; 
        session_start();
        $_SESSION['usuario']=$usuario;
        $_SESSION['contraseña']=$contraseña;

        if (isset($_POST['mandar']))
        {
            if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1)
            {        
        $consulta="SELECT*FROM usuarios where nusuario ='$usuario' and contrasena='$contraseña'";
        $resultado=mysqli_query($con,$consulta);

                if ($resultado) {
                    header("location: ../pagina/inicio.php");
                    exit();   
                }else{
                    ?>
                    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
                    <?php
                }
                mysqli_free_result($resultado);
                mysqli_close($conex);
                }
            
        }
        ?>
