<?php
  //Es utilizado para verificar que hay una sesion activa, en caso de no haberla, es imposible entrar
  session_start();
  if(!isset($_SESSION['username'])){ //!Diferente, Si Session es diferente a vacio, es verdadero
    header('location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/reporte.css?v3">
  </head>
  <body>
    <!-- Menu de la Aplicación-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Campo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
            <a class="nav-link active" href="reporte.php">Reportes</a>
            <a class="nav-link" href="logica/logout.php">Cerrar Sesion</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Generación de Reportes -->
    <div class="container-lg">
      <table class="table table-dark table-striped align-middle text-center">
        <thead class="table-dark">
          <tr>
            <th scope="col">Operador</th>
            <th scope="col">Maquinaria</th>
            <th scope="col">Tractor</th>
            <th scope="col">Chofer</th>
            <th scope="col">MotoBomba</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Horometro</th>
            <th scope="col">Horas</th>
            <th scope="col">Predios</th>
            <th scope="col">Observaciones</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody class="table-bordered">
          <?php
          include('logica/db.php');
          $consulta = "SELECT * FROM tbcampo";
          $resultado = $conexion->query($consulta);

          while($mostrar = $resultado->fetch_assoc()){
          ?>
            <tr>
              <td><?php echo $mostrar['operador']?></td>
              <td><?php echo $mostrar['maquinaria']?></td>
              <td><?php echo $mostrar['tractores']?></td>
              <td><?php echo $mostrar['chofer']?></td>
              <td><?php echo $mostrar['motobomba']?></td>
              <td><?php echo $mostrar['cantidad']?></td>
              <td><?php echo $mostrar['horometro']?></td>
              <td><?php echo $mostrar['horas']?></td>
              <td><?php echo $mostrar['predios']?></td>
              <td><?php echo $mostrar['observaciones']?></td>
              <td>
                <form method="POST" action="editform.php">
                  <input type="hidden" name="editar" value="<?php echo $mostrar['id']; ?>">
                  <input type="submit" class="btn btn-secondary" value="Editar">
                </form>
                <form method="POST" action="logica/botones.php">
                  <input type="hidden" name="eliminar" value="<?php echo $mostrar['id']; ?>">
                  <input type="submit" class="btn btn-danger btn-delete" value="Borrar">
                </form>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
    
    <script src="static/js/main.js"></script>
  </body>
</html>