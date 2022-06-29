<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];
//echo $usuario.$password;
session_start();
$_SESSION['usuario']=$usuario;
$_SESSION['password']=$password;
echo 'Usuario '.$usuario.' bienvenido'

?>