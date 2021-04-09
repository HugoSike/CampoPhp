<?php
include('db.php');


if (isset($_POST['enviar'])){
    $operador = $_SESSION['username']; //Envia el usuario que esta conectado haciendo el registro
    $maquinaria = $_POST['maquinaria'];
    $tractores = $_POST['tractores'];
    $chofer = $_POST['chofer'];
    $motobomba = $_POST['motobomba'];
    $cantidad = trim($_POST['cantidad']);
    if(isset($_POST['horometro'])){ //Si horometro es seleccionado se toma el valor del input, si no es seleccionado, es no
        $horometro = $_POST['horometroMarca'];
    }else{
        $horometro = "No";
    }
    $horas = $_POST['horas'];
    $predios = $_POST['predios'];
    $observaciones = trim($_POST['observaciones']);
    //Fecha
    date_default_timezone_set("America/Phoenix");
    $fechaMostrar = date("G") . ":" . date("i") . "(" . date("d") . "/" . date("m") . "/" .date('y') . ")";
    $fecha = $fechaMostrar;



    $consulta = "INSERT INTO tbcampo(operador, maquinaria, tractores, chofer, motobomba, cantidad, horometro, horas, predios, observaciones, fecha) VALUES ('$operador','$maquinaria','$tractores','$chofer','$motobomba','$cantidad','$horometro','$horas','$predios','$observaciones','$fecha')";
    $resultado = $conexion->query($consulta);

    if($resultado){
        ?>
        
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Aceptado!</strong> Se han agregado correctamente los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }else{
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Fallo!</strong> Hubo un error en la inserción en los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    mysqli_close($conexion);
}

if (isset($_POST['eliminar'])){
    $id = $_POST['eliminar'];

    $consulta = "DELETE FROM tbcampo WHERE id = '$id'";

    
    $resultado = $conexion->query($consulta);

    mysqli_close($conexion);

    header("location:../reporte.php");
}

if (isset($_POST['actualizar'])){
    $id = $_POST['actualizarId'];
    
    $operador = $_SESSION['username']; //Envia el usuario que esta conectado haciendo la actualización
    $maquinaria = $_POST['maquinaria'];
    $tractores = $_POST['tractores'];
    $chofer = $_POST['chofer'];
    $motobomba = $_POST['motobomba'];
    $cantidad = trim($_POST['cantidad']);
    if(isset($_POST['horometro'])){ //Si horometro es seleccionado se toma el valor del input, si no es seleccionado, es no
        $horometro = $_POST['horometroMarca'];
    }else{
        $horometro = "No";
    }
    $horas = $_POST['horas'];
    $predios = $_POST['predios'];
    $observaciones = trim($_POST['observaciones']);
    //Fecha actualizada
    date_default_timezone_set("America/Phoenix");
    $fechaMostrar = date("G") . ":" . date("i") . "(" . date("d") . "/" . date("m") . "/" .date('y') . ")";
    $fecha = $fechaMostrar;

    $consulta = "UPDATE tbcampo SET operador = '$operador', maquinaria = '$maquinaria', tractores = '$tractores', chofer = '$chofer', motobomba = '$motobomba', cantidad = '$cantidad', horometro = '$horometro', horas = '$horas', predios = '$predios', observaciones = '$observaciones', fecha = '$fecha' WHERE tbcampo.id = '$id'";
    $resultado = $conexion->query($consulta);

    if($resultado){
        mysqli_close($conexion);
        header("location: ../reporte.php");
    }else{
        mysqli_close($conexion);
        header("location: ../index.php");
    }
}
?>