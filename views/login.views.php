<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inciar Sesion</title>
</head>
<body>
 <div class ="contenedor">
     <h1 class="titulo">Iniciar Sesion</h1>
     <hr class="border"></hr>
     
     <form action = "<?php echo htmlSpecialchars($_SERVER['PHP_SELF']):?>"method="POST" class="formulario" name = "login">
        <div class = "form-group">
            <¡ class= "icono izquierda fa fa-usar"></¡><input type = "text" name = "usuario" class="usuario" placeholder="usuario">
     </div>

     <div class="form-group">
         <¡ class="icono izquierda fa fa-lock"></¡><input type="password" name="password" class="password_btn" placejolder="contarseña">

     </div>

     <?php if(!empty($errores)):?>
        <div claas="error">
            <ul>
                <?php echo $errores; ?>
        </ul>
        </div>
        <?php endif; ?>
     </form>
     <p class="texto-registrate">
         ¿Aun no tienes cuenta?
         <a href="registrate.php">Registrate</a>
     </p>
     </div>
</body>
</html>