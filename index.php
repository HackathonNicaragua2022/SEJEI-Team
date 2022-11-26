<?php
  //Se incluye el archivo Conexion.php que contiene la clase usada para la conexion a la bd
<<<<<<< HEAD
  include ("conexion/Conexion.php");
=======
  include ("models/conexion/Conexion.php");
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
  //Se crea el objeto conexion
  $bd = new Conexion();
  //Se inicia la sesion o se propaga
  session_start();
<<<<<<< HEAD
=======
  $mysqli = new mysqli("localhost", "root", "12345", "subastas");
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
  //Condicion que no deja entrar al index a menos que exista una variable de session
  if(!isset($_SESSION["id_usuario"])){
    //Redirecciona al login
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

    <title>Inicio</title>

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
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color:#5B1F00 ;">

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
<<<<<<< HEAD
                <a class="navbar-brand" href="subastas.php">Subastas</a>
=======
                <a class="navbar-brand" href="subastas.php"><font color="white">Subastas</font></a>
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
            </div>
            <!-- Top Menu Items -->
            <?php
              //Se incluye el archivo que contiene el header
<<<<<<< HEAD
              include ("header.php");
=======
              include ("vheader.php");
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
            ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php
              //Se incluye el archivo que contiene el sidebar
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
                            Dashboard <small>Supervisar mis subastas</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>

                <?php
<<<<<<< HEAD
                  //Se hacen los count que se mostraran en la pantalla principal
=======
                $id_usuario = $_POST["id_usuario"];
                  //Se hacen los count que se mostraran en la pantalla principal (dashboard)
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
                  //Count para las subastas disponibles
                  $res_count=$bd->select("SELECT count(*) as total from subasta where estado=0");
                  $data=mysqli_fetch_array($res_count);
                  $count_sub = $data['total'];//En esta variable se guardan el total

                  //Count para productos en mi cesta
<<<<<<< HEAD
                  $res_count=$bd->select("SELECT count(*) as total from cesta where id_usuario=".$_SESSION["id_usuario"]);
=======
                  $sentencia = $mysqli->prepare("SELECT count(*) as total from cesta where id_usuario=?");
                  $sentencia->bind_param("i", $id_usuario);
                  $sentencia->execute();
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
                  $data=mysqli_fetch_array($res_count);
                  $count_cesta = $data['total'];//En esta variable se guardan el total

                  //Count para las subastas propias activas
<<<<<<< HEAD
                  $res_count=$bd->select("SELECT count(*) as total from subasta where estado=0 and subastador=".$_SESSION["id_usuario"]);
=======
                  $sentencia = $mysqli->prepare("SELECT count(*) as total from subasta where estado=0 and subastador=?");
                  $sentencia->bind_param("i", $id_usuario);
                  $sentencia->execute();
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
                  $data=mysqli_fetch_array($res_count);
                  $count_sub_act = $data['total'];//En esta variable se guardan el total

                  //Count para las subastas propias cerradas
<<<<<<< HEAD
                  $res_count=$bd->select("SELECT count(*) as total from subasta where estado=1 and subastador=".$_SESSION["id_usuario"]);
=======
                  $sentencia = $mysqli->prepare("SELECT count(*) as total from subasta where estado=1 and subastador=?");
                  $sentencia->bind_param("i", $id_usuario);
                  $sentencia->execute();
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
                  $data=mysqli_fetch_array($res_count);
                  $count_sub_cerr = $data['total'];//En esta variable se guardan el total
                ?>


                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-th-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
<<<<<<< HEAD
                                        <div class="huge"><?php echo $count_sub;//Aqui se imprime el total?></div>
=======
                                        <div class="huge"><?php echo $count_sub;//Aqui se imprime el total de subastas disponibles?></div>
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
                                        <div>Subastas disponibles</div>
                                    </div>
                                </div>
                            </div>
                            <a href="subastas.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
<<<<<<< HEAD
                                      <div class="huge"><?php echo $count_cesta;//Aqui se imprime el total?></div>
=======
                                      <div class="huge"><?php echo $count_cesta;//Aqui se imprime el total de ganado en carrito?></div>
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
                                      <div>Carrito</div>
                                    </div>
                                </div>
                            </div>
                            <a href="carrito.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-unlock fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
<<<<<<< HEAD
                                      <div class="huge"><?php echo $count_sub_act;//Aqui se imprime el total?></div>
=======
                                      <div class="huge"><?php echo $count_sub_act;//Aqui se imprime el total de suabstas activas?></div>
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
                                      <div>Subastas activas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="mis_subastas.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-lock fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
<<<<<<< HEAD
                                      <div class="huge"><?php echo $count_sub_cerr;//Aqui se imprime el total?></div>
=======
                                      <div class="huge"><?php echo $count_sub_cerr;//Aqui se imprime el total de subastas cerradas?></div>
>>>>>>> 88644aa51f56bc7d57bedbc32abb213a9a0d8337
                                      <div>Subastas cerradas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="mis_subastas.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

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