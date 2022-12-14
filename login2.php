
<?php
  include ("models/conexion/Conexion.php");
  $bd = new Conexion();
  session_start();
  $mysqli=new mysqli("localhost","root","12345","subastas");
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

    <title>Iniciar sesion</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="|css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body background="models/images/fondovaca.png">

    <?php
      if(isset($_POST["entrar"])){

        $user = $_POST["user"];
        $pass = $_POST["pass"];

        //Inicia consulta de los usuarios
        //Consulta SQL que llama todos los atributos user y pass de la tabla usuario para verificar que exista en la BD.
        $sentencia = $mysqli->prepare("SELECT * from usuario where user=? and pass=?;");
        $sentencia->bind_param("ss",$user,$pass);
        $sentencia->execute();

        if($result->num_rows > 0){
          //Si los datos son correctos inicia sesión y redirige index.php
          while($row = $result->fetch_assoc()){
            $id_us = $row["id_usuario"];
            $nombre = $row["nombre"];
            $paterno = $row["paterno"];

          }


          $_SESSION["id_usuario"] = $id_us;
          $_SESSION["nomb_comp"] = $nombre." ".$paterno;
          header("Location: index.php");
        }else{
          echo "<script>alert('Datos incorrectos');</script>"; //Si los datos no existen muestra alerta
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
                          <img src="img/signin.png" width="65px">
                        </div>
                        <div class="col-md-9">
                          <h3>Iniciar sesión</h3>
                        </div>
                      </div>

                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="user" type="text" autofocus>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="pass" type="password">
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Recordarme
                                    </label>
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="entrar" class="btn btn-primary btn-block" style="background-color:#003817" value="Entrar">

                            </fieldset>
                        </form>
                    </div>
                    <div class="panel-footer">
                      <p>¿No tienes una cuenta aún? <a href="view/registro.php">Regístrate aquí</a></p>
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