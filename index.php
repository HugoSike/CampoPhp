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

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

      <title>Moctezuma Medjool Gardens S de R.L de C.V</title>

      <!-- Nuestro css-->
      <link rel="stylesheet" type="text/css" href="static/css/index.css?4">

      <Script Language="JavaScript">
        function DameLaFechaHora() {
          var hora = new Date()
          var hrs = hora.getHours();
          var min = hora.getMinutes();
          var hoy = new Date();
          var m = new Array();
          var d = new Array()
          var an= hoy.getYear();
          m[0]="Enero";  m[1]="Febrero";  m[2]="Marzo";
          m[3]="Abril";   m[4]="Mayo";  m[5]="Junio";
          m[6]="Julio";    m[7]="Agosto";   m[8]="Septiembre";
          m[9]="Octubre";   m[10]="Noviembre"; m[11]="Diciembre";

          document.write("Son las "+ hrs + ":" +min + "(" +hoy.getDate()+ " de "+ m[hoy.getMonth()]+")");
        }
      </Script>

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
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              <a class="nav-link" href="reporte.php">Reportes</a>
              <a class="nav-link" href="logica/logout.php">Cerrar Sesion</a>
            </div>
          </div>
        </div>
      </nav>
      
      <!-- Formulario de la Aplicación-->
      <?php
      include("logica/botones.php");
      ?>
      <div class="container">
        <form action="" method="POST">
          <div class="row">
            <div class= "col-md-4">
              <label for="operador" class="form-label h4">Operador:</label>
              <select id="operador" class="form-select" name="operador">
                <option selected></option>
                <option value="OP1">Leonel Molina</option>
                <option value="OP2">Francisco</option>
                <option value="OP3">Alejandro Navarro</option>
                <option value="OP4">Operador 4</option>
                <option value="OP5">Operador 5</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="maquinaria" class="form-label h4">Maq. de Elevacion:</label>
              <select id="maquinaria" class="form-select" name="maquinaria">
                <option selected></option>
                <option value="MC1">MC1</option>
                <option value="MC2">MC2</option>
                <option value="MC3">MC3</option>
                <option value="MC4">MC4</option>
                <option value="MC5">MC5</option>
                <option value="MC6">MC6</option>
                <option value="MC7">MC7</option>
                <option value="MC8">MC8</option>
                <option value="MC9">MC9</option>
                <option value="MC10">MC10</option>
                <option value="MC11">MC11</option>
                <option value="MC12">MC12</option>
                <option value="MC13">MC13</option>
                <option value="MC14">MC14</option>
                <option value="MC15">MC15</option>
                <option value="MC16">MC16</option>
                <option value="MC17">MC17</option>
                <option value="MC18">MC18</option>
                <option value="MC19">MC19</option>
                <option value="MC20">MC20</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="tractores" class="form-label h4">Tractores:</label>
              <select id="tractores" class="form-select" name="tractores">
                <option selected></option>
                <option value="MF1">Massey Ferguson 1</option>
                <option value="MF2">Massey Ferguson 2</option>
                <option value="JD1">John Deere 1</option>
                <option value="JD2">John Deere 2</option>
                <option value="JD3">John Deere 3</option>
                <option value="NH1">New Hollands 1</option>
                <option value="NH2">New Hollands 2</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="chofer" class="form-label h4">Chofer:</label>
              <select id="chofer" class="form-select" name="chofer">
                <option selected></option>
                <option value="CH1">Chofer 1</option>
                <option value="CH2">Chofer 2</option>
                <option value="CH3">Chofer 3</option>
                <option value="CH4">Chofer 4</option>
                <option value="CH5">Chofer 5</option>
                <option value="CH6">Chofer 6</option>
                <option value="CH7">Chofer 7</option>
                <option value="CH8">Chofer 8</option>
                <option value="CH9">Chofer 9</option>
                <option value="CH10">Chofer 10</option>
                <option value="CH11">Chofer 11</option>
                <option value="CH12">Chofer 12</option>
                <option value="CH13">Chofer 13</option>
                <option value="CH14">Chofer 14</option>
                <option value="CH15">Chofer 15</option>
                <option value="CH16">Chofer 16</option>
                <option value="CH17">Chofer 17</option>
                <option value="CH18">Chofer 18</option>
                <option value="CH19">Chofer 19</option>
                <option value="CH20">Chofer 20</option>
                <option value="CH21">Chofer 21</option>
                <option value="CH22">Chofer 22</option>
                <option value="CH23">Chofer 23</option>
                <option value="CH24">Chofer 24</option>
                <option value="CH25">Chofer 25</option>
                <option value="CH26">Chofer 26</option>
                <option value="CH27">Chofer 27</option>
                <option value="CH28">Chofer 28</option>
                <option value="CH29">Chofer 29</option>
                <option value="CH30">Chofer 30</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="motobomba" class="form-label h4">MotoBomba:</label>
              <select id="motobomba" class="form-select" name="motobomba">
                <option selected></option>
                <option value="MB1">MotoBomba 1</option>
                <option value="MB2">MotoBomba 2</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="Cantidad" class="form-label h4">Cantidad:</label>
              <input type="text" id="Cantidad" class="form-control" name="cantidad" placeholder="Lts">
            </div>
            <div class="col-md-2 mt-4">
              <input type="checkbox" id="horometro" class="form-check-input" name="horometro">
              <label for="horometro" class="form-label h4"> Horometro</label>
            </div>
            <div class="col-md-2">
              <label for="horas" class="form-label h4">Horas:</label>
              <select id="horas" class="form-select" name="horas">
                <option selected></option>
                <option value="HR1">1hr</option>
                <option value="HR1_5">1.5</option>
                <option value="HR1">2hrs</option>
                <option value="HR1_5">2.5</option>
                <option value="HR1">3hrs</option>
                <option value="HR1_5">3.5</option>
                <option value="HR1">4hrs</option>
                <option value="HR1_5">4.5</option>
                <option value="HR1">5hrs</option>
                <option value="HR1_5">5.5</option>
                <option value="HR1">6hrs</option>
                <option value="HR1_5">6.5</option>
                <option value="HR1">7hrs</option>
                <option value="HR1_5">7.5</option>
                <option value="HR1">8hrs</option>
                <option value="HR1_5">8.5</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="predios" class="form-label h4">Predio y Hectareas:</label>
              <select id="predios" class="form-select" name="predios">
                <option selected></option>
                <option value="Leyva">Leyva-----34</option>
                <option value="3 Potrillos">2 Potrillos-----32</option>
                <option value="La Bolsa">La Bolsa-----20</option>
                <option value="Lopez 1">Lopez 1-----24</option>
                <option value="Lopez 2">Lopez 2-----21</option>
                <option value="Infinito 1">Infinito 1-----17</option>
                <option value="Infinito 2">Infinito 2-----20</option>
                <option value="Rosalba">Rosalba-----20</option>
                <option value="Adela">Adela-----21</option>
                <option value="Meza">Meza-----20</option>
                <option value="JBC">JBC-----12</option>
                <option value="Teco">Teco-----47</option>
                <option value="Agrison">Agrison-----10</option>
                <option value="Zamora">Zamora-----11</option>
                <option value="Llamas">Llamas-----14</option>
                <option value="Flores 1">Flores 1-----24</option>
                <option value="Muñoz">Munoz-----34</option>
                <option value="Solorzano">Solorzano-----59</option>
                <option value="Terrazas">Terrazas-----25</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="Observaciones" class="form-label h4">Observaciones:</label> <br>
              <input type="text" id="Observaciones" class="form-control" name="observaciones" placeholder="Ninguno">            
            </div>
            <div class="col-md-6">
              <label for="hora" class="form-label h4">
                <script>
                  DameLaFechaHora();
                </script>
              </label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary" value="Ingresar" name="enviar">

          <script type=”text/javascript”>

            function startTime(){
            
            today=new Date();
            
            h=today.getHours();
            
            m=today.getMinutes();
            
            s=today.getSeconds();
            
            m=checkTime(m);
            
            s=checkTime(s);
            
            document.getElementById(‘reloj’).innerHTML=h+”:”+m+”:”+s;
            
            t=setTimeout(‘startTime()’,500);}
            
            function checkTime(i)
            
            {if (i<10) {i=”0″ + i;}return i;}
            
            window.onload=function(){startTime();}
            
          </script>

          <div id="reloj" style= "font-family: ‘DS-Digital’; width: 450px; background-color: black;font-size:100px;color: green ; text-align: center "></div>

        </form>
      </div>
        
      <!-- Scripts -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    </body>

</html>