<?php
include("models/conexion/Conexion.php");
//include ("Encryptar.php");
$bd = new Conexion();
//$enc = new Encryptar();
session_start();
$mysqli = new mysqli("localhost", "root", "12345", "subastas");
if (!isset($_SESSION["id_usuario"])) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mi cesta</title>

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

</head>

<body style="background-color:#5B1F00">

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
              Carrito <small>Ganado adquirido</small>
            </h1>
            <ol class="breadcrumb">
              <li>
                <i class="fa fa-dashboard"></i> Dashboard
              </li>
              <li class="active">
                <i class="fa fa-shopping-cart"></i> Carrito
              </li>
            </ol>
          </div>
        </div>

        <!-- Listado de subastas -->
        <div class="row">
          <div class="col-lg-12">

            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Raza</th>
                    <th>Minimo</th>
                    <th>Maximo</th>
                    <th>Pagado</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $id_usuario = $_POST["id_usuario"];
                  //Inicia consulta de cestas
                  //Sentencia SQL que llama todos los datos de la tabla cesta donde el id_usuario es igual al id_usuario de la tabla usuario
                  $sentencia = $mysqli->prepare("SELECT * from cesta where id_usuario=?;");
                  $sentencia->bind_param("i", $id_usuario);
                  $sentencia->execute();

                  if ($res0->num_rows > 0) {
                    while ($row0 = $res0->fetch_assoc()) {
                      $cesta = $row0["id_cesta"];
                      $sub = $row0["id_subasta"];

                      //echo "$cesta, $user, $sub<br>";

                      //Inicia consulta de subastas
                      //Sentencia SQL que llama todos los datos de la tabla subasta donde el id_subasta es igual al id_subasta de la tabla cesta, ordenado de forma descendente
                      $sentencia = $mysqli->prepare("SELECT * from subasta where id_subasta=? order by id_subasta desc");
                      $sentencia->bind_param("i", $sub);
                      $sentencia->execute();
                      if ($res->num_rows > 0) {
                        while ($row = $res->fetch_assoc()) {
                          $min = $row["min"];
                          $max = $row["max"];
                          $ini = $row["tiempo_ini"];
                          $fin = $row["tiempo_fin"];
                          $id_producto = $row["id_producto"];

                          //Inicia consulta de producto de las subastas
                          //Sentencia SQL que llama todos los datos de la tabla producto donde el id_producto es igual al id_producto de la tabla subasta
                          $sentencia = $mysqli->prepare("SELECT * from producto where id_producto=?");
                          $sentencia->bind_param("i", $id_producto);
                          $sentencia->execute();

                          if ($res2->num_rows > 0) {
                            while ($row2 = $res2->fetch_assoc()) {
                              $nombre_p = $row2["nombre"];
                              $descri_p = $row2["descripcion"];
                              $imagen_p = $row2["imagen"];
                              $catego_p = $row2["id_categoria"];

                              //Inicia consulta de categoria del producto
                              //Sentencia SQL que llama todos los datos de la tabla producto donde el id_categoria es igual al id_categoria de la tabla categoria
                              $sentencia = $mysqli->prepare("SELECT * from producto where id_categoria=?");
                              $sentencia->bind_param("i", $catego_p);
                              $sentencia->execute();

                              $id_subasta = $_POST["id_subasta"];
                              //Inicia consulta de categoria del producto
                              //Sentencia SQL que llama todos los datos de la tabla oferta donde el id_subasta es igual al id_subasta de la tabla subasta
                              $sentencia = $mysqli->prepare("SELECT * from oferta where id_subasta=? order by id_oferta desc limit 1");
                              $sentencia->bind_param("i", $id_subasta);
                              $sentencia->execute();
                              $oferta = mysqli_fetch_array($result1);
                              $of_final = $oferta["oferta"];
                  ?>
                              <tr>
                                <td width="180px">
                                  <center><img src="<?php echo "images/productos/$imagen_p"; ?>" style="height: 80px;"></center>
                                </td>
                                <td><?php echo "<b class='text-success'>$nombre_p</b>"; ?></td>
                                <td><?php echo "<p class='text-info'>$descri_p</p>"; ?></td>
                                <td><?php echo $categoria; ?></td>
                                <td><?php echo "C$$min.00"; ?></td>
                                <td><?php echo "C$$max.00"; ?></td>
                                <td><?php echo "<b class='text-danger'>C$$of_final.00</b>"; ?></td>
                              </tr>
                  <?php
                            }
                          }
                        }
                      }
                    }
                  } else {
                    echo "<h3>Carrito vacío</h3>";//Si el carrito está vacío muestra un mensaje.
                  }
                  //Termina consulta de subastas

                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Fin de listado -->

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