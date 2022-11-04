<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    
</main>
                <form method="post">
                    <main class="contenido">
                        <section>
                                <form method="post" action="" name="signup-form">

                                    <div class="form-element">
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Apellido</label>
                                        <input type="text" name="apellido"  required />
                                    </div>

                                    <div class="form-element">
                                        <label>Edad</label>
                                        <input type="text" name="edad" pattern="[0-9]+" required />
                                    </div>

                                    <div class="form-element">
                                        <label>DNI</label>
                                        <input type="text" name="dni" pattern="[0-9]+" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Email</label>
                                        <input type="email" name="email" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Nombre de Usuario</label>
                                        <input type="text" name="username" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Telefono</label>
                                        <input type="text" name="telefono" pattern="[0-9]+" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Contraseña</label>
                                        <input type="password" name="contraseña" required />
                                    </div>

                                    <button type="submit" name="register" value="register">Registrar</button>
                                </form>
                                        
                        </section>
                    </main>

</body>
</html>