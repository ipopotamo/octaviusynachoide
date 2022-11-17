<?php
include('conex.php');    
        //error_reporting(E_ERROR | E_PARSE);
        $usuario = $_POST['usuario'];    
        $contraseña= $_POST['contraseña']; 
        session_start();
        $_SESSION['usuario']=$usuario;
        $_SESSION['contraseña']=$contraseña;



        $consulta="SELECT*FROM usuarios where nusuario ='$usuario' and contrasena='$contraseña'";
        $resultado=mysqli_query($con,$consulta);

        $filas=mysqli_num_rows($resultado);


        if (isset($_POST['mandar']))
        {
            if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1)
            {
            if($filas >= 1){
                
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
        }
