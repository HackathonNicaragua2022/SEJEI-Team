<?php
include ("models/conexion/Conexion.php");
//include ("Encryptar.php");
$bd = new Conexion();
//$enc = new Encryptar();
$mysqli = new mysqli("localhost", "root", "12345", "subastas");
session_start();
if(isset($_SESSION["id_usuario"])){
  header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registrarme</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

  <!-- Bootstrap Core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="sb-admin.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="plugins/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body background="images/fondovaca.png">

  <?php
    if(isset($_POST["registro"])){
      //echo "<script>alert('Entrar');</script>";

      //Datos que se piden para registrarse
      $correo = $_POST["correo"];
      $user = $_POST["user"];
      $pass = $_POST["pass"];

      //Sentencia SQL para agregar los datos insertados en el registro
      $sentencia = $mysqli->prepare("INSERT into usuario(correo, user, pass) values('?','?','?');");
      $sentencia->bind_param("sss", $correo,$user,$pass);
      $sentencia->execute();

      if($sentencia == true){
        echo "<script>alert('Usuario registrado correctamente ve al login para que inicies sesion');</script>";
        //header("Location: login.php");
      }else{
        echo "<script>alert('No se pudo registrar el usuario');</script>";
      }

    }
  ?>

  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="login-panel panel panel-default">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="img/signup.png" width="65px">
                      </div>
                      <div class="col-md-9">
                        <h3>Registrarme</h3>
                      </div>
                    </div>

                  </div>
                  <div class="panel-body">
                      <form role="form" action="" method="post">
                          <fieldset>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Correo" name="correo" type="email" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Usuario" name="user" type="text">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Contrase??a" name="pass" type="password">
                              </div>

                              <!-- Change this to a button or input when using this as a form -->
                              <input type="submit" name="registro" class="btn btn-success btn-block" style="background-color:#003817" value="Registrarme">

                          </fieldset>
                      </form>
                  </div>
                  <div class="panel-footer">
                    <p>??Ya est??s registrado? <a href="login2.php">Inicia sesi??n aqui</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="js/plugins/morris/raphael.min.js"></script>
  <script src="js/plugins/morris/morris.min.js"></script>
  <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
