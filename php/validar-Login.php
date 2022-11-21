<?php
include('conexion.php');    
        error_reporting(E_ERROR | E_PARSE);
        $nombre=$_POST['nombre'];    
        $contraseña=$_POST['contraseña']; 
        $DNI=$_POST['dni'];   
        session_start();


        $consultaCONTRA_DB = "SELECT contrasena FROM usuarios where nusuario ='$nombre'";
        $resultadoDB=mysqli_query($conex,$consultaCONTRA_DB);

        $pepe = password_verify($contraseña,$has);
        //echo $has;
        while($row = $resultadoDB -> fetch_assoc()){
            echo "pipo";
        $juan = $row['contrasena'];
        $consulta="SELECT nusuario , contrasena FROM usuarios where nusuario ='$nombre' and contrasena = '$juan'";
        echo $nombre;
        echo $juan;
        $resultado=mysqli_query($conex,$consulta);
        

        if (isset($_POST['sesion']))
        {
            if (strlen($_POST['nombre']) >= 1 && strlen($_POST['contraseña']) >= 1)
            {
            //if($filas >= 1){
                echo "srry";
                if ($resultado) {
                    echo "vamo messi0";
                    $_SESSION['nombre']=$nombre;
                    $_SESSION['contraseña']=$contraseña;
                    $_SESSION['dni']=$DNI;
                    header("location: index.php");           
                }else{
                    ?>
                    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
                    <?php
                }
                mysqli_free_result($resultado);
                mysqli_close($conex);
                //}
            }
        }

        }
        //$filas=mysqli_num_rows($resultado);
