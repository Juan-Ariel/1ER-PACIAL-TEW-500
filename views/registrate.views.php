<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Registrate</h1>
        <hr class="border"></hr>

        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
        <div class="form-group">
            <¡ class="incono izquierda fa fa-user"></¡><input type="text" name="usuario" class="usuarop" placerholder="Usuario">
        </div>

        <div class="form-group">
            <¡ class="icono izquierdo fa fa-lock"></¡><input type ="password" name="password" class="password" placeholder="Contraseña">
        </div>

        <div class="form-group">
            <¡ class="icono izquierda fa fa-lock"></¡><input type="password" name="password2" class="password_btn" placeholder="Repetir Contraseña">
        </div>
        <?php if(!empty($errores)); ?>
            <div class="error">
                <ul>
                    <?php echo $errores; ?>
                </ul>
            </div>
            <?php endif; ?>
        </form>
        <p class="texta-resgistrate">
            ¿Ya tienes Cuenta?
            <a href="login.php">Inicair Session</a>
        </p>
    </div>
</body>
</html>