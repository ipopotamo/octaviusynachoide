<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css_general.css">
    <title>Registro de Usuario</title>

</head>
<body>
    

    <form method="post">
        <main class="contenido">
            <section>
                <form method="post" name="signup-form">
                                    <div class="form-element">
                                        <label>Nombre</label><br>
                                        <input type="text" name="nombre" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Apellido</label><br>
                                        <input type="text" name="apellido"  required />
                                    </div>

                                    <div class="form-element">
                                        <label>Edad</label><br>
                                        <input type="text" name="edad" pattern="[0-9]+" required />
                                    </div>


                                    <div class="form-element">
                                        <label>Email</label><br>
                                        <input type="email" name="email" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Nombre de Usuario</label><br>
                                        <input type="text" name="usuario" required />
                                    </div>
                                    <div class="form-element">
                                        <label>dni</label><br>
                                        <input type="text" name="dni" required />
                                    </div>
                                    <div class="form-element">
                                        <label>Contrase??a</label><br>
                                        <input type="password" name="contrase??a" required />
                                    </div>
                                   
                                    <div class="form-element">
                                        <label>Confirmar contrase??a</label><br>
                                        <input type="password" name="Ccontrase??a" required />
                                    </div>
                                    <br><br>
                                    <button type="submit" name="mandar" value="register">Registrar</button>
                    </form>
                    
                    
                       <?php
                            include("CrearU.php");
                        ?>  
                </section>
            </main>
        </form>    
       
         
</body></html>