<?php

include "../config/conexion.php";
if (strlen(session_id()) < 1) 
  session_start();
?>
 <?php 
 $preg = "select * from tbl_objetos";
 $stmt = mysqli_query($conexion,$preg);
 $rol = $_SESSION['id_rol'];?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luna Color</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">

    
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/ICONOSLC.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">
    <!-- ICONOS fontawesome -->
  <link rel="stylesheet" type="text/css" href="../public/iconosfontawesome/css/all.css">
    

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>
    

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">

<style type="text/css">

  body{
  font-family: 'Quicksand', sans-serif;
  }

  h1{
     font-family: 'Quicksand', sans-serif;
  }
  
</style>

  </head>
  <body class="hold-transition skin-yellow sidebar-mini" style="background-color: #3F3F3F" >
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo" style="background-color: rgb(233,118,46)">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini" style="background-color: rgb(233,118,46)"><b>S</b>LC</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg" style="background-color: rgb(233,118,46)"><b> Sistema Luna Color</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation" style="background-color: rgb(233,118,46)">
         
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="background-color: rgb(233,118,46)">
            <i class="fas fa-align-justify"></i><span class="sr-only" style="background-color: rgb(233,118,46)"></span>
          </a>

          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu" style="background-color: rgb(233,118,46)">
            <ul class="nav navbar-nav" style="background-color: rgb(233,118,46)">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['nombre_usuario']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" alt="User Image">
                    <p>
                     <h3><?php echo $_SESSION['nombre_usuario']; ?></h3>
                     
                    </p>
                  
                  
                  <!-- Menu Footer-->
                  <li class="user-footer" >
                    <div class="pull-right">



                    <a href="editarusuario.php" class="btn btn-primary"> <i class="fas fa-user-edit">Editar Usuario</a></i>
                    <a href="../ajax/usuario.php?op=salir" class="btn btn-danger"> <i class="far fa-times-circle"> Cerrar sesión</a></i>



                    </div>
                  </li>

                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" style="background-color: #3F3F3F">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="background-color: #3F3F3F">       
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" style="background-color: #3F3F3F">
            <li class="header" style="background-color: #3F3F3F"></li>
             <?php 
            if ($_SESSION['id_rol']==2 || $_SESSION['id_rol']==3 || $_SESSION['id_rol']==4 )
            {
            echo 
            '<li>
              <a href="escritorio.php">
                <i class="fas fa-home"></i> <span> &nbsp;Escritorio</span>
              </a>
            </li>';
            }
            ?>


             <?php foreach ($stmt as $objeto) { ?>        
            <li class="treeview">
              <?php if ($objeto["idmenupadre"] == 0) { ?>
              <a href="#">
                <i class="<?= $objeto['icono']?>" ></i> <span> &nbsp; <?php echo $objeto["objeto"] ?> </span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            <?php } ?>
            <?php
                $cod = $objeto['id_objeto'];
                $pregcod = "SELECT * FROM tbl_objetos t 
                inner join tbl_permisos t2 ON t.id_objeto = t2.id_objeto 
                where t2.id_rol = '$rol' and t2.permiso_menu = 1 and idmenupadre = '$cod'";
                $stmts = mysqli_query($conexion,$pregcod);
                foreach ($stmts as $row) { ?>
              <ul class="treeview-menu">
                <li><a href="<?php echo $row['url'].'?objeto='.$row['id_objeto'] ?>"><i class="fa fa-circle-o"></i> <?php echo $row["objeto"]  ?></a></li>
              </ul>
            <?php } ?>
            </li>;
            <?php } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
