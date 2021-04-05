<?php
require 'db.php';

session_start();
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];

$_SESSION['usuario']=$usuario;

$consulta="SELECT username,pass FROM tblogin WHERE username='$usuario' and pass='$contra'";

$resultado = $conexion->query($consulta);

$filas = $resultado->fetch_assoc();

if($filas){
    $_SESSION['username'] = $usuario;
    header("location:../index.php");

}else{
    ?>
    <?php
    header("location:../login.php");
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Datos Incorrectos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);