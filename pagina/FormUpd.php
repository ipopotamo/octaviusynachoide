<?php
    session_start();
        $varsesionUSUARIO = $_SESSION['usuario'];
        $varsesionCONTRAS = $_SESSION['contraseña'];

?>

<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
  

</head>

<body>  
<section class = "contenido-login">
    <form class = "caja1" method="post">
        <input class = "ingrese-dato-login" type="text"       name="usuario"      placeholder="usuario"><br>
        <input class = "ingrese-dato-login" type="password"   name="contraseña"   placeholder="contraseña"><br>
        <input class = "ingrese-dato-login" type="text"       name="email"        placeholder="email"><br>
        <input class = "ingrese-dato-login" type="text"       name="dni"          placeholder="DNI"><br>
        <input  type="submit" name="mandar">
    </form>



</section>
    
    <?php
        include("../php/editarU.php");
    ?>

</body>
</html>