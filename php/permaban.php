<?php
include("conexion.php");
                            
if (isset($_POST['mandar'])) {

if (strlen($_POST['tag']) >= 1 ) {
$tag     = trim($_POST['tag']);
    
    $consultaID= "SELECT idu FROM tags WHERE tag = '$tag'"; 
    $resultadoID = mysqli_query($conex,$consultaID);
    

while($row = $resultadoID -> fetch_assoc ())
{
 $juan = $row['idu'];
}

    echo $juan;
$consulta      = "DELETE  FROM tags  WHERE tag = '$tag'";

    $consultaUsua  = "DELETE  FROM usuarios  WHERE id = '$juan'";
   
    
$resultado = mysqli_query($conex,$consulta);
    $resultado2 = mysqli_query($conex,$consultaUsua);
}
}
?>