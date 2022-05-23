<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once 'views/contenido.views.php';

}else{
    header('Location: login.php');
}
?>