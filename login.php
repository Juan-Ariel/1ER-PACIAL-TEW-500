<?php
(session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario'], FILTER_SANITICE_STRING);
    $password = $_POST['password']);
    $password2 = hash('sha512',$password);
    echo "$usuario . $password";

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=curso_login','root','');
        }catch(PDOException $e) {
            echo "Error: ".$e->getMessage();


    }

    $query = $conexion->prepare('SELECT * FROM usuarios WHERE usuariio AND pass = :password');
    $query->execute(array(
        ':usuario'=>$usuario,
        ':pass'=>$password
    ));
    $resultado = $query->fetch();
    //var_dump(resultado);

    if($resultado ! == false) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
        //echo "Datos corectos";

    }else{
        $errores = '<li>datos Incorrectos</li>';
    }
    require_once 'views/login.views,php';
?>