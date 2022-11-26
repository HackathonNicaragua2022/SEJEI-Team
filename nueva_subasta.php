<<<<<<< HEAD

=======
<?php
include("conexion/Conexion.php");
//include ("Encryptar.php");
$bd = new Conexion();
//$enc = new Encryptar();
$mysqli = new mysqli("localhost", "root", "12345", "subastas");
session_start();
if (!isset($_SESSION["id_usuario"])) {
  header("Location: login.php");
}
?>
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337

<!DOCTYPE html>
<html lang="es">

<head>

<<<<<<< HEAD
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nueva subasta</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
=======
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nueva subasta</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="css/plugins/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<<<<<<< HEAD
<body>



    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="subastas.php">Subastas</a>
            </div>
            <!-- Top Menu Items -->
            <?php
              include ("header.php");
            ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php
              include ("sidebar.php");
            ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Subastas <small>Agregar nueva subasta</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Nueva subasta
                            </li>
                        </ol>
                    </div>
                </div>

                      <div class="row">

                        <form role="form" action="" method="post" enctype="multipart/form-data">

                          <div class="col-lg-6">

                                <h3>Detalle producto</h3>

                                  <div class="form-group">
                                      <label>Nombre</label>
                                      <input type="text" name="nombre" class="form-control" required>
                                  </div>

                                  <div class="form-group">
                                      <label>Descripcion</label>
                                      <textarea name="descripcion" class="form-control" required></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label>Raza</label>
                                      <select class="form-control" name="categoria">
  
                                      </select>
                                      <p class="text-info">Si no esta la raza que busca puede agregar una desde el panel lateral.</p>
                                  </div>

                                  <div class="form-group">
                                      <label>Foto</label>
                                      <input type="file" name="foto">
                                  </div>

                        </div>
                        <div class="col-lg-6">

                              <h3>Detalle subasta</h3>

                                  <div class="form-group">
                                      <label>Precio minimo</label>
                                      <input type="number" name="minimo" class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label>Precio maximo</label>
                                      <input type="number" name="maximo" class="form-control"  required>
                                  </div>

                                  <div class="form-group">
                                      <label>Fecha de cierre</label>
                                      <input type="date" name="fecha_fin" class="form-control" required>
                                  </div>

                                  <div class="form-group">
                                      <label>Hora de cierre</label>
                                      <input type="time" name="hora_fin" class="form-control" required>
                                  </div>

                                  <br>

                                  <button name="agregar" type="submit" class="btn btn-success">Subastar</button>
                                  <button type="reset" class="btn btn-danger">Cancelar</button>

                          </div>

                        </form>

                      </div>
                      <!-- /.row -->
                  <br>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
