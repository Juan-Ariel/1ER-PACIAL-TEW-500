<?php
(session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario'], FILTER_SANITICE_STRING);
    $password = $_POST['password']);
    $password2 = $_POST['password2'];
    echo "$usuario . $password . $password2";

    $errores = '';
    if (empty($usuario) or empty($password) or empty($password2)) {
        $errores = '<li> Por favor rellanea   todos los datos corectamente</li>';

    }else{
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=curso_login','root','');
        }catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
        $query = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = usuario LIMIT 1');
        $query ->execute(array('usuario' => $usuario));
        $resultado = $query->fetch();

        if ($resultado ! = false) {
            $errores = '<li>El nombre de Usuario ya existe</li>';
    }

    $password = hash('sah512'.$password);
    $password2 = hash('sah512'.$password2);

    if ($password ! = $password2); {
        $errores = '<li>Las contrasenas no soon iguales</li>';
    }
}

if ($errores =='') {
    $query = $conexion->prepare('INSERT INTO usuarios (id, usuario, pass) VALUES (null, :usuario, :pass)');
    $query->execute(array(
        ':usuario'=>$usuario,
        ':pass'=>$password));
        //cheo "hola mundo";
        header('Location: login.php');
    }
}
?>