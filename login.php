<?php
    session_start();

    if(isset($_SESSION['username'])){ //Si Session esta vacia, es verdadero
      header('location: index.php');
    }
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Campo - Login</title>
        
        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        
        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

        <!-- Nuestro css-->
        <link rel="stylesheet" type="text/css" href="static/css/login.css?3">
        
    </head>
    <body>
        <div class="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <img src="static/img/avatar.png">
                    </div>
                    <form action="logica/validar.php" method="POST" class="col-12">
                        <div class="form-group" id="user-group">
                            <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario">
                        </div>
                        <div class="form-group" id="pass-group">
                            <input type="password" class="form-control" name="contra" placeholder="Contrasena">
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar</button> 
                    </form>
                    
                </div>
                
            </div>
        </div>


        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>