=======
<body style="background-color:#5B1F00">

  <?php

  if (isset($_POST["agregar"])) {

    //Variables que se guardaran en la tabla producto
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];
    $foto = $_FILES["foto"]["name"]; //nombre de la imagen del producto
    $ruta = $_FILES["foto"]["tmp_name"]; //ruta de la imagen del producto

    //Variables que se guardaran en la tabla subasta
    $p_minimo = $_POST["minimo"];
    $p_maximo = $_POST["maximo"];
    $fecha_hora_actual = date("Y-m-d H:i:s");
    $fecha_fin = $_POST["fecha_fin"]; //Esto no se insertara en la tabla
    $hora_fin = $_POST["hora_fin"]; //Esto no se insertara en la tabla
    $fecha_hora_fin = "$fecha_fin $hora_fin:00";
    $estado = 0; //1 = vendida && 0 = disponible
    $subastador = $_SESSION["id_usuario"];

    //echo "<script>alert('$fecha_hora_actual - $fecha_hora_fin');</script>";


    if ($foto == null) {//Si no se agrega foto, añadir imagen por defecto
      //Sentencia SQL que registra datos para crear un producto (ganado)
      $sentencia = $mysqli->prepare("INSERT into producto(nombre, descripcion, imagen, id_categoria) values('?','?','default.jpg','?');");
      $sentencia->bind_param("sss", $nombre, $descripcion, $categoria);
      $sentencia->execute();

      if ($sentencia == true) {//Si la sentencia SQL se realizó exitosamente agrega el producto(ganado)
        echo "<script>alert('Producto agregado correctamente');</script>";
        $id_producto = $bd->insert_id();

        //Sentencia SQL que registra datos para crear una subasta
        $sentencia = $mysqli->prepare("INSERT into subasta(min, max, tiempo_ini, tiempo_fin, estado, subastador, id_producto) values(?,?,'?','?',?,?,?);");
        $entencia->bind_param("iissiii", $p_minimo, $p_maximo, $fecha_hora_actual, $fecha_hora_fin, $estado, $subastador, $id_producto);
        $sentencia->execute();


        if (
          $sentencia== true
        ) {
          echo "<script>alert('Subasta agregada correctamente');</script>";//Si los datos de subasta se agregaron correctamente, muestra alerta exitosa
        } else {
          echo "<script>alert('No se pudo agregar subasta');</script>";//Si los datos de suabsta no se agregaron correctamente
        }
      } else {
        echo "<script>alert('No se pudo agregar el producto ni la subasta');</script>";//Si los datos de producto no se agregaron correctamente
      }
    } else {
      //Si se elige una foto
      $dest = "images/productos/";
      copy($ruta, $dest . '' . $foto);


      //Se vuelven a llamar las sentencias cuando no se agrega una foto
      $sentencia = $mysqli->prepare("INSERT into producto(nombre, descripcion, imagen, id_categoria) values('?','?','?',?);");
      $entencia->bind_param("sssi", $nombre, $descripcion, $foto, $categoria);
      $sentencia->execute();

      if ($sentencia == true) {
        echo "<script>alert('Producto agregado correctamente');</script>";
        $id_producto = $bd->insert_id();

        $sentencia = $mysqli->prepare("INSERT into subasta(min, max, tiempo_ini, tiempo_fin, estado, subastador, id_producto) values(?,?,'?','?',?,?,?);");
        $entencia->bind_param("iissiii", $p_minimo,$p_maximo,$fecha_hora_actual,$fecha_hora_fin,$estado,$subastador,$id_producto);
        $sentencia->execute();

        if ($sentencia == true) {
          echo "<script>alert('Subasta agregada correctamente');</script>";
        } else {
          echo "<script>alert('No se pudo agregar subasta');</script>";
        }
      } else {
        echo "<script>alert('No se pudo agregar el producto ni la subasta');</script>";
      }
    }
  }

  ?>

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="subastas.php">Subastas</a>
      </div>
      <!-- Top Menu Items -->
      <?php
      include("header.php");
      ?>
      <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
      <?php
      include("sidebar.php");
      ?>
      <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              Subastas <small>Agregar nueva subasta</small>
            </h1>
            <ol class="breadcrumb">
              <li>
                <i class="fa fa-dashboard"></i> Dashboard
              </li>
              <li class="active">
                <i class="fa fa-plus"></i> Nueva subasta
              </li>
            </ol>
          </div>
        </div>

        <div class="row">

          <form role="form" action="" method="post" enctype="multipart/form-data">

            <div class="col-lg-6">

              <h3>Detalle ganado</h3>

              <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Descripcion</label>
                <textarea name="descripcion" class="form-control" required></textarea>
              </div>

              <div class="form-group">
                <label>Raza</label>
                <select class="form-control" name="categoria">
                  <?php
                  $res = $bd->select("SELECT * from categoria");
                  if ($res->num_rows > 0) {
                    while ($row = $res->fetch_assoc()) {
                      echo "<option value='" . $row["id_categoria"] . "'>" . $row["categoria"] . "</option>";
                    }
                  } else {
                    echo "<option value='s/c'>Agrega una desde tu panel lateral</option>";
                  }
                  ?>
                </select>
                <p class="text-info">Si no está la raza que busca puede agregar una desde el panel lateral.</p>
              </div>

              <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto">
              </div>

            </div>
            <div class="col-lg-6">

              <h3>Detalle subasta</h3>

              <div class="form-group">
                <label>Precio minimo</label>
                <input type="number" name="minimo" class="form-control">
              </div>

              <div class="form-group">
                <label>Precio maximo</label>
                <input type="number" name="maximo" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Fecha de cierre</label>
                <input type="date" name="fecha_fin" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Hora de cierre</label>
                <input type="time" name="hora_fin" class="form-control" required>
              </div>

              <br>

              <button name="agregar" type="submit" class="btn btn-success">Subastar</button>
              <button type="reset" class="btn btn-danger">Cancelar</button>

            </div>

          </form>

        </div>
        <!-- /.row -->
        <br>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

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
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